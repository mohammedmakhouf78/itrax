<?php

class DB3
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
        $this->excuteQuery();
        while($row = mysqli_fetch_assoc($this->query))
        {
            $data []= $row;
        }
        return $data;
    }

    public function getRow()
    {
        $this->excuteQuery();
        $row = mysqli_fetch_assoc($this->query);
        return $row;
    }

    public function where($column,$compair,$value,$operation = "WHERE")
    {
        $this->sql .= " $operation `$column` $compair '$value'";
        return $this;
    }

    public function andWhere($column,$compair,$value)
    {
        return $this->where($column,$compair,$value,"AND");
    }

    public function orWhere($column,$compair,$value)
    {
        return $this->where($column,$compair,$value,"OR");
    }

    public function insert($table,$data)
    {
        $q = $this->buildInsertUpdate($data);
        $this->sql = "INSERT INTO `$table` SET " . $q;
        return $this;
    }

    public function update($table,$data)
    {
        $q = $this->buildInsertUpdate($data);
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
        $this->excuteQuery();
        if(mysqli_affected_rows($this->conn ) > 0){
           return true;
        }else{
            $this->showError();
        }
    }

    public function excuteQuery()
    {
        $this->query = mysqli_query($this->conn ,$this->sql);
    }

    public function buildInsertUpdate($data)
    {
        $row = "";
        foreach ($data as $key => $value) {
            $row .= (gettype($value) == "string") ? "`$key` = '$value'," : "`$key` = $value," ;
        }
        $row = rtrim($row,",");
        return $row;
    }

    public function showError()
    {
       $errors = mysqli_error_list($this->conn);
       foreach ($errors as $error) {
           echo "<h2> Error:  </h2>";
           echo "<p> ". $error['error'] ."  </p>";
           echo "<h2> Error Number:  </h2>";
           echo "<p> ". $error['errno'] ."  </p>";
       }
    }

    public function __destruct()
    {
        mysqli_close($this->conn);
    }
}