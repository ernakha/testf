<?php

namespace App\Http\Controllers\Api\Auth;


use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function sendResponese($result, $message)
    {
        $response =[
            'success' => true,
            'data' => $result,
            'message' => $message
        ];
        return response()->json($response, 200);
    }

    public function sendError($error, $errorMessage = [], $code = 500)
    {
        $response =[
            'success' => false,
            'message' => $error
        ];

        if(!empty($errorMessage)){
            $response['data'] = $errorMessage;
        }
        return response()->json($response, $code);
    }

}
