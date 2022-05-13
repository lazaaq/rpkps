@extends('layout.v_template')

@section('title', 'Capaian Pembelajaran Lulusan')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="/addcpl">
                    <button type="button" class="btn" style="background-color: #007BFF; color: white;">
                        <i class="fa fa-plus-square" style="margin-right:10px;"></i><span>Tambah CPL</span>
                    </button>
                </a>
            </div>
            <div class="box-body ">
                <div class="card-body table-responsive p-0" style="height: responsive;">
                    <table id="dataTable" class="table table-striped table-body-fixed text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="50px">Kode CPL</th>
                                <th width="50px">Komponen</th>
                                <th width="400px">Nilai</th>
                                <th width="100px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>S1</td>
                                <td>Sikap</td>
                                <td>Bertakwa kepada Tuhan Yang Maha Esa dan mampu menunjukkan sikap religious;</td>
                                <td>
                                    <a href="/editcpl">
                                        <button type="button" class="btn btn-xs btn-warning">
                                            <span>Edit</span>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>S2</td>
                                <td>Sikap</td>
                                <td>Menjunjung tinggi nilai kemanusiaan dalam menjalankan tugas berdasarkan
                                    agama, moral, dan etika;</td>
                                <td>
                                    <a href="/editcpl">
                                        <button type="button" class="btn btn-xs btn-warning">
                                            <span>Edit</span>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>S3</td>
                                <td>Sikap</td>
                                <td>Berkontribusi dalam peningkatan mutu kehidupan bermasyarakat, berbangsa,
                                    bernegara, dan kemajuan peradaban berdasarkan Pancasila;</td>
                                <td>
                                    <a href="/editcpl">
                                        <button type="button" class="btn btn-xs btn-warning">
                                            <span>Edit</span>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection