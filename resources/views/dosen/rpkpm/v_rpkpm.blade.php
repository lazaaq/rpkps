@extends('layout.v_template')

@section('title', 'RPKPM')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <!-- <div class="box-header">
                <h3 class="box-title">Data Mata Kuliah</h3>
            </div> -->
            <div class="box-body ">
                <div class="card-body table-responsive p-0" style="height: responsive;">
                    <table id="dataTable" class="table table-striped table-body-fixed text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="30px">No</th>
                                <th>Kode Mata Kuliah</th>
                                <th>Nama Mata Kuliah</th>
                                <th>Bobot(sks)</th>
                                <th>Semester</th>
                                <th>Status Mata Kuliah</th>
                                <th>Mata Kuliah Prasyarat</th>
                                <th>Edit RPKPS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rpkpms as $rpkpm)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $rpkpm->rpkps->course->code }}</td>
                                <td>{{ $rpkpm->rpkps->course->name }}</td>
                                <td>{{ $rpkpm->rpkps->course->sks }}</td>
                                <td>@if($rpkpm->rpkps->semester->is_genap) Genap @else Ganjil @endif</td>
                                <td>@if($rpkpm->rpkps->course->is_wajib) Wajib @else Optional @endif</td>
                                <td>@if($rpkpm->rpkps->course->prerequisite) {{ $courses->find($rpkpm->rpkps->course->prerequisite)->name }}@else - @endif</td>
                                <td><a href="{{ route('dosen.rpkpm.show', $rpkpm->id) }}" class="label label-warning btn-xs">Edit</a></td>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection