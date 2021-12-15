<?php
session_start();

    require_once 'auth_checking.php'; //authentication checking
    $title = "Add Portfolio Items";
    require_once 'includes/dashboard/header.php';
    require 'includes/dashboard/sidebar.php';

    $portfolio_select_query = "SELECT * FROM portfolios";
    $portfolios_from_db = mysqli_query($db_connect, $portfolio_select_query );

?>

<div style="margin-top: 10px;" class="container-fluid">
    <div class="row">
        <div class="col-md-8">
        <table class="table" id="portfolio_table">
                    <thead>
                        <tr>
                        <th scope="col">Serial No.</th>
                        <th scope="col">portfolio Name</th>
                        <th scope="col">portfolio Description</th>
                        <th scope="col">portfolio Image</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $serial=1;
                            foreach ($portfolios_from_db as $portfolio):
                        ?>
                            <tr>
                                <td><?= $serial++?></td>
                                <td><?= ucwords(strtolower($portfolio['portfolio_name'])) ?></td>
                                <td><?= $portfolio['portfolio_information'] ?></td>
                                <td>
                                <img style="width:50px; height:50px; object-fit : cover; border-radius:50px;" 
                                        src="/roster/uploads/portfolio/<?= $portfolio['portfolio_image'] ?>" 
                                        alt="<?= $portfolio['portfolio_image'] ?>">
                                </td>
                                
                                <td> 
                                    <a href="portfolio_edit.php?portfolio_id=<?= $portfolio['id']?>" 
                                    type="button" name="button" class="btn btn-info btn-sm">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach;?>

                        <?php
                            if($portfolios_from_db->num_rows == 0){
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
                <form method="post" action="portfolio_post.php" enctype="multipart/form-data">
                <h2>Add Portfolio</h2>
                <hr>
                    <div class="form-group">
                        <label>Portfolio Name</label>
                        <input type="text" class="form-control" name="portfolio_name">
                    </div>
                    <div class="form-group">
                        <label>Portfolio Information</label>
                        <textarea class="form-control" id="" cols="" rows="5" name="portfolio_information"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Portfolio Image</label>
                        <input type="file" class="form-control" name="portfolio_image">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    
                </form>
            </div>
    </div>
</div>


<?php
    require_once 'includes/dashboard/footer.php';
?>
<script type="text/javascript">
    $(document).ready( function () {
    $('#portfolio_table').DataTable({
        "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]]
    });
    } );
</script>