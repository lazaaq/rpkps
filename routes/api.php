<?php

use App\Http\Controllers\Kaprodi\CurriculumController;
use App\Http\Controllers\Kaprodi\GraduateProfileController;
use App\Http\Controllers\Kaprodi\LearningGoalController;
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
});