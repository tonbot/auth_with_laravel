<?php
namespace App\Http\CustomHelper;

class General
{
  
     static function setResponse($code, $message, $data){
        $data = [
            'code' => $code,
            'message' => $message,
            'data' => $data,
        ];
        return (object)$data;
     }


     
}

?>