<?php

include '../tables/Blogs.php';

header("Access-Control-Allow-Methods: POST"); // has no effect for some reson
header("access-control-allow-origin: *" ); // didn't work before this
header("HTTP/1.1 201 OK");
// header('Access-Control-Allow-Credentials', true);
// header('Access-Control-Allow-Headers', 'X-Requested-With,Content-Type,X-Token-Auth,Authorization');
// header('Access-Control-Allow-Headers: *'); 



// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
// header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X- 
// Request-With');




// header('Access-Control-Allow-Origin: *');
// header("Access-Control-Allow-Methods: HEAD, GET, POST, PUT, PATCH, DELETE, OPTIONS");
// header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method,Access-Control-Request-Headers, Authorization");
// header('Content-Type: application/json');
// $method = $_SERVER['REQUEST_METHOD'];
// if ($method == "OPTIONS") {
// header('Access-Control-Allow-Origin: *');
// header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method,Access-Control-Request-Headers, Authorization");
// header("HTTP/1.1 200 OK");
// die();


$obj = json_decode(file_get_contents('php://input'));   

if(isset($obj['title']))
{
    $blog = [
        'title' => $obj['title'],
        'image' => $obj['image'],
        'created_at' => date("Y/m/d"),
        'description' => $obj['description'],
        'user' => $obj['user']
    ];
}

$blogs = new Blogs();
$data = $blogs->insert($blog);

header("HTTP/1.1 201 OK");
// echo json_encode($data);