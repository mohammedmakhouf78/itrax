<?php

class DB
{
    public $conn;
    public $query;
    public $sql;
    function __construct()
    {
        $hostname = 'localhost';
        $username = "mohammed";
        $password = '';
        $database_name = "itrax_mysqli";
        $database_port = 3308;

        $this->conn = mysqli_connect('localhost',"mohammed",'',"itrax_mysqli",3308);
    }

    public function select($table,$colomn)
    {
        $this->sql = "SELECT $colomn FROM `$table`";
        return $this;
    }

    public function getAll()
    {
        $this->query = mysqli_query($this->conn,$this->sql);
        while($row = mysqli_fetch_assoc($this->query))
        {
            $data []= $row;
        }
        return $data;
    }

    public function getRow()
    {
        $this->query = mysqli_query($this->conn,$this->sql);
        $row = mysqli_fetch_assoc($this->query);
        return $row;
    }

    public function where($column,$compair,$value)
    {
        $this->sql .= " WHERE `$column` $compair '$value'";
        return $this;
    }

    public function andWhere($column,$compair,$value)
    {
        $this->sql .= " AND `$column` $compair '$value'";
        return $this;
    }

    public function orWhere($column,$compair,$value)
    {
        $this->sql .= " OR `$column` $compair '$value'";
        return $this;
    }

    public function insert($table,$data)
    {
        $columns = "";
        $vlaues = "";
        foreach ($data as $key => $value) {
            $columns .= " `$key`,";
            $vlaues .= " '$value',";
        }

        $columns = rtrim($columns,",");
        $vlaues = rtrim($vlaues,",");
        $this->sql = "INSERT INTO `$table` ($columns) VALUES ($vlaues)";

        return $this;
    }

    public function update($table,$data)
    {
        $q = "";

        foreach ($data as $key => $value) {
            $q .= "`$key` = '$value',";
        }

        $q = rtrim($q,",");

        $this->sql = "UPDATE `$table` SET " . $q;
        return $this;
    }

    public function delete($table)
    {
        $this->sql = "DELETE FROM `$table`";
        return $this;
    }

    public function orderBy($columns)
    {
        if(gettype($columns) == "string")
        {
            $this->sql .= " ORDER BY $columns ";
        }
        else if(gettype($columns) == "array")
        {
            $q = "";
            foreach ($columns as $value) {
                $q .= " $value,";
            }
            $q = rtrim($q,",");
            $this->sql .= " ORDER BY $q ";
        }
        return $this;
    }

    public function limit($count)
    {
        $this->sql .= " LIMIT $count";
        return $this;
    }

    public function excute()
    {
        $this->query = mysqli_query($this->conn ,$this->sql);
        if(mysqli_affected_rows($this->conn ) > 0){
           return true;
        }else{
            return false;
        }
    }
}