<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Rpkps;
use Illuminate\Http\Request;

class RpkpsController extends Controller
{
    public function index() {
        $rpkps = Rpkps::with('course', 'semester')->get();
        $courses = Course::all(['id', 'name']);
        if(!$rpkps) {
            $message = config('constants.response.message.failed.getAll');
            $statusCode = config('constants.response.statusCode.failed.getAll');  
            return responseAPI($message, $statusCode);
        }

        return view('dosen.rpkps.v_rpkps', compact('rpkps', 'courses'));
    }

    public function show($id) {
        list($message, $statusCode, $rpkps) = initAPI();

        $rpkps = Rpkps::with('course', 'semester', 'cpmkCplCourses.cplCourse', 'cpmkCplCourses.cpmk', 'studyMaterials', 'materialReferences', 'course.lecturerPlottings.lecturer')->find($id);
        if($rpkps) {
            $message = config('constants.response.message.success.getOne');
            $statusCode = config('constants.response.statusCode.success.getOne');
        } else {
            $message = config('constants.response.message.failed.getOne');
            $statusCode = config('constants.response.statusCode.failed.getOne');            
        }
        return responseAPI($message, $statusCode, $rpkps);
    }
}
