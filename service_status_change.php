<?php
session_start();
    require 'includes/db.php';
    $service_id = $_GET['service_id'];
    
    $active_service_count_query = "SELECT COUNT(*) AS active_count FROM services WHERE service_status = 2";
    $active_services_from_db = mysqli_query($db_connect, $active_service_count_query );

    
if($_GET['btn'] == 'active'){
    if(mysqli_fetch_assoc($active_services_from_db)['active_count'] < 6){
        $update_query = "UPDATE services SET service_status = 2 WHERE id = $service_id";
    }
    else{
        $_SESSION["service_error"] = "You Cannot Active More Than 6 Items ! ";
        header('location: service_view.php');
    }

   
}
else{
    $update_query = "UPDATE services SET service_status = 1 WHERE id = $service_id";
}

mysqli_query($db_connect, $update_query);
header('location: service_view.php');
?>