<?php

// Write a PHP program to merge (by index) the following two arrays.



/*
Sample arrays :
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");
*/




/*
Expected Output :

Array  
(      
[0] => Array          
(              
[0] => w3resource              
[1] => 77              
[2] => 87          
)        
[1] => Array          
(              
[0] => com              
[1] => 23              
[2] => 45          
)    
)
*/ 


// First Solution
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");

$result = [];

array_push($result,
    array_merge(array($array2[0]),$array1[0]),
    array_merge(array($array2[1]),$array1[1])
);

// print_r($result);










// Second Solution more Dynamic
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");

$result = array_map(
    function ($x,$y) {
        $temp = [];
        $temp []= $x;
        if(is_scalar($y))
        {
            $temp []= $y;
        }
        else
        {
            foreach($y as $k => $value)
            {
                $temp []= $value;
            }
        }
        return $temp;
        
    },
    $array2,
    $array1
);

print_r($result);