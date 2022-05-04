<?php

namespace App\Http\Controllers\Kaprodi;

use App\Http\Controllers\Controller;
use App\Models\LearningGoalCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LearningGoalCourseController extends Controller
{
    public function index() {
        $message = '';
        $statusCode = 500;

        $learningGoalCourse = LearningGoalCourse::all();
        $learningGoalCourse = $learningGoalCourse->sortBy('course_id')->groupBy('course_id');
        foreach ($learningGoalCourse as $key => $value) {
            $learningGoalCourse[$key] = $value->sortBy('learning_goal_id');
        }
        if($learningGoalCourse) {
            $message = 'Learning Goal Course retrieved successfully';
            $statusCode = 200;
        } else {
            $message = 'Learning Goal Course not found';
        }
        return responseAPI($message, $statusCode, $learningGoalCourse);
    }

    public function update(Request $request) {
        $message = '';
        $statusCode = 500;
        $data = null;
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
                        $message = 'Invalid status';
                        $statusTransaction = false;
                        break;
                    }
                } else {
                    $message = 'Learning Goal Course with id ' . $key . ' not found';
                    $statusTransaction = false;
                    break;
                }
            }
            if ($statusTransaction) {
                DB::commit();
                $message = 'Learning Goal Course updated successfully';
                $data = LearningGoalCourse::all();
            } else {
                DB::rollBack();
                $message = 'Failed to update using database transaction. There is some invalid data.';
            }
        } else {
            $message = "Request is empty, there is no data to update";
            $message = 200;
        }
        return responseAPI($message, $statusCode, $data);
    }
}
