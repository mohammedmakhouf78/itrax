<?php

namespace OOP\Modules;
use \OOP\DataBase\DB;

class User
{
    public $id;
    public $name;
    public $email;
    private $password;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function createPost(Blog $blog)
    {
        $db = new DB();
        $blog->user_id = $this->id;
        $result = $db->insert('blogs',$blog)->excute();
        if($result)
        {
            return $blog;
        }
        return false;
    }
}