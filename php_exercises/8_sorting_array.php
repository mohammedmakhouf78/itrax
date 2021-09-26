<?php

// Write a PHP script to sort the following associative array :

// array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in

/* 
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key
*/

$arr = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");


asort($arr);
print_r($arr);

ksort($arr);
print_r($arr);

arsort($arr);
print_r($arr);

krsort($arr);
print_r($arr);