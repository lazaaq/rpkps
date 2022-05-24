<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use App\Models\HeadOfStudyProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HeadOfStudyProgramController extends Controller
{
    public function index() {
        $headOfStudyProgram = HeadOfStudyProgram::with('studyProgram', 'lecturer')->get();
        if (!$headOfStudyProgram) {
            $message = config('constants.response.message.success.getAll');
            $statusCode = config('constants.response.statusCode.success.getAll');
            return response()->json(['message' => $message, 'statusCode' => $statusCode]);
        }
        return view('akademik.kaprodi.v_kaprodi', compact('headOfStudyProgram'));
    }

    public function create() {
        return view('akademik.kaprodi.v_addkaprodi');
    }

    public function store(Request $request) {
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

        if (!$storeData) {
            $message = config('constants.response.message.failed.create');
            $statusCode = config('constants.response.statusCode.failed.create');
            return responseAPI($message, $statusCode);
        }
        return redirect()->route('akademik.kaprodi.index');
    }

    public function edit($id) {
        $headOfStudyProgram = HeadOfStudyProgram::find($id);
        if (!$headOfStudyProgram) {
            $message = config('constants.response.message.failed.get');
            $statusCode = config('constants.response.statusCode.failed.get');
            return responseAPI($message, $statusCode);
        }
        return view('akademik.kaprodi.v_editkaprodi', compact('headOfStudyProgram'));
    }

    public function update(Request $request, $id) {
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
            $message = config('constants.response.message.failed.update');
            $statusCode = config('constants.response.statusCode.failed.update');
            return responseAPI($message, $statusCode);
        } 
        return redirect()->route('akademik.kaprodi.index');
    }

    public function destroy($id) {
        $headOfStudyProgram = HeadOfStudyProgram::find($id);
        if (!$headOfStudyProgram) {
            $message = config('constants.response.message.failed.notFound');
            $statusCode = config('constants.response.statusCode.failed.notFound');
            return responseAPI($message, $statusCode);
        }
        $deleteData = $headOfStudyProgram->delete();
        if (!$deleteData) {
            $message = config('constants.response.message.failed.delete');
            $statusCode = config('constants.response.statusCode.failed.delete');
            return responseAPI($message, $statusCode);
        }
        return redirect()->route('akademik.kaprodi.index');
    }
}
