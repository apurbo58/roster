<?php
session_start();
    require 'includes/db.php';
    

    $user_email = $_POST['user_email'];
    $user_password = md5($_POST['user_password']);

    

    $login_query = "SELECT * FROM users WHERE user_email ='$user_email' AND user_password = '$user_password'";
    $data_from_db = mysqli_query($db_connect,$login_query);

    if($data_from_db->num_rows == 1){
        $_SESSION['login'] = 'Login Successful';
        $_SESSION['session_email'] = $user_email;
        $_SESSION['role'] = mysqli_fetch_assoc($data_from_db)['role'];
        header("location: dashboard.php");
    }
    else{
        $_SESSION['login_error'] = "Something went wrong !";
        header("location: login.php");
    }
?>