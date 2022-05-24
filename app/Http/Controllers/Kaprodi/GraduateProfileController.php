<?php

namespace App\Http\Controllers\Kaprodi;

use App\Http\Controllers\Controller;
use App\Models\GraduateProfile;
use Illuminate\Http\Request;

class GraduateProfileController extends Controller
{
    public function index() {
        $graduateProfile = GraduateProfile::all();
        if (!$graduateProfile) {
            return config('constants.response.message.failed.notFound');
        }
        return view('kaprodi.profillulusan.v_profillulusan', compact('graduateProfile'));
    }
}
