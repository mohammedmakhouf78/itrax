<?php 

$persons1 = [
    [
        'firstname' => 'mohammed',
        'lastname' => 'emad',
        'age' => 26
    ],
    [
        'firstname' => 'ahmed',
        'lastname' => 'amr',
        'age' => 26
    ],
    [
        'firstname' => 'ebrahim',
        'lastname' => 'salem',
        'age' => 26
    ]
];

$persons2 = [
    [
        'fname' => 'ali',
        'lname' => 'said',
        'age' => 26
    ],
    [
        'fname' => 'salma',
        'lname' => 'abdo',
        'age' => 26
    ],
    [
        'fname' => 'eslam',
        'lname' => 'basem',
        'age' => 26
    ]
];

$persons = array_merge($persons1,$persons2);

$result = array_map(function($person){
    $person = array_values($person);
    return array(
        'firstname' => $person[0],
        'lastname' => $person[1],
        'age' => $person[2]
    );
},$persons);


// $persons1_keys = array_keys($persons1[0]);


// foreach ($persons2 as $key => $value) {
//    array_push($persons1 , array_combine($persons1_keys,$value));
// }

// echo "<pre>";
// print_r(array_values($persons));
// echo "</pre>";


echo "<pre>";
print_r($result);
echo "</pre>";