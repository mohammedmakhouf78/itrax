<?php

function calculator(float $num1,float $num2, string $select) : float
{
    switch($select)
    {
        case "+":
            return $num1 + $num2;
            break;
        
        case "-":
            return $num1 - $num2;
            break;

        case "*":
            return $num1 * $num2;
            break;

        case "/":
            return $num1 / $num2;
            break;
        
        default:
            return "Enter a valid operator";
            break;
    }
}

echo calculator(10,5,"+");
echo "<br>";
echo calculator(10,5,"-");
echo "<br>";
echo calculator(10,5,"*");
echo "<br>";
echo calculator(10,5,"/");
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";







function calculator2(array $numbers ,string $operator) : float
{

    switch($operator)
    {
        case "+":
            return array_sum($numbers);
            break;
        
        case "-":
            // $result = $numbers[0];
            // for ($i=0; $i < count($numbers) - 1 ; $i++) { 
            //    $result -= $numbers[$i + 1];
            // }
            // return $result;
            
            return $numbers[0] - array_sum(array_slice($numbers,1));
            break;

        case "*":
            // $result = 1;
            // foreach ($numbers as  $value) {
            //     $result *= $value;
            // }
            // return $result;

            return array_reduce($numbers,
                function($carry , $item){
                    $carry *= $item;
                    return $carry;
                }
            );

            break;

        case "/":
            $result = $numbers[0];
            for ($i=0; $i < count($numbers) - 1 ; $i++) { 
                $result /= $numbers[$i + 1];
             }
            return $result;
            break;
        
        default:
            return "Enter a valid operator";
            break;
    }

}


echo calculator2([2,3,4],"+");
echo "<br>";
echo calculator2([2,3,4],"-");
echo "<br>";
echo calculator2([2,3,4],"*");
echo "<br>";
echo calculator2([2,3,4],"/");
echo "<br>";