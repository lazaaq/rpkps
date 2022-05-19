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
    // Route::prefix('rpkpm')->group(function () {
    //     Route::get('', [RpkpmController::class, 'index']);
    //     Route::get('{id}', [RpkpmController::class, 'show']);
    // });
// });

// AKADEMIK
Route::prefix('akademik')->group(function () {
    Route::prefix('dosen')->group(function () {
        Route::get('', [LecturerController::class, 'index'])->name('akademik.dosen.index'); // akademik.dosen.v_dosen
        Route::get('create', [LecturerController::class, 'create'])->name('akademik.dosen.create'); // akademik.dosen.v_adddosen
        Route::post('', [LecturerController::class, 'store'])->name('akademik.dosen.store');
        Route::get('{id}/edit', [LecturerController::class, 'edit'])->name('akademik.dosen.edit'); // akademik.dosen.v_editdosen
        Route::put('{id}/update', [LecturerController::class, 'update'])->name('akademik.dosen.update');
        Route::delete('{id}/delete', [LecturerController::class, 'destroy'])->name('akademik.dosen.delete');
    });
    Route::prefix('kaprodi')->group(function () {
        Route::get('', [HeadOfStudyProgramController::class, 'index'])->name('akademik.kaprodi.index'); // akademik.kaprodi.v_kaprodi
        Route::get('create', [HeadOfStudyProgramController::class, 'create'])->name('akademik.kaprodi.create'); // akademik.kaprodi.v_addkaprodi
        Route::post('', [HeadOfStudyProgramController::class, 'store'])->name('akademik.kaprodi.store'); 
        Route::get('{id}/edit', [HeadOfStudyProgramController::class, 'edit'])->name('akademik.kaprodi.edit'); // akademik.kaprodi.v_editkaprodi
        Route::put('{id}', [HeadOfStudyProgramController::class, 'update'])->name('akademik.kaprodi.update');
        Route::delete("{id}/delete", [HeadOfStudyProgramController::class, 'destroy'])->name('akademik.kaprodi.delete');
    });
    Route::prefix('semester')->group(function () {
        Route::get('', [SemesterController::class, 'index'])->name('akademik.semester.index'); // akademik.semester.v_semester
        Route::get('create', [SemesterController::class, 'create'])->name('akademik.semester.create'); // akademik.semester.v_addsemester
        Route::post('', [SemesterController::class, 'store'])->name('akademik.semester.store');
        Route::get('{id}/mata-kuliah-ditawarkan', [SemesterController::class, 'showOfferedCourses'])->name('akademik.semester.mata-kuliah-ditawarkan'); // akademik.semester.v_mkditawarkan
        Route::put('{id}/mata-kuliah-ditawarkan', [SemesterController::class, 'updateOfferedCourses'])->name('akademik.semester.mata-kuliah-ditawarkan.update');
    });
    Route::prefix('plotting-dosen')->group(function () {
        Route::get('{id}', [LecturerPlottingController::class, 'index'])->name('akademik.plotting-dosen.index'); // akademik.plottingdosen.v_semestergasal
        Route::get('{id}/create', [LecturerPlottingController::class, 'create'])->name('akademik.plotting-dosen.create'); // akademik.plottingdosen.v_addsemestergasal
        Route::post('store', [LecturerPlottingController::class, 'store'])->name('akademik.plotting-dosen.store');
    });
});

Route::get('/', function () {
    return 'Index Page';
});
route::view('/pemetaanprofil', 'kaprodi.pemetaanprofil.v_pemetaanprofil');
route::view('/editpemetaanprofil', 'kaprodi.pemetaanprofil.v_editpemetaanprofil');
route::view('/pemetaancpl', 'kaprodi.pemetaancpl.v_pemetaancpl');
route::view('/editpemetaancpl', 'kaprodi.pemetaancpl.v_editpemetaancpl');
// route::view('/matakuliah', 'kaprodi.matakuliah.v_matakuliah');

// Akademik
// route::view('/dosen', 'akademik.dosen.v_dosen');
// route::view('/kaprodi', 'akademik.kaprodi.v_kaprodi');
// route::view('/semestergasal', 'akademik.plottingdosen.v_semestergasal');
// route::view('/semestergenap', 'akademik.plottingdosen.v_semestergenap');
// route::view('/semester', 'akademik.semester.v_semester');
// route::view('/mkditawarkan', 'akademik.semester.v_mkditawarkan');
route::view('/adddosen', 'akademik.dosen.v_adddosen');
route::view('/editdosen', 'akademik.dosen.v_editdosen');
route::view('/addkaprodi', 'akademik.kaprodi.v_addkaprodi');
route::view('/editkaprodi', 'akademik.kaprodi.v_editkaprodi');
// route::view('/addplotdosen', 'akademik.plottingdosen.v_addplotdosen');
route::view('/addsemester', 'akademik.semester.v_addsemester');

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
route::view('/hasilKesesuaian', 'dosen.perkuliahan.pelaksanaan.v_hasilkesesuaian');
