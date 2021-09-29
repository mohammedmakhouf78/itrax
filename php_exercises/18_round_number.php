<?php

// Write a PHP function to floor decimal numbers with precision.

// Note: Accept three parameters number, precision, and $separator



/*
Sample Data :
1.155, 2, "."
100.25781, 4, "."
-2.9636, 3, "."
*/ 



/*
Expected Output :
1.15
100.2578
-2.964
*/


function my_floor($num,$precision)
{
    echo round($num,$precision) . "<br>";
}

my_floor(1.155,2);
my_floor(100.25781, 4);
my_floor(-2.9636, 3);