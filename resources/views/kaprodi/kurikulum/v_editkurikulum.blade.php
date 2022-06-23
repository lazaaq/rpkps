@extends('layout.v_template')

@section('title', 'Kurikulum Prodi Teknologi Rekayasa Perangkat')

@section('content')
<form action="{{ route('kaprodi.kurikulum.update', $curriculum->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Data</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Nama Kurikulum</label>
                        <input name="name" class="form-control" value="{{ $curriculum->name }}">
                        <div class="text-danger">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tahun</label>
                        <input name="year" class="form-control" value="{{ $curriculum->year }}" type="number" min="0">
                        <div class="text-danger">
                            @error('year')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status" required>
                            <option value="1" @if($curriculum->status) selected @endif>Aktif</option>
                            <option value="0" @if(!$curriculum->status) selected @endif>Tidak Aktif</option>
                            <div class="text-danger">
                                @error('status')
                                {{ $message }}
                                @enderror
                            </div>
                        </select>
                        <!-- <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto_kaprodi" class="form-control"> -->
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn" style="background-color: #007BFF; color: white; margin-right: 6px;">Simpan</button>
                        <a href="{{ route('kaprodi.kurikulum.index') }}" class="btn" style="background-color: white; border-color: #f44336; color: red;">
                            Batal
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection