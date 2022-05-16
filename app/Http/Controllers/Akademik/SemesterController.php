<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseClassroom;
use App\Models\Semester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SemesterController extends Controller
{
    public function index() {
        list($message, $statusCode, $semester) = initAPI();

        $semester = Semester::all();
        if ($semester) {
            $message = config('constants.response.message.success.getAll');
            $statusCode = 200;
        } else {
            $message = config('constants.response.message.failed.notFound');
        }
        return responseAPI($message, $statusCode, $semester);
    }

    public function store(Request $request) {
        list($message, $statusCode, $semester) = initAPI();

        // validation
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'active' => 'required|boolean',
        ]);
        if ($validator->fails()) {
            $message = config('constants.response.message.validation.failed');
            $statusCode = config('constants.response.statusCode.validation.failed');
            return responseAPI($message, $statusCode, $validator->errors());
        }

        // store data
        $semester = new Semester();
        $semester->name = $request->name;
        $semester->start_date = $request->start_date;
        $semester->end_date = $request->end_date;
        $semester->active = $request->active;
        $storeData = $semester->save();

        if($storeData) {
            $message = config('constants.response.message.success.create');
            $statusCode = config('constants.response.statusCode.success.create');
        } else {
            $message = config('constants.response.message.failed.create');
            $statusCode = config('constants.response.statusCode.failed.create');
        }
        return responseAPI($message, $statusCode, $semester);
    }

    public function showOfferedCourses($id) {
        list($message, $statusCode, $semester) = initAPI();

        $semester = Course::with('studyProgram', 'semester', 'courseClassrooms')->get();
        if ($semester) {
            $message = config('constants.response.message.success.getOne');
            $statusCode = config('constants.response.statusCode.success.getOne');
        } else {
            $message = config('constants.response.message.failed.getOne');
            $statusCode = config('constants.response.statusCode.failed.getOne');
        }
        return responseAPI($message, $statusCode, $semester);
    }

    public function updateOfferedCourses(Request $request, $id) {
        list($message, $statusCode, $semester) = initAPI();
        
        return responseAPI($message, $statusCode, $semester);
    }
}
