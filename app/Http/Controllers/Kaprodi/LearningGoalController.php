<?php

namespace App\Http\Controllers\Kaprodi;

use App\Http\Controllers\Controller;
use App\Models\LearningGoal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LearningGoalController extends Controller
{
    public function index() {
        $message = '';
        $statusCode = 500;
        $learningGoal = LearningGoal::all();
        if ($learningGoal) {
            $message = 'Learning Goal retrieved successfully';
            $statusCode = 200;
        } else {
            $message = 'Learning Goal not found';
        }
        return responseAPI($message, $statusCode, $learningGoal);
    }

    public function store(Request $request) {
        $message = '';
        $statusCode = 500;
        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'component' => 'required',
            'value' => 'required',
        ]);
        if($validator->fails()) {
            $message = $validator->errors();
            return responseAPI($message, $statusCode);
        }
        $learningGoal = LearningGoal::create($request->all());
        if ($learningGoal) {
            $message = 'Learning Goal created successfully';
            $statusCode = 200;
        } else {
            $message = 'Learning Goal not created';
        }
        return responseAPI($message, $statusCode, $learningGoal);
    }

    public function update(Request $request, $id) {
        $message = '';
        $statusCode = 500;
        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'component' => 'required',
            'value' => 'required',
        ]);
        if($validator->fails()) {
            $message = $validator->errors();
            return responseAPI($message, $statusCode);
        }
        $learningGoal = LearningGoal::find($id);
        if ($learningGoal) {
            $updateLearningGoal = $learningGoal->update($request->all());
            if($updateLearningGoal) {
                $message = 'Learning Goal updated successfully';
                $statusCode = 200;
            } else {
                $message = 'Learning Goal failed to update';
            }
        } else {
            $message = 'Learning Goal not found';
        }
        return responseAPI($message, $statusCode, $learningGoal);
    }

    public function destroy($id) {
        $message = '';
        $statusCode = 500;
        $learningGoal = LearningGoal::find($id);
        if ($learningGoal) {
            $deleteLearningGoal = $learningGoal->delete();
            if($deleteLearningGoal) {
                $message = 'Learning Goal deleted successfully';
                $statusCode = 200;
            } else {
                $message = 'Learning Goal failed to delete';
            }
        } else {
            $message = 'Learning Goal not found';
        }
        return responseAPI($message, $statusCode, $learningGoal);
    }
}
