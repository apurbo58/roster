<?php
    require 'includes/header.php';

    require 'includes/db.php';
    $read_query = "SELECT * FROM contact_messages WHERE delete_status = 2";
    $datas = mysqli_query($db_connect, $read_query);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card text-white" >
                <div class="card-header bg-success text-center"><h1>Contact Restore View</h1></div>
                <div class="card-body text-success">
                <!-- TABLE SECTION  -->
                <table class="table table-dark">
                    <thead>
                        <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                        <th scope="col">Action Test Git</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $serial = 1;
                            foreach ($datas as $data) {
                        ?>
                        <tr>
                            <td><?=$serial++?></td>
                            <td><?=$data['visitor_name']?></td>
                            <td><?=$data['visitor_email']?></td>
                            <td><?=$data['visitor_message']?></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="contact_restore.php?id=<?=$data['id']?>" type="button" class="btn btn-secondary btn-sm btn-success">Restore</a>
                                    <a href="contact_hard_delete.php?id=<?=$data['id']?>" type="button" class="btn btn-secondary btn-sm btn-danger">Forever Delete</a>
                                </div>
                            </td>
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


<?php
    require 'includes/footer.php';
?>