<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Rpkpm;
use App\Models\Rpkps;
use Illuminate\Http\Request;

class RpkpmController extends Controller
{
    public function index() {
        list($message, $statusCode, $rpkpms) = initAPI();

        $rpkps = Rpkps::with('course', 'semester')->get();
        if($rpkps) {
            $message = config('constants.response.message.success.getAll');
            $statusCode = config('constants.response.statusCode.success.getAll');
        } else {
            $message = config('constants.response.message.failed.getAll');
            $statusCode = config('constants.response.statusCode.failed.getAll');            
        }
        return responseAPI($message, $statusCode, $rpkps);
    }

    public function show($id) {
        list($message, $statusCode, $rpkpms) = initAPI();

        $rpkpm = Rpkpm::with('learningMedia')->where('rpkps_id', $id)->get();
        if($rpkpm) {
            $message = config('constants.response.message.success.getAll');
            $statusCode = config('constants.response.statusCode.success.getAll');
        } else {
            $message = config('constants.response.message.failed.getAll');
            $statusCode = config('constants.response.statusCode.failed.getAll');            
        }
        return responseAPI($message, $statusCode, $rpkpm);
    }
}
