<?php 
    require 'includes/db.php';
    $portfolio_id = $_POST['portfolio_id'];
    $portfolio_name = $_POST['portfolio_name'];
    $portfolio_information = $_POST['portfolio_information'];
    
    if($_FILES['portfolio_image']['name']){
        // delete old photo code starts
        $photo_name_from_db = "SELECT portfolio_image FROM portfolios WHERE id = $portfolio_id";
        $old_photo_name = mysqli_fetch_assoc(mysqli_query($db_connect, $photo_name_from_db))['portfolio_image'];
        $old_photo_location = 'uploads/portfolio/'.$old_photo_name;
        unlink($old_photo_location);
        // delete old photo code ends
        $file_name = $_FILES['portfolio_image']['name']; // Photo name in a Variable
        $after_explode = explode(".",$file_name);
        $new_file_extension = end($after_explode); // Get the original extension 
        $new_file_name = $portfolio_id.".".$new_file_extension;
        $new_file_location = 'uploads/portfolio/'.$new_file_name;
        move_uploaded_file($_FILES['portfolio_image']['tmp_name'], $new_file_location);
        $new_photo_name_update_query = "UPDATE portfolios SET portfolio_image = '$new_file_name' WHERE id = $portfolio_id";
        mysqli_query($db_connect,$new_photo_name_update_query); 
        header('location: portfolio_view.php');
    }
    
        $update_query = "UPDATE portfolios SET portfolio_name = '$portfolio_name', portfolio_information = '$portfolio_information' 
        WHERE id = $portfolio_id ";
        mysqli_query($db_connect,$update_query);
        header('location: portfolio_view.php');
    
?>  