<?php 

$x = array(1, 2, 3, 4, 5);

// Delete an element from the above PHP array. After deleting the element, integer keys must be normalized. 

// Sample Output :
// array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) } 
// array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }



// this is first Solution
function remove_element_from_array($index,$arr)
{
    $result = [];
    for ($i=0; $i < count($arr) ; $i++) {
        if ($i == $index)
            continue;
        array_push($result,$arr[$i]);
    }
    return $result;
}

// print_r(remove_element_from_array(1,$x));



echo "<br>";
echo "<br>";
echo "<br>";



// Second Solution


function remove_element_from_array2($index,$arr)
{
    unset($arr[$index]);

    return array_values($arr);
}

print_r(remove_element_from_array2(2,$x));