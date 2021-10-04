<?php

$users = [
    [
        'name' => [
            'first' => 'mohammed',
            'last' => 'emad'
        ],
        'skills' => [
            'soft' =>['reading'],
            'tech' => ['php' , 'oop','html']
        ]
    ],
    [
        'name' => [
            'first' => 'ahmed',
            'last' => 'mahmoud'
        ],
        'skills' => [
            'soft' =>['reading'],
            'tech' => ['php' , 'oop','css']
        ]
    ],
    [
        'name' => [
            'first' => 'ali',
            'last' => 'ebrahim'
        ],
        'skills' => [
            'soft' =>['reading'],
            'tech' => ['php' , 'oop','javaScript']
        ]
    ],
];

// print the skills of every person

function solutionOne(array $arr) : void
{
    foreach ($arr as $value)
    {
        echo "skills <br>";
        echo "soft : " . $value['skills']['soft'][0] . "<br>";
        echo "tech : " . $value['skills']['tech'][0] . "  " . $value['skills']['tech'][1] . $value['skills']['tech'][2];
        echo "<hr>";
    }
}

// solutionOne($users);


echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";



function solutionTwo(array $arr) : void
{
    echo "skills <br>";
    foreach ($arr as $user) 
    {
        echo "soft : ";
        foreach ($user['skills']['soft'] as $value) 
        {
            echo  $value;
        }
        echo "<br>";
        echo "tech : ";
        foreach ($user['skills']['tech'] as $value) 
        {
            echo  $value . "  ";
        }
        echo "<hr>";
    }
}

// solutionTwo($users);






echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";





function solutionThree(array $arr) : void
{
    $skills = array_column($arr,'skills');
    
    foreach ($skills as $user) {
        foreach ($user as $key => $item) {
            if($key === 'soft'){
                echo "soft : ";
                foreach ($item as  $value){
                    echo  $value . " ";
                }
                echo "<br>";
            }else if($key === 'tech'){
                echo "tech : ";
                foreach ($item as  $value){
                    echo  $value . " ";
                }
                echo "<br>";
            }
        }
        echo "<hr>";
    }
}

// solutionThree($users);



echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";





function solution_four(array $arr) : void
{
    foreach ($arr as $key => $value) {
        if($key === "soft")
        {
            echo "soft : ";
            foreach ($value as $soft) 
            {
                echo  $soft . " ";
            }
            echo "<br>";
        }
        else if($key === "tech")
        {
            echo "tech : ";
            foreach ($value as $tech) 
            {
                echo  $tech . " ";
            }
            echo "<br>";
            echo "<hr>";
        }
        else if (is_array($value))
        {
            solution_four($value);
        }
    }
}

// solution_four($users);



echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";




function solution_five(array $arr) : void
{
    foreach ($arr as $user)
    {
        echo "soft : ";
        foreach (get_element_by_key($user , 'soft') as $soft) 
        {
            echo  $soft . " ";
        }
        echo "<br>";

        echo "tech : ";
        foreach (get_element_by_key($user , 'tech') as $tech) 
        {
            echo  $tech . " ";
        }
        echo "<hr>";
    }
}

// solution_five($users);









function get_element_by_key(array $arr , string $wanted_key)
{
    $result = [];
    foreach ($arr as $key => $value) 
    {
        global $result;
        if($wanted_key === $key)
        {
            $result = $value;
            break;
        }
        else if (is_array($value))
        {
            get_element_by_key($value,$wanted_key);
        }
    }
    return $result;
}


var_dump(get_element_by_key($users,""));





function solution_six(array $arr,array $keys) : void
{
    foreach ($arr as $user)
    {
        foreach ($keys as $value) {
            echo "$value : ";
            foreach (get_element_by_key($user , $value) as $element) 
            {
                echo  $element . " ";
            }
            echo "<br>";
        }
        echo "<hr>";
    }
}


// solution_six($users,['soft','tech']);