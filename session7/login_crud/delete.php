<?php

$id = $_GET['id'];

$hostname = 'localhost';
$username = "mohammed";
$password = '';
$database_name = "itrax_mysqli";
$database_port = 3307;

$conn = mysqli_connect($hostname,$username,$password,$database_name,$database_port);

$query = mysqli_query($conn,"DELETE FROM `user` WHERE `id` = $id");

if(mysqli_affected_rows($conn) > 0)
{
    header('location: index.php');
}
else
{
    echo "Error in Deleting";
}