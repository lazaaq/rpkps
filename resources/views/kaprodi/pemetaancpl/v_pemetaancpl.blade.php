@extends('layout.v_template')

@section('title', 'Hubungan CPL dan Mata Kuliah ')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <button type="button" class="btn btn-warning" onclick="printDataTable()">
                    <i class="fa fa-print" style="margin-right:10px;"></i><span>Cetak Data</span>
                </button>
                <a href="{{ route('kaprodi.cpl-mata-kuliah.edit') }}" class="btn btn-warning">
                    <i class="fa fa-pencil-square-o" style="margin-right:10px;"></i><span>Edit</span>
                </a>
            </div>
            <div class="box-body ">
                <div class="card-body table-responsive p-0" id="printableTable">
                    <table id="dataTable" class="table table-striped text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Mata Kuliah</th>
                                <th colspan="{{ $learningGoalSikap->count() }}" style="text-align: center;">Sikap</th>
                                <th colspan="{{ $learningGoalPP->count() }}" style="text-align: center;">PP</th>
                                <th colspan="{{ $learningGoalKK->count() }}" style="text-align: center;">KK</th>
                                <th colspan="{{ $learningGoalKeterampilan->count() }}" style="text-align: center;">Ketrampilan Umum</th>
                            </tr>
                            <tr>
                                @foreach ($learningGoalSikap as $item)
                                <th>{{ $item->code }}</th>
                                @endforeach
                                @foreach ($learningGoalPP as $item)
                                <th>{{ $item->code }}</th>
                                @endforeach
                                @foreach ($learningGoalKK as $item)
                                <th>{{ $item->code }}</th>
                                @endforeach
                                @foreach ($learningGoalKeterampilan as $item)
                                <th>{{ $item->code }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($learningGoalCourse as $cpl)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $cpl[0]->course ? $cpl[0]->course->name : '-' }}</td>
                                @php
                                    $cpl_count = 0;   
                                @endphp
                                @for( $i = 0; $i < $learningGoal->count(); $i++)
                                    @if( $cpl_count < $cpl->count() && $learningGoal[$i]->code == $cpl[$cpl_count]->learningGoal->code )
                                        <td>{{ $cpl[$cpl_count]->percentage }}</td>
                                        @php
                                            $cpl_count++;
                                        @endphp
                                    @else 
                                        <td>-</td>
                                    @endif
                                @endfor
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

@section('js')
    @include('layout.js_datatable_pagination')
@endsection