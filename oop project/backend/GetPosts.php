<?php

include './DB.php';
use OOP\DataBase\DB;

header('Access-Control-Allow-Origin: http://localhost:8080');
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json");



$db = new DB();

$data = $db->select("blogs","*")->orderByDesc('id')->getAll();

if($data)
{
    $response = [
        "success" => true,
        'message' => "ok",
        "status code" => 200,
        "data" => $data
    ];
}
else
{
    $response = [
        "success" => false,
        'message' => "error",
        "status code" => 403,
    ];
}


echo json_encode($response);
