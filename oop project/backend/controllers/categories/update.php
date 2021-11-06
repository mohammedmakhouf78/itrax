<?php
session_start();
include '../../Helper.php';
use OOP\HelperNS\Helper;
use OOP\Modules\Category;

Helper::autoLoader();

header('Access-Control-Allow-Origin: http://localhost:8080');
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json");


if(!empty($_POST['category']))
{
    $data = Category::update([
        'id' => $_POST['id'],
        'category' => $_POST['category']
    ]);
}
else
{
    $data = false;
}

if($data)
{
    $_SESSION['msg'] = [
        'text' => "Category Updated",
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