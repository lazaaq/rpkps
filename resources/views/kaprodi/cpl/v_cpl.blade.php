@extends('layout.v_template')

@section('title', 'Capaian Pembelajaran Lulusan')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="{{ route('kaprodi.cpl.create') }}">
                    <button type="button" class="btn" style="background-color: #007BFF; color: white;">
                        <i class="fa fa-plus-square" style="margin-right:10px;"></i><span>Tambah CPL</span>
                    </button>
                </a>
            </div>
            <div class="box-body ">
                <div class="card-body table-responsive p-0" style="height: responsive;">
                    <table id="dataTable" class="table table-striped table-body-fixed text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="50px">Kode CPL</th>
                                <th width="50px">Komponen</th>
                                <th width="400px">Nilai</th>
                                <th width="100px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($learningGoal as $item)
                            <tr>
                                <td>{{ $item->code }}</td>
                                <td>{{ $item->component }}</td>
                                <td>{{ $item->value }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('kaprodi.cpl.edit', $item->id) }}" class="btn btn-xs btn-warning">
                                        Edit
                                    </a>
                                    <form action="{{ route('kaprodi.cpl.delete', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-xs btn-danger">
                                            Hapus
                                        </button>
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