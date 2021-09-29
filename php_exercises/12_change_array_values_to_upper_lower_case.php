<?php

// Write a PHP function to change the following array's all values to upper or lower case.



/*
Sample arrays :
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
Expected Output :
Values are in lower case.
Array ( [A] => blue [B] => green [c] => red ) 
Values are in upper case.
Array ( [A] => BLUE [B] => GREEN [c] => RED )
*/



$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

function change_array_items_to_uppercase($arr)
{
    return array_map(
        function($item){
            return strtoupper($item);
        },
        $arr
    );
}

function change_array_items_to_lowercase($arr)
{
    return array_map(
        function($item){
            return strtolower($item);
        },
        $arr
    );
}

print_r(change_array_items_to_uppercase($Color));
print_r(change_array_items_to_lowercase($Color));