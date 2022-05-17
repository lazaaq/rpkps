<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LecturerController extends Controller
{
    public function index() {
        $lecturer = Lecturer::all();
        if (!$lecturer) {
            return config('constants.response.message.failed.notFound');
        }
        return view('akademik.dosen.v_dosen', compact('lecturer'));
    }

    public function create() {
        return view('akademik.dosen.v_adddosen');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:lecturers,email',
            'nip' => 'required|string|max:20|unique:lecturers,nip',
            'photo' => 'required',
        ]);
        if ($validator->fails()) {
            $message = $validator->errors();
            return $message;
        }

        $lecturer = new Lecturer();
        $lecturer->name = $request->name;
        $lecturer->email = $request->email;
        $lecturer->nip = $request->nip;

        $photoName = uploadImageBase64($request->photo, env('ASSET_LECTURER_PHOTO'), $request->nip);
        $lecturer->photo = $photoName;

        $createLecturer = $lecturer->save();

        if($createLecturer) {
            return config('constants.response.message.failed.create');
        }
        return redirect()->route('akademik.dosen.index');
    }

    public function update(Request $request, $id) {
        // validation
        $validator = Validator::make($request->all(), [
            'name' => 'string|max:255',
            'email' => 'email',
            'nip' => 'string|max:20',
        ]);
        if ($validator->fails()) {
            $message = $validator->errors();
            return $message;
        }

        // find data
        $lecturer = Lecturer::find($id);
        if (!$lecturer) {
            return config('constants.response.message.failed.getOne', ['id' => $id]);
        }

        // update the photo
        if ($request->has('photo')) {
            $photoName = uploadImageBase64($request->photo, env('ASSET_LECTURER_PHOTO'), $request->nip);
            if (!$photoName) {
                return config('constants.response.message.failed.uploadImage');
            }
            
            $pathOldPhoto = 'storage/' . env('ASSET_LECTURER_PHOTO') . $lecturer->getRawOriginal('photo');
            $deleteImage = deleteImage($pathOldPhoto);
            if (!$deleteImage) {
                return $pathOldPhoto;
                $photoPath = env('ASSET_LECTURER_PHOTO') . $photoName;
                deleteImage($photoPath);
                $message = config('constants.response.message.failed.deleteImage');
                return $message;
            }
            $lecturer->photo = $photoName; // if pass all the process, then update the photo
        }

        $lecturer->name = $request->name ?? $lecturer->name;
        $lecturer->email = $request->email ?? $lecturer->email;
        $lecturer->nip = $request->nip ?? $lecturer->nip;
        $updateLecturer = $lecturer->save();
        
        if(!$updateLecturer) {
            return config('constants.response.message.failed.update');
        }

        return redirect()->route('akademik.dosen.index');
    }

    public function destroy($id) {
        $lecturer = Lecturer::find($id);
        if (!$lecturer) {
            return config('constants.response.message.failed.getOne', ['id' => $id]);
        }

        $pathPhoto = 'storage/' . env('ASSET_LECTURER_PHOTO') . $lecturer->photo;
        $deleteImage = deleteImage($pathPhoto);
        if (!$deleteImage) {
            return config('constants.response.message.failed.deleteImage');
        }

        $deleteLecturer = $lecturer->delete();
        if (!$deleteLecturer) {
            return config('constants.response.message.failed.delete');
        }

        return redirect()->route('akademik.dosen.index');
    }
}
