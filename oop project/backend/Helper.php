<?php

namespace OOP\HelperNS;

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

    public static function autoLoader()
    {
        spl_autoload_register(function ($class_name) {
            $parts = explode('\\', $class_name);
            // include end($parts) . '.php';
            if(file_exists(end($parts) . "." . "php"))
            {
                include end($parts) . "." . "php";
            }
            else if(file_exists("../../" . end($parts) . "." . "php"))
            {
                include "../../" . end($parts) . "." . "php";
            }
            else if(file_exists('../../models/' .end($parts) . "." . "php"))
            {
                include '../../models/' .end($parts) . "." . "php";
            }
            // else if(file_exists('./controllers/' .end($parts) . "." . "php"))
            // {
            //     include './controllers/' .end($parts) . "." . "php";
            // }
            // else if (file_exists('../models/' .end($parts) . "." . "php"))
            // {
            //     include '../models/' .end($parts) . "." . "php";
            // }
            // else if(file_exists('../controllers/' .end($parts) . "." . "php"))
            // {
            //     include '../controllers/' .end($parts) . "." . "php";
            // }
        });
    }

    public static function respose($data,$path = "")
    {
        if (isset($_SERVER['HTTP_ORIGIN']))
        {
            echo json_encode(Helper::makeResponse($data));
        }
        else
        {
            header("location: $path");
        }
    }

    public static function redirect($path)
    {
        header("location: $path");
    }
}