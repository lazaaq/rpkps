<?php

namespace App\Http\Controllers\Kaprodi;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::all();
        if (!$courses) {
            return config('constants.response.message.failed.notFound');
        }
        return view('kaprodi.matakuliah.v_matakuliah', compact('courses'));
    }
}
