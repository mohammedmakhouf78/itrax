<?php


class Pc
{
    public $color;
    public $size;

    function shutdown()
    {
        echo "shut down";
    }
}

class Softwear
{
    function os()
    {
        echo "os";
    }
}

class dell extends pc
{
    function sleep()
    {
        echo "sleep";
    }
}