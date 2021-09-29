<?php

// Write a PHP script to get the shortest/longest string length from an array.


// Sample arrays : ("abcd","abc","de","hjjj","g","wer")


// Expected Output : The shortest array length is 1. The longest array length is 4.




function solution_one()
{
    $arr = array("abcd","abc","de","hjjj","g","wer");

    $lengths = [];
    foreach ($arr as $str) {
        $lengths []= strlen($str);
    }

    echo "The shortest array length is ".min($lengths).". The longest array length is ".max($lengths).".";

}







function solution_two()
{
    $arr = array("abcd","abc","de","hjjj","g","wer");

    $lengths = array_map('strlen',$arr);

    echo "The shortest array length is ".min($lengths).". The longest array length is ".max($lengths).".";
}

solution_two();