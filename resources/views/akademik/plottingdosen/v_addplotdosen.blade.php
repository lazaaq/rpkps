@extends('layout.v_template')

@section('title', 'Plotting Dosen DTEDI')

@section('content')
<form action="plotting/insert" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Dosen</h3>
                </div>
                <div class="box-body">
                    <div style="display: flex;">
                        <div class="col-4" style="margin-right: 50px;">
                            <h4>
                                Kode Mata Kuliah : {{ $course->code }}
                            </h4>
                        </div>
                        <div class="col-4" style="margin-right: 50px;">
                            <h4>
                                Mata Kuliah : {{ $course->name }}
                            </h4>
                        </div>
                        <div class="col-4">
                            <h4>
                                Kelas :
                                @foreach ($course->courseClassrooms as $item)
                                {{ $item->classroom->name }},
                                @endforeach
                            </h4>
                        </div>
                    </div>
                    <div class="form-group col-sm-4" style="padding: 0px;margin-top:10px; margin-bottom:0px">
                        <label>
                            <h4>Dosen</h4>
                        </label>
                        <div class="form-group" style="margin-bottom: 0px;">
                            <input name="name" class="form-control" value="{{ old('name') }}">
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="button" class="btn btn-sm" style="background-color: #007BFF; color: white;">
                        <i class="fa fa-plus-square" style="margin-right:10px;"></i><span>Tambah Dosen</span>
                    </button>
                    <button type="button" class="btn btn-success pull-right">
                        <i class="fa fa-print" style="margin-right:10px;"></i><span>Simpan</span>
                    </button>
                </div>

            </div>

        </div>
    </div>
    </div>
</form>
@endsection