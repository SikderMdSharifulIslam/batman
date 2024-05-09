<?php

session_start();

$db_connect = mysqli_connect('localhost', 'root', '', 'batman');

$uploaded_file = $_FILES['profile_photo']; 

$after_explode = explode('.', $uploaded_file['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg','png','jpeg','gif');

if(in_array($extension, $allowed_extension))
{
    if($uploaded_file['size']<= 1000000)
    {
        $user_id = $_SESSION['id'];
        $file_name = $user_id.'.'.$extension;
        $new_location = '../uploads/profile/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);

        $update_photo = "UPDATE users SET profile_photo='$file_name' WHERE id=$user_id";
        $update_photo_result = mysqli_query($db_connect, $update_photo);

        $_SESSION['photo'] = "Profile Photo Updated!";
        header('location:profile.php');
    }
    else
    {
        $_SESSION['size'] = "File Size Too Large! Max Size 1 MB";
        header('location:profile.php');    
    }
}
else{
    $_SESSION['extension'] = "Invalid Extension! Allowed extension (jpg, png, jpeg, gif)";
    header('location:profile.php');
}

?>