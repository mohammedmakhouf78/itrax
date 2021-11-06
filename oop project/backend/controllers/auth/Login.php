<?php
include '../../Helper.php';
use OOP\HelperNS\Helper;
Helper::autoLoader();
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

echo json_encode(Helper::makeResponse($data));