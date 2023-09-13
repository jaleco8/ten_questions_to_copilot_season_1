<?php

class Response {
  public static function success($data) {
    header('Content-Type: application/json');
    http_response_code(200);
    echo json_encode([
      'success' => true,
      'data' => $data
    ]);
  }

  public static function error($message, $code = 500) {
    header('Content-Type: application/json');
    http_response_code($code);
    echo json_encode([
      'success' => false,
      'error' => $message
    ]);
  }
}