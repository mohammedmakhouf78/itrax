<?php

include '../tables/Blogs.php';

header("Access-Control-Allow-Origin: *");

header('Access-Control-Allow-Headers: *'); 

header("Content-Type: application/json");




$data = json_decode(file_get_contents("php://input"), TRUE);

$blog = [
    'title' => $data['title'],
    'image' => $data['image'],
    'created_at' => date("Y/m/d"),
    'description' => $data['description'],
    'user' => $data['user']
];

$blogs = new Blogs();
$inserted = $blogs->insert($blog);

$response = [
    "success" => true,
    'message' => "ok",
    "status code" => 201,
    'data' => $data
];

echo json_encode($response);
