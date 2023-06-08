<?php

namespace KhantNyar\ScaffoldedLaravel\Controller\Api;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function sendResponse($message, $data = null)
    {
        $response = [
            'success' => true,
            'message' => $message,
        ];

        if (!empty($data)) {
            $response['data'] = $data;
        }

        return response()->json($response, 200);
    }

    //send error api response
    public function sendError($status, $message, $data = null)
    {
        $response = [
            'success' => false,
            'message' => $message,
        ];
        if (!empty($data)) {
            $response['data'] = $data;
        }
        return response()->json($response, $status);
    }
}
