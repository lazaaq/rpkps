<?php

namespace App\Http\Controllers\Kaprodi;

use App\Http\Controllers\Controller;
use App\Models\Curriculum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CurriculumController extends Controller
{
    public function index() {
        list($message, $statusCode, $curriculum) = initAPI();

        $curriculum = Curriculum::all();
        if ($curriculum) {
            $message = config('constants.response.message.success.getAll');
            $statusCode = 200;
        } else {
            $message = config('constants.response.message.failed.notFound');
        }
        return responseAPI($message, $statusCode, $curriculum);
    }

    public function store(Request $request) {
        list($message, $statusCode, $curriculum) = initAPI();

        // validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'year' => 'required',
            'status' => 'required',
        ]);
        if ($validator->fails()) {
            $message = config('constants.response.message.validation.failed');
            return responseAPI($message, $statusCode);
        }
        
        // store data
        $curriculum = Curriculum::create($request->all());
        if ($curriculum) {
            $message = config('constants.response.message.success.create');
            $statusCode = 200;
        } else {
            $message = config('constants.response.message.failed.create');
        }
        return responseAPI($message, $statusCode, $curriculum);
    }

    public function update(Request $request, $id) {
        list($message, $statusCode, $curriculum) = initAPI();

        // validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'year' => 'required',
            'status' => 'required',
        ]);
        if ($validator->fails()) {
            $message = config('constants.response.message.validation.failed');
            return responseAPI($message, $statusCode);
        }

        // update data
        $curriculum = Curriculum::find($id);
        if ($curriculum) {
            $updateCurriculum = $curriculum->update($request->all());
            if($updateCurriculum) {
                $message = config('constants.response.message.success.update');
                $statusCode = 200;
            } else {
                $message = config('constants.response.message.failed.update');
            }
        } else {
            $message = config('constants.response.message.failed.notFound');
        }
        return responseAPI($message, $statusCode, $curriculum);
    }
}
