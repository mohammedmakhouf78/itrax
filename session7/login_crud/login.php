<?php

session_start();

if(isset($_POST['login']))
{
    $hostname = 'localhost';
    $username = "mohammed";
    $password = '';
    $database_name = "itrax_mysqli";
    $database_port = 3307;

    $conn = mysqli_connect($hostname,$username,$password,$database_name,$database_port);

    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn,"SELECT * FROM `user` WHERE `email` = '$email' && `password` = '$password'");


    if(mysqli_num_rows($result))
    {
        $_SESSION['user'] = $email;
        header("location: index.php");
    }
    else{
        echo "Error";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="POST">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="password" placeholder="password">
        <input type="submit" name="login" value="Submit">
    </form>
</body>
</html>