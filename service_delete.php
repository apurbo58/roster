<?php
    require 'includes/db.php';
    $service_id = $_GET['service_id'];
    $hard_delete_query = "DELETE FROM services WHERE id = $service_id";
    mysqli_query($db_connect, $hard_delete_query);
    header('location: service_view.php');
?>