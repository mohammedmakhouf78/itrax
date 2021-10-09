<?php

$hostname = 'localhost';
$username = "mohammed";
$password = '';
$database_name = "itrax_mysqli";
$database_port = 3307;

$conn = mysqli_connect($hostname,$username,$password,$database_name,$database_port);


if(isset($_FILES['image']))
{
    $tmp = $_FILES['image']['tmp_name'];
    $name = $_FILES['image']['name'];
    move_uploaded_file($tmp,$name);
    mysqli_query($conn,"INSERT INTO `image` (`image`) VALUES ('$name')");
}

$images = mysqli_query($conn,"SELECT * FROM `image`");

// var_dump($images);

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
    <?php
    while ($row = mysqli_fetch_assoc($images)) {
        echo '
            <div>
                <img src="./'.$row['image'].'" alt="">
                <button onClick="deleteImage('.$row["id"].' ,\'' .$row["image"].'\')">X</button>
            </div>
        ';
    }
    
    ?>

    <script src="./script.js"></script>
</body>
</html>