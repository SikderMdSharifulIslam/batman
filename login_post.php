<?php

session_start();

$email_address = $_POST['email_address'];
$password = md5($_POST['password']);
$db_connect = mysqli_connect('localhost', 'root', '', 'batman');

$select_count_quary = "SELECT COUNT(*) AS result FROM users WHERE email_address='$email_address'AND password='$password'";

$from_db = mysqli_query($db_connect, $select_count_quary);

if (mysqli_fetch_assoc($from_db)['result'] == 1) {
    $select_quary = "SELECT id, name, email_address FROM users WHERE email_address='$email_address'";
    $result_from_db = mysqli_query($db_connect, $select_quary);
    
    $after_assoc = mysqli_fetch_assoc($result_from_db);
    $_SESSION['s_email_address'] = $after_assoc['email_address'];
    $_SESSION['s_name'] = $after_assoc['name'];
    $_SESSION['id'] = $after_assoc['id'];

    header('location:backend/dashboard.php');
    echo "Welcome to login page";
} else {
    echo "Wrong Credential";
}
