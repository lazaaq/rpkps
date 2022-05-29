<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Rpkpm;
use App\Models\Rpkps;
use Illuminate\Http\Request;

class RpkpmController extends Controller
{
    public function index() {
        $rpkpms = Rpkpm::with('rpkps.course', 'rpkps.semester')->get();
        $courses = Course::all(['id', 'name']);
        if(!$rpkpms) {
            $message = config('constants.response.message.failed.getAll');
            $statusCode = config('constants.response.statusCode.failed.getAll');  
            return responseAPI($message, $statusCode);
        }

        return view('dosen.rpkpm.v_rpkpm', compact('rpkpms', 'courses'));
    }

    public function show($id) {
        list($message, $statusCode, $rpkpms) = initAPI();

        $rpkpm = Rpkpm::with('learningMedia')->where('rpkps_id', $id)->get();
        if($rpkpm) {
            $message = config('constants.response.message.success.getAll');
            $statusCode = config('constants.response.statusCode.success.getAll');
        } else {
            $message = config('constants.response.message.failed.getAll');
            $statusCode = config('constants.response.statusCode.failed.getAll');            
        }
        return responseAPI($message, $statusCode, $rpkpm);
    }
}
