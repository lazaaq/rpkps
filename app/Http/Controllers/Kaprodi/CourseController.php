<?php

namespace App\Http\Controllers\Kaprodi;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        $message = '';
        $statusCode = 500;

        $courses = Course::all();
        if ($courses) {
            $message = 'Courses retrieved successfully';
        } else {
            $message = 'Courses not found';
        }
        return responseAPI($message, $statusCode, $courses);
    }
}
