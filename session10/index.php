<?php

include 'DB.php';

$uesrs = new DB();

// $data = $uesrs->select('blogs',"id,title")->where("id","=",6)->orWhere('id','=',7)->getAll();


// var_dump($data);

$data = [
    'title' => "blog32",
    'description' => "Jade",
    'created_at' => date("Y/m/d"),
    'image' => 'y.png',
    'user' => 'aaaaaaaaaaaaaa'
];

var_dump($uesrs->select('blogs',"*")->orderBy('title')->limit(3)->getAll());

// echo $uesrs->insert("blogs",$data)->excute();
// echo $uesrs->update('blogs',$data)->where('id',">","31")->excute();
// echo $uesrs->delete('blogs','33')->excute();