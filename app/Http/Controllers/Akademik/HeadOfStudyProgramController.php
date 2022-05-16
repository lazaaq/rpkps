<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use App\Models\HeadOfStudyProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HeadOfStudyProgramController extends Controller
{
    public function index() {
        list($message, $statusCode, $headOfStudyProgram) = initAPI();

        $headOfStudyProgram = HeadOfStudyProgram::with('studyProgram', 'lecturer')->get();
        if ($headOfStudyProgram) {
            $message = config('constants.response.message.success.getAll');
            $statusCode = config('constants.response.statusCode.success.getAll');
        } else {
            $message = config('constants.response.message.failed.getAll');
            $message = config('constants.response.statusCode.failed.getAll');
        }
        return responseAPI($message, $statusCode, $headOfStudyProgram);
    }

    public function store(Request $request) {
        list($message, $statusCode, $headOfStudyProgram) = initAPI();

        // validate request
        $validator = Validator::make(request()->all(), [
            'year' => 'required',
            'study_program_id' => 'required',
            'lecturer_id' => 'required',
            'status' => 'boolean'
        ]);

        if($validator->fails()) {
            $message = $validator->errors();
            $statusCode = config('constants.response.statusCode.validation.failed');
            return responseAPI($message, $statusCode);
        }

        // create data
        $headOfStudyProgram = new HeadOfStudyProgram();
        $headOfStudyProgram->year = $request->year;
        $headOfStudyProgram->study_program_id = $request->study_program_id;
        $headOfStudyProgram->lecturer_id = $request->lecturer_id;
        $headOfStudyProgram->status = $request->status ? $request->status : 1;
        $storeData = $headOfStudyProgram->save();

        if ($storeData) {
            $message = config('constants.response.message.success.create');
            $statusCode = config('constants.response.statusCode.success.create');
        } else {
            $message = config('constants.response.message.failed.create');
            $statusCode = config('constants.response.statusCode.failed.create');
        }
        return responseAPI($message, $statusCode, $headOfStudyProgram);
    }

    public function update(Request $request, $id) {
        list($message, $statusCode, $headOfStudyProgram) = initAPI();

        // validate request
        $validator = Validator::make(request()->all(), [
            'lecturer_id' => 'required',
            'study_program_id' => 'required',
            'year' => 'required',
            'status' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            $message = $validator->errors();
            $statusCode = config('constants.response.statusCode.validation.failed');
            return responseAPI($message, $statusCode);
        }

        // update data
        $headOfStudyProgram = HeadOfStudyProgram::find($id);
        if (!$headOfStudyProgram) {
            $message = config('constants.response.message.failed.notFound');
            $statusCode = config('constants.response.statusCode.failed.notFound');
            return responseAPI($message, $statusCode);
        }

        $headOfStudyProgram->lecturer_id = $request->lecturer_id;
        $headOfStudyProgram->study_program_id = $request->study_program_id;
        $headOfStudyProgram->year = $request->year;
        $headOfStudyProgram->status = $request->status;
        $uploadData = $headOfStudyProgram->save();
        
        if ($uploadData) {
            $message = config('constants.response.message.success.update');
            $statusCode = config('constants.response.statusCode.success.update');
        } else {
            $message = config('constants.response.message.failed.update');
            $statusCode = config('constants.response.statusCode.failed.update');
        }
        return responseAPI($message, $statusCode, $headOfStudyProgram);
    }
}
