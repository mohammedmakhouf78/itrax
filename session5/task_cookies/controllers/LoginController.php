<?php

session_start();


if (isset($_POST['email']))
{
    if(empty($_POST['email']))
    {
        $_SESSION['login_msg'] = [
            'email' => "Enter Your email",
        ];
        header('location:../login.php');
    }
    else if(empty($_POST['pass']))
    {
        $_SESSION['login_msg']['pass'] = 'Enter your password';
        header('location:../login.php');
    }
    else
    {
        
       
        if(isset($_COOKIE['email']) 
        && $_COOKIE['email'] == $_POST['email']
        && isset($_COOKIE['pass'])
        && $_COOKIE['pass'] == $_POST['pass'])
        {
            setcookie('is_logged_in',true,time() + 3600,'/');
            header('location:../index.php');
        }
        else
        {
            $_SESSION['login_msg']['invalid'] = 'User dose not exist';
            header('location:../login.php');
        }
    }
}
else
{
    $_SESSION['login_msg']['data'] = 'Enter your data';
    header('location:../login.php');
}