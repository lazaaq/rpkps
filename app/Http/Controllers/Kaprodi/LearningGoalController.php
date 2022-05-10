<?php

namespace App\Http\Controllers\Kaprodi;

use App\Http\Controllers\Controller;
use App\Models\LearningGoal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LearningGoalController extends Controller
{
    public function index() {
        list($message, $statusCode, $learningGoal) = initAPI();

        $learningGoal = LearningGoal::all();
        if ($learningGoal) {
            $message = config('constants.response.message.success.getAll');
            $statusCode = 200;
        } else {
            $message = config('constants.response.message.failed.notFound');
        }
        return responseAPI($message, $statusCode, $learningGoal);
    }

    public function store(Request $request) {
        list($message, $statusCode, $learningGoal) = initAPI();

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
            $message = config('constants.response.message.success.create');
            $statusCode = 200;
        } else {
            $message = config('constants.response.message.failed.create');
        }
        return responseAPI($message, $statusCode, $learningGoal);
    }

    public function update(Request $request, $id) {
        list($message, $statusCode, $learningGoal) = initAPI();

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
                $message = config('constants.response.message.success.update');
                $statusCode = 200;
            } else {
                $message = config('constants.response.message.failed.update');
            }
        } else {
            $message = config('constants.response.message.failed.notFound');
        }
        return responseAPI($message, $statusCode, $learningGoal);
    }

    public function destroy($id) {
        list($message, $statusCode, $learningGoal) = initAPI();
        
        $learningGoal = LearningGoal::find($id);
        if ($learningGoal) {
            $deleteLearningGoal = $learningGoal->delete();
            if($deleteLearningGoal) {
                $message = config('constants.response.message.success.delete');
                $statusCode = 200;
            } else {
                $message = config('constants.response.message.failed.delete');
            }
        } else {
            $message = config('constants.response.message.failed.notFound');
        }
        return responseAPI($message, $statusCode, $learningGoal);
    }
}
