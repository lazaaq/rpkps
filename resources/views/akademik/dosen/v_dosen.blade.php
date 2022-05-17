@extends('layout.v_template')

@section('title', 'Dosen DTEDI')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="/adddosen">
                    <button type="button" class="btn" style="background-color: #007BFF; color: white;">
                        <i class="fa fa-plus-square" style="margin-right:10px;"></i><span>Tambah Dosen</span>
                    </button>
                </a>
            </div>
            <div class="box-body ">
                <div class="card-body table-responsive p-0" style="height: responsive;">
                    <table id="dataTable" class="table table-striped table-body-fixed text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Nama Dosen</th>
                                <th>NIP/NIKA</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <tr>
                                <td width="50px">{{$no++}}</td>
                                <td width="200px"></td>
                                <td width="200px">Muhammad Fakhrurrifqi, S.Kom., M.Cs.</td>
                                <td width="200px">111198611201202101</td>
                                <td width="200px">rifqi_ilkom@mail.ugm.ac.id</td>
                                <td>
                                    <a href="/editdosen">
                                        <button type="button" class="btn btn-xs btn-warning">
                                            <span>Edit</span>
                                        </button>
                                    </a>
                                    <span type="button" class="label label-danger btn-xs">Hapus</span>
                                </td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td></td>
                                <td>Firma Syahrian, S.Kom., M.Cs.</td>
                                <td>198703222019031011</td>
                                <td>fsyahrian@mail.ugm.ac.id</td>
                                <td>
                                    <a href="/editdosen">
                                        <button type="button" class="btn btn-xs btn-warning">
                                            <span>Edit</span>
                                        </button>
                                    </a>
                                    <span type="button" class="label label-danger btn-xs">Hapus</span>
                                </td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td></td>
                                <td>Dinar Nugroho Pratomo, S.Kom., M.IM., M.Cs.</td>
                                <td>111199407202002101</td>
                                <td>dinar.nugroho.p@mail.ugm.ac.id</td>
                                <td>
                                    <a href="/editdosen">
                                        <button type="button" class="btn btn-xs btn-warning">
                                            <span>Edit</span>
                                        </button>
                                    </a>
                                    <span type="button" class="label label-danger btn-xs">Hapus</span>
                                </td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td></td>
                                <td>Divi Galih Prasetyo Putri, S.Kom., M.Kom.</td>
                                <td>111199209201605201</td>
                                <td>divi.galih@mail.ugm.ac.id</td>
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