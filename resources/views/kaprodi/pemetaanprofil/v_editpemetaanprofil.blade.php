@extends('layout.v_template')

@section('title', 'Hubungan Profil Lulusan dan Capaian Pembelajaran')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="/pemetaanprofil">
                    <button type="button" class="btn btn-success">
                        <i class="fa fa-save" style="margin-right:10px;"></i><span>Simpan</span>
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <tr>
                                <td>S1</td>
                                <td>Sikap</td>
                                <td><input type="checkbox" value=""></td>
                                <td><input type="checkbox" value=""></td>
                                <td><input type="checkbox" value=""></td>
                            </tr>
                            <tr>
                                <td>S2</td>
                                <td>Sikap</td>
                                <td><input type="checkbox" value=""></td>
                                <td><input type="checkbox" value=""></td>
                                <td><input type="checkbox" value=""></td>
                            </tr>
                            <tr>
                                <td>S3</td>
                                <td>Sikap</td>
                                <td><input type="checkbox" value=""></td>
                                <td><input type="checkbox" value=""></td>
                                <td><input type="checkbox" value=""></td>
                            </tr>
                            <tr>
                                <td>S4</td>
                                <td>Sikap</td>
                                <td><input type="checkbox" value=""></td>
                                <td><input type="checkbox" value=""></td>
                                <td><input type="checkbox" value=""></td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection