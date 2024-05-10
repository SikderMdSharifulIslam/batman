<?php 

require '../db.php';

// $id = $_GET['id'];
// echo $id;


$id = $_GET['id']; //URL theke kisu nite hole get use hoy

$select = "SELECT * FROM banners WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);

if($after_assoc['status']==1)
{
    $update = "UPDATE banners SET status=0 WHERE id=$id";
    $update_result = mysqli_query($db_connect, $update);
    header('location:view_banner.php');
}
else
{
    $update_all = "UPDATE banners SET status=0";
    $update_all_result = mysqli_query($db_connect, $update_all);
    
    $update = "UPDATE banners SET status=1 WHERE id=$id";
    $update_result = mysqli_query($db_connect, $update);
    header('location:view_banner.php');
}

?>