<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LecturerController extends Controller
{
    public function index() {
        list($message, $statusCode, $lecturer) = initAPI();

        $lecturer = Lecturer::all();
        if ($lecturer) {
            $message = config('constants.response.message.success.getAll');
            $statusCode = 200;
        } else {
            $message = config('constants.response.message.failed.notFound');
        }
        return responseAPI($message, $statusCode, $lecturer);
    }

    public function store(Request $request) {
        list($message, $statusCode, $lecturer) = initAPI();

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:lecturers,email',
            'nip' => 'required|string|max:20|unique:lecturers,nip',
            'photo' => 'required',
        ]);
        if ($validator->fails()) {
            $message = $validator->errors();
            return responseAPI($message, $statusCode);
        }

        $lecturer = new Lecturer();
        $lecturer->name = $request->name;
        $lecturer->email = $request->email;
        $lecturer->nip = $request->nip;

        $photoName = uploadImageBase64($request->photo, env('ASSET_LECTURER_PHOTO'), $request->nip);
        $lecturer->photo = $photoName;

        $createLecturer = $lecturer->save();

        if($createLecturer) {
            $message = config('constants.response.message.success.create');
            $statusCode = 200;
        } else {
            $message = config('constants.response.message.failed.create');
        }
        return responseAPI($message, $statusCode, $lecturer);
    }

    public function update(Request $request, $id) {
        list($message, $statusCode, $lecturer) = initAPI();

        // validation
        $validator = Validator::make($request->all(), [
            'name' => 'string|max:255',
            'email' => 'email',
            'nip' => 'string|max:20',
        ]);
        if ($validator->fails()) {
            $message = $validator->errors();
            return responseAPI($message, $statusCode);
        }

        // find data
        $lecturer = Lecturer::find($id);
        if (!$lecturer) {
            $message = config('constants.response.message.failed.getOne', ['id' => $id]);
            return responseAPI($message, $statusCode);
        }

        // update the photo
        if ($request->has('photo')) {
            $photoName = uploadImageBase64($request->photo, env('ASSET_LECTURER_PHOTO'), $request->nip);
            if (!$photoName) {
                $message = config('constants.response.message.failed.uploadImage');
                return responseAPI($message, $statusCode, $lecturer);
            }
            
            $pathOldPhoto = 'storage/' . env('ASSET_LECTURER_PHOTO') . $lecturer->getRawOriginal('photo');
            $deleteImage = deleteImage($pathOldPhoto);
            if (!$deleteImage) {
                return $pathOldPhoto;
                $photoPath = env('ASSET_LECTURER_PHOTO') . $photoName;
                deleteImage($photoPath);
                $message = config('constants.response.message.failed.deleteImage');
                return responseAPI($message, $statusCode);
            }
            $lecturer->photo = $photoName; // if pass all the process, then update the photo
        }

        $lecturer->name = $request->name ?? $lecturer->name;
        $lecturer->email = $request->email ?? $lecturer->email;
        $lecturer->nip = $request->nip ?? $lecturer->nip;
        $updateLecturer = $lecturer->save();
        
        if($updateLecturer) {
            $message = config('constants.response.message.success.update');
            $statusCode = 200;
        } else {
            $message = config('constants.response.message.failed.update');
        }

        return responseAPI($message, $statusCode, $lecturer);
    }
}
