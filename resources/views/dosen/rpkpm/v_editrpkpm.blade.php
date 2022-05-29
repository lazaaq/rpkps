@extends('layout.v_template')

@section('title', 'RPKPM')

@section('content')
<div class="row">
    <div class="col-xs-12">

        <div class="box">
            <div class="box-header with-border">
                <h3 align="center">RENCANA PROGRAM DAN KEGIATAN PEMBELAJARAN MINGGUAN (RPKPM)  SEMESTER GENAP 2021/2022 
                    <br> TEKNOLOGI REKAYASA PERANGKAT LUNAK</h3>
            </div>
            <div class="box-body">
                <div class="col-xs-12" style="display:flex;">
                    <div class="radio">
                            <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                            Copy dari semester sebelumnya
                            </label>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-control select2-hidden-accessible" name="sesiId" id="sesiId" tabindex="-1" aria-hidden="true">
                                <option>Semester Genap 2021/2022</option>
                            </select>
                        </div>     
                </div>
            </div>
        </div>

        <div class="box">
            <div class="box-header with-border">
                <div>
                    <h4><b>SVPL214402 Proyek Aplikasi Dasar 2</b></h4>
                    <label class="control-label">Dosen :</label><span> Divi Galih Prasetyo Putri, S.Kom., M.Kom. </span>
                </div>
            </div>
            <div class="box-body">
                <br>
                <div>
                    <h5 align="center"><b> Rencana Pembelajaran Mingguan (RPKM) <br> Semester Genap 2021/2022</b></h5>
                    <br>
                    <a href="/">
                        <button type="button" class="btn btn-warning">
                            <i class="fa fa-print" style="margin-right:10px;"></i><span>Lihat RPKM Lengkap</span>
                        </button>
                    </a>
                </div>
                <div class="card-body table-responsive p-1" style="height: responsive;">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th rowspan="2">Minggu Ke</th>
                                <th rowspan="2">Sub-CPMK</th>
                                <th colspan="3">Metode Penilaian</th>
                                <th rowspan="2">Bahan Kajian (Materi Pembelajaran)</th>
                                <th rowspan="2">Bentuk dan Metode Pembelajaran</th>
                                <th rowspan="2">Beban Waktu Pembelajaran</th>
                                <th rowspan="2">Pengalaman Belajar Mahasiswa</th>
                                <th rowspan="2">Media Pembelajaran</th>
                                <th rowspan="2">Pustaka dan Sumber Belajar Eksternal</th>
                            </tr>
                            <tr>
                                <th>Indikator</th>
                                <th>Komponen</th>
                                <th>Bobot (%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="50px">1</td>
                                <td width="200px">CPMK1</td>
                                <td width="200px">Ketepatan 
                                Menjelaskan
                                Pengantar
                                Keamanan</td>
                                <td width="200px">Tugas1 <br> UTS</td>
                                <td width="200px">2,5</td>
                                <td width="200px">Pengantar konsep hacking</td> 
                                <td width="200px">Tatap Muka : Kuliah <br> Daring : Self Learning</td>
                                <td width="200px">Tatap Muka : 2 X 50<br> Daring : 30</td>
                                <td width="200px">Tatap Muka : Mendengarkan ceramah<br> Daring : Belajar mandiri</td>
                                <td width="200px">Slide Presentasi<br>Akses internet</td>
                                <td width="200px">[1]</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

      


    </div>
</div>


@endsection
