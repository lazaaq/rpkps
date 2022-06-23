@extends('layout.v_template')

@section('title', 'Hubungan Profil Lulusan dan Capaian Pembelajaran')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <button type="button" class="btn btn-warning" onclick="printDataTable()">
                    <i class="fa fa-print" style="margin-right:10px;"></i><span>Cetak Data</span>
                </button>
                <a href="{{ route('kaprodi.cpl-profil-lulusan.edit') }}" class="btn btn-warning">
                    <i class="fa fa-pencil-square-o" style="margin-right:10px;"></i><span>Edit</span>
                </a>
            </div>
            <div class="box-body ">
                <div class="card-body table-responsive p-0" style="height: responsive;" id="printableTable">
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
                                <td><input type="checkbox" value="" @if($item->id == $graduateProfileLearningGoal->id) checked @endif disabled></td>
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>

<script>
    function printDataTable() {
        window.frames["print_frame"].document.body.innerHTML = document.getElementById("printableTable").innerHTML;
        window.frames["print_frame"].window.focus();
        window.frames["print_frame"].window.print();
    }
</script>
@endsection