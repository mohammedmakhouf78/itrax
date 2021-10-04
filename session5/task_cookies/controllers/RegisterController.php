<?php 

session_start();


if (isset($_POST['name']))
{
    $_SESSION['old_register'] = [
        'name' => $_SESSION['name'],
        'email' => $_SESSION['email'],
    ];

    if(empty($_POST['name']))
    {
        $_SESSION['register_msg'] = [
            'name' => "Enter Your name",
        ];
        header('location:../register.php');
    }

    else if(empty($_POST['email']))
    {
        $_SESSION['register_msg']['email'] = 'your email is empty';
        header('location:../register.php');
    }

    else if((empty($_POST['pass']) || empty($_POST['confirm_pass'])))
    {
        $_SESSION['register_msg']['pass'] = 'Enter your password';
        header('location:../register.php');
    }

    else if($_POST['pass'] != $_POST['confirm_pass'])
    {
        $_SESSION['register_msg']['confirm'] = 'Confirm your password';
        header('location:../register.php');
    }
    
    else
    {
        setcookie('name',$_POST['name'],time() + 3600,'/');
        setcookie('email',$_POST['email'],time() + 3600,'/');
        setcookie('pass',$_POST['pass'],time() + 3600,'/');
        header('location:../login.php');
    }
}
else
{
    $_SESSION['register_msg']['data'] = 'Enter your data';
    header('location:../register.php');
}