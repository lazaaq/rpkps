<?php

function responseAPI($message = 'Error Default', $statusCode = 500, $data = null) {
  return response()->json([
      'message' => $message,
      'statusCode' => $statusCode,
      'data' => $data
  ], $statusCode);
}

?>