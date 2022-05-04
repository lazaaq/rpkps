<?php

use App\Http\Controllers\Kaprodi\CourseController;
use App\Http\Controllers\Kaprodi\CurriculumController;
use App\Http\Controllers\Kaprodi\GraduateProfileController;
use App\Http\Controllers\Kaprodi\GraduateProfileLearningGoalController;
use App\Http\Controllers\Kaprodi\LearningGoalController;
use App\Http\Controllers\Kaprodi\LearningGoalCourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('kaprodi')->group(function () {
    Route::prefix('kurikulum')->group(function () {
        Route::get('', [CurriculumController::class, 'index']);
        Route::post('store', [CurriculumController::class, 'store']);
        Route::put('{id}', [CurriculumController::class, 'update']);
    });
    Route::prefix('profil-lulusan')->group(function () {
        Route::get('', [GraduateProfileController::class, 'index']);
    });
    Route::prefix('capaian-pembelajaran')->group(function () {
        Route::get('', [LearningGoalController::class, 'index']);
        Route::post('', [LearningGoalController::class, 'store']);
        Route::put('{id}', [LearningGoalController::class, 'update']);
        Route::delete('{id}', [LearningGoalController::class, 'destroy']);
    });
    Route::prefix('profil-cpl')->group(function () {
        Route::get('', [GraduateProfileLearningGoalController::class, 'index']);
        Route::put('', [GraduateProfileLearningGoalController::class, 'update']);
    });
    Route::prefix('mata-kuliah')->group(function () {
        Route::get('', [CourseController::class, 'index']);
    });
    Route::prefix('cpl-mata-kuliah')->group(function () {
        Route::get('', [LearningGoalCourseController::class, 'index']);
        Route::put('', [LearningGoalCourseController::class, 'update']);
    });
});