<?php

class Calculator
{
    public $x;
    public $y;

    public function sum()
    {
        echo "sum is : " . ($this->x + $this->y) . "<br>";
        return $this;
    }

    public function multiply()
    {
        echo "multiplication is : " . $this->x * $this->y . "<br>";
        return $this;
    }

    public function subtract()
    {
        echo "subtraction is : " . ($this->x - $this->y) . "<br>";
        return $this;
    }

    public function divide()
    {
        echo "divide is : " . $this->x / $this->y . "<br>";
        return $this;
    }
}