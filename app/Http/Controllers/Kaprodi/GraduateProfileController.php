<?php

namespace App\Http\Controllers\Kaprodi;

use App\Http\Controllers\Controller;
use App\Models\GraduateProfile;
use Illuminate\Http\Request;

class GraduateProfileController extends Controller
{
    public function index() {
        $message = '';
        $statusCode = 500;
        $graduateProfile = GraduateProfile::all();
        if ($graduateProfile) {
            $message = 'Graduate Profile retrieved successfully';
            $statusCode = 200;
        } else {
            $message = 'Graduate Profile not found';
        }
        return responseAPI($message, $statusCode, $graduateProfile);
    }
}
