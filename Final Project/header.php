<?php 
require_once 'db.php';
 ?>


<?php 

 $address="SELECT * FROM office_address WHERE status = 1";
$address_query=mysqli_query($db, $address);

 $select= "SELECT * FROM socials WHERE status = 'active'";
$query_data=mysqli_query($db,$select);





 ?>

<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>C.V - Personal Portfolio </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="front/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="front/css/bootstrap.min.css">
        <link rel="stylesheet" href="front/css/animate.min.css">
        <link rel="stylesheet" href="front/css/magnific-popup.css">
        <link rel="stylesheet" href="front/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="front/css/flaticon.css">
        <link rel="stylesheet" href="front/css/slick.css">
        <link rel="stylesheet" href="front/css/aos.css">
        <link rel="stylesheet" href="front/css/default.css">
        <link rel="stylesheet" href="front/css/style.css">
        <link rel="stylesheet" href="front/css/responsive.css">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">

         <!-- foreach start -->
                
                <a href="index.php" class="navbar-brand logo-sticky-none"><img src="front/img/logo/s_logo3.png" alt="img">
                <a href="index.html" class="navbar-brand s-logo-none"><img src="front/img/logo/s_logo3.png" alt="img"></a>


               <!-- foreach end -->
                                   



                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" target="_blank" href="index.php">Home</a>


                                          
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index-2.html">
                        <img src="front/img/logo/s_logo3.png" alt="" />
                    </a>
                </div>
                <?php foreach ($address_query as $key => $value): ?>
                   
                    <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p><?=$value['address']?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p><?=$value['phone']?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p><?=$value['email']?></p>
                    </div>
                </div>

                <?php endforeach ?>
                
                <div class="social-icon-right mt-20">
                    <?php foreach ($query_data as $key => $value): ?>
                        
                        <a href="#"><i class="<?php echo $value['icon'] ?>"></i></a>

                    <?php endforeach ?>
                    
                    
                </div>
            </div>
           <!--  <div class="offcanvas-overly"></div> -->
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->