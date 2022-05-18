@extends('layout.v_template')

@section('title', 'Ketua Program Studi DTEDI')

@section('content')
<form action="/kaprodi/insert" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Data</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Tahun</label>
                        <input name="tahun" class="form-control" placeholder="2021/2022" value="{{ old('tahun') }}">
                        <div class="text-danger">
                            @error('nama_kaprodi')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Prodi</label>
                        <input name="prodi" class="form-control" value="{{ old('prodi') }}">
                        <div class="text-danger">
                            @error('prodi')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input name="nama" class="form-control" value="{{ old('nama') }}">
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