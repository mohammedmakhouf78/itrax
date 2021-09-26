<?php

// Write a PHP program to sort an array of positive integers using the Bead-Sort Algorithm.

/*
According to Wikipedia "Bead-sort is a natural sorting algorithm, developed by Joshua J. Arulanandham, Cristian S. Calude and Michael J. Dinneen in 2002. Both digital and analog hardware implementations of bead sort can achieve a sorting time of O(n); however, the implementation of this algorithm tends to be significantly slower in software and can only be used to sort lists of positive integers".
*/



function columns($uarr)
{
    $n=$uarr;
    if (count($n) == 0)
    {
        return array();
    }
    else if (count($n) == 1)
    {
        return array_chunk($n[0], 1);
    }
    array_unshift($uarr, NULL);
    $transpose = call_user_func_array('array_map', $uarr);
    return array_map('array_filter', $transpose);
}


function bead_sort($uarr)
{
    print_r($uarr);
    
    foreach ($uarr as $e)
    {
        $poles []= array_fill(0, $e, 1);
    }
    print_r($poles);
    return array_map('count', columns(columns($poles)));
}

// echo 'Original Array : '.'
// ';

// print_r(array(5,3,1,3,8,7,4,1,1,3));

// echo '
// '.'After Bead sort : '.'
// ';

// print_r(bead_sort(array(5,3,1,3,8,7,4,1,1,3)));
bead_sort(array(5,3,1,3,8,7,4,1,1,3));