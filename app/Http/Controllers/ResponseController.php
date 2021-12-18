<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResponseController extends Controller
{
  /**
   * response method.
   *
   * @return \Illuminate\Http\Response
   */
  public function formatJson($message, $status, $statusCode, $data = 'default')
  {
    $response = [
      'status' => $status,
      'statusCode' => $statusCode,
      'message' => $message,
    ];

    if ($data != "default"){
      $response['data'] = $data;
    }

    return response()->json($response, $statusCode);
  }

  /**
   * return error response.
   *
   * @return \Illuminate\Http\Response
   */

/*  public function error($error, $code = 404, $errorMsg = [])
  {
    $response = [
        'code' => $code,
        'success' => false,
        'message' => $error,
    ];

    if(!empty($errorMsg)){
        $response['data'] = $errorMsg;
    }

    return response()->json($response, $code);
  }*/
}