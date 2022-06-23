@extends('layout.v_template')

@section('title', 'Kurikulum Prodi Teknologi Rekayasa Perangkat')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="{{ route('kaprodi.kurikulum.create') }}">
                    <button type="button" class="btn" style="background-color: #007BFF; color: white;">
                        <i class="fa fa-plus-square" style="margin-right:10px;"></i><span>Tambah Kurikulum</span>
                    </button>
                </a>
            </div>
            <div class="box-body ">
                <div class="card-body table-responsive p-0" style="height: responsive;">
                    <table id="dataTable" class="table table-striped table-body-fixed text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="20px">No</th>
                                <th width="400px">Kurikulum</th>
                                <th width="200px">Tahun</th>
                                <th width="100px">Status</th>
                                <th width="100px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($curriculums as $curriculum)
                            <tr>
                                <td>{{$loop->index + 1}}</td>
                                <td>{{ $curriculum->name }}</td>
                                <td>{{ $curriculum->year }}</td>
                                <td>
                                    @if($curriculum->status)
                                    <span type="button" class="label label-success btn-xs">Aktif</span>
                                    @else 
                                    <span type="button" class="label label-danger btn-xs">Tidak Aktif</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('kaprodi.kurikulum.edit', $curriculum->id) }}">
                                        <button type="button" class="btn btn-xs btn-warning">
                                            <span>Edit</span>
                                        </button>
                                    </a>
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

@section('js')
    @include('layout.js_datatable_pagination')
@endsection