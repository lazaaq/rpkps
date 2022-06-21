<?php

use App\Models\Role;
use App\Models\Semester;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

function responseAPI($message = 'Error Default', $statusCode = 500, $data = null) {
  return response()->json([
      'message' => $message,
      'statusCode' => $statusCode,
      'data' => $data
  ], $statusCode);
}

function initAPI($message = '', $statusCode = 500, $data = null) {
  return array($message, $statusCode, $data);
}

function uploadImageBase64($image64, $path, $photoName) {
  $extension = explode('/', explode(':', substr($image64, 0, strpos($image64, ';')))[1])[1];
  $replace = substr($image64, 0, strpos($image64, ',')+1);
  $image = str_replace($replace, '', $image64);
  $image = str_replace(' ', '+', $image);
  $photoName = $photoName . '.' . $extension;
  $photoPath = 'storage/' . $path . $photoName;
  $uploadImage = File::put($photoPath, base64_decode($image));
  if($uploadImage) {
    return $photoName;
  } else {
    return false;
  }
}

function uploadImage(Request $request, $path, $filename) {
  $image = $request->file('photo');
  $filename = time() . '_' . $filename . '.' . $image->getClientOriginalExtension();
  $insertImage = $image->move($path, $filename);
  if(!$insertImage) {
    return responseAPI(config('constants.response.message.failed.uploadImage'), config('constants.response.statusCode.failed.uploadImage'));
  }
  return $filename;
}

function deleteImage($path) {
  if(File::exists($path)){
    $deleteImage = File::delete($path);
    if(!$deleteImage) {
      return responseAPI(config('constants.response.message.failed.deleteImage'), config('constants.response.statusCode.failed.deleteImage'));
    }
  }
}

function menuPlottingDosen() {
  $semester = Semester::where('active', 1)->get();
  return $semester;
}

function checkRole($roleUser) {
  $role = Role::where('rolename', $roleUser)->first();
  if (Auth::user()->role_id == $role->id) {
    return true;
  } else {
    return false;
  }
}

?>