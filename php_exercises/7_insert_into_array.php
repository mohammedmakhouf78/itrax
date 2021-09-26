<?php 

// Write a PHP script that inserts a new item in an array in any position.

$arr = [1,2,3,4,5];

array_splice($arr,2,0,7);

print_r($arr);