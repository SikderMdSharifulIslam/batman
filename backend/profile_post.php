<?php

// print_r($_POST); j page er shathe link kora oi file er kono button e click korle post method er maddhome button er name deya thakle shetar name dekhabe.

session_start();
$db_connect = mysqli_connect('localhost', 'root', '', 'batman');


if(isset($_POST['change_name']))
{
    $name=$_POST['name'];
    $id=$_SESSION['id'];
    // echo $name;
    // die();
    $name_update_query = "UPDATE users SET name='$name' WHERE id=$id";
    mysqli_query($db_connect, $name_update_query);
    $_SESSION['s_name'] = $name;
    header('location:profile.php');
}
if(isset($_POST['upload_photo']))
{
    echo "photo uploaded";
}

?>