<?php 

abstract class Demo
{
    public $name;

    public function index()
    {
        echo "Index";
    }

    public abstract function delete();
}

class Soft extends Demo
{
    public function delete()
    {
        echo "delete";
    }

    public function Inesrt()
    {
        echo "Insert";
    }
}