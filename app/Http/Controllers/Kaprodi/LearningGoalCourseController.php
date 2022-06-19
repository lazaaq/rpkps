<?php

namespace App\Http\Controllers\Kaprodi;

use App\Http\Controllers\Controller;
use App\Models\LearningGoal;
use App\Models\LearningGoalCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LearningGoalCourseController extends Controller
{
    public function index() {
        $learningGoalCourse = LearningGoalCourse::with('learningGoal', 'course')->get()->groupBy('course_id');
        if(!$learningGoalCourse) {
            $message = config('constants.response.message.failed.notFound');
            $statusCode = 500;
            return responseAPI($message, $statusCode);
        }
        $learningGoal = LearningGoal::all();
        $learningGoalSikap = LearningGoal::where('component', 'sikap')->get();
        $learningGoalPP = LearningGoal::where('component', 'pp')->get();
        $learningGoalKK = LearningGoal::where('component', 'kk')->get();
        $learningGoalKeterampilan = LearningGoal::where('component', 'keterampilan')->get();
        
        return view('kaprodi.pemetaancpl.v_pemetaancpl', compact('learningGoalCourse', 'learningGoal', 'learningGoalSikap', 'learningGoalPP', 'learningGoalKK', 'learningGoalKeterampilan'));
    }

    public function edit() {
        $learningGoalCourse = LearningGoalCourse::with('learningGoal', 'course')->get()->groupBy('course_id');
        if(!$learningGoalCourse) {
            $message = config('constants.response.message.failed.notFound');
            $statusCode = 500;
            return responseAPI($message, $statusCode);
        }
        $learningGoal = LearningGoal::all();
        $learningGoalSikap = LearningGoal::where('component', 'sikap')->get();
        $learningGoalPP = LearningGoal::where('component', 'pp')->get();
        $learningGoalKK = LearningGoal::where('component', 'kk')->get();
        $learningGoalKeterampilan = LearningGoal::where('component', 'keterampilan')->get();
        
        return view('kaprodi.pemetaancpl.v_editpemetaancpl', compact('learningGoalCourse', 'learningGoal', 'learningGoalSikap', 'learningGoalPP', 'learningGoalKK', 'learningGoalKeterampilan'));
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
