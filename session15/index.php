<?php
//dsn is =>> data source name
$dsn = "mysql:host=localhost;dbname=itrax_mysqli;charset=UTF8;port=3309";
$conn = new PDO($dsn,'mohammed','');

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// $res = $conn->query("select * from user");

// $x = $res->fetchAll(PDO::FETCH_ASSOC);


$sql = 'DELETE FROM user where id = :id';

$query = $conn->prepare($sql);
$id = 13;
$query->bindParam(":id",$id,PDO::PARAM_INT);

$query->execute();