<?php

namespace App\Http\Controllers\Kaprodi;

use App\Http\Controllers\Controller;
use App\Models\LearningGoal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LearningGoalController extends Controller
{
    public function index() {
        $learningGoal = LearningGoal::all();
        if (!$learningGoal) {
            return config('constants.response.message.failed.notFound');
        }
        return view('kaprodi.cpl.v_cpl', compact('learningGoal'));
    }

    public function create() {
        return view('kaprodi.cpl.v_addcpl');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'component' => 'required',
            'value' => 'required',
        ]);
        if($validator->fails()) {
            $message = $validator->errors();
            return $message;
        }
        $learningGoal = LearningGoal::create($request->all());
        if (!$learningGoal) {
            return config('constants.response.message.failed.create');
        }
        return redirect()->route('kaprodi.cpl.index');
    }

    public function edit($id) {
        $learningGoal = LearningGoal::find($id);
        if (!$learningGoal) {
            return config('constants.response.message.failed.notFound');
        }
        return view('kaprodi.cpl.v_editcpl', compact('learningGoal'));
    }

    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'component' => 'required',
            'value' => 'required',
        ]);
        if($validator->fails()) {
            $message = $validator->errors();
            return $message;
        }
        $learningGoal = LearningGoal::find($id);
        if ($learningGoal) {
            $updateLearningGoal = $learningGoal->update($request->all());
            if(!$updateLearningGoal) {
                return config('constants.response.message.failed.update');
            }
        } else {
            return config('constants.response.message.failed.notFound');
        }
        return redirect()->route('kaprodi.cpl.index');
    }

    public function destroy($id) {
        $learningGoal = LearningGoal::find($id);
        if ($learningGoal) {
            $deleteLearningGoal = $learningGoal->delete();
            if(!$deleteLearningGoal) {
                return config('constants.response.message.failed.delete');
            }
        } else {
            return config('constants.response.message.failed.notFound');
        }
        return redirect()->route('kaprodi.cpl.index');
    }
}
