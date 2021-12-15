<?php
     require 'includes/db.php';
    $service_icon = $_POST['service_icon'];
    $service_title =htmlentities($_POST['service_title'],ENT_QUOTES) ; // Converts double and single quotes
    $service_description =htmlentities($_POST['service_description'], ENT_QUOTES) ; // Converts double and single quotes

    $insert_service_query = "INSERT INTO services (service_icon, service_title, service_description) 
                                VALUES ('$service_icon', '$service_title', '$service_description')";
        
        mysqli_query($db_connect, $insert_service_query);

        header("location: service_view.php");
?>