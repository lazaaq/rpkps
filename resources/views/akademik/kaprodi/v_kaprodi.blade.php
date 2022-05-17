@extends('layout.v_template')

@section('title', 'Ketua Program Studi DTEDI')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="{{ route('akademik.kaprodi.create') }}">
                    <button type="button" class="btn" style="background-color: #007BFF; color: white;">
                        <i class="fa fa-plus-square" style="margin-right:10px;"></i><span>Tambah Kaprodi</span>
                    </button>
                </a>
            </div>
            <div class="box-body ">
                <div class="card-body table-responsive p-0" style="height: responsive;">
                    <table id="dataTable" class="table table-striped table-body-fixed text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kaprodi</th>
                                <th>Nama Dosen</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($headOfStudyProgram as $item)
                            <tr>
                                <td width="50px">{{$loop->index + 1}}</td>
                                <td width="200px">Kaprodi {{ $item->studyProgram->name }} TA {{ $item->year }}</td>
                                <td width="200px">{{ $item->lecturer->name }}</td>
                                <td>
                                    @if ($item->status)
                                    <span type="button" class="label label-success btn-xs">Aktif</span>
                                    @else
                                    <span type="button" class="label label-danger btn-xs">Tidak Aktif</span>
                                    @endif
                                </td>
                                <td class="d-flex">
                                    <a href="{{ route('akademik.kaprodi.edit', $item->id) }}" class="label label-warning btn-xs">Edit</a>
                                    <form action="{{ route('akademik.kaprodi.delete', $item->id) }}" method="post" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="label label-danger btn-xs" style="border: none">Hapus</button>
                                    </form>
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