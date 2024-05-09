<?php

session_start();
$db_connect = mysqli_connect('localhost', 'root', '', 'batman');

$_password = md5($_POST['password']);
$id =$_POST['id'];

$update = "UPDATE users SET password='$_password' WHERE id=$id";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['pass'] = "Password Updated!";
header('location:profile.php');

?>