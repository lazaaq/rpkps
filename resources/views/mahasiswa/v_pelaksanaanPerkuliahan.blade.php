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
                                @foreach ($semester as $item)
                                    <option>{{ $item->name }}</option>
                                @endforeach
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
                                <th>Kode</th>
                                <th>Mata Kuliah</th>
                                <th>SKS</th>
                                <th>Kelas</th>
                                <th>Dosen</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($course as $item)
                            <tr>
                                <td width="50px">{{$loop->index + 1}}</td>
                                <td width="200px">{{ $item->code }}</td>
                                <td width="200px">{{ $item->name }}</td>
                                <td width="200px">{{ $item->sks }}</td>
                                <td width="200px">
                                    @foreach ($item->courseClassrooms as $courseClassroom)
                                        {{ $courseClassroom->classroom->name }},
                                    @endforeach
                                </td>
                                <td width="200px">
                                    @foreach ($item->lecturerPlottings as $lecturerPlotting)
                                        {{ $lecturerPlotting->lecturer->name }} <br>
                                    @endforeach
                                <td width="200px">
                                    @foreach ($item->lecturerPlottings as $lecturerPlotting)
                                    <a href="{{ route('mahasiswa.perkuliahan.show', [$item->id, $lecturerPlotting->id]) }}" class="btn btn-primary btn-sm ">
                                        <span class="icon fa fa-arrow-right"></span>
                                    </a>
                                    <br>
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
