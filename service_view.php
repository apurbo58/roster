<?php
session_start();

    require_once 'auth_checking.php'; //authentication checking
    $title = "Service Entry";
    require_once 'includes/dashboard/header.php';
    require 'includes/dashboard/sidebar.php';

    $service_select_query = "SELECT * FROM services";
    $services_from_db = mysqli_query($db_connect, $service_select_query );
    
    $active_service_count_query = "SELECT COUNT(*) AS active_count FROM services WHERE service_status = 2";
    $active_services_from_db = mysqli_query($db_connect, $active_service_count_query );

?>

<div class="container-fluid service_container" >
    <div class="card">
        <div class="card-header">
            <h1 style="font-weight: bold;">Services Entry</h1>
        </div>
        <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <h2>Service List (Active : <?=mysqli_fetch_assoc($active_services_from_db)['active_count']?>)</h2>
                <?php if(isset($_SESSION["service_error"])):?>
                    <div class="alert alert-danger text-center">
                        <?=$_SESSION["service_error"]?>
                    </div>
                <?php 
                    endif;
                    unset($_SESSION["service_error"]);
                ?>
                <hr>
                <table class="table" id="testvai">
                    <thead>
                        <tr>
                        <th scope="col">Serial No.</th>
                        <th scope="col">Service Icon</th>
                        <th scope="col">Service Title</th>
                        <th scope="col">Service Description</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $serial=1;
                            foreach ($services_from_db as $services):
                        ?>
                            <tr>
                                <td><?= $serial++?></td>
                                <td><i style="text-align: center;" class="<?= $services['service_icon']?>"></i></td>
                                <td><?= $services['service_title'] ?></td>
                                <td><?= $services['service_description'] ?></td>
                                <td>
                                    <?php if($services['service_status'] == 1): ?>
                                        <a href="service_status_change.php?service_id=<?= $services['id']?>&btn=active" 
                                        type="button" name="button" class="btn btn-success btn-sm">Active</a>
                                    <?php endif; ?>

                                    <?php if($services['service_status'] == 2): ?>
                                        <a href="service_status_change.php?service_id=<?= $services['id']?>&btn=deactive" 
                                        type="button" name="button" class="btn btn-warning btn-sm">Deactive</a>
                                    <?php endif; ?>

                                  
                                  
                                  <?php
                                    if($_SESSION['role'] == 1):
                                    ?>

                                    <a href="service_edit.php?service_id=<?= $services['id']?>" 
                                     type="button" name="button" class="btn btn-info btn-sm">Edit</a>
                                     
                                    <button class="btn btn-sm btn-danger delete_btn" type="button" name="button" 
                                    value="service_delete.php?service_id=<?= $services['id']?>">Delete</button>

                                  <?php  
                                    endif;
                                    ?>
                                </td>
                            </tr>
                        <?php endforeach;?>

                        <?php
                            if($services_from_db->num_rows == 0){
                        ?>
                            <tr>
                                <td colspan="6" class="text-center text-danger">No Services Added ! </td>
                            </tr>
                        <?php 
                        }
                        ?> 
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <form method="post" action="service_post.php">
                <h2>Add Service</h2>
                <hr>
                    <div class="form-group">
                        <label>Service Icon</label>
                        <input type="text" class="form-control" name="service_icon">
                    </div>
                    <div class="form-group">
                        <label>Service Title</label>
                        <input type="text" class="form-control" name="service_title" required>
                    </div>
                    <div class="form-group">
                        <label>Service Description</label>
                        <textarea class="form-control" id="" cols="" rows="5" name="service_description"></textarea>
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
</div>



<?php
    require_once 'includes/dashboard/footer.php';
?>

<script type="text/javascript">
      $(document).ready( function () {
        $('.delete_btn').click(function(){
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.value) {
                var apurbo = $(this).val();
                window.location.href = apurbo;
                
            }
            })
        })
} );
</script>