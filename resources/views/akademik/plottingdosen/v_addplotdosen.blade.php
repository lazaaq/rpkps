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
                    <div class="form-group">
                        <h4>Kode Mata Kuliah : SVPL214208</h4>
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