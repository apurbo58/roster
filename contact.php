<?php
    require 'includes/header.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-white" >
                    <div class="card-header bg-success text-center"><h1>Contact</h1></div>
                    <div class="card-body text-success">
                        <form method= "post" action="contact_post.php">
                            <div class="form-group">
                                <label >Name</label>
                                <input type="text" class="form-control" placeholder="Enter Your Name" Name="visitor_name">
                            </div>
                            <div class="form-group">
                                <label >Email</label>
                                <input type="text" class="form-control" placeholder="Enter Your Email" Name="visitor_email">
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" rows="5" Name="visitor_message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    require 'includes/footer.php';
?>