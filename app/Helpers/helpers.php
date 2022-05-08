<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
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

function deleteImage($path) {
  if(File::exists($path)){
    $deleteImage = File::delete($path);
    if($deleteImage) {
      return true;
    }
  }
  return false;
}

?>