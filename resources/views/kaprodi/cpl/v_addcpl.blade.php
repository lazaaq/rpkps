@extends('layout.v_template')

@section('title', 'Capaian Pembelajaran Lulusan')

@section('content')
<form action="{{ route('kaprodi.cpl.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Data</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Kode CPL</label>
                        <input name="code" class="form-control" value="{{ old('code') }}">
                        <div class="text-danger">
                            @error('code')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Komponen</label>
                        <input name="component" class="form-control" value="{{ old('component') }}">
                        <div class="text-danger">
                            @error('component')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label>
                        <input name="value" class="form-control" value="{{ old('value') }}">
                        <div class="text-danger">
                            @error('value')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn" style="background-color: #007BFF; color: white; margin-right: 6px;">Simpan</button>
                        </a>
                        <a href="{{ route('kaprodi.cpl.index') }}" class="btn" style="background-color: white; border-color: #f44336; color: red;">
                            Batal
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection