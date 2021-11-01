<?php
spl_autoload_register(function ($class_name) {
    $parts = explode('\\', $class_name);
    include end($parts) . '.php';
});

use OOP\Modules\Blog;

header('Access-Control-Allow-Origin: http://localhost:8080');
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json");



$data = Blog::deleteBlog($_POST['id']);

echo json_encode(Helper::makeResponse($data));