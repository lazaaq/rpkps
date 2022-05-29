@extends('layout.v_template')

@section('title', 'Hubungan Profil Lulusan dan Capaian Pembelajaran')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="/editpemetaanprofil">
                    <button type="button" class="btn btn-warning">
                        <i class="fa fa-print" style="margin-right:10px;"></i><span>Cetak Data</span>
                    </button>
                </a>
            </div>
            <div class="box-body ">
                <div class="card-body table-responsive p-0" style="height: responsive;">
                    <table id="dataTable" class="table table-striped table-body-fixed text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="100px">Kode CPL</th>
                                <th width="100px">Analisis Sistem</th>
                                @foreach ($graduateProfileLearningGoals as $graduateProfileLearningGoal)
                                    <th width="100px">{{ $graduateProfileLearningGoal->graduateProfile->name }}</th>
                                @endforeach
                                <th width="100px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($graduateProfileLearningGoals as $graduateProfileLearningGoal)
                            <tr>
                                <td>{{ $graduateProfileLearningGoal->learningGoal->code }}</td>
                                <td>{{ $graduateProfileLearningGoal->learningGoal->component }}</td>
                                @foreach ($graduateProfileLearningGoals as $item)
                                <td><input type="checkbox" value="" @if($item->id == $graduateProfileLearningGoal->id) checked @endif disabled></td>
                                @endforeach
                                <td style="vertical-align: middle; text-align: center;">
                                    <a href="{{ route('kaprodi.cpl-profil-lulusan.edit') }}">
                                        <button type="button" class="btn btn-xs btn-warning">
                                            <span>Edit</span>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection