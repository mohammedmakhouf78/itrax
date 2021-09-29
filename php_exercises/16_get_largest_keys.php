<?php




// Write a PHP script to get the largest key in an array.




$arr = array(4 => 'white', 6 => 'green', 11=> 'red');

$keys = array_keys($arr);

echo max($keys);