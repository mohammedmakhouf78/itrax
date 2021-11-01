<?php

namespace OOP\Modules;
use \OOP\DataBase\DB;
class Blog
{
    public $id;
    public $user_id;
    public $title;
    public $description;
    public $image;
    public $published_at;
    public function __construct($blogData)
    {
        $this->title = $blogData['title'];
        $this->description = $blogData['description'];
        $this->image = $blogData['image'];
        $this->published_at = $blogData['published_at'];
    }

    public static function getAllBlogs()
    {
        $db = new DB();
        $data = $db->select("blogs","*,blogs.id")->join("users")->on("blogs.user_id=users.id")->orderByDesc('blogs.id')->getAll();

        return $data;
    }

    public static function getLatestPosts($number)
    {
        $db = new DB();
        $data = $db->select("blogs","*")->join("users")->on("blogs.user_id=users.id")->orderByDesc('blogs.id')->limit($number)->getAll();
        
        return $data;
    }

    public static function updateBlog($data)
    {
        $db = new DB();
        $result = $db->update('blogs',$data)->where('id',"=",$data['id'])->excute();
        return $result;
    }

    public static function deleteBlog($id){
        $db = new DB();
        $result = $db->delete('blogs')->where('id',"=",$id)->excute();
        return $result;
    }
}