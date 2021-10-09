<?php
$hostname = 'localhost';
$username = "mohammed";
$password = '';
$database_name = "itrax_mysqli";
$database_port = 3307;

$conn = mysqli_connect($hostname,$username,$password,$database_name,$database_port);


if(isset($_POST['name']))
{
    $x = $_POST['name'];
    mysqli_query($conn,"INSERT INTO `user` (`name`) VALUES ('$x')");
}

var_dump($conn);