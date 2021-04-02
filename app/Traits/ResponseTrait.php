<?php

namespace App\Traits;

trait ResponseTrait{

    public function responseOk(array $data=[],string $message = "OK"){
        return $this->formatResponse(200,$message,$data);
    }

    public function responseCreated(string $message, array $data=[]){
        return $this->formatResponse(201,$message,$data);
    }

    public function responseNotFound(string $message, array $data=[]){
        return $this->formatResponse(404,$message,$data);
    }

    public function responseConflict(string $message, array $data=[]){
        return $this->formatResponse(409,$message,$data);
    }

    public function responseUnauthorized(string $message, array $data=[]){
        return $this->formatResponse(401,$message,$data);
    }

    private function formatResponse(int $statusCode, string $message, array $data=[]){
       return response()->json([
            'message' => $message,
            'data' => $data
        ]);
    }
}