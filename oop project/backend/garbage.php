<?php


spl_autoload_register(function ($class_name) {
    $parts = explode('\\', $class_name);
    include end($parts) . '.php';
});
use OOP\Modules\Blog;
use OOP\Modules\User;
use OOP\DataBase\DB;


$user = new User(1);
$data = $user->createPost(new Blog([
    'title' => "this is a garbage title",
    'description' => "this is a garbage desc",
    'image' => "our-process-teb-img-02.jpg",
    'published_at' => "2021-10-26"
]));

var_dump($data);
