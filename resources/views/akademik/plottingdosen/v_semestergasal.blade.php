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
                            @foreach ($course as $item)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $item->code }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    @foreach ($item->courseClassrooms as $courseClassroom)
                                        {{ $courseClassroom->classroom->name }}, 
                                    @endforeach
                                </td>
                                <td>{{ $item->sks }}</td>
                                <td>
                                    @foreach ($item->lecturerPlottings as $lecturerPlotting)
                                        {{ $lecturerPlotting->lecturer->name }},
                                    @endforeach
                                </td>
                                <td><a href="" class="label label-primary btn-xs">Tambah Dosen</a></td>
                            </tr>
                            @endforeach
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