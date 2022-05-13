@extends('layout.v_template')

@section('title', 'Pelaksanaan Perkuliahan')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header with-border">
                <div class="row form-group">
                    <label class="col-sm-1 control-label" style="text-align:left;">Semester</label>
                        <div class="col-sm-6">
                            <select class="form-control select2-hidden-accessible" name="sesiId" id="sesiId" tabindex="-1" aria-hidden="true">
                                <option>Semester Genap 2021/2022</option>
                                <option>Semester Gasal 2021/2022</option>
                                <option>Semester Genap 2020/2021</option>                                                
                                <option>Semester Gasal 2020/2021</option>
                            </select>
                        </div>      
                </div>
            </div>
            <div class="box-body">
                <div class="card-body table-responsive p-0" style="height: responsive;">
                    <table id="dataTable" class="table table-striped table-body-fixed text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Program Studi</th>
                                <th>Kode</th>
                                <th>Mata Kuliah</th>
                                <th>SKS</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <tr>
                                <td width="50px">{{$no++}}</td>
                                <td width="200px">TPRL</td>
                                <td width="200px">SVPL214402</td>
                                <td width="200px">Proyek Aplikasi Dasar 2</td>
                                <td width="200px">2</td>
                                <td width="200px">PL3AA</td>
                                <td width="200px">
                                    <a href="/pkuliahmingguan" class="btn btn-primary btn-sm ">
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
