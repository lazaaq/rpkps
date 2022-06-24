@extends('layout.v_template')

@section('title', 'Hubungan Profil Lulusan dan Capaian Pembelajaran')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <form action="{{ route('kaprodi.cpl-profil-lulusan.update') }}" method="post">
            @csrf
            @method('PUT')
            <div class="box">
                <div class="box-header">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save" style="margin-right:10px;"></i><span>Simpan</span>
                    </button>
                </div>
                <div class="box-body">
                    <div class="card-body table-responsive p-0" style="height: responsive;">
                        <table id="dataTable" class="table table-striped table-body-fixed text-nowrap table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="100px">Kode CPL</th>
                                    <th width="100px">Analisis Sistem</th>
                                    @foreach ($graduateProfileLearningGoals as $graduateProfileLearningGoal)
                                        <th width="100px">{{ $graduateProfileLearningGoal->graduateProfile->name }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($graduateProfileLearningGoals as $graduateProfileLearningGoal)
                                <tr>
                                    <td>{{ $graduateProfileLearningGoal->learningGoal->code }}</td>
                                    <td>{{ $graduateProfileLearningGoal->learningGoal->component }}</td>
                                    @foreach ($graduateProfileLearningGoals as $item)
                                        <td><input type="checkbox" value="{{ $graduateProfileLearningGoal->learning_goal_id }}-{{ $item->graduate_profile_id }}" @if($item->id == $graduateProfileLearningGoal->id) checked @endif name="data[]"></td>
                                    @endforeach
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@section('js')
    @include('layout.js_datatable_nopagination')
@endsection