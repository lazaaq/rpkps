@extends('layout.v_template')

@section('title', 'Beban Mata Kuliah')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <!-- <div class="box-header">
                <h3 class="box-title">Data Mata Kuliah</h3>
            </div> -->
            <div class="box-body ">
                <div class="card-body table-responsive p-0" style="height: responsive;">
                    <table id="dataTable" class="table table-striped table-body-fixed text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="30px">No</th>
                                <th>Kode Mata Kuliah</th>
                                <th>Nama Mata Kuliah</th>
                                <th>Bobot(sks)</th>
                                <th>Semester</th>
                                <th>Status Mata Kuliah</th>
                                <th>Mata Kuliah Prasyarat</th>
                                <th>Edit RPKPM</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>V3KI3103</td>
                                <td>Keamanan Sistem Informasi</td>
                                <td>2</td>
                                <td>Genap</td>
                                <td>Wajib</td>
                                <td>-</td>
                                <td><a href="/editrpkpm" class="btn btn-warning btn-sm ">
                                                <span class="fa fa-fw fa-edit"></span></td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection