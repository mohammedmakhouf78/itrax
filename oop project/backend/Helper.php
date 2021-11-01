<?php

class Helper
{
    public static function makeResponse($data)
    {
        if($data)
        {
            return [
                "success" => true,
                'message' => "ok",
                "status code" => 200,
                "data" => $data
            ];
        }
        else
        {
            return [
                "success" => false,
                'message' => "error",
                "status code" => 403,
            ];
        }
    }
}