<?php

$arr = [10,40,2,1,60,34];
$max = $arr[0];
for ($i=0; $i < count($arr) ; $i++) { 
    if($arr[$i] >= $max)
    {
        $max = $arr[$i];
    }
}

echo $max;