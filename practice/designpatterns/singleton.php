<?php

// singleton is just a fancy name of a global variable

class Database
{
    private static $instanse;
    public static $count;
    public static function getInstance()
    {
        if(!isset(self::$instanse))
        {
            self::$instanse = new Database();
        }
        return self::$instanse;
    }
    private function __construct()
    {
        self::$count++;
    }
    public function query()
    {
        return "select * from uesrs";
    }
}

$db = Database::getInstance();
$db2 = Database::getInstance();
$db3 = Database::getInstance();

// var_dump(Database::$count);
var_dump($db);
var_dump($db2);
var_dump($db3);
