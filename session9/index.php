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

    // if we make the constructor private or protected the page dose not work
    private function __construct($name,$age)
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

// $s = new Student("ali",17);

// echo $s->getAge();

// $g = new GradeOne("ahmed",15);


// $name = $g->getAge();
// echo $name;


























































// include "User.php";
// include "./Calculator.php";
// include "./UserModel.php";

// $user = new User();
// $user2 = new User();

// $user->name = "ahmed";
// $user2->name = "mohammed";

// $user->insert();
// $user2->insert();

// var_dump($user);
// var_dump($user2);


// $calc = new Calculator();

// $calc->x = 10;
// $calc->y = 5;

// $calc->sum()->divide()->multiply()->subtract();



$user = new UserModel();
$data = $user->insert();

var_dump($data);



