<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\LecturerPlotting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LecturerPlottingController extends Controller
{
    public function index() {
        list($message, $statusCode, $lecturerPlotting) = initAPI();

        $course = Course::with('lecturerPlottings.lecturer', 'courseClassrooms.classroom')->get();
        if($course) {
            $message = config('constants.response.message.success.getAll');
            $statusCode = config('constants.response.statusCode.success.getAll');
        } else {
            $message = config('constants.response.message.failed.getAll');
            $statusCode = config('constants.response.statusCode.failed.getAll');
        }
        return responseAPI($message, $statusCode, $course);
    }

    public function show($id) {
        list($message, $statusCode, $lecturerPlotting) = initAPI();

        $course = Course::with('lecturerPlottings.lecturer', 'courseClassrooms.classroom')->find($id);
        return responseAPI($message, $statusCode, $course);
    }

    public function update(Request $request) {
        list($message, $statusCode, $lecturerPlotting) = initAPI();

        // validate
        $validator = Validator::make($request->all(), [
            'course_id' => 'required'
        ]);
        if($validator->fails()) {
            $message = config('constants.response.message.validation.failed');
            $statusCode = config('constants.response.statusCode.validation.failed');
            return responseAPI($message, $statusCode);    
        }

        $lecturerPlottings = LecturerPlotting::where('course_id', $request->course_id)->get();

        DB::beginTransaction();

        foreach($request->lecturer as $req) {
            // check if lecturer is exist
            $lecturerPlotting = $lecturerPlottings->where('lecturer_id', $req['lecturer_id'])->first();
            
            if($req['status'] == 1) {
                if($lecturerPlotting) {
                    $message = config('constants.response.message.failed.update');
                    $statusCode = config('constants.response.statusCode.failed.update');
                    DB::rollBack();
                    return responseAPI($message, $statusCode);
                }
                // if there is lecturer plotting exist then create new one
                $lecturerPlotting = new LecturerPlotting();
                $lecturerPlotting->course_id = $request->course_id;
                $lecturerPlotting->lecturer_id = $req['lecturer_id'];
                $lecturerPlotting->save();
            } else {
                if($lecturerPlotting) {
                    // if there is lecturer plotting exist then delete it
                    $lecturerPlotting->delete();
                } else {
                    $message = config('constants.response.message.failed.update');
                    $statusCode = config('constants.response.statusCode.failed.update');
                    DB::rollBack();
                    return responseAPI($message, $statusCode);
                }
            }
        }

        DB::commit();
        $data = Course::with('lecturerPlottings.lecturer')->get();
        $message = config('constants.response.message.success.update');
        $statusCode = config('constants.response.statusCode.success.update');
        return responseAPI($message, $statusCode, $lecturerPlottings);
    }
}
