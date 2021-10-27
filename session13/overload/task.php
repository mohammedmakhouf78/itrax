<?php

class Math
{
    public function __call($name, $arguments)
    {
        if($name == "sum")
        {
            if(count($arguments) > 2)
            {
                echo array_sum($arguments);
            }
        }
    }
}

$m = new Math();

$m->sum(10,15,20);