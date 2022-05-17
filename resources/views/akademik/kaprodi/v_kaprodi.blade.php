@extends('layout.v_template')

@section('title', 'Ketua Program Studi DTEDI')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="/addkaprodi">
                    <button type="button" class="btn" style="background-color: #007BFF; color: white;">
                        <i class="fa fa-plus-square" style="margin-right:10px;"></i><span>Tambah Kaprodi</span>
                    </button>
                </a>
            </div>
            <div class="box-body ">
                <div class="card-body table-responsive p-0" style="height: responsive;">
                    <table id="dataTable" class="table table-striped table-body-fixed text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kaprodi</th>
                                <th>Nama Dosen</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <tr>
                                <td width="50px">{{$no++}}</td>
                                <td width="200px">Kaprodi Teknologi Rekayasa Instrumentasi Kontrol TA 2021/2022</td>
                                <td width="200px">Hidayat Nur Isnianto, S.T., M.Eng.</td>
                                <td><span type="button" class="label label-success btn-xs">Aktif</span></td>
                                <td>
                                    <a href="/editkaprodi">
                                        <button type="button" class="btn btn-xs btn-warning">
                                            <span>Edit</span>
                                        </button>
                                    </a>
                                    <span type="button" class="label label-danger btn-xs">Hapus</span>
                                </td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Kaprodi Teknologi Rekayasa Perangkat Lunak TA 2021/2022</td>
                                <td>Muhammad Fakhrurrifqi, S.Kom., M.Cs.</td>
                                <td><span type="button" class="label label-success btn-xs">Aktif</span></td>
                                <td>
                                    <a href="/editkaprodi">
                                        <button type="button" class="btn btn-xs btn-warning">
                                            <span>Edit</span>
                                        </button>
                                    </a>
                                    <span type="button" class="label label-danger btn-xs">Hapus</span>
                                </td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Kaprodi Teknologi Rekayasa Internet TA 2021/2022</td>
                                <td>Dr. Ronald Adrian, S.T., M.Eng.</td>
                                <td><span type="button" class="label label-success btn-xs">Aktif</span></td>
                                <td>
                                    <a href="/editkaprodi">
                                        <button type="button" class="btn btn-xs btn-warning">
                                            <span>Edit</span>
                                        </button>
                                    </a>
                                    <span type="button" class="label label-danger btn-xs">Hapus</span>
                                </td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Kaprodi Teknologi Rekayasa Elektro TA 2021/2022</td>
                                <td>Ma’un Budiyanto, S.T., M.T.</td>
                                <td><span type="button" class="label label-success btn-xs">Aktif</span></td>
                                <td>
                                    <a href="/editdosen">
                                        <button type="button" class="btn btn-xs btn-warning">
                                            <span>Edit</span>
                                        </button>
                                    </a>
                                    <span type="button" class="label label-danger btn-xs">Hapus</span>
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