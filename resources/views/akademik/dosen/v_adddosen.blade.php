@extends('layout.v_template')

@section('title', 'Dosen')

@section('content')
<form action="{{ route('akademik.dosen.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Data</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>NIP/NIKA</label>
                        <input name="nip" class="form-control" value="{{ old('nip') }}">
                        <div class="text-danger">
                            @error('nip')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input name="name" class="form-control" value="{{ old('nama') }}">
                        <div class="text-danger">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" class="form-control" value="{{ old('email') }}">
                        <div class="text-danger">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="photo" class="form-control" value="{{ old('foto') }}">
                        <div class="text-danger">
                            @error('photo')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn" style="background-color: #007BFF; color: white; margin-right: 6px;">Simpan</button>
                        <a href="{{ route('akademik.dosen.index') }}">
                            <button type="button" class="btn" style="background-color: white; border-color: #f44336; color: red;">Batal</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection