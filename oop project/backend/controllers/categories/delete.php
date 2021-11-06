<?php
session_start();
include '../../Helper.php';
use OOP\HelperNS\Helper;
use OOP\Modules\Category;

Helper::autoLoader();

header('Access-Control-Allow-Origin: http://localhost:8080');
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json");


if(!empty($_GET['id']))
{
    $data = Category::delete($_GET['id']);
}
else
{
    $data = false;
}

if($data)
{
    $_SESSION['msg'] = [
        'text' => "Category Deleted",
        'flag' => true
    ];
}
else
{
    $_SESSION['msg'] = [
        'text' => "There was an error",
        'flag' => false
    ];
}

Helper::redirect('../../dashboard/pages/categories.php');