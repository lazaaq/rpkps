<?php

namespace App\Http\Controllers\Kaprodi;

use App\Http\Controllers\Controller;
use App\Models\LearningGoalCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LearningGoalCourseController extends Controller
{
    public function index() {
        list($message, $statusCode, $learningGoalCourse) = initAPI();

        $learningGoalCourse = LearningGoalCourse::all();
        $learningGoalCourse = $learningGoalCourse->sortBy('course_id')->groupBy('course_id');
        foreach ($learningGoalCourse as $key => $value) {
            $learningGoalCourse[$key] = $value->sortBy('learning_goal_id');
        }
        if($learningGoalCourse) {
            $message = config('constants.response.message.success.getAll');
            $statusCode = 200;
        } else {
            $message = config('constants.response.message.failed.notFound');
        }
        return responseAPI($message, $statusCode, $learningGoalCourse);
    }

    public function update(Request $request) {
        list($message, $statusCode, $learningGoalCourse) = initAPI();

        $statusTransaction = true;
        
        $count = count($request->all());
        if ($count > 0) {
            DB::beginTransaction();
            foreach($request->all() as $key => $value) {
                $learningGoalCourse = LearningGoalCourse::find($key);
                if ($learningGoalCourse) {
                    if ($value['status'] === 'fill') {
                        $learningGoalCourse->update([
                            'course_id' => $value['course_id'],
                            'learning_goal_id' => $value['learning_goal_id'],
                            'percentage' => $value['percentage'],
                        ]);
                    } else if ($value['status'] === 'delete') {
                        $learningGoalCourse->delete();
                    } else {
                        $message = config('constants.response.message.status.invalid');
                        $statusTransaction = false;
                        break;
                    }
                } else {
                    $message = config('constants.response.message.failed.getOne', ['id' => $key]);
                    $statusTransaction = false;
                    break;
                }
            }
            if ($statusTransaction) {
                DB::commit();
                $message = config('constants.response.message.success.update');
                $statusCode = 200;
                $learningGoalCourse = LearningGoalCourse::all();
            } else {
                DB::rollBack();
                $message = config('constants.response.message.failed.transaction');
            }
        } else {
            $message = "Request is empty, there is no data to update";
            $message = 200;
        }
        return responseAPI($message, $statusCode, $learningGoalCourse);
    }
}
