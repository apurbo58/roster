<?php
session_start();

    require_once 'auth_checking.php'; //authentication checking
    require_once 'role_checking.php'; //Role checking
    require_once 'includes/dashboard/header.php';
    require 'includes/dashboard/sidebar.php';

    $service_id = $_GET['service_id'];
    $get_query = "SELECT * FROM services WHERE id = $service_id";
    $from_db = mysqli_query($db_connect, $get_query);
    $after_assoc = mysqli_fetch_assoc($from_db);
    // print_r($after_assoc);
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="service_view.php">Services</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?=$after_assoc['service_title'] ?></li>
    </ol>
    </nav>
    <div class="row">
        <div class="col-md-4 m-auto">
            <form method="post" action="service_edit_post.php">
                    <input type="hidden" name="service_id" value="<?=$service_id?>" >
                <h2 style="text-align: center;" >Edit Service</h2>
                <hr>
                    <div class="form-group">
                        <label>Service Icon</label>
                        <input type="text" class="form-control" name="service_icon" value="<?=$after_assoc['service_icon'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Service Title</label>
                        <input type="text" class="form-control" name="service_title" value="<?=$after_assoc['service_title'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Service Description</label>
                        <textarea class="form-control" id="" cols="" rows="5" name="service_description"><?=$after_assoc['service_description'] ?></textarea>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
</div>



<?php
    require_once 'includes/dashboard/footer.php';
?>