<?php

class Student
{
    protected $name;
    protected $age;
    protected $score;
    protected $sujects = [
        'Arabic' => 0,
        'English' => 0,
        'Math' => 0,
        'Science' => 0
    ];

    protected $minScore = 100;
    protected $maxScore = 200;

    const MIN_AGE = 12;
    const MAX_AGE = 21;

    public function __construct($name,$age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    private function setName($name)
    {
        $this->name = $name;
    }

    private function setAge($age)
    {
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}


class GradeOne extends Student
{

}


$g = new GradeOne("ahmed",15);


$name = $g->getAge();
echo $name;