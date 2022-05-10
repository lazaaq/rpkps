@extends('layout.v_template')

@section('title', 'Kurikulum Prodi Teknologi Rekayasa Perangkat')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="/kurikulum/add">
                    <button type="button" class="btn" style="background-color: #007BFF; color: white;">
                        <i class="fa fa-plus-square" style="margin-right:10px;"></i><span>Tambah Kurikulum</span>
                    </button>
                </a>
            </div>
            <div class="box-body ">
                <div class="card-body table-responsive p-0" style="height: responsive;">
                    <table id="dataTable" class="table table-striped table-body-fixed text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="20px">No</th>
                                <th width="400px">Kurikulum</th>
                                <th width="200px">Tahun</th>
                                <th width="100px">Status</th>
                                <th width="100px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Kurikulum MBKM 2021</td>
                                <td>2021</td>
                                <td><span type="button" class="label label-success btn-xs">Aktif</span></td>
                                <td><span type="button" class="label label-warning btn-xs">Edit</span></td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Kurikulum 2021</td>
                                <td>2021</td>
                                <td><span type="button" class="label label-danger btn-xs">Tidak</span></td>
                                <td><span type="button" class="label label-warning btn-xs">Edit</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection