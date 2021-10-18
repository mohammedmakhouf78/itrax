<?php

class DB2
{
    public $conn;
    private $table;

    function __construct($table)
    {
        $hostname = 'localhost';
        $username = "mohammed";
        $password = '';
        $database_name = "itrax_mysqli";
        $database_port = 3308;

        $this->conn = mysqli_connect('localhost',"mohammed",'',"itrax_mysqli",3308);
        $this->table = $table;
    }

    public function selectAll() : array
    {
        $result = mysqli_query($this->conn,"SELECT * FROM `$this->table`");
        while($row = mysqli_fetch_assoc($result))
        {
            $data []= $row;
        }
        return $data;
    }

    public function insert(array $values) : bool
    {
        $query = $this->make_insert_query_string($this->table,$values);

        mysqli_query($this->conn ,$query);
        
        if(mysqli_affected_rows($this->conn ) > 0){
           return true;
        }else{
            return false;
        }
    }

    public function update(array $values,int $id) : bool
    {
        $query = $this->make_update_query_string($this->table,$values,$id);

        mysqli_query($this->conn,$query);

        if(mysqli_affected_rows($this->conn) > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function delete($id) : bool
    {
        mysqli_query($this->conn,"DELETE FROM `$this->table` WHERE `id` = $id");

        if(mysqli_affected_rows($this->conn) > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    private function make_insert_query_string(string $table,array $values):string
    {
        $last_key = end(array_keys($values));
        $valuesString = ' VALUES (';
        $queryString = "INSERT INTO `$table` (";
        foreach($values as $key => $item)
        {
            if($key == $last_key){
                $queryString  .= "`$key`";
                $valuesString .= "'$item'";
            }else{
                $queryString  .= "`$key`,";
                $valuesString .= "'$item',";
            }
        }
        $queryString .= ")";
        $valuesString .= ")";
        $query = $queryString . $valuesString;
        return $query;
    }

    private function make_update_query_string(string $table,array $values, int $id) : string
    {
        $last_key = end(array_keys($values));
        $queryString = "UPDATE `$table` SET ";
        foreach ($values as $key => $item) {
            if($key == $last_key){
                $queryString .= "`$key`='$item'";
            }else{
                $queryString .= "`$key`='$item',";
            }
        }
        $queryString .= " WHERE id = $id";
        return $queryString;
    }
}