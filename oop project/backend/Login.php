<?php

spl_autoload_register(function ($class_name) {
    $parts = explode('\\', $class_name);
    include end($parts) . '.php';
});

use OOP\DataBase\DB;

header('Access-Control-Allow-Origin: http://localhost:8080');
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json");



$db = new DB();
$data = json_decode(file_get_contents("php://input"), TRUE);

$user = [
    'email' => $data['email'],
    'password' => $data['password'],
];


$found = $db->userExists('users',$user);


// if($found)
// {
//     $response = [
//         "success" => true,
//         'message' => "ok",
//         "status code" => 200,
//         "data" => $data
//     ];
// }
// else
// {
//     $response = [
//         "success" => false,
//         'message' => "error",
//         "status code" => 403,
//         "data" => $data
//     ];
// }


echo json_encode(Helper::makeResponse($data));