<?php

namespace App\Http\Controllers\Kaprodi;

use App\Http\Controllers\Controller;
use App\Models\Curriculum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CurriculumController extends Controller
{
    public function index() {
        $curriculums = Curriculum::all();
        return view('kaprodi.kurikulum.v_kurikulum', compact('curriculums'));
    }

    public function create() {
        return view('kaprodi.kurikulum.v_addkurikulum');
    }

    public function store(Request $request) {
        // validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'year' => 'required',
            'status' => 'required',
        ]);
        if ($validator->fails()) {
            return config('constants.response.message.validation.failed');
        }
        
        // store data
        $curriculum = Curriculum::create($request->all());
        if (!$curriculum) {
            return config('constants.response.message.failed.create');
        }
        return redirect()->route('kaprodi.kurikulum.index');
    }

    public function edit($id) {
        $curriculum = Curriculum::find($id);
        return view('kaprodi.kurikulum.v_editkurikulum', compact('curriculum'));
    }

    public function update(Request $request, $id) {
        // validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'year' => 'required',
            'status' => 'required',
        ]);
        if ($validator->fails()) {
            return config('constants.response.message.validation.failed');
        }

        // update data
        $curriculum = Curriculum::find($id);
        if ($curriculum) {
            $updateCurriculum = $curriculum->update($request->all());
            if(!$updateCurriculum) {
                return config('constants.response.message.failed.update');
            }
        } else {
            return config('constants.response.message.failed.notFound');
        }
        return redirect()->route('kaprodi.kurikulum.index');
    }
}
