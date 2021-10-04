<?php 

    $dbemail = "admin@admin.com";
    $dbpassword = "123";


    if(isset($_POST['email']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];


        if($email == $dbemail && $password == $dbpassword)
        {
            session_start();
            $_SESSION['user'] = 'mohammed';
            $_SESSION['email'] = $email;
            header('location:auth.php');
        }else
        {
            echo 'email or password is invalid';
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
    <form action="./login.php" method="POST">
        <input type="text" name="email">
        <input type="text" name="password">
        <input type="submit" value="Submit">
    </form>
</body>
</html>