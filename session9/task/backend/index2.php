<?php

include "./DB.php";
include "./tables/User.php";
/*
    INSERT INTO `blogs`(`id`, `title`, `created_at`, `description`, `image`, `user`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
*/

// INSERT INTO `blogs` (`title`),(`created_at`),(`description`),(`user`),
$arr =[
    'name' => "d",
    'email' => "d@d.com",
    'password' => '123456'
];
$user1 = new User();
$data = $user1->update($arr,13);
var_dump($data);
// $d->insert('user',$arr);
