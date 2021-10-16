<?php


if(isset($_POST['title']))
{
    $hostname = 'localhost';
    $username = "mohammed";
    $password = '';
    $database_name = "itrax_mysqli";
    $database_port = 3308;

    $conn = mysqli_connect($hostname,$username,$password,$database_name,$database_port);


    $title = $_POST['title'];
    $user = $_POST['user'];
    $description = $_POST['description'];
    $created_at = date("Y/m/d");
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp,"../../images/".$image);
    mysqli_query($conn,"INSERT INTO `blogs`(`title`, `user`, `created_at`, `description`, `image`) VALUES ('$title','$user','$created_at','$description','$image')");

    if(mysqli_affected_rows($conn) > 0)
    {
        echo "inserted";
        header("Refresh:2; url='../../views/blogs/create.php'");

    }
    else
    {
        echo "error";
        header("Refresh:2; url='../../views/blogs/create.php'");
    }
}
else
{
    echo "Please Put your input";
    header("Refresh:2; url='../../views/blogs/create.php'");
}
