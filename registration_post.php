<?php
session_start();
// print_r($_POST);


$name = $_POST['name'];
$email_address = $_POST['email_address'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$flag = false;

if($name)
{
    // if(ctype_alpha($name)) //ctype_alpha limitations = no space allowed
    if(preg_match("/^[a-zA-Z .]+$/", $name)) //a-z then A-Z then space then dot is allowed here
    // { //worked
    {
        echo "Name Thik ache!";
        $_SESSION['old_name'] = $name;
    }
    else
    {
        $flag=true;
        $_SESSION['name_error'] = "Invalid Name, use only alphabets!";    
    }
}
else
{
    $flag=true;
    $_SESSION['name_error'] = "Name is required!";
}


if($email_address)
{
    if(filter_var($email_address, FILTER_VALIDATE_EMAIL))
    {
        echo "Email Thik ache!";
        $_SESSION['old_email'] = $email_address;
    }
    else
    {
        $flag=true;
        $_SESSION['email_error'] = "Email Format Invalid!";
    }
}
else
{
    $flag=true;
    $_SESSION['email_error'] = "Email is required!";
}
if($password)
{
    echo "Password ache!";
}
else
{
    $flag=true;
    $_SESSION['password_error'] = "Password is required!";
}
if($confirm_password)
{
    echo "Confirm Password ache!";
}
else
{
    $flag=true;
    $_SESSION['confirm_password_error'] = "Confirm password is required!";
}

if($password != $confirm_password)
{
    $flag=true;
    $_SESSION['confirm_password_error'] = "Password doesn't matched!";
}
else
{
    echo "Password Matched!";
}
// if($password == $confirm_password)
// {
//     echo "Thik ache!";
// }
// else
// {
//     $flag=true;
//     $_SESSION['confirm_password_error'] = "Password doesn't matched!";
// }

if($flag)
{
    header('location: registration.php');
}
else
{
    $db_connect = mysqli_connect('localhost','root','','batman');
    $encripted_password = md5($password);
    $insert_query = "INSERT INTO users (name, email_address, password) VALUES ('$name','$email_address','$encripted_password')";
    mysqli_query($db_connect, $insert_query);
    $_SESSION['registration_status'] = "Seccessfully Registered!"; 
    header('location: login.php');
    echo"All Good";
}

?>