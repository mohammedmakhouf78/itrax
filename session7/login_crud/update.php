<?php
    session_start();
    if(empty($_SESSION['user']))
    {
        header("location: login.php");
    }

    if(!isset($_GET['id']))
    {
        header("location: index.php");
    }

    $hostname = 'localhost';
    $username = "mohammed";
    $password = '';
    $database_name = "itrax_mysqli";
    $database_port = 3307;

    $conn = mysqli_connect($hostname,$username,$password,$database_name,$database_port);

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $result = mysqli_query($conn,"SELECT * FROM `user` WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}


if(isset($_POST['name']) && isset($_GET['id']))
{
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = mysqli_query($conn,"UPDATE `user` SET `name`='$name',`email`='$email',`password`='$password' WHERE id = $id");

    if(mysqli_affected_rows($conn) > 0)
    {
        header('location: index.php');
    }
    else
    {
        echo "Error in Updating";
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
    <form action="update.php?id=<?= $_GET['id'] ?>" method="POST">
        <input type="text" name="name" value="<?= $row['name'] ?>" placeholder="name">
        <input type="text" name="email" value="<?= $row['email'] ?>" placeholder="email">
        <input type="text" name="password" value="<?= $row['password'] ?>" placeholder="password">
        <input type="submit" name="login" value="Update">
    </form>
</body>
</html>