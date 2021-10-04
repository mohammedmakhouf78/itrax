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
        $user_is_valid =  check_if_user_exsits($_SESSION['users'],$_POST['email'],$_POST['pass']);
       
        if($user_is_valid)
        {
            $_SESSION['is_logged_in'] = true;
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


function check_if_user_exsits(array $arr,string $email,string $pass) : bool
{
    foreach($arr as $user)
    {
        if($user['email'] == $email && $user['pass'] == $pass)
        {
            return true;
        }
        return false;
    }
}