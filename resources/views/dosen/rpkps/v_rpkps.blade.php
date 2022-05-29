@extends('layout.v_template')

@section('title', 'Beban Mata Kuliah')

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
                            @foreach ($rpkps as $rpkps_item)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $rpkps_item->course->code }}</td>
                                <td>{{ $rpkps_item->course->name }}</td>
                                <td>{{ $rpkps_item->course->sks }}</td>
                                <td>@if($rpkps_item->semester->is_genap) Genap @else Ganjil @endif</td>
                                <td>@if($rpkps_item->course->is_wajib) Wajib @else Optional @endif</td>
                                <td>@if($rpkps_item->course->prerequisite) {{ $courses->find($rpkps_item->course->prerequisite)->name }}@else - @endif</td>
                                <td><a href="{{ route('dosen.rpkps.show', $rpkps_item->id) }}" class="label label-warning btn-xs">Edit</a></td>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection