<?php

$hostname = 'localhost';
$username = "mohammed";
$password = '';
$database_name = "itrax_mysqli";
$database_port = 3307;

$conn = mysqli_connect($hostname,$username,$password,$database_name,$database_port);

$id = $_POST['id'];
echo $_POST['image'];
mysqli_query($conn,"DELETE FROM `image` WHERE `image`.`id` = $id");

header("location:upload.php");
