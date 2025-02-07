<?php

namespace App\traits;

trait ApiResponse
{
    // 
    protected function ok($message){
        return $this->success($message);
    }

    protected function success($message, $code = 200){
        return response()->json([
            'message' => $message,
            'status' => $code
        ], $code);
    }
}
