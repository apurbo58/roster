<?php
session_start();

    require_once 'auth_checking.php'; //authentication checking
    $title = "Portfolio Edit";
    require_once 'includes/dashboard/header.php';
    require 'includes/dashboard/sidebar.php';
    $portfolio_id = $_GET['portfolio_id'];
    $portfolio_select_query = "SELECT * FROM portfolios WHERE id=$portfolio_id";
    $portfolio_from_db = mysqli_query($db_connect, $portfolio_select_query );
    $after_assoc = mysqli_fetch_assoc($portfolio_from_db);
    print_r($after_assoc);

?>


<div class="container-fluid service_container" >
    <div class="col-md-4 m-auto">
        <form method="post" action="portfolio_edit_post.php" enctype="multipart/form-data">
            <h2>Add Service</h2>
            <hr>
                <div class="form-group">
                    <label>Portfolio Name</label>
                    <input type="hidden" name="portfolio_id" value="<?=$portfolio_id?>">
                    <input type="text" class="form-control" name="portfolio_name" value="<?=$after_assoc['portfolio_name']?>">
                </div>
                <div class="form-group">
                    <label>Portfolio Information</label>
                    <input type="text" class="form-control" name="portfolio_information" value="<?=$after_assoc['portfolio_information']?>" required> 
                </div>
                <div class="form-group">
                    <label>Old Portfolio Image</label>
                    <br>
                    <img style="width:350px;"  
                         src="/roster/uploads/portfolio/<?=$after_assoc['portfolio_image']?>" alt="Not Found ! ">
                    <br>     
                    <input type="file" class="form-control" name="portfolio_image">
                    <!-- <textarea class="form-control" id="" cols="" rows="5" name="service_description"></textarea> -->
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            
        </form>
    </div>
</div>


<?php
    require_once 'includes/dashboard/footer.php';
?>