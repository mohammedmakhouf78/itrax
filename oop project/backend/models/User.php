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
            $blog->id = $db->getLastInsertedId();
            return $blog;
        }
        return false;
    }

    public static function getUserByEmail($email)
    {
        $db = new DB();
        $data = $db->select('users','*')->where('email','=',$email)->getRow();
        return $data;
    }
    
    public static function getUserById($id)
    {
        $db = new DB();
        $data = $db->select('users','name')->where('id','=',$id)->getRow();
        return $data;
    }
}