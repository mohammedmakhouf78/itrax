<?php

/*
1- A manager (is a) type of Emplyee ===>  Inheritance
2- A manager (Has a) swipe card to enter company premisis ===>      Association
3- the manager has many workers under him ===> Aggregation
4- his salary depends on project success. ===> Composition
5- project success depends on a manager. ===> Composition
*/


class Employee
{
    public $name;
    public $salary;
    public $standard = 700;
    
}

class Manager extends Employee
{
    public $card;
    public $project;

    // aggregation
    public $workers = []; // array of workers objs

    public function __construct($name,Project $project)
    {
        $this->name = $name;
        $this->project = $project;
    }
    
    public function LogIn(Card $card)
    {
        $card->swipe($this);
    }

    public function managerState($good)
    {
        if($good)
        {
            $this->project->isSuccess = true;
        }
        else
        {
            $this->project->isSuccess = false;
        }
    }
}




class Card
{
    public function swipe(Manager $manager)
    {

    }
}




class Worker extends Employee
{
    public $manager;
    public function __construct(Manager $manager)
    {
        $this->manager = $manager;
    }
}

class Project
{
    public $projectName;
    public $duration;
    public $isSuccess;
    public $manager;

    public function __construct(Manager $manager)
    {
        $this->manager = $manager;
    }

    public function succeded()
    {
        if($this->isSuccess)
        {
            $this->manager->salary += 500;
        }
    }
}
