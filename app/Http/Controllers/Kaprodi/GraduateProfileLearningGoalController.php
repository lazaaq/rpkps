<?php

namespace App\Http\Controllers\Kaprodi;

use App\Http\Controllers\Controller;
use App\Models\GraduateProfileLearningGoal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraduateProfileLearningGoalController extends Controller
{
    public function index() {
        $graduateProfileLearningGoals = GraduateProfileLearningGoal::with('graduateProfile', 'learningGoal')->get();
        // $graduateProfileLearningGoal = $graduateProfileLearningGoal->sortBy('graduate_profile_id')->groupBy('graduate_profile_id');
        // foreach ($graduateProfileLearningGoal as $key => $value) {
        //     $graduateProfileLearningGoal[$key] = $value->sortBy('learning_goal_id');
        // }
        if (!$graduateProfileLearningGoals) {
            $message = config('constants.response.message.failed.notFound');
            $statusCode = 200;
            return responseAPI($message, $statusCode);
        }
        return view('kaprodi.pemetaanprofil.v_pemetaanprofil', compact('graduateProfileLearningGoals'));
    }

    public function edit() {
        $graduateProfileLearningGoals = GraduateProfileLearningGoal::with('graduateProfile', 'learningGoal')->get();
        if (!$graduateProfileLearningGoals) {
            $message = config('constants.response.message.failed.notFound');
            $statusCode = 200;
            return responseAPI($message, $statusCode);
        }
        return view('kaprodi.pemetaanprofil.v_editpemetaanprofil', compact('graduateProfileLearningGoals'));
    }

    public function update(Request $request) {
        list($message, $statusCode, $graduateProfileLearningGoal) = initAPI();
        
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
                $graduateProfileLearningGoal = GraduateProfileLearningGoal::all();
            } else {
                DB::rollBack();
                $message = config('constants.response.message.failed.transaction');
            }
        } else {
            $message = "Request is empty, there is no data to update";
            $message = 200;
        }
        return responseAPI($message, $statusCode, $graduateProfileLearningGoal);
    }
}
