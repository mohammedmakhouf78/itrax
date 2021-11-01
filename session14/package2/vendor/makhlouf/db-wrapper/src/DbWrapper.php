<?php

namespace makhlouf\db;


class DbWrapper
{
    public $conn;
    public $query;
    public $sql;
    function __construct()
    {
        $hostname = 'localhost';
        $username = "mohammed";
        $password = '';
        $database_name = "itrax_oop_project";
        $database_port = 3309;

        $this->conn = mysqli_connect('localhost',"mohammed",'',"itrax_oop_project",3309);
    }

    public function select($table,$colomn) : object
    {
        $this->sql = "SELECT $colomn FROM `$table`";
        return $this;
    }

    public function getAll() : array
    {
        $this->excuteQuery();
        while($row = mysqli_fetch_assoc($this->query))
        {
            $data []= $row;
        }
        return $data;
    }

    public function getRow() : array
    {
        $this->excuteQuery();
        $row = mysqli_fetch_assoc($this->query);
        return $row;
    }

    public function where($column,$compair,$value,$operation = "WHERE") : object
    {
        $this->sql .= " $operation `$column` $compair '$value'";
        return $this;
    }

    public function andWhere($column,$compair,$value) : object
    {
        return $this->where($column,$compair,$value,"AND");
    }

    public function orWhere($column,$compair,$value) : object
    {
        return $this->where($column,$compair,$value,"OR");
    }

    public function insert($table,$data) : object
    { 
        if (is_object($data))
        {
            $data = (array) $data;
        }
        $q = $this->buildInsertUpdate($data);
        $this->sql = "INSERT INTO `$table` SET " . $q;
        return $this;
    }

    public function update($table,$data) : object
    {
        $q = $this->buildInsertUpdate($data);
        $this->sql = "UPDATE `$table` SET " . $q;
        return $this;
    }

    public function delete($table) : object
    {
        $this->sql = "DELETE FROM `$table`";
        return $this;
    }

    public function orderBy($columns,$sort="ASC") : object
    {
        if(gettype($columns) == "string")
        {
            $this->sql .= " ORDER BY $columns $sort";
        }
        else if(gettype($columns) == "array")
        {
            $q = "";
            foreach ($columns as $value) {
                $q .= " $value,";
            }
            $q = rtrim($q,",");
            $this->sql .= " ORDER BY $q $sort";
        }
        return $this;
    }

    public function orderByDesc($columns) : object
    {
        return $this->orderBy($columns,"DESC");
    }

    public function limit($count) : object
    {
        $this->sql .= " LIMIT $count";
        return $this;
    }

    public function excute() : ?bool
    {
        $this->excuteQuery();
        echo mysqli_insert_id($this->conn);
        die;
        if(mysqli_affected_rows($this->conn ) > 0){
           return $this->query->insert_id;
        }else{
            $this->showError();
        }
    }

    public function excuteQuery() : void
    {
        $this->query = mysqli_query($this->conn ,$this->sql);
    }

    public function buildInsertUpdate($data) : string
    {
        $row = "";
        foreach ($data as $key => $value) {
            // if($key != "id")
            // {
                $row .= (gettype($value) == "string") ? "`$key` = '$value'," : "`$key` = $value," ;
            // }
        }
        $row = rtrim($row,",");
        return $row;
    }

    public function showError() : void
    {
       $errors = mysqli_error_list($this->conn);
       foreach ($errors as $error) {
           echo "<h2> Error:  </h2>";
           echo "<p> ". $error['error'] ."  </p>";
           echo "<h2> Error Number:  </h2>";
           echo "<p> ". $error['errno'] ."  </p>";
       }
    }
    
    public function userExists($table,$data) 
    {
        $records = $this->select($table,'*')->getAll();
        foreach ($records as $user) {
            if(($user['email'] == $data['email']) 
            && ($user['password'] == $data['password']))
            {
                return 1;
            }
        }
        return 0;
    }

    public function __destruct()
    {
        mysqli_close($this->conn);
    }
}