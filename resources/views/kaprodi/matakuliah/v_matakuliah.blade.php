@extends('layout.v_template')

@section('title', 'Mata Kuliah')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="#">
                    <button type="button" class="btn btn-warning" style="float: right;">
                        <i class="fa fa-print" style="margin-right:10px;"></i><span>Cetak Mata Kuliah</span>
                    </button>
                </a>
                <div class="form-group col-xs-3" style="margin-bottom: 0px; padding-left: 0px">
                    <label for="selectSemester">Pilih Semester</label>
                    <select class="form-control" name="selectSemester" required id="selectSemester" onchange="onChangeSemester()">
                        <option selected="selected" value="0">All</option>
                        <option value="1">Semester 1</option>
                        <option value="2">Semester 2</option>
                        <option value="3">Semester 3</option>
                        <option value="4">Semester 4</option>
                        <option value="5">Semester 5</option>
                        <option value="6">Semester 6</option>
                        <option value="7">Semester 7</option>
                        <option value="8">Semester 8</option>
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
                        <tbody id="tableBody">
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
                            <tr id="tableFoot">
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

<script>
    let i
    function onChangeSemester() {
        // get select semester id   
        let selectSemester = document.getElementById("selectSemester")
        let semesterId = selectSemester.value

        // get all data that have semester like selectSemester
        let courses = {!! json_encode($courses) !!}
        let data = []
        let sks = 0
        let teoriHours = 0
        let praktekHours = 0
        
        // all data
        if (semesterId == 0) {
            data = courses

            courses.forEach(element => {
                sks += element.sks
                if(element.is_teori) {
                    teoriHours += element.hours
                } else {
                    praktekHours += element.hours
                }
            })
        } else { // per semester data
            courses.forEach(element => {
                if(element.semester_id == semesterId) {
                    data.push(element)
                    sks += element.sks
                    if(element.is_teori) {
                        teoriHours += element.hours
                    } else {
                        praktekHours += element.hours
                    }
                }
            });
        }

        // tableHTML
        i = 1
        const tableHtml = data.map(mappingCourse)
        document.querySelector("#tableBody").innerHTML=tableHtml.join("")

        let tableFootHtml = `<tr id="tableFoot">
            <th colspan="3" style="vertical-align: middle; text-align: center;">Jumlah</th>
            <th>${ sks }</th>
            <th>${ teoriHours }</th>
            <th>${ praktekHours }</th>
        </tr>`
        document.querySelector('#tableFoot').innerHTML=tableFootHtml

        console.log(sks)
        console.log(teoriHours)
        console.log(praktekHours)
    }

    function mappingCourse(item) {
        let html = `<tr>
            <td>${i++}</td>
            <td>${item.code}</td>
            <td>${item.name}</td>
            <td>${item.sks}</td>`
        if (item.is_teori) {
            html += `<td>${item.hours}</td><td>-</td>`
        } else {
            html += `<td>-</td><td>${item.hours}</td>`
        }
        html += `</tr>`
        return html
    }
</script>
@endsection