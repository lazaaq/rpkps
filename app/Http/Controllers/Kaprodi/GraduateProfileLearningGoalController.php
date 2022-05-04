<?php

namespace App\Http\Controllers\Kaprodi;

use App\Http\Controllers\Controller;
use App\Models\GraduateProfileLearningGoal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraduateProfileLearningGoalController extends Controller
{
    public function index() {
        $message = '';
        $statusCode = 500;
        $graduateProfileLearningGoal = GraduateProfileLearningGoal::all();
        $graduateProfileLearningGoal = $graduateProfileLearningGoal->sortBy('graduate_profile_id')->groupBy('graduate_profile_id');
        if ($graduateProfileLearningGoal) {
            $message = 'Graduate Profile Learning Goal retrieved successfully';
            $statusCode = 200;
        } else {
            $message = 'Graduate Profile Learning Goal not found';
        }
        return responseAPI($message, $statusCode, $graduateProfileLearningGoal);
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
                $graduateProfileLearningGoal = GraduateProfileLearningGoal::find($key);
                if ($graduateProfileLearningGoal) {
                    if ($value['status'] === 'fill') {
                        $graduateProfileLearningGoal->update([
                            'learning_goal_id' => $value['learning_goal_id'],
                            'graduate_profile_id' => $value['graduate_profile_id'],
                        ]);
                    } else if ($value['status'] === 'delete') {
                        $graduateProfileLearningGoal->delete();
                    } else {
                        $message = 'Invalid status';
                        $statusTransaction = false;
                        break;
                    }
                } else {
                    $message = 'Graduate Profile Learning Goal with id ' . $key . ' not found';
                    $statusTransaction = false;
                    break;
                }
            }
            if ($statusTransaction) {
                DB::commit();
                $message = 'Graduate Profile Learning Goal updated successfully';
                $data = GraduateProfileLearningGoal::all();
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
