<?php

session_start();

$hostname = 'localhost';
$username = "mohammed";
$password = '';
$database_name = "itrax_mysqli";
$database_port = 3307;

$conn = mysqli_connect($hostname,$username,$password,$database_name,$database_port);

$result = mysqli_query($conn,"SELECT * FROM `user`");

while($row = mysqli_fetch_assoc($result))
{
    $data []= $row;
}

?>


<!DOCTYPE html>
<html>
    <head>
        <style>
            table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even) {
            background-color: #dddddd;
            }
        </style>
    </head>
<body>
    <div>
        <a href="./login.php">Login</a>
        <a href="./logout.php">Logout</a>
    </div>
    <h2>Users</h2>

    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <? if(!empty($_SESSION['user'])): ?>
            <th>Update</th>
            <th>Delete</th>
            <? endif ?>
        </tr>
    
        <?php foreach ($data as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
            <? if(!empty($_SESSION['user'])): ?>
            <td>
            <a href="./update.php?id=<?= $user['id'] ?>">Update</a>
            </td>
            <td>
                <a href="./delete.php?id=<?= $user['id'] ?>">Delete</a>
            </td>
            <? endif ?>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>