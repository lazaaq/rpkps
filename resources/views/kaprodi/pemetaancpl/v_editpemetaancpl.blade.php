@extends('layout.v_template')

@section('title', 'Hubungan CPL dan Mata Kuliah ')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="/pemetaancpl">
                    <button type="button" class="btn btn-success">
                        <i class="fa fa-save" style="margin-right:10px;"></i><span>Simpan</span>
                    </button>
                </a>
            </div>
            <div class="box-body ">
                <div class="card-body table-responsive p-0">
                    <table class="table table-striped text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Mata Kuliah</th>
                                <th colspan="10" style="text-align: center;">Sikap</th>
                                <th colspan="3" style="text-align: center;">PP</th>
                                <th colspan="3" style="text-align: center;">KK</th>
                                <th colspan="3" style="text-align: center;">Ketrampilan Umum</th>
                                <th rowspan="2">Aksi</th>
                            </tr>
                            <tr>
                                <th>S1</th>
                                <th>S2</th>
                                <th>S3</th>
                                <th>S4</th>
                                <th>S5</th>
                                <th>S6</th>
                                <th>S7</th>
                                <th>S8</th>
                                <th>S9</th>
                                <th>S10</th>
                                <th>PP1</th>
                                <th>PP2</th>
                                <th>PP3</th>
                                <th>KK1</th>
                                <th>KK2</th>
                                <th>KK3</th>
                                <th>KU1</th>
                                <th>KU2</th>
                                <th>KU3</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Pengantar Teknologi Informasi</td>
                                <td>90%</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>100%</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>
                                    <a href="/editpemetaancpl">
                                        <button type="button" class="btn btn-xs btn-warning">
                                            <span>Edit</span>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection