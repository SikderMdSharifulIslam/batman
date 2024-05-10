<?php 
session_start();
//print_r($_POST); //to check if all data get from the form or not
require '../db.php';

$sub_title = $_POST['sub_title'];
$title = $_POST['title'];
$desp = $_POST['desp'];

$uploaded_file = $_FILES['banner_image'];
$after_explode = explode('.',$uploaded_file['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'gif');

if(in_array($extension, $allowed_extension))
{
    if($uploaded_file['size'] <= 1000000)
    {      
        $insert = "INSERT INTO banners (sub_title, title, desp) VALUES ('$sub_title', '$title', '$desp')";
        $insert_result = mysqli_query($db_connect, $insert);
        $banner_id = mysqli_insert_id($db_connect);
        $file_name = $banner_id.'.'.$extension;

        // echo $banner_id;

        // die();

        $new_location = '../uploads/banner/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);

        $update_image = "UPDATE banners SET banner_image='$file_name' WHERE id=$banner_id";
        $update_image_result = mysqli_query($db_connect, $update_image);
        $_SESSION['success'] = "Banner Added!";
        // echo "Ban";
        // die();

        header('location:add_banner.php');
    }
    else
    {
        $_SESSION['size'] = "File size is too large! Max Size 1MB.";
        header('location:add_banner.php');
    }
}
else
{
    $_SESSION['invalid_extension'] = "Invalid Extension";
    header('location:add_banner.php');
}

echo "Success";

?>