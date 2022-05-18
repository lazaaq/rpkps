@extends('layout.v_template')

@section('title', 'Semester')

@section('content')
<form action="semester/insert" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Data</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Semester</label>
                        <input name="nip" class="form-control" value="{{ old('nip') }}">
                        <div class="text-danger">
                            @error('nama_kaprodi')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Mulai</label>
                        <input name="nama" class="form-control" value="{{ old('nama') }}">
                        <div class="text-danger">
                            @error('prodi')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Akhir</label>
                        <input name="email" class="form-control" value="{{ old('email') }}">
                        <div class="text-danger">
                            @error('prodi')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status" required>
                            <option selected="selected">--Pilih Status--</option>
                            <option value="">Aktif</option>
                            <option value="">Tidak</option>
                            <div class="text-danger">
                                @error('prodi')
                                {{ $message }}
                                @enderror
                            </div>
                        </select>
                    </div>
                    <div class="form-group">
                        <a href="/dosen">
                            <button type="button" class="btn" style="background-color: #007BFF; color: white; margin-right: 6px;">Simpan</button>
                        </a>
                        <a href="">
                            <button type="button" class="btn" style="background-color: white; border-color: #f44336; color: red;">Batal</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection