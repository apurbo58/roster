<?php
session_start();

    require_once 'auth_checking.php'; //authentication checking
    $title = "Profile";
    require_once 'includes/dashboard/header.php';
    require 'includes/dashboard/sidebar.php';

?>

<div class="container-fluid service_container" >
    <div class="row">
        <div class="col-md-3 m-auto">
            <form method="post" action="profile_post.php">
                <h2>Change Password</h2>
                <hr>
                    <div class="form-group">
                        <label>Old Pass</label>
                        <input type="password" class="form-control" name="old_password">
                    </div>
                    <div class="form-group">
                        <label>New Pass</label>
                        <input type="password" class="form-control" name="new_password">
                    </div>
                    <div class="form-group">
                        <label>Re Type New Pass</label>
                        <input type="password" class="form-control" name="confirm_password">
                    </div>
                    <button type="submit" class="btn btn-primary">Change Password</button>
                    
            </form>
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