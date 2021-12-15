<body class="sticky-header">
        <section>
            <!-- sidebar left start-->
            <div class="sidebar-left">
                <div class="sidebar-left-info">

                    <div class="user-box">
                        <div class="d-flex justify-content-center">
                            <img src="includes/dashboard/assets/images/users/avatar-1.jpg" alt="" class="img-fluid rounded-circle"> 
                        </div>
                        <div class="text-center text-white mt-2">
<!-- Calling USERNAME from DATABASE by SESSION                          -->
<!-- Calling USERNAME from DATABASE by SESSION                          -->
<!-- Calling USERNAME from DATABASE by SESSION                          -->
                            <h6><?php
                                $ses_email = $_SESSION['session_email'];
                                $name_query = "SELECT * FROM users WHERE user_email = '$ses_email'"; 
                                $user_query = mysqli_query($db_connect,$name_query);
                                print_r(mysqli_fetch_assoc($user_query)['user_name']);

                            ?></h6>
                            <p class="text-muted m-0">Admin</p>
                            <br>
                            <a href="logout.php" style="padding: 3px 12px;border-radius: 12px;" 
                                    type="button" class="btn btn-sm btn-outline-danger">Logout</a>
                        </div>
                    </div>   
                                        
                    <!--sidebar nav start-->
                    <ul class="side-navigation">
                        <li>
                            <h3 class="navigation-title">Navigation</h3>
                        </li>
                        <li class="active">
                            <a href="dashboard.php"><i class="mdi mdi-gauge"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="menu-lista">
                            <a href="contact_view.php"><i class="mdi mdi-message-text"></i> <span>Contact Messages</span></a>
                        </li>
                        <li class="menu-lista">
                            <a href="service_view.php"><i class="mdi mdi-buffer"></i> <span>Services</span></a>
                        </li>
                        <li class="menu-lista">
                            <a href="portfolio_view.php"><i class="mdi mdi-buffer"></i> <span>Portfolio</span></a>
                        </li>
                        <li class="menu-lista">
                            <a href="profile.php"><i class="mdi mdi-buffer"></i> <span>Profile Edit</span></a>
                        </li>
                        <li>
                            <h3 class="navigation-title">Components</h3>
                        </li>
                        <li class="menu-lista"><a href=""><i class="mdi mdi-google-circles-extended"></i> <span>Components</span></a>
                        </li>


                        <li class="menu-list"><a href=""><i class="mdi mdi-book-multiple" aria-hidden="true"></i><span>Pages</span></a>
                            <ul class="child-list">                                
                                <li><a href="pages-profile.html">Profile</a></li>
                                <li><a href="pages-timeline.html">Timeline</a></li>
                                <li><a href="pages-invoice.html">Invoice</a></li>
                                <li><a href="pages-contact.html">Contact-list</a></li>
                                <li><a href="pages-login.html">Login</a></li>
                                <li><a href="pages-register.html">Register</a></li>
                                <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                <li><a href="pages-blank.html">Blank Page</a></li>
                                <li><a href="pages-404.html">404 Error</a></li>
                                <li><a href="pages-500.html">500 Error</a></li>
                            </ul>
                        </li>
                    </ul><!--sidebar nav end-->
                </div>
            </div><!-- sidebar left end-->

            <!-- body content start-->
            <div class="body-content">
                <!-- header section start-->
                <div class="header-section">
                    <!--logo and logo icon start-->
                    <div class="logo">
                        <a href="index.html">
                            <span class="logo-img">
                                <img src="includes/dashboard/assets/images/logo_sm.png" alt="" height="26">
                            </span>
                            <!--<i class="fa fa-maxcdn"></i>-->
                            <span class="brand-name">Syntra</span>
                        </a>
                    </div>

                    <!--toggle button start-->
                    <a class="toggle-btn"><i class="ti ti-menu"></i></a>
                    <!--toggle button end-->

                    <!--mega menu start-->
                    <div id="navbar-collapse-1" class="navbar-collapse collapse mega-menu">
                        <ul class="nav navbar-nav">                           
                            <!-- Classic dropdown -->
                            <li class="dropdown">
                                <a href="javascript:;" data-toggle="dropdown" class=""> English <i class="mdi mdi-chevron-down"></i> </a>
                                <ul role="menu" class="dropdown-menu language-switch">
                                    <li>
                                        <a tabindex="-1" href="javascript:;"> German </a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="javascript:;"> Italian </a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="javascript:;"> French </a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="javascript:;"> Spanish </a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="javascript:;"> Russian  </a>
                                    </li>
                                </ul>
                            </li>
                             <!-- Classic list -->
                            <li>
                                <form class="search-content" action="index.html" method="post">
                                    <input type="text" class="form-control mt-3" name="keyword" placeholder="Search...">
                                    <span class="search-button"><i class="ti ti-search"></i></span>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <!--mega menu end-->

                    <div class="notification-wrap">
                        <!--right notification start-->
                        <div class="right-notification">
                            <ul class="notification-menu">
                                <li>
                                    <a href="javascript:;" class="notification" data-toggle="dropdown">
                                        <i class="mdi mdi-bell-outline"></i>
                                        <span class="badge badge-success">4</span>
                                    </a>
                                    <ul class="dropdown-menu mailbox dropdown-menu-right">
                                        <li>
                                          <div class="drop-title">Notifications</div>
                                        </li>
                                        <li class="notification-scroll">
                                            <div class="message-center">
                                                <a href="#">
                                                    <div class="user-img"> 
                                                        <i class="ti ti-star"></i>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Jane A. Seward</h6>
                                                        <span class="mail-desc">Iwon meddle and...</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="user-img">
                                                        <i class="ti ti-heart"></i> 
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Michael W. Salazar</h6>
                                                        <span class="mail-desc">Lovely gide learn for you...</span> 
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="user-img"> 
                                                        <i class="ti ti-image"></i>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>David D. Chen</h6>
                                                        <span class="mail-desc">Send his new photo...</span> 
                                                    </div>
                                                </a> 
                                                <a href="#">
                                                    <div class="user-img"> 
                                                        <i class="ti ti-bell"></i>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Irma J. Hendren</h6>
                                                        <span class="mail-desc">6:00 pm our meeting so...</span> 
                                                    </div>
                                                </a> 
                                            </div>
                                        </li>
                                        <li> 
                                            <a class="text-center bg-light" href="javascript:void(0);"> 
                                                <strong>See all notifications</strong> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:;" class="notification" data-toggle="dropdown">
                                        <i class="mdi mdi-email-outline"></i>
                                        <span class="badge badge-danger">9</span>
                                    </a>
                                    <ul class="dropdown-menu mailbox dropdown-menu-right">
                                        <li>
                                            <div class="drop-title">New Messages 5</div>
                                        </li>
                                        <li class="notification-scroll">
                                            <div class="message-center">
                                                <a href="#">
                                                    <div class="user-img">
                                                         <img src="includes/dashboard/assets/images/users/avatar-2.jpg" alt="user" class="rounded-circle"> 
                                                         <span class="profile-status online pull-right"></span>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Cassie T. Bishop</h6>
                                                        <span class="mail-desc">Just see the my admin!</span>
                                                        <span class="time">9:30 AM</span> 
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="user-img">
                                                        <img src="includes/dashboard/assets/images/users/avatar-3.jpg" alt="user" class="rounded-circle"> 
                                                        <span class="profile-status busy pull-right"></span> 
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Rudy A. Scott</h6>
                                                        <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> 
                                                    </div>
                                                </a> 
                                                <a href="#">
                                                    <div class="user-img">
                                                        <img src="includes/dashboard/assets/images/users/avatar-4.jpg" alt="user" class="rounded-circle"> 
                                                        <span class="profile-status away pull-right"></span> 
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Kevin D. Jernigan</h6>
                                                        <span class="mail-desc">I am a singer!</span> 
                                                        <span class="time">9:08 AM</span> 
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="user-img"> 
                                                        <img src="includes/dashboard/assets/images/users/avatar-5.jpg" alt="user" class="rounded-circle"> 
                                                        <span class="profile-status offline pull-right"></span> 
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Jane A. Seward</h6>
                                                        <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> 
                                                    </div>
                                                </a> 
                                            </div>
                                        </li>
                                        <li> 
                                            <a class="text-center bg-light" href="javascript:void(0);"> <strong>See all notifications</strong> </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:;" data-toggle="dropdown">
                                        <img src="includes/dashboard/assets/images/users/avatar-1.jpg" alt="">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-menu">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success pull-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                        <a href="logut.php" class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>

                                </li>

                                <li>
                                    <div class="sb-toggle-right">
                                        <i class="mdi mdi-apps"></i>
                                    </div>
                                </li>
                            </ul>
                        </div><!--right notification end-->
                    </div>
                </div>
                <!-- header section end-->
    