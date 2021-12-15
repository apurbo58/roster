<?php
session_start();
    
    require_once 'auth_checking.php';
    $title = "Dashboard";
    require_once 'includes/dashboard/header.php';
    require 'includes/dashboard/sidebar.php'
?>

    

<div class="container-fluid">
    <div class="page-head">
        <h4 class="mt-2 mb-2">Dashboard</h4>
    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-sm-3">
                    <div class="widget-box bg-white m-b-30">
                        <div class="row d-flex align-items-center">
                            <div class="col-4">
                                <div class="text-center"><i class="ti ti-user"></i></div>
                            </div>
                            <div class="col-4">
                                <div class="dynamicbar">Loading..</div>
                            </div>
                            <div class="col-4">
                                <!-- showing TOTAL USERS from DATABASE  -->
                                <!-- showing TOTAL USERS from DATABASE  -->
                                <!-- showing TOTAL USERS from DATABASE  -->     
                                <h2 class="m-0 counter">
                                <?php
                                $count_query= "SELECT COUNT(*) AS total_users FROM users";
                                $count_from_db = mysqli_query($db_connect,$count_query);
                                print_r(mysqli_fetch_assoc($count_from_db)['total_users'] );
                                ?>
                                </h2>
                                <p>Total Users</p> 
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="widget-box bg-white m-b-30">
                        <div class="row d-flex align-items-center text-center">
                            <div class="col-4">
                                <div class="text-center"><i class="ti ti-eye"></i></div>
                            </div>
                            <div class="col-4">
                                <div class="inlinesparkline">Loading..</div>
                            </div>
                            <div class="col-4">
                                <h2 class="m-0 counter">946</h2>
                                <p>Visits Today</p> 
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="widget-box bg-white m-b-30">
                        <div class="row d-flex align-items-center">
                            <div class="col-4">
                                <div class="text-center"><i class="ti ti-money"></i></div>
                            </div>
                            <div class="col-4">
                                <div class="dynamicbar">Loading..</div>
                            </div>
                            <div class="col-4">
                                <h2 class="m-0 counter">548</h2>
                                <p>Visits Today</p> 
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="widget-box bg-white m-b-30">
                        <div class="row d-flex align-items-center">
                            <div class="col-4">
                                <div class="text-center"><i class="ti ti-wallet"></i></div>
                            </div>
                            <div class="col-4">
                                <div class="inlinesparkline">Loading..</div>
                            </div>
                            <div class="col-4">
                                <h2 class="m-0 counter">999</h2>
                                <p>Visits Today</p> 
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div><!--end row-->
    <?php 
        if($_SESSION['role'] == 1){
            echo "Admin";
        }
        else{
            echo "editor";
        }
    ?>
        
            <!-- </div> -->
            <!--end body content-->
        <!-- </section> -->
    
        
<?php
    require_once 'includes/dashboard/footer.php';
?>