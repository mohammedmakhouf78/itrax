<?php

session_start();

if(isset($_POST['email']))
{
    $hostname = 'localhost';
    $username = "mohammed";
    $password = '';
    $database_name = "itrax_mysqli";
    $database_port = 3308;

    $conn = mysqli_connect($hostname,$username,$password,$database_name,$database_port);

    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn,"SELECT * FROM `user` WHERE `email` = '$email' && `password` = '$password'");


    if(mysqli_num_rows($result))
    {
        $_SESSION['user'] = $email;
        echo "You are Logged In";
        header("Refresh:2; url='../views/index.php'");
    }
    else{
        echo "Wrong User Name Or Password";

    }
}