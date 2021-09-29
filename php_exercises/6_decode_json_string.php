<?php 

// Write a PHP script which decodes the following JSON string.

/*
 Sample JSON code :
 {"Title": "The Cuckoos Calling",
 "Author": "Robert Galbraith",
 "Detail": {
 "Publisher": "Little Brown"
 }}
 */



 /*
 Expected Output :
 Title : The Cuckoos Calling
 Author : Robert Galbraith
 Publisher : Little Brown
 */

 $json = '
    {"Title": "The Cuckoos Calling",
    "Author": "Robert Galbraith",
    "Detail": {
    "Publisher": "Little Brown"
    }}
 ';


 // the true flag is to return an associative array
$data = json_decode($json,true);

function print_data_as_key_value($value,$key)
{
   echo "$key : $value <br>";
}

// use the callback to run on every element and it dives into deeper level of elements.
array_walk_recursive($data,'print_data_as_key_value');