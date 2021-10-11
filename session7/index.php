<?php
$hostname = 'localhost';
$username = "mohammed";
$password = '';
$database_name = "itrax_mysqli";
$database_port = 3307;

$conn = mysqli_connect($hostname,$username,$password,$database_name,$database_port);

// **************************************************************
// mysqli_query($conn,"INSERT INTO `user` (`name`) VALUES ('ahmed')");
// mysqli_query($conn,"DELETE FROM `user` WHERE id = '9'");


// echo mysqli_affected_rows($conn);

// if(mysqli_affected_rows($conn) > 0)
// {
//     echo "inserted";
// }else{
//     echo "error";
// }
// **************************************************************






// **************************************************************

$result = mysqli_query($conn,"SELECT * FROM `user`");

// echo mysqli_num_rows($result); //number of rows

// var_dump(mysqli_fetch_assoc($result));
// echo "<br>";
// var_dump(mysqli_fetch_row($result));
// echo "<br>";
// var_dump(mysqli_fetch_array($result));




// echo "<br>";
// $data = [];
// while($row = mysqli_fetch_assoc($result))
// {
//     $data []= $row;
// }
// var_dump($data);



// $data = [];
// $count = mysqli_num_rows($result);
// for($i = 0 ; $i < $count;$i++)
// {
//     $data []= mysqli_fetch_assoc($result);
// }
// var_dump($data);
// **************************************************************







// task
// **************************************************************

$data = [];
$count = mysqli_num_rows($result);
for($i = 0 ; $i < $count;$i++)
{
    $data []= mysqli_fetch_assoc($result);
}
var_dump($data);


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

<h2>Users</h2>

<table>
  <tr>
    <th>id</th>
    <th>name</th>
  </tr>

  <?php 
  foreach ($data as $user) {
      ?>
    <tr>
        <td><?php echo $user['id'] ?></td>
        <td><?php echo $user['name'] ?></td>
    </tr>
    <?php
  }
  ?>
</table>

</body>
</html>

<?php
// **************************************************************