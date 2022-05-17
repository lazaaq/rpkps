@extends('layout.v_template')

@section('title', 'Pelaksanaan Perkuliahan Mingguan')

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
                <div class="card-body table-responsive p-0" style="height: responsive;">
                    <table id="dataTable" class="table table-striped table-body-fixed text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Pertemuan Ke</th>
                                <th>Tanggal</th>
                                <th>Mulai</th>
                                <th>Selesai</th>
                                <th>Ruang</th>
                                <th>Hasil</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="50px">1</td>
                                <td width="200px">Jumat, 11 Februari 2022 </td>
                                <td width="200px">12:15</td>
                                <td width="200px">15:55</td>
                                <td width="200px">D.TEDI DARING 10</td>
                                <td width="200px">
                                    <a href="" class="btn btn-success btn-xs">Lihat</a>
                                </td> 
                                <td width="200px">
                                    <a href="/formInput" class="btn btn-primary btn-sm">
                                                <span class="icon fa fa-arrow-right"></span>
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
