<?php

include '../../Helper.php';
use OOP\HelperNS\Helper;
use OOP\Modules\Blog;

Helper::autoLoader();

header('Access-Control-Allow-Origin: http://localhost:8080');
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json");



$data = Blog::getAllBlogs();

