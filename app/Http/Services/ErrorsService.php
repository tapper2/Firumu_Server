<?php

namespace App\Http\Services;
use App\User;
use App\Error;
use App\TemplateSubject;
use App\Subject;
use App\Favorite;
use App\TestSubjectQuestions;
use App\Http\Services\TestService;
Use Exception;
Use \Carbon\Carbon;

class ErrorsService
{

    public function __construct()
    {

    }

    public function insertError($userId,$message,$isServer,$functionName,$fullErrorMessage){

        $response = [];
        $res = Error::create([
            'userId' => $userId,
            'message' => $message,
            'isServer'=>$isServer,
            'functionName'=>$functionName,
            'fullErrorMessage'=> $fullErrorMessage,
        ]);

        $response['id'] = $res->id;
        return $response;
    }
}
