<?php 
include_once('user.php');

if(isset($_POST['username']) AND isset($_POST['email'])){
    $user = new User();
    $result = $user->createUserAccount($_POST['username'],$_POST['email'],$_POST['password'],$_POST['usertype']);
    echo $result;
}


if(isset($_POST['log_email']) AND isset($_POST['log_password'])){
    $user = new User();
    $result = $user->userLogin($_POST['log_email'],($_POST['log_password']));
    echo $result;
}
?>