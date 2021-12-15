<?php 
    require 'includes/db.php';
    if($_FILES['portfolio_image']['name'] ){

            $file_name = $_FILES['portfolio_image']['name']; // Photo name in a Variable
            $after_explode = explode(".",$file_name);
            $file_extension = end($after_explode); // Get the original extension 
            $excepted_extension = array("jpg", "jpeg","png","JPG","JPEG","PNG"); // Supported extension list

            if(in_array($file_extension, $excepted_extension)){ //Support or not
                if($_FILES['portfolio_image']['size'] <= 5000000){ //File size check
                    //Database insert  
                    $portfolio_name = $_POST['portfolio_name'];
                    $portfolio_information = $_POST['portfolio_information'];
                    $portfolio_insert_query = "INSERT INTO portfolios (portfolio_name, portfolio_information) 
                                                VALUES ('$portfolio_name','$portfolio_information' )" ;
                    mysqli_query($db_connect,$portfolio_insert_query );
                    $last_id = mysqli_insert_id($db_connect); //Get the latest inserted ID
                    
                    $new_file_name = $last_id.".".$file_extension; //new file creation
                    $new_location = "uploads/portfolio/".$new_file_name;
                    move_uploaded_file($_FILES['portfolio_image']['tmp_name'], $new_location);
                    //update query
                    $portfolio_update_query = "UPDATE portfolios SET portfolio_image = '$new_file_name' WHERE id = $last_id "; 
                    mysqli_query($db_connect,$portfolio_update_query );
                    header('location: portfolio_view.php');

                }else{
                    echo "File size unsuported";
                }
            }else{
                echo "nai";
            }
            
    }else{
        echo  "Please Upload a photo";
    }
    
?>