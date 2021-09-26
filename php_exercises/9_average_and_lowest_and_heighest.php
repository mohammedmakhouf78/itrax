<?php

// Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.

// Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73

/*
Expected Output :
Average Temperature is : 70.6 
List of five lowest temperatures : 60, 62, 63, 63, 64, 
List of five highest temperatures : 76, 78, 79, 81, 85,
*/

$temperature = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73];


// The Average
array_filter($temperature); //removes any empty values
echo array_sum($temperature) / count($temperature);




echo "<br>";
echo "<br>";




// List of five lowest temperatures
sort($temperature);
echo "List of five lowest temperatures : ";
for ($i=0; $i < 5 ; $i++) { 
    echo   $temperature[$i] . " ";
}



echo "<br>";
echo "<br>";



// List of five highest temperatures
sort($temperature);
echo "List of five highest temperatures : ";
for ($i=count($temperature); $i >= count($temperature) - 5 ; $i--) { 
    echo   $temperature[$i] . " ";
}