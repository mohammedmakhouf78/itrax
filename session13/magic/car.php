<?php

namespace X;

class Car
{
    public function __construct()
    {
        echo "constructor";
    }

    public function move()
    {
        echo "move";
    }

    public function __call($name, $arguments)
    {
        echo "this method ". $name . "not found";
    }

    public function __set($name, $value)
    {
        echo "this Property ". $name . " not found and value " . $value;
    }

    public function __get($name)
    {
        echo "this Property ". $name . " not found ";
    }
}