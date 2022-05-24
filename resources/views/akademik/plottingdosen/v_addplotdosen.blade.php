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
                    <div class="d-flex">
                        <div class="col-4">
                            <h4>Kode Mata Kuliah : {{ $course->code }}</h4>
                        </div>
                        <div class="col-4">
                            <h4>Mata Kuliah : {{ $course->name }}</h4>
                        </div>
                        <div class="col-4">
                            <h4>Kelas : 
                                @foreach ($course->courseClassrooms as $item)
                                    {{ $item->classroom->name }},
                                @endforeach
                            </h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="/dosen">
                            <button type="button" class="btn" style="background-color: #007BFF; color: white; margin-right: 6px;">Simpan</button>
                        </a>
                        <a href="{{ route('akademik.plotting-dosen.index', $course->semester->id) }}">
                            <button type="button" class="btn" style="background-color: white; border-color: #f44336; color: red;">Batal</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection