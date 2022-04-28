@extends('layout.v_template')

@section('title', 'Laporan Perkuliahan Mingguan')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header with-border">
                <div>
                    <h4><b>SVPL214402 Proyek Aplikasi Dasar 2</b></h4>
                    <label class="control-label">Program Studi :</label><span> Teknologi Rekayasa Perangkat Lunak </span>
                </div>
            </div>
            <div class="box-body">
                <br>
                <div> 
                    <h5 align="center"><b> Laporan Mingguan Pelaksanaan Perkuliahan <br> Semester Genap 2021/2022</b></h5>
                    <br>
                    <div>
                        <a href="">
                            <button type="button" class="btn" style="background-color: #007BFF; color: white;">
                                <i class="fa fa-plus-square" style="margin-right:10px;"></i><span>Buat Laporan</span>
                            </button>
                        </a>
                        <a href="">
                            <button type="button" class="btn btn-warning" style="float: right;">
                                <i class="fa fa-print" style="margin-right:10px;"></i><span>Cetak Laporan</span>
                            </button>
                        </a>
                    </div>
                    <br>
                <div class="card-body table-responsive p-0" style="height: responsive;">
                    <table id="dataTable" class="table table-striped table-body-fixed text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Pertemuan Ke</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Materi Pembelajaran</th>
                                <th>Pelaksanaan Pembelajaran</th>
                                <th>Hambatan</th>
                                <th>Upaya</th>
                                <th>Penyesuaian</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="50px">1</td>
                                <td width="200px">Jumat, 11 Februari 2022 </td>
                                <td width="200px">12:15 - 15:55 WIB</td>
                                <td width="200px"></td>
                                <td width="200px"></td>
                                <td width="200px"></td>
                                <td width="200px"></td>
                                <td width="200px"></td> 
                                <td width="200px">
                                    <a href="" class="btn btn-warning btn-sm ">
                                                <span class="fa fa-fw fa-edit"></span>
                                    </a>
                                    <a href="" class="btn btn-danger btn-sm ">
                                                <span class="fa fa-fw fa-trash-o"></span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
