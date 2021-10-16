<?php

include '../tables/Blogs.php';

// header("Access-Control-Allow-Methods: GET"); // has no effect for some reson
header("access-control-allow-origin: *" ); // didn't work before this

$blogs = new Blogs();
$data = $blogs->selectAll();


echo json_encode($data);