<?php

$hostname = 'localhost';
$username = "mohammed";
$password = '';
$database_name = "itrax_mysqli";
$database_port = 3307;

$conn = mysqli_connect($hostname,$username,$password,$database_name,$database_port);

$id = $_POST['id'];
$image = $_POST['image'];
mysqli_query($conn,"DELETE FROM `image` WHERE `image`.`id` = $id");
unlink($image);

header("location: upload.php");
