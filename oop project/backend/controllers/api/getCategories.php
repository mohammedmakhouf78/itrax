<?php
include '../../Helper.php';
use OOP\HelperNS\Helper;
Helper::autoLoader();
use OOP\Modules\Category;

header('Access-Control-Allow-Origin: http://localhost:8080');
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json");



$data = Category::getAll();

echo json_encode(Helper::makeResponse($data));