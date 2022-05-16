@extends('layout.v_template')

@section('title', 'Capaian Pembelajaran Lulusan')

@section('content')
<form action="/kurikulum/insert" method="POST" enctype="multipart/form-data">
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
                        <input name="kode_cpl" class="form-control" value="{{ old('kode_cpl') }}">
                        <div class="text-danger">
                            @error('nama_kaprodi')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tahun</label>
                        <input name="komponen" class="form-control" value="{{ old('komponen') }}">
                        <div class="text-danger">
                            @error('prodi')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label>
                        <input name="nilai" class="form-control" value="{{ old('nilai') }}">
                        <div class="text-danger">
                            @error('prodi')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="/cpl">
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