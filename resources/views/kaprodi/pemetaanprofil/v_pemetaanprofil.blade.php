@extends('layout.v_template')

@section('title', 'Hubungan Profil Lulusan dan Capaian Pembelajaran')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="/editpemetaanprofil">
                    <button type="button" class="btn btn-warning">
                        <i class="fa fa-print" style="margin-right:10px;"></i><span>Cetak Data</span>
                    </button>
                </a>
            </div>
            <div class="box-body ">
                <div class="card-body table-responsive p-0" style="height: responsive;">
                    <table id="dataTable" class="table table-striped table-body-fixed text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="100px">Kode CPL</th>
                                <th width="100px">Analisis Sistem</th>
                                <th width="100px">Perekayasa Perangkat Lunak</th>
                                <th width="100px">Administrator Basis Data</th>
                                <th width="100px">Pengembangan Game dan Multimedia</th>
                                <th width="100px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <tr>
                                <td>S1</td>
                                <td>Sikap</td>
                                <td><input type="checkbox" value="" disabled></td>
                                <td><input type="checkbox" value="" disabled></td>
                                <td><input type="checkbox" value="" disabled></td>
                                <td rowspan="4" style="vertical-align: middle; text-align: center;">
                                    <a href="/editpemetaanprofil">
                                        <button type="button" class="btn btn-xs btn-warning">
                                            <span>Edit</span>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>S2</td>
                                <td>Sikap</td>
                                <td><input type="checkbox" value="" disabled></td>
                                <td><input type="checkbox" value="" disabled></td>
                                <td><input type="checkbox" value="" disabled></td>
                            </tr>
                            <tr>
                                <td>S3</td>
                                <td>Sikap</td>
                                <td><input type="checkbox" value="" disabled></td>
                                <td><input type="checkbox" value="" disabled></td>
                                <td><input type="checkbox" value="" disabled></td>
                            </tr>
                            <tr>
                                <td>S4</td>
                                <td>Sikap</td>
                                <td><input type="checkbox" value="" disabled></td>
                                <td><input type="checkbox" value="" disabled></td>
                                <td><input type="checkbox" value="" disabled></td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection