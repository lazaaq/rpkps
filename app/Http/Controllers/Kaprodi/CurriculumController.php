<?php

namespace App\Http\Controllers\Kaprodi;

use App\Http\Controllers\Controller;
use App\Models\Curriculum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CurriculumController extends Controller
{
    public function index() {
        $message = '';
        $statusCode = 500;
        $curriculum = Curriculum::all();
        if ($curriculum) {
            $message = 'Curriculum retrieved successfully';
            $statusCode = 200;
        } else {
            $message = 'Curriculum not found';
        }
        return responseAPI($message, $statusCode, $curriculum);
    }

    public function store(Request $request) {
        $message = '';
        $statusCode = 500;

        // validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'year' => 'required',
            'status' => 'required',
        ]);
        if ($validator->fails()) {
            $message = 'Validation failed';
            return responseAPI($message, $statusCode);
        }
        
        // store data
        $curriculum = Curriculum::create($request->all());
        if ($curriculum) {
            $message = 'Curriculum created successfully';
            $statusCode = 200;
        } else {
            $message = 'failed create Curriculum';
        }
        return responseAPI($message, $statusCode, $curriculum);
    }

    public function update(Request $request, $id) {
        $message = '';
        $statusCode = 500;

        // validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'year' => 'required',
            'status' => 'required',
        ]);
        if ($validator->fails()) {
            $message = 'Validation failed';
            return responseAPI($message, $statusCode);
        }

        // update data
        $curriculum = Curriculum::find($id);
        if ($curriculum) {
            $updateCurriculum = $curriculum->update($request->all());
            if($updateCurriculum) {
                $message = 'Curriculum updated successfully';
                $statusCode = 200;
            } else {
                $message = 'failed update Curriculum';
            }
        } else {
            $message = 'curriculum not found';
        }
        return responseAPI($message, $statusCode, $curriculum);
    }
}
