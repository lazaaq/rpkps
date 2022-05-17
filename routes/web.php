<?php

use App\Http\Controllers\Kaprodi\CourseController;
use App\Http\Controllers\Kaprodi\CurriculumController;
use App\Http\Controllers\Kaprodi\GraduateProfileController;
use App\Http\Controllers\Kaprodi\GraduateProfileLearningGoalController;
use App\Http\Controllers\Kaprodi\LearningGoalController;
use App\Http\Controllers\Kaprodi\LearningGoalCourseController;
use App\Http\Controllers\Dosen\RpkpsController;
use App\Http\Controllers\Dosen\RpkpmController;
use App\Http\Controllers\Akademik\LecturerController;
use App\Http\Controllers\Akademik\HeadOfStudyProgramController;
use App\Http\Controllers\Akademik\LecturerPlottingController;
use App\Http\Controllers\Akademik\SemesterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', [KurikulumController::class, 'index']);
// Route::get('/kurikulum', [KurikulumController::class, 'index']);
// Route::get('/kurikulum/add', [KurikulumController::class, 'add']);
// Route::post('/kurikulum/insert', [KurikulumController::class, 'insert']);
// Login
Route::view('/login', 'v_login');

// KAPRODI
Route::prefix('kaprodi')->group(function () {
    Route::prefix('kurikulum')->group(function () {
        Route::get('', [CurriculumController::class, 'index'])->name('kaprodi.kurikulum.index'); // kaprodi.kurikulum.v_kurikulum
        Route::get('create', [CurriculumController::class, 'create'])->name('kaprodi.kurikulum.create'); // kaprodi.kurikulum.v_addkurikulum
        Route::post('store', [CurriculumController::class, 'store'])->name('kaprodi.kurikulum.store');
        Route::get('{id}/edit', [CurriculumController::class, 'edit'])->name('kaprodi.kurikulum.edit'); // kaprodi.kurikulum.v_editkurikulum
        Route::put('{id}', [CurriculumController::class, 'update'])->name('kaprodi.kurikulum.update');
    });
    Route::prefix('profil-lulusan')->group(function () {
        Route::get('', [GraduateProfileController::class, 'index'])->name('kaprodi.profil-lulusan.index'); // kaprodi.profillulusan.v_profillulusan
    });
    Route::prefix('cpl')->group(function () {
        Route::get('', [LearningGoalController::class, 'index'])->name('kaprodi.cpl.index'); // kaprodi.cpl.v_cpl
        Route::get('create', [LearningGoalController::class, 'create'])->name('kaprodi.cpl.create'); // kaprodi.cpl.v_addcpl
        Route::post('', [LearningGoalController::class, 'store'])->name('kaprodi.cpl.store'); 
        Route::get('{id}/edit', [LearningGoalController::class, 'edit'])->name('kaprodi.cpl.edit'); // kaprodi.cpl.v_editcpl
        Route::put('{id}', [LearningGoalController::class, 'update'])->name('kaprodi.cpl.update');
        Route::delete('{id}', [LearningGoalController::class, 'destroy'])->name('kaprodi.cpl.delete');
    });
    // Route::prefix('cpl-profil-lulusan')->group(function () {
    //     Route::get('', [GraduateProfileLearningGoalController::class, 'index']);
    //     Route::put('', [GraduateProfileLearningGoalController::class, 'update']);
    // });
    Route::prefix('mata-kuliah')->group(function () {
        Route::get('', [CourseController::class, 'index']);
    });
    // Route::prefix('cpl-mata-kuliah')->group(function () {
    //     Route::get('', [LearningGoalCourseController::class, 'index']);
    //     Route::put('', [LearningGoalCourseController::class, 'update']);
    // });
});

// // DOSEN
// Route::prefix('dosen')->group(function () {
//     Route::prefix('rpkps')->group(function () {
//         Route::get('', [RpkpsController::class, 'index']);
//         Route::get('{id}', [RpkpsController::class, 'show']);
//     });
//     Route::prefix('rpkpm')->group(function () {
//         Route::get('', [RpkpmController::class, 'index']);
//         Route::get('{id}', [RpkpmController::class, 'show']);
//     });
// });

// // AKADEMIK
// Route::prefix('akademik')->group(function () {
//     Route::prefix('dosen')->group(function () {
//         Route::get('', [LecturerController::class, 'index']);
//         Route::post('', [LecturerController::class, 'store']);
//         Route::put('{id}', [LecturerController::class, 'update']);
//     });
//     Route::prefix('kaprodi')->group(function () {
//         Route::get('', [HeadOfStudyProgramController::class, 'index']);
//         Route::post('', [HeadOfStudyProgramController::class, 'store']);
//         Route::put('{id}', [HeadOfStudyProgramController::class, 'update']);
//     });
//     Route::prefix('semester')->group(function () {
//         Route::get('', [SemesterController::class, 'index']);
//         Route::post('', [SemesterController::class, 'store']);
//         Route::get('{id}/mata-kuliah-ditawarkan', [SemesterController::class, 'showOfferedCourses']);
//         Route::put('{id}/mata-kuliah-ditawarkan', [SemesterController::class, 'updateOfferedCourses']);
//     });
//     Route::prefix('plotting-dosen')->group(function () {
//         Route::get('', [LecturerPlottingController::class, 'index']);
//         Route::get('{id}', [LecturerPlottingController::class, 'show']);
//         Route::put('', [LecturerPlottingController::class, 'update']);
//     });
// });

Route::get('/', function () {
    return 'Index Page';
});
// route::view('/pemetaanprofil', 'kaprodi.pemetaanprofil.v_pemetaanprofil');
// route::view('/editpemetaanprofil', 'kaprodi.pemetaanprofil.v_editpemetaanprofil');
// route::view('/pemetaancpl', 'kaprodi.pemetaancpl.v_pemetaancpl');
// route::view('/editpemetaancpl', 'kaprodi.pemetaancpl.v_editpemetaancpl');
// route::view('/matakuliah', 'kaprodi.matakuliah.v_matakuliah');

// Akademik
route::view('/dosen', 'akademik.dosen.v_dosen');
route::view('/kaprodi', 'akademik.kaprodi.v_kaprodi');
route::view('/semestergasal', 'akademik.plottingdosen.v_semestergasal');
route::view('/semestergenap', 'akademik.plottingdosen.v_semestergenap');
route::view('/semester', 'akademik.semester.v_semester');
route::view('/mkditawarkan', 'akademik.semester.v_mkditawarkan');
route::view('/semestergasal', 'akademik.plottingdosen.v_semestergasal');

//route mahasiswa
route::view('/pelaksanaanPerkuliahan', 'mahasiswa.v_pelaksanaanPerkuliahan');
route::view('/pelaksanaanMingguan', 'mahasiswa.v_perkuliahanMingguan');
route::view('/formInput', 'mahasiswa.v_formInput');

// Dosen
route::view('/rpkps', 'dosen.rpkps.v_rpkps');
route::view('/pelaksanaankuliah', 'dosen.perkuliahan.pelaksanaan.v_pelaksanaankuliah');
route::view('/pkuliahmingguan', 'dosen.perkuliahan.pelaksanaan.v_pkuliahmingguan');
route::view('/laporan', 'dosen.perkuliahan.laporan.v_laporan');
route::view('/laporanmingguan', 'dosen.perkuliahan.laporan.v_laporanmingguan');
route::view('/rpkpm', 'dosen.rpkpm.v_rpkpm');
route::view('/formTambahLaporan', 'dosen.perkuliahan.laporan.v_form_tambahdata');
