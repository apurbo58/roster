<?php 
session_start();
require 'includes/db.php';
$new_password = md5($_POST['new_password']);

if(empty($_POST['old_password']) || empty($_POST['new_password']) || empty($_POST['confirm_password'])){
    echo "Please Fill Up the Form !";
}
else if($_POST['new_password'] == $_POST['old_password']){
    echo "New Pass cant be Old pass";
}
else if($_POST['new_password'] == $_POST['confirm_password']){
    $old_password = md5($_POST['old_password']);
    $user_email = $_SESSION['session_email'];
    $check_query = "SELECT COUNT(*) AS total FROM users WHERE user_email = '$user_email' AND user_password = '$old_password'";
    $from_db = mysqli_query($db_connect, $check_query);

    if(mysqli_fetch_assoc($from_db)['total'] == 1 ){
        $password_update_query = "UPDATE users SET user_password = '$new_password' WHERE user_email = '$user_email' ";
        mysqli_query($db_connect, $password_update_query );
        echo "Login Done";
    }else{
        echo "FAILED";
    }
}
// else{
//     echo "asdad";
// }

?>