<?php

include './DB.php';
use OOP\DataBase\DB;

header('Access-Control-Allow-Origin: http://localhost:8080');
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json");



$db = new DB();

$user = $db->select('users','*')->where('email','=',$_POST['email'])->getRow();


if(isset($_FILES['file']))
{
    $tmp = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    move_uploaded_file($tmp,"../frontend/src/assets/blogs/".$name);
}

$blog = [
    'user_id' => $user['id'],
    'published_at' => date("Y/m/d"),
    'title' => $_POST['title'],
    'description' => $_POST['description'],
    'image' => $name,
];


$inserted = $db->insert('blogs',$blog)->excute();

$blog = [
    'user' => $user['name'],
    'published_at' => date("Y/m/d"),
    'title' => $_POST['title'],
    'description' => $_POST['description'],
    'image' => $name,
];

if($inserted)
{
    $response = [
        "success" => true,
        'message' => "ok",
        "status code" => 200,
        "data" => $blog
    ];
}
else
{
    $response = [
        "success" => false,
        'message' => "error",
        "status code" => 403,
        "data" => $blog
    ];
}


echo json_encode($response);
