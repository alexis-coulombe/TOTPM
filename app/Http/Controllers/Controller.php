<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function successJson($data, $message = ''){
        return response()->json([
            'status' => 200,
            'success' => 1,
            'error' => 0,
            'data' => $data,
            'message' => $message,
        ]);
    }

    protected function errorJson($data, $message = ''){
        return response()->json([
            'status' => 200,
            'success' => 1,
            'error' => 0,
            'data' => $data,
            'message' => $message,
        ]);
    }
}
