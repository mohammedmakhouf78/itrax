<?php


spl_autoload_register(function ($class_name) {
    $parts = explode('\\', $class_name);
    include end($parts) . '.php';
});
use OOP\Modules\Blog;
use OOP\Modules\User;
use OOP\DataBase\DB;

// $user = new User(1);
// $data = $user->createPost(new Blog([
//     'title' => "this is a garbage title",
//     'description' => "this is a garbage desc",
//     'image' => "our-process-teb-img-02.jpg",
//     'published_at' => "2021-10-26"
// ]));

// var_dump($data);


// $db = new DB();

// $x = $db->select("blogs","*")->join("users")->on("blogs.user_id=users.id where blogs.id = 29")->getRow();

// var_dump($x);

// var_dump(Blog::getLatestPosts(5));

// $result = Blog::updateBlog([
//     'id' => '29',
//     'title' => "a",
//     'description' => "b",
//     'image' => "our-process-teb-img-02.jpg",
// ]);

// var_dump($result);



var_dump(Blog::deleteBlog(1));