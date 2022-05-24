@extends('layout.v_template')

@section('title', 'Semester')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="/addsemester">
                    <button type="button" class="btn" style="background-color: #007BFF; color: white;">
                        <i class="fa fa-plus-square" style="margin-right:10px;"></i><span>Tambah Semester</span>
                    </button>
                </a>
            </div>
            <div class="box-body ">
                <div class="card-body table-responsive p-0" style="height: responsive;">
                    <table id="dataTable" class="table table-striped table-body-fixed text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Semester</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Akhir</th>
                                <th>Aktif</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($semester as $item)
                            <tr>
                                <td width="50px">{{$loop->index + 1}}</td>
                                <td width="200px">{{ $item->name }}</td>
                                <td width="200px">{{ $item->start_date }}</td>
                                <td width="200px">{{ $item->end_date }}</td>
                                <td>
                                    @if($item->active)
                                    <span type="button" class="label label-success btn-xs">Aktif</span>
                                    @else 
                                    <span type="button" class="label label-danger btn-xs">Tidak Aktif</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="box-header">
                                        <a href="{{ route('akademik.semester.mata-kuliah-ditawarkan', $item->id) }}">
                                            <button type="button" class="btn btn-xs" style="background-color: #007BFF; color: white;">
                                                <i class="fa fa-arrow-right">></i>
                                            </button>
                                        </a>
                                    </div>
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