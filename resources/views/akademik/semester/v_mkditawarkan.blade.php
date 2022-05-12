@extends('layout.v_template')

@section('title', 'Semester Genap 2021/2022')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Mata Kuliah Ditawarkan</h3>
                <br></br>
                <div class="row form-group">
                    <label class="col-sm-1 control-label" style="text-align:left;">Kurikulum</label>
                        <div class="col-sm-6">
                            <select class="form-control select2-hidden-accessible" name="sesiId" id="sesiId" tabindex="-1" aria-hidden="true">
                                <option>Kurikulum MBKM 2021</option>
                                <option>Kurikulum 2021</option>
                                <option>Kurikulum 2020</option>
                            </select>
                        </div>      
                </div>
                <a href="/">
                    <button type="button" class="btn btn-success" style="float: right;">
                        <i class="fa fa-print" style="margin-right:10px;"></i><span>Simpan</span>
                    </button>
                </a>
            </div>
            <div class="box-body ">
                <div class="card-body table-responsive p-0" style="height: responsive;">
                    <table id="dataTable" class="table table-striped table-body-fixed text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Aksi</th>
                                <th>No</th>
                                <th>Program Studi</th>
                                <th>Kode Mata Kuliah</th>
                                <th>Mata Kuliah</th>
                                <th>SKS</th>
                                <th>Jenis</th>
                                <th>Semester</th>
                                <th>P/T</th>
                                <th>Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td width="50px">{{$no++}}</td>
                                <td width="200px">TRPL</td>
                                <td width="200px">SVPL214101</td>
                                <td width="200px">Pengantar Teknologi Informasi</td>
                                <td width="200px">2</td>
                                <td width="200px">Wajib</td>
                                <td width="200px">1</td>
                                <td width="200px">T</td>
                                <td width="200px">PL1AB</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td>{{$no++}}</td>
                                <td>TRPL</td>
                                <td>SVPL214204</td>
                                <td>Praktikum Struktur Data</td>
                                <td>2</td>
                                <td>Wajib</td>
                                <td>2</td>
                                <td>P</td>
                                <td>PL2AA, PL2BB</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
