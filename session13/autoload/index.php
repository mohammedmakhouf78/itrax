<?php

spl_autoload_register(function($classname){
    if(file_exists($classname . "." . "php"))
    {
        include $classname . "." . "php";
    }
    else if(file_exists('test/' .$classname . "." . "php"))
    {
        include 'test/' .$classname . "." . "php";
    }
});

$car = new Bmw();
$car->move();
$car = new Car();
$car->move();

$test = new test();
$test->tt();