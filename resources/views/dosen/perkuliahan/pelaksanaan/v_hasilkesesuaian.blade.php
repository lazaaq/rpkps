@extends('layout.v_template')

@section('title', 'Pelaksanaan Perkuliahan Pertemuan 1')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header with-border">
                <div>
                    <h4><b>SVPL214402 Proyek Aplikasi Dasar 2</b></h4>
                    <label class="control-label">Tanggal & Waktu :</label><span> Jumat, 11 Februari 2022 pukul 12:15 - 15:55 </span>
                </div>
            </div>
            <div class="box-body">
                <br>
                <div> 
                    <h5 align="center"><b>Hasil Pelaksanaan Perkuliahan Pertemuan 1</b></h5>
                    <div>
                        <a href="">
                            <button type="button" class="btn btn-warning" style="float: left;">
                                <i class="fa fa-print" style="margin-right:10px;"></i><span>Cetak Laporan</span>
                            </button>
                        </a>
                    </div>
                    <br>
                    <h2 align="center"><b>20 Jawaban</b></h2>
                </div> 
            </div>
        </div>

        <div class="box">
            <div class="box-header">
            <p>1. Apakah materi pembelajaran yang diberikan sesuai dengan RKPM?</p>
            </div>
            <div class="box-body">
                    <div id="chart_materi"></div>               
            </div>
        </div>
        
        <div class="box">
            <div class="box-header">
            <p>2. Apakah waktu pembelajaran digunakan dengan baik?</p>
            </div>
            <div class="box-body">
                    <div id="chart_waktu"></div>               
            </div>
        </div>
        
        <div class="box">
            <div class="box-header">
            <p>3. Apakah bentuk dan metode pembelajaran yang digunakan sesuai dengan RKPM?</p>
            </div>
            <div class="box-body">
                    <div id="chart_metode"></div>               
            </div>
        </div>

        <div class="box">
            <div class="box-header">
            <p>4. Apakah pengalaman belajar yang didapat mahasiswa sesuai dengan RKPM?</p>
            </div>
            <div class="box-body">
                    <div id="chart_pengalaman"></div>               
            </div>
        </div>

        <div class="box">
            <div class="box-header">
            <p>5. Apakah media pembelajaran yang digunakan sesuai dengan RKPM?</p>
            </div>
            <div class="box-body">
                    <div id="chart_media"></div>               
            </div>
        </div>

        <div class="box">
            <div class="box-header">
            <p>Tuliskan kesan dan saran Anda untuk mata kuliah ini</p>
            </div>
            <div class="box-body">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. When an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. When an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>             
            </div>
        </div>
        
    </div>
</div>
@endsection
