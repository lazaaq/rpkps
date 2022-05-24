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
                                @foreach ($curriculum as $item)
                                <option>{{ $item->name }}</option>
                                @endforeach
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
                            @foreach ($course as $item)
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td width="50px">{{ $loop->index + 1 }}</td>
                                <td width="200px">{{ $item->studyProgram->abbreviation }}</td>
                                <td width="200px">{{ $item->code }}</td>
                                <td width="200px">{{ $item->name }}</td>
                                <td width="200px">{{ $item->sks }}</td>
                                <td width="200px">{{ $item->is_wajib }}</td>
                                <td width="200px">{{ $item->semester->name }}</td>
                                <td width="200px">@if($item->is_teori) T @else P @endif</td>
                                <td width="200px">
                                    @foreach ($item->courseClassrooms as $item)
                                    {{ $item->classroom->name }}, 
                                    @endforeach
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
