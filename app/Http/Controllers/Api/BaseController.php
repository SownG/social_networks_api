<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function responseErrors($returnCode, $message, $statusCode = 200)
    {
        return response()->json([
            'code' => (int) $returnCode,
            'message' => $message,
        ], $statusCode);
    }

    public function responseSuccess($data = null, $statusCode = 200)
    {
        $responseData = [];

        if($data) {
            $responseData['data'] = $data;
        }
        return response()->json(array_merge(['status' => 'SUCCESS'], $responseData), $statusCode);
    }
}