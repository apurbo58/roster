<?php
    
    require 'includes/db.php';

    if(empty($_POST['visitor_name'])){
        echo "Please input your name";
    }
    else if(empty($_POST['visitor_email'])){
        echo "Please input your email";
    }
    else if(!filter_var($_POST['visitor_email'], FILTER_VALIDATE_EMAIL)){
        echo "Provide a validate email.";
    }
    else if(empty($_POST['visitor_message'])){
        echo "Please input your message";
    }
    else{

        $visitor_name = $_POST['visitor_name'];
        $visitor_email = $_POST['visitor_email'];
        $visitor_message = $_POST['visitor_message'];

        // database connect on db.php (require tag on the 1st of this page)

        $insert_query = "INSERT INTO contact_messages (visitor_name, visitor_email, visitor_message) 
                                VALUES ('$visitor_name', '$visitor_email', '$visitor_message')";
        
        mysqli_query($db_connect, $insert_query);

        header("location: contact_view.php");

    }
    
?>
