<?

setcookie('is_logged_in',false,time() + 1,'/');
setcookie('name',"",time() - 100,'/');
setcookie('email',"",time() - 100,'/');
setcookie('pass',"",time() - 100,'/');

header('location:../index.php');