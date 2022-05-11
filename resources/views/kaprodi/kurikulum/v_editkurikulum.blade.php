@extends('layout.v_template')

@section('title', 'Kurikulum Prodi Teknologi Rekayasa Perangkat')

@section('content')
<form action="/kurikulum/insert" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Data</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Nama Kurikulum</label>
                        <input name="nama_kaprodi" class="form-control" value="{{ old('nama_kaprodi') }}">
                        <div class="text-danger">
                            @error('nama_kaprodi')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tahun</label>
                        <input name="prodi" class="form-control" value="{{ old('prodi') }}">
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
                        <!-- <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto_kaprodi" class="form-control"> -->
                    </div>
                    <div class="form-group">
                        <a href="/">
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