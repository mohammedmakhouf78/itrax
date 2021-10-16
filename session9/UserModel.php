<?php

class UserModel
{
    public $conn;

    function __construct()
    {
        $hostname = 'localhost';
        $username = "mohammed";
        $password = '';
        $database_name = "itrax_mysqli";
        $database_port = 3308;

        $this->conn = mysqli_connect('localhost',"mohammed",'',"itrax_mysqli",3308);
    }

    public function select()
    {
        $result = mysqli_query($this->conn,"SELECT * FROM `user`");
        while($row = mysqli_fetch_assoc($result))
        {
            $data []= $row;
        }
        return $data;
    }

    public function insert()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

    
}