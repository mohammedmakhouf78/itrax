<?php

trait Car
{
    public $color;
    public $size;

    public function move()
    {
        echo "move";
    }

    public function os()
    {
        echo "car";
    }
}

trait Soft
{
    public function os()
    {
        echo "soft";
    }
}

class Bmw
{
    use Soft,Car{
        Car::os insteadof Soft;
    }
}

$b = new Bmw();
$b->os();