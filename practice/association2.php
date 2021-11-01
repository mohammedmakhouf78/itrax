<?php

class Teacher
{
    public $name;
    public function __construct($name)
    {   
        $this->name = $name;
    }
}


class Student
{
    public $name;
    public function __construct($name)
    {   
        $this->name = $name;
    }

    public function teacherName()
    {
        $teacher = new Teacher("ahmed");
        return $teacher->name;
    }
}