<?php

namespace App\Http\Controllers\Kaprodi;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        list($message, $statusCode, $courses) = initAPI();

        $courses = Course::all();
        if ($courses) {
            $message = config('constants.response.message.success.getAll');
            $statusCode = 200;
        } else {
            $message = config('constants.response.message.failed.notFound');
        }
        return responseAPI($message, $statusCode, $courses);
    }
}
