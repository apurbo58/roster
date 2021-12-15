<?php
session_start();

    require_once 'auth_checking.php'; //authentication checking
    require_once 'includes/dashboard/header.php';
    require 'includes/dashboard/sidebar.php';
    // require 'includes/db.php';     ///////As the database is already connected on includes/dashboard/header.php
    $read_query = "SELECT * FROM contact_messages WHERE delete_status = 1";
    $datas = mysqli_query($db_connect, $read_query);
    
    // $total_count_query = "SELECT COUNT(*) AS total_message FROM contact_messages";
    // $total_count_from_db = mysqli_query($db_connect,$total_count_query);
    // print_r(mysqli_fetch_assoc($total_count_from_db));

    $total_count_query = "SELECT COUNT(*) AS total_message FROM contact_messages";
    $total_count_from_db = mysqli_query($db_connect,$total_count_query);
    $total_messages = mysqli_fetch_assoc($total_count_from_db);
    // echo $total_messages['total_message'];
    
    // UNREAD QUERY
    $total_unread_query = "SELECT COUNT(*) AS unread_message FROM contact_messages WHERE status = 1";
    $total_unread_from_db = mysqli_query($db_connect,$total_unread_query);
    $total_unread = mysqli_fetch_assoc($total_unread_from_db);
    // READ QUERY
    $total_read_query = "SELECT COUNT(*) AS read_message FROM contact_messages WHERE status = 2";
    $total_read_from_db = mysqli_query($db_connect,$total_read_query);
    $total_read = mysqli_fetch_assoc($total_read_from_db);
    
    // SOFT DELETE QUERY
    $total_soft_delete_query = "SELECT COUNT(*) AS delete_message FROM contact_messages WHERE delete_status = 2";
    $total_soft_delete_from_db = mysqli_query($db_connect,$total_soft_delete_query);
    $total_soft_delete = mysqli_fetch_assoc($total_soft_delete_from_db);
    
    // foreach ($datas as $cont_itms) {
    //     print_r($cont_itms['visitor_name']);
    //     print_r($cont_itms['visitor_email']);
    //     print_r($cont_itms['visitor_message']);
    // }
    
    ?>
<!-- <div class="container"> -->
        <div class="row">
            <div class="col-md-3">
                <h1> <a href="contact_restore_view.php">Total : </a><?= $total_messages['total_message']?> </h1>
            </div>
            <div class="col-md-3">
                <h1>Soft Delete : <?= $total_soft_delete['delete_message']?> </h1>
            </div>
            <div class="col-md-3">
                <h1>Unread : <?= $total_unread['unread_message']?></h1>
            </div>
            <div class="col-md-3">
                <h1>Read : <?= $total_read['read_message']?></h1>
            </div>
            <div class="col-md-12">
            <!-- Header CARD SECTION  -->
                <div class="card " >
                    <div class="card-header bg-success text-center"><h1>Contact View</h1></div>
                    <div class="card-body ">
                    <!-- TABLE SECTION  -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Messages</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $serial = 1;
                                    foreach ($datas as $cont_itms):
                                ?>
                                    <tr class="
                                        <?php 
                                            if($cont_itms['status'] == 1){
                                                echo "bg-success";
                                            }
                                        ?>
                                    ">
                                    <td><?=$serial++ ?></td>
                                    <td><?=$cont_itms['id']?></td>
                                    <td><?=$cont_itms['visitor_name']?></td>
                                    <td><?=$cont_itms['visitor_email']?></td>
                                    <td><?=$cont_itms['visitor_message']?></td>
                                    <td>
                                        <?php if($cont_itms['status'] == 1){ ?>
                                            <a href="contact_read.php?id=<?=$cont_itms['id']?>" type="button" class="btn btn-primary">Read</a>
                                        <?php } ?>
                                        <a href="contact_delete.php?id=<?=$cont_itms['id']?>" class="btn btn-primary bg-danger" >Delete</a>
                                    </td>
                                    </tr>
                               <?php
                                    endforeach;
                               ?>

                               <?php
                                if($datas->num_rows == 0){
                                    ?>
                                    <tr>
                                        <td colspan="6" class="text-center text-danger">Nothing to show ! </td>
                                    </tr>
                                <?php 
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<!-- </div> -->


    <?php
    require_once 'includes/dashboard/footer.php';
?>