<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KurikulumController;
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
route::view('/login', 'v_login');

// Kaprodi
Route::get('/', function () {
    return view('kaprodi.kurikulum.v_kurikulum');
});
route::view('/addkurikulum', 'kaprodi.kurikulum.v_addkurikulum');
route::view('/editkurikulum', 'kaprodi.kurikulum.v_editkurikulum');
route::view('/profillulusan', 'kaprodi.profillulusan.v_profillulusan');
route::view('/pemetaanprofil', 'kaprodi.pemetaanprofil.v_pemetaanprofil');
route::view('/editpemetaanprofil', 'kaprodi.pemetaanprofil.v_editpemetaanprofil');
route::view('/cpl', 'kaprodi.cpl.v_cpl');
route::view('/addcpl', 'kaprodi.cpl.v_addcpl');
route::view('/editcpl', 'kaprodi.cpl.v_editcpl');
route::view('/pemetaancpl', 'kaprodi.pemetaancpl.v_pemetaancpl');
route::view('/editpemetaancpl', 'kaprodi.pemetaancpl.v_editpemetaancpl');
route::view('/matakuliah', 'kaprodi.matakuliah.v_matakuliah');

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
