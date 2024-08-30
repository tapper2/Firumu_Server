<?php

namespace App\Http\Services;


class ResponseMessageService
{
    public function responseMessage($res, $status , $message, $error=''){
        $response = [];
        $response['data'] = $res;
        $response['status'] = $status;
        $response['message'] = $message;
        $response['error'] = $error;
        return $response;
    }
}