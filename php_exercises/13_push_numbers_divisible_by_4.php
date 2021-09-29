<?php

// Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.

// Note : Do not use any PHP control statement.
// Expected Output : 200,204,208,212,216,220,224,228,232,236,240,244,248






// solution one
function solution_one()
{
    $arr = [];
    foreach(range(200,250) as $num)
    {
        $arr []= $num;
    }
    
    $result = array_filter($arr,
        function($item)
        {
            return !($item % 4);
        }
    );
    
    print_r($result);
}






// solution two
function solution_two()
{
    print_r(range(200,250,4));
}


solution_two();
