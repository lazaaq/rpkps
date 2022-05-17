@extends('layout.v_template')

@section('title', 'Laporan Perkuliahan Mingguan')

@section('content')
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Tambah Data Laporan</h3>
    </div>

    <div class="box-body">
        <div class="row">
            <div class="col-xs-12">
            <div class="form-group">
                <label for="pertemuan">Pertemuan Ke</label>
                <input type="text" class="form-control" id="pertemuan" placeholder="Pertemuan ke">
            </div>
            <div class="form-group">
                <label for="tanggal">Hari, Tanggal</label>
                <input type="text" class="form-control" id="tanggal" placeholder="Hari, tanggal">
            </div>
            <div class="form-group">
                <label for="waktu">Waktu</label>
                <input type="text" class="form-control" id="waktu" placeholder="Waktu">
            </div>
            <div class="form-group">
                <label>Materi Pembelajaran</label>
                <textarea class="form-control"  placeholder="Materi pembelajaran"></textarea>
            </div>
            <div class="form-group">
                <label>Pelaksanaan Pembelajaran</label>
                <textarea class="form-control"  placeholder="Pelaksanaan pembelajaran"></textarea>
            </div>
            <div class="form-group">
                <label>Upaya Penanganan Hambatan</label>
                <textarea class="form-control"  placeholder="Upaya penanganan hambatan"></textarea>
            </div>
            <div class="form-group">
                <label>Penyesuaian</label>
                <textarea class="form-control"  placeholder="Penyesuaian"></textarea>
            </div>
            <div class="form-group">
                <a href="">
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
@endsection
