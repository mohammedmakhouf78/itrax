<?php
include '../DB.php';

class User extends DB
{
    public static $table = 'user';

    function __construct()
    {
        parent::__construct(self::$table);
    }
}