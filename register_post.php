<?php
session_start();
    require 'includes/db.php';

    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = md5($_POST['user_password']);
    $role = $_POST['role'];

    $check_query = "SELECT * FROM users WHERE user_email = '$user_email'";
    $checking_data_from_db = mysqli_query($db_connect,$check_query);
    if($checking_data_from_db->num_rows == 1){
        echo "Email Already Taken !";
    }
    else{
           $insert_query = "INSERT INTO users (user_name, user_email, user_password, role) 
                             VALUES ('$user_name', '$user_email', '$user_password', $role)";
    mysqli_query($db_connect, $insert_query);
    
    $_SESSION['register_suc'] = "Register Successful !";
    header('location: login.php');
    }

?>
