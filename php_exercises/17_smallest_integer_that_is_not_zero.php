<?php

// Write a PHP function that returns the lowest integer that is not 0.






function solution_one()
{
    $arr = array(-1,0,1,12,-100,1);

    sort($arr);

    if($arr[0] == 0)
    {
        echo $arr[1];
    }
    else
    {
        echo $arr[0];
    }

}





function solution_two()
{
    $arr = array(-1,0,1,12,-100,1);
    $result = min(array_diff(array_map('intval',$arr),array(0)));

    echo $result;
}


solution_two();