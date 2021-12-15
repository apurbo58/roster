<?php
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
                                                <h5 class="mt-3"><b>Register</b></h5>
                                            </div> 
                                            <form method="POST" action="register_post.php" class="form mt-5 contact-form">
                                                <div class="form-group ">
                                                    <div class="col-sm-12">
                                                        <input class="form-control form-control-line" type="text" placeholder="Name" required="required" name="user_name">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-sm-12">
                                                        <input class="form-control form-control-line" type="email" placeholder="Email" required="required" name="user_email">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-sm-12">
                                                        <input class="form-control form-control-line" type="password" placeholder="Password" required="required" name="user_password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <label for="">Role</label>
                                                        <select class="form-control" name="role" id="">
                                                            <option value="">-- Select A Role --</option>
                                                            <option value="1">Admin</option>
                                                            <option value="2">Editor</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-12">
                                                        <label class="cr-styled">
                                                            <input type="checkbox" checked>
                                                            <i class="fa"></i> 
                                                            I accept <a href="">Terms and Conditions</a>
                                                        </label>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <div class="col-sm-12 mt-4">
                                                        <button class="btn btn-primary btn-block" type="submit">Sign Up Free</button>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-12 mt-4 text-center">
                                                        <a href="pages-login.html">Already have an account ?</a>
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
