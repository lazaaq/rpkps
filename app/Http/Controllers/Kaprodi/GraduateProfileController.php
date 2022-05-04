<?php

namespace App\Http\Controllers\Kaprodi;

use App\Http\Controllers\Controller;
use App\Models\GraduateProfile;
use Illuminate\Http\Request;

class GraduateProfileController extends Controller
{
    public function index() {
        list($message, $statusCode, $graduateProfile) = initAPI();

        $graduateProfile = GraduateProfile::all();
        if ($graduateProfile) {
            $message = config('constants.response.message.success.getAll');
            $statusCode = 200;
        } else {
            $message = config('constants.response.message.failed.notFound');
        }
        return responseAPI($message, $statusCode, $graduateProfile);
    }
}
