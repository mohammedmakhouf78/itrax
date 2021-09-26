<?php

$color = array(4 => 'white', 6 => 'green', 11=> 'red');

// Write a PHP script to get the first element of the above array.

// Expected result : white



// first Solution
echo array_values($color)[0];

echo "<br>";
echo "<br>";

// second Solution
// the reset() function returns the first element of the array
echo reset($color);