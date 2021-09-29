<?php

// Write a PHP function to sort an array according to another array acting as a priority list.




// first solution
$order = [1,3,4,2];

$array = [2,1,3,4,2,1,2];

$result = [];

foreach ($order as $value) {
    for ($i=0; $i <  count($array) ; $i++) { 
        if($array[$i] == $value)
        {
            $result []= $array[$i];
        }
    }
}

print_r($result);











// second solution


$order = [1,3,4,2];

$array = [2,1,3,4,2,1,2];


function arr_order($a,$b)
{
    global $order;
    foreach ($order as $key => $value) {
        
        if($a == $value)
        {
            return 0;
            break;
        }

        if($b == $value)
        {
            return 1;
            break;
        }
    }
}


usort($array,'arr_order');

print_r($array);