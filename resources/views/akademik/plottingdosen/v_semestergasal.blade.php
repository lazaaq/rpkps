@extends('layout.v_template')

@section('title', 'Plotting Dosen DTEDI')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Semester Gasal 2021/2022</h3>
            </div>
            <div class="box-body ">
                <div class="card-body table-responsive p-0" style="height: responsive;">
                    <table id="dataTable" class="table table-striped table-body-fixed text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Mata Kuliah</th>
                                <th>Mata Kuliah</th>
                                <th>Kelas</th>
                                <th>SKS</th>
                                <th>Dosen Pengampu</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <tr>
                                <td width="50px">{{$no++}}</td>
                                <td width="200px">SVPL214101</td>
                                <td width="200px">Pengantar Teknologi Informasi</td>
                                <td width="200px">PL1AB</td>
                                <td width="200px">2</td>
                                <td width="200px"></td>
                                <td>
                                    <a href="/addplotdosen">
                                        <button type="button" class="label label-primary btn-xs">
                                            <span>Tambah Dosen</span>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>SVPL214102</td>
                                <td>Matematika Teknik</td>
                                <td>PL1AB</td>
                                <td>2</td>
                                <td></td>
                                <td>
                                    <a href="/addplotdosen">
                                        <button type="button" class="label label-primary btn-xs">
                                            <span>Tambah Dosen</span>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>SVPL214103</td>
                                <td>Matematika Diskrit</td>
                                <td>PL1AB</td>
                                <td>2</td>
                                <td></td>
                                <td>
                                    <a href="/addplotdosen">
                                        <button type="button" class="label label-primary btn-xs">
                                            <span>Tambah Dosen</span>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>SVPL214104</td>
                                <td>Bahasa Inggris 1</td>
                                <td>PL1AB</td>
                                <td>2</td>
                                <td></td>
                                <td>
                                    <a href="/addplotdosen">
                                        <button type="button" class="label label-primary btn-xs">
                                            <span>Tambah Dosen</span>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>SVPL214105</td>
                                <td>Praktikum Teknologi Informasi dan Instalasi Komputer</td>
                                <td>PL1AA, PL1BB</td>
                                <td>2</td>
                                <td></td>
                                <td>
                                    <a href="/addplotdosen">
                                        <button type="button" class="label label-primary btn-xs">
                                            <span>Tambah Dosen</span>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>SVPL214106</td>
                                <td>Praktikum Pemrograman Komputer</td>
                                <td>PL1AA, PL1BB</td>
                                <td>2</td>
                                <td>Muhammad Fakhrurrifqi, S.Kom., M.Cs.</td>
                                <td>
                                    <a href="/addplotdosen">
                                        <button type="button" class="label label-primary btn-xs">
                                            <span>Tambah Dosen</span>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>SVPL214107</td>
                                <td>Algoritma dan Pemrograman</td>
                                <td>PL1AB</td>
                                <td>2</td>
                                <td>Muhammad Fakhrurrifqi, S.Kom., M.Cs.</td>
                                <td>
                                    <a href="/addplotdosen">
                                        <button type="button" class="label label-primary btn-xs">
                                            <span>Tambah Dosen</span>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>SVPL214108</td>
                                <td>Keselamatan dan Kesehatan Kerja</td>
                                <td>PL1AB</td>
                                <td>2</td>
                                <td></td>
                                <td>
                                    <a href="/addplotdosen">
                                        <button type="button" class="label label-primary btn-xs">
                                            <span>Tambah Dosen</span>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>SVPL214109</td>
                                <td>Praktikum Desain Elementer</td>
                                <td>PL1AA, PL1BB</td>
                                <td>2</td>
                                <td>Yusron Fuadi, S,Sn., M.Sn.</td>
                                <td>
                                    <a href="/addplotdosen">
                                        <button type="button" class="label label-primary btn-xs">
                                            <span>Tambah Dosen</span>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="4" style="vertical-align: middle; text-align: center;">Jumlah</th>
                                <th>18</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection