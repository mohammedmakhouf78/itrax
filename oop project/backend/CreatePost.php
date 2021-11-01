<?php
spl_autoload_register(function ($class_name) {
    $parts = explode('\\', $class_name);
    include end($parts) . '.php';
});
use OOP\Modules\Blog;
use OOP\Modules\User;

header('Access-Control-Allow-Origin: http://localhost:8080');
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json");


$user = User::getUserByEmail($_POST['email']);

if(isset($_FILES['file']))
{
    $tmp = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    move_uploaded_file($tmp,"../frontend/src/assets/blogs/".$name);
}

$userObj = new User($user['id']);
$data = $userObj->createPost(new Blog([
    'title' => $_POST['title'],
    'description' => $_POST['description'],
    'image' => $name,
    'published_at' => date("Y/m/d")
]));

echo json_encode(Helper::makeResponse($data));
