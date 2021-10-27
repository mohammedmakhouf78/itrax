<?php


class Car
{
    public function move()
    {
        echo "car move";
    }

    public function __call($name, $arguments)
    {
        if($name == "move")
        {
            if(count($arguments) > 0)
            {
                echo "car move " . $arguments;
            }

            else if(count($arguments) == 0)
            {
                echo "car move ";
            }
        }
    }
}

