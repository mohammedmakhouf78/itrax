<?php

session_start();

if(empty($_SESSION['user']))
{
    header("location:login.php");
}else{
    echo 'you are logged in';

    echo "<a href='./logout.php'> Logout </a>";
}