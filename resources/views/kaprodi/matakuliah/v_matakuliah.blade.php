@extends('layout.v_template')

@section('title', 'Mata Kuliah')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="/kurikulum/add">
                    <button type="button" class="btn btn-warning" style="float: right;">
                        <i class="fa fa-print" style="margin-right:10px;"></i><span>Cetak Mata Kuliah</span>
                    </button>
                </a>
                <div class="form-group col-xs-3" style="margin-bottom: 0px; padding-left: 0px">
                    <select class="form-control" name="status" required>
                        <option selected="selected">--Pilih Semester--</option>
                        <option value="1">Semester 1</option>
                        <option value="1">Semester 2</option>
                        <option value="1">Semester 3</option>
                        <option value="1">Semester 4</option>
                        <option value="1">Semester 5</option>
                        <option value="1">Semester 6</option>
                        <option value="1">Semester 7</option>
                        <option value="1">Semester 8</option>
                        <div class="text-danger">
                            @error('prodi')
                            {{ $message }}
                            @enderror
                        </div>
                    </select>
                </div>
            </div>
            <div class="box-body ">
                <div class="card-body">
                    <table class="table table-striped text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th rowspan="2" style="vertical-align: middle; text-align: center;">No</th>
                                <th rowspan="2" style="vertical-align: middle; text-align: center;">Kode Mata Kuliah</th>
                                <th rowspan="2" style="vertical-align: middle; text-align: center;">Nama Mata Kuliah</th>
                                <th rowspan="2" style="vertical-align: middle; text-align: center;">SKS</th>
                                <th colspan="2" style="text-align: center;">Jam</th>
                            </tr>
                            <tr>
                                <th>Teori</th>
                                <th>Praktek</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $item)
                            <tr>
                                <td>{{$loop->index + 1}}</td>
                                <td>{{ $item->code }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->sks }}</td>
                                <td width="40px">@if($item->is_teori) {{ $item->hours }} @else - @endif</td>
                                <td width="40px">@if(!$item->is_teori) {{ $item->hours }} @else - @endif</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="3" style="vertical-align: middle; text-align: center;">Jumlah</th>
                                <th>{{ $courses->sum('sks') }}</th>
                                <th>{{ $courses->where('is_teori', 1)->sum('hours') }}</th>
                                <th>{{ $courses->where('is_teori', 0)->sum('hours') }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection