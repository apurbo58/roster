<?php
session_start();
    $title = "Login";
    require 'includes/dashboard/header.php';
    
?>

    <body class="sticky-header">
        <section class="bg-login">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="wrapper-page">
                            <div class="account-pages">
                                <div class="account-box">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="card-title text-center">
                                                <img src="includes/dashboard/assets/images/logo_sm_2.png" alt="" class="">
                                                <h5 class="mt-3"><b>Welcome to Syntra</b></h5>
                                            </div> 

                                            <form class="form mt-5 contact-form" method="POST" action="login_post.php">
                                            <?php
                                                if(isset($_SESSION['login_error'])){
                                            ?>
                                            <div style="text-align: center; width: 300px;margin: auto;margin-bottom:15px;" class="alert alert-danger">
                                                <p style="margin-bottom: 0px;">Your Email or Password Is Wrong ! </p>
                                            </div> 
                                            <?php   
                                            }
                                            session_destroy();
                                            ?>

                                            <?php
                                                if(isset($_SESSION['register_suc'])){
                                            ?>
                                            <div style="text-align: center; width: 300px;margin: auto;margin-bottom:15px;padding: 12px;" class="success alert-success">
                                                <p style="margin-bottom: 0px;">Registration Successful ! </p>
                                            </div> 
                                            <?php   
                                            }
                                            ?>

                                                <div class="form-group ">
                                                    <div class="col-sm-12">
                                                        <input class="form-control form-control-line" type="text" placeholder="Email" required="required" name="user_email">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-sm-12">
                                                        <input class="form-control form-control-line" id="password_input" type="password" placeholder="Password" required="required" name="user_password">
                                                        <input type="checkbox" onclick="showPassword()"> Show Password
                                                    </div>
                                                        <!-- JS for Password visibility toogle -->
                                                        <script type="text/javascript">
                                                            function showPassword() {
                                                            var x = document.getElementById("password_input");
                                                            if (x.type === "password") {
                                                                x.type = "text";
                                                            } else {
                                                                x.type = "password";
                                                            }
                                                            }
                                                        </script>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <!-- <label class="cr-styled"> -->
                                                        <label class="">  
                                                            <input type="checkbox" checked>
                                                            <i class="fa"></i> 
                                                            Remember me
                                                        </label>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <div class="col-sm-12 mt-4">
                                                        <button class="btn btn-primary btn-block" type="submit">Log In</button>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-12 mt-4 text-center">
                                                        <a href="recoverpw.html"><i class="fa fa-lock m-r-5"></i> Forgot password?</a>
                                                    </div>
                                                </div>

                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
<?php
    require 'includes/dashboard/footer.php';
?>
