<?

session_start();

$_SESSION['is_logged_in'] = false;

header('location:../index.php');