<?php
include '../DB.php';

class Blogs extends DB2
{
    public static $table = 'blogs';

    function __construct()
    {
        parent::__construct(self::$table);
    }
}