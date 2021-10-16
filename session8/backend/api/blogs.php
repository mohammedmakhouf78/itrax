<?php


$hostname = 'localhost';
$username = "mohammed";
$password = '';
$database_name = "itrax_mysqli";
$database_port = 3308;

$conn = mysqli_connect($hostname,$username,$password,$database_name,$database_port);
$result = mysqli_query($conn,"SELECT * FROM `blogs`");

while($row = mysqli_fetch_assoc($result))
{
    $data []= $row;
}

echo json_encode($data);