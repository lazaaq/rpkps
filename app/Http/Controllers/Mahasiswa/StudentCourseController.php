<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\LecturerPlotting;
use App\Models\Semester;
use Illuminate\Http\Request;

class StudentCourseController extends Controller
{
    public function index() {
        $semester = Semester::all();
        $course = Course::with('courseClassrooms.classroom', 'lecturerPlottings.lecturer')->get();
        return view('mahasiswa.v_pelaksanaanPerkuliahan', compact('semester', 'course'));
    }

    public function show($courseId, $lecturerPlottingId) {
        $course = Course::with('courseClassrooms.classroom', 'lecturerPlottings.lecturer')->find($courseId);
        $lecturerPlotting = LecturerPlotting::with('lecturer')->find($lecturerPlottingId);
        return view('mahasiswa.v_perkuliahanMingguan', compact('course', 'lecturerPlotting'));
    }

    public function form(Request $request) {
        return view('mahasiswa.v_formInput');
    }
}
