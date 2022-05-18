@extends('layout.v_template')

@section('title', 'Plotting Dosen DTEDI')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Semester Genap 2021/2022</h3>
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
                                <td width="200px">SVPL214201</td>
                                <td width="200px">Bahasa Inggris 2</td>
                                <td width="200px">PL2AB</td>
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
                                <td>SVPL214202</td>
                                <td>Aljabar Vektor dan Matriks</td>
                                <td>PL2AB</td>
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
                                <td>SVPL214203</td>
                                <td>Analisis Algoritma dan Struktur Data</td>
                                <td>PL2AB</td>
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
                                <td>SVPL214204</td>
                                <td>Praktikum Struktur Data</td>
                                <td>PL2AA, PL2BB</td>
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
                                <td>SVPL214205</td>
                                <td>Basis Data</td>
                                <td>PL2AB</td>
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
                                <td>SVPL21206</td>
                                <td>Praktikum Basis Data</td>
                                <td>PL2AA, PL2BB</td>
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
                                <td>SVPL214207</td>
                                <td>Praktikum Pemrograman Web 1</td>
                                <td>PL2AA, PL2BB</td>
                                <td>2</td>
                                <td>Dinar Nugroho Pratomo, S.Kom., M.IM., M.Cs.</td>
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
                                <td>SVPL214208</td>
                                <td>Pemrograman Berorientasi Objek</td>
                                <td>PL2AB</td>
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
                                <td>SVPL214209</td>
                                <td>Praktikum Pemrograman Berorientasi Objek</td>
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