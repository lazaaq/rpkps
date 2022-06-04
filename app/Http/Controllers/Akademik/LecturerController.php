<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Env;

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
            'nip' => 'required|string|max:20|unique:lecturers,nip',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:lecturers,email',
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

        $filename = uploadImage($request, 'image/lecturer/photo', $lecturer->name);
        $lecturer->photo = $filename;
        
        $createLecturer = $lecturer->save();

        if(!$createLecturer) {
            return config('constants.response.message.failed.create');
        }
        return redirect()->route('akademik.dosen.index');
    }

    public function edit($id) {
        $lecturer = Lecturer::find($id);
        if (!$lecturer) {
            return config('constants.response.message.failed.notFound');
        }
        return view('akademik.dosen.v_editdosen', compact('lecturer'));
    }

    public function update(Request $request, $id) {
        // validation
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'nip' => 'required|string|max:20',
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
            $filename = uploadImage($request, 'image/lecturer/photo', $lecturer->name);
            
            $pathOldPhoto = 'image/lecturer/photo/' . $lecturer->getRawOriginal('photo');
            deleteImage($pathOldPhoto);
            
            $lecturer->photo = $filename;
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

        $pathOldPhoto = 'image/lecturer/photo/' . $lecturer->getRawOriginal('photo');
        deleteImage($pathOldPhoto);

        $deleteLecturer = $lecturer->delete();
        if (!$deleteLecturer) {
            return config('constants.response.message.failed.delete');
        }

        return redirect()->route('akademik.dosen.index');
    }
}
