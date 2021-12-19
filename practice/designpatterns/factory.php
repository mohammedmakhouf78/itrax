<?php

interface Shape
{
    public function draw();
}

class Rectangle implements Shape
{
    public $x;
    public $y;

    public function draw()
    {
        echo "drawing a Rectangle";
    }
}

class Circle implements Shape
{
    public $x;
    public $y;

    public function draw()
    {
        echo "drawing a circle";
    }
}

class Square implements Shape
{
    public $x;
    public $y;

    public function draw()
    {
        echo "drawing a circle";
    }
}

class Factory
{
    public function create($type)
    {
        if($type == "Rectangle"){
            return new Rectangle();
        }
        else if($type == "Circle"){
            return new Circle();
        }
        else if($type == "Square"){
            return new Square();
        }
    }
}
