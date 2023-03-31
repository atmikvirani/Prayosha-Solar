<!DOCTYPE html>
<!--
Project:  Typhoon - Solar Energy HTML Template
Version:  1.0.0
Author:   Atmik X Prapti
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--[endif]-->

<head>
    <meta charset="utf-8" />
    <title>Contact Us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="smart pest" />
    <meta name="keywords" content="solar system /sun & wind" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--start theme style -->
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/meanmenu.css" />
    <link rel="stylesheet" type="text/css" href="css/slicknav.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="venobox/css/venobox.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="css/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/camera.css">
    <link rel="stylesheet" type="text/css" href="css/style_2.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive_2.css" />
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.css' rel='stylesheet' />
    <!-- favicon link-->
    <link rel="shortcut icon" type="image/icon" href="images/favicon.png" />
</head>
<!-- <style>
    /* width */
    ::-webkit-scrollbar {
      width: 15px;
    }
    
    /* Track */
    ::-webkit-scrollbar-track {
      background: #f1f1f1; 
    }
     
    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #a8a8a8; 
    }
    
    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #a8a8a8; 
    }
    </style> -->

<body>
    <?php
    session_start();

    ?>
    <!-- preloader Start -->
    <!-- <div id="preloader">
        <div id="status">
            <img src="images/preloader.gif" id="preloader_image" alt="loader">
        </div>
    </div> -->
    <!--sw header wrapper start-->

    <div class="transparent-menu header-area hidden-menu-bar stick">

        <div class="container">

            <div class="bt_main_menu_wrapper">
                <div class="main-menu-wrapper clear-fix">

                    <div class="logo float-left">
                        <a href="index.php"><img src="images/inner_logo.png" class="img-responsive" alt="logo"></a>
                    </div>

                </div>
                <div class="sc_navigation hidden-sm hidden-xs">
                    <nav id="primary-nav" class="dropdown nav_left_margin">
                        <ul class="dropdown menu navigation cart_dropdown_wrapper" style="left:35px;top:3px">
                            <li><a href="index.php" title="">Home</a>
                            </li>
                            <li><a href="about_us.php" title="">about us</a>
                            </li>
                            <li><a href="services.php" title="">services</a>
                            </li>
                            <li><a href="project.php" title="">projects</a>
                            </li>
                            <li><a href="team.php" title="">team</a>
                            </li>
                            </li>
                            <li><a href="shop.php" title="">shop</a>
                            </li>
                            <li><a href="contact_us.php" title="">Contact us</a>
                            </li>
                            <li class="caret_btn">
                                <a href="javascript:;"><i class="fa-regular fa-user"></i></a>
                                <ul>
                                <?php
                                
                                    if(isset($_SESSION['email'])){  
                                        echo '<p style="font-weight:625;font-family:Montserrat;text-transform:initial;font-size:15px;">'.'<font style="text-transform:initial;font-size:12px;">'.'hello, '.'</font>'.$_SESSION['user'].'</p>';
                                    }
                                    else{
                                        echo '<p style="font-weight:550;font-family:Montserrat;text-transform:initial;font-size:15px;">'.'<font style="text-transform:initial;color:white;font-size:12px;">'.'<!--hello, --> '.'</font>'.'Guest User'.'</p>';
                                    }
                                ?>

                                </ul>
                            </li>

                            <!-- Menu -->
                            <!--search -->
                        </ul>
                        <div class="header_right_inner_page">
                            <!-- <div class="search-wrapper">
                                <div class="et_navbar_search_wrapper hidden-xs">
                                    <div class="et_search_bar" id="search_button">
                                        <a href="javascript:;"><i class="fa fa-search waves-effect waves-light" aria-hidden="true"></i></a>
                                    </div>
                                    <div id="search_open" class="et_search_box">
                                        <input type="text" placeholder="Search text...">
                                        <a href="javascript:;"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div> -->
                            <div class="sw_icon_bar">
                                <ul class="tc_login_btn_wrapper">
                                    <li class="dropdown tc_login_btn">
                                        <a class="dropdown-toggle hvr-float-shadow active waves-effect waves-light"
                                            data-toggle="dropdown" href="javascript:;"><i
                                                class="fa fa-ellipsis-v"></i></a>
                                        <ul class="dropdown-menu tc_menu_fixed_border">
                                        <?php
                                                if(isset($_SESSION['email'])){
                                                    echo '<li class="dropdown_hover"><a href="logout.php">Log Out</a></li>';
                                                }
                                                elseif('')
                                                {
                                                    echo '<li class="dropdown_hover"><a href="login.html">Login</a></li>';
                                                    echo '<li class="dropdown_hover"><a href="create_account.html">Create Account</a></li>';
                                                }
                                                else{                                                    
                                                    echo '<li class="dropdown_hover"><a href="login.html">Login</a></li>';
                                                    echo '<li class="dropdown_hover"><a href="create_account.html">Create Account</a></li>';
                                                }
                                        ?>
                                            <li class="dropdown_hover hidden-lg"><a href="contact_us.php">Free
                                                    Quote</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </nav>
                </div>
                <!-- /.main-menu-wrapper -->
                <!-- mobile menu area start -->
                <div class="mobile-menu-area visible-sm visible-xs">
                    <div class="container header_container">
                        <div class="row">

                            <div class="col-xs-12 cc_menu_top_margin">
                                <!-- mobile menu start -->
                                <div class="mobile-menu">
                                <nav>
                                    <ul class="nav">
                                        <li><a href="index.php" title="">Home</a>
                                        </li>
                                        <li><a href="about_us.php" title="">about us</a>
                                        </li>
                                        <li><a href="services.php" title="">services</a>
                                        </li>
                                        <li><a href="project.php" title="">projects</a>
                                        </li>
                                        <li><a href="team.php" title="">team</a>
                                        </li>
                                        <li><a href="shop.php" title="">shop</a>
                                        </li>
                                        <li>
                                        <a href="cart.php" class="waves-effect waves-light waves-ripple">Cart<span style="width: 15px;
                                                    height: 15px;
                                                    color: #ffffff;
                                                    background: #ff3232;
                                                    border-radius: 100%;
                                                    font-size: 10px;
                                                    float: left;
                                                    line-height: 15px;
                                                    text-align: center;
                                                    position: absolute;
                                                    left: 50px;
                                                    top: 7px;
                                                ;" id="cartAmount"
                                                    class="cartAmount"></span></a></li>
                                        <li><a href="contact_us.php" title="">Contact us</a>
                                        </li>
                                        <?php
                                                if(isset($_SESSION['email'])){
                                                    echo '<li class="dropdown_hover"><a href="logout.php">Log Out</a></li>';
                                                }
                                                elseif('')
                                                {
                                                    echo '<li class="dropdown_hover"><a href="login.html">Login</a></li>';
                                                    echo '<li class="dropdown_hover"><a href="create_account.html">Create Account</a></li>';
                                                }
                                                else{                                                    
                                                    echo '<li class="dropdown_hover"><a href="login.html">Login</a></li>';
                                                    echo '<li class="dropdown_hover"><a href="create_account.html">Create Account</a></li>';
                                                }
                                            ?>
                                        <li class="caret_btn">
                                            <a href="javascript:;"><i
                                                    class="fa-regular fa-user"></i></a>
                                            <ul>
                                            <?php
                                                    if(isset($_SESSION['email'])){  
                                                    echo '<b><p style="font-weight:625;font-family:Montserrat;text-transform:initial;color:Black;font-size:15px;">'.'<font style="font-weight:525;text-transform:initial;color:black;font-size:12px;">'.'hello, '.'</font>'.$_SESSION['user'].'</p></b>';
                                                    }
                                                    else{
                                                        echo '<b><p style="font-weight:550;font-family:Montserrat; text-transform:initial; color:Black; font-size:15px;">'.'<font style="text-transform:initial;color:black;font-size:12px;">'.'<!--hello, --> '.'</font>'.'Guest User'.'</p></b>';
                                                    }
                                                
                                            ?>
                                            </ul>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                                <!-- mobile menu end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mobile menu area end -->

                <!-- /.main-menu-wrapper -->
            </div>
        </div>

        <div class="header_btn">
            <ul>
                <li>
                    <a href="contact_us.php" class="waves-effect waves-light waves-ripple">free quote</a>
                </li>
            </ul>
        </div>
    </div>
    <!--sw header wrapper end-->
    <!-- page_title_section start -->
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li><a href="index.php"> Home </a></li>
                                <li> Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page_title_section end -->
    <!--sw about us top start-->
    <div class="sw_about_top_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="sw_abot_top_txt_wrapper">

                        <div class="sw_left_heading_wraper sw_dark_heading_wraper">
                            <h1>contact us for queries</h1>
                            <img src="images/hd_line_dark.png" alt="title">
                            <p>We are here to help you find the right product and get you a perfect price for your home
                                or business. Our help center is fresh and always available for the business. If you
                                cannot find the answer you will surely get the helping hand here.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="sw_about_top_img">
                        <img src="images/iner_contactt.png" alt="img">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--sw about us top end-->
    <!-- Google Map start-->

    <!-- Google Map end-->
    <!-- contact us section start -->
    <div class="contact-section" id="contact-section">
        <div class="container">
            <div class="holder">
                <div class=" row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <form action="contact.php" method="post">
                            <div class="sw_left_heading_wraper">
                                <h1>Fill Free To Contact Us</h1>
                                <img src="images/heading_line.png" alt="title">
                                <p>Use the form below to get in contact with our services.</p>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                <?php
                                    
                                    if(isset($_SESSION['uid']))
                                    {
                                        $id=$_SESSION['uid'];
                                        $conn=mysqli_connect("localhost","root","","project");
                                        $query="select * from regdb where userid=$id";
                                        $records=mysqli_query($conn,$query);
                                        $row=mysqli_fetch_array($records);
                                        echo '<input type="text" name="name" class="require" value="'.$row["username"].'"disabled>';
                                    }
                                    else
                                    {
                                        echo'<input type="text" name="name" placeholder="Name*" class="require">';
                                    }
                                ?>
                                </div>
                                
                                <div class="col-md-6">
                                <?php
                                    
                                    if(isset($_SESSION['uid']))
                                    {
                                        $id=$_SESSION['uid'];
                                        $conn=mysqli_connect("localhost","root","","project");
                                        $query="select * from regdb where userid=$id";
                                        $records=mysqli_query($conn,$query);
                                        $row=mysqli_fetch_array($records);
                                        echo '<input type="text" name="email" class="require" value="'.$row["useremail"].'"disabled>';
                                    }
                                    else
                                    {
                                        echo'<input type="text" name="email"
                                        placeholder="Email*" class="require" data-valid="email"
                                        data-error="Email should be valid.">';
                                    }
                                ?>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="subject" placeholder="Subject*">
                                </div>

                                <div class="col-md-12">
                                    <textarea cols="10" rows="4" name="message" class="require"
                                        placeholder="Message*"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="response response_2"></div>
                                    <div class="cntct_2_btn_wrapper cntct_2_btn_inner">
                                        <!-- <input type="submit" class="submitForm waves-effect waves-light waves-ripple" value="SEND"> -->
                                        <button type="submit"
                                            class="submitForm waves-effect waves-light waves-ripple">send</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                        <div class="contact-box">
                            <div class="wrapper_second_useful_2">
                                <div class="sw_left_heading_wraper sw_dark_heading_wraper ppp">
                                    <h1>contact info</h1>
                                    <img src="images/hd_line_dark.png" alt="title">
                                    <p>We're here to lend a hand.</p>
                                </div>
                                <ul>
                                    <li>
                                        <h1>
                                            <h1><a class="contact-info" href="tel:+919879182811"></a>(+91) 987 918 2811
                                            </h1>
                                    </li>
                                    <li><a class="contact-info" href="mailto:sales.prayoshacorporation@gmail.com"><i
                                                class="flaticon-new-email-outline"
                                                aria-hidden="true"></i>sales.prayoshacorporation@gmail.com</a></li>

                                    </li>
                                    <li><a href="https://goo.gl/maps/pSnrrjZaDm2GzbCw7"><i
                                        class="flaticon-placeholder"></i>Katargam, Surat GJ, 395004</a> </li>
                                </ul>
                            </div>
                            <div class="abotus_content">

                                <ul>
                                    <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:;"><i class="fa fa-youtube-play"></i></a></li>
                                    <li class="hidden-xs"><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="javascript:;"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact wrapper end-->
    <div id='map'>
    </div>
    <!--sw our newsletter wrapper start-->
    <div class="sw_our_newsletter_wrapper">

        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                    <div class="sw_nl_heading_wrapper sw_our_news_txt">
                        <i class="flaticon-rocket"></i>
                        <h2>Subscribe Our Newsletter</h2>
                        <h6>Get the latest News & Offers..</h6>

                        <form action="newsletter.php" method="post">
                                <div class="prs_newsletter_field">
                                    <input type="email" name="txtnews" placeholder="Email*">
                                    <button type="submit" class="waves-effect waves-light waves-ripple">Subscribe</button>
                                </div>
                            </form>
                        <p>True environmental protection lies in loving the mountains, the oceans and in cher
                            <br> all creation.
                        </p>

                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="sw_letter_img_wrapper">
                        <img src="images/abt_ltr_img.png" alt="img">

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- sw our newsletter section end-->
    <!-- sw footer section start-->
    <div class="sw_footer_main_wrapper">

        <div class="circle_btm">
            <a href="javascript:" id="return-to-top"><i class="fa fa-long-arrow-up"></i></a>
        </div>
        <div class="footer_wrapper">

            <div class="container">

                <div class="row">
                    <div class="foter_padder">
                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                            <div class="wrapper_second_about">
                                <div class="wrapper_first_image">
                                    <a href="index.php"><img src="images/hd_logo.png" class="img-responsive"
                                            alt="logo" /></a>
                                </div>
                                <div class="abotus_content">
                                    <p>Prayosha Solar is a highly respected and trusted company in the solar
                                        industry. Our commitment to excellence in every aspect of our business has
                                        earned us
                                        a reputation as a reliable and customer-focused organization.</p>
                                    <ul>
                                        <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="javascript:;"><i class="fa fa-youtube-play"></i></a></li>
                                        <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="javascript:;"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-xs-12 col-sm-4" style="left:70px">
                            <div class="wrapper_second_useful">
                                <h4>useful links </h4>
                                <img src="images/hd_line_dark.png" alt="title" class="pd_btm_3">
                                <ul>
                                    <li><a href="about_us.php"><i class="fa fa-angle-right"></i>About us</a>
                                    </li>
                                    <li><a href="shop.php"><i class="fa fa-angle-right"></i>shop </a>
                                    </li>
                                    <li><a href="contact_us.php"><i class="fa fa-angle-right"></i>contact </a>
                                    </li>
                                    <li><a href="services.php"><i class="fa fa-angle-right"></i>services</a>
                                    </li>
                                    <li><a href="blog.php"><i class="fa fa-angle-right"></i>news</a> </li>
                                </ul>

                            </div>
                        </div>
                        <!-- <div class="col-lg-2 col-md-2 col-xs-12 col-sm-4">
                            <div class="wrapper_second_useful wrapper_second_links">

                                <ul>
                                    <li><a href="javascript:;"><i class="fa fa-angle-right"></i>sitemap</a>
                                    </li>
                                    <li><a href="javascript:;"><i class="fa fa-angle-right"></i>FAQ </a>
                                    </li>
                                    <li><a href="javascript:;"><i class="fa fa-angle-right"></i>awards </a>
                                    </li>
                                    <li><a href="javascript:;"><i class="fa fa-angle-right"></i>tstimonials</a>
                                    </li>
                                    <li><a href="javascript:;"><i class="fa fa-angle-right"></i>career</a> </li>
                                </ul>

                            </div>
                        </div> -->

                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12" style="left:100px">
                            <div class="wrapper_second_useful wrapper_second_useful_2">
                                <h4>contact us</h4>
                                <img src="images/hd_line_dark.png" alt="title" class="pd_btm_3">
                                <ul>
                                    <li>
                                        <h1><a class="contact-info" href="tel:+919879182811"></a>(+91) 987 918 2811</h1>
                                    </li>
                                    <li><a class="contact-info" href="mailto:sales.prayoshacorporation@gmail.com"><i
                                                class="flaticon-new-email-outline"
                                                aria-hidden="true"></i>sales.prayoshacorporation@gmail.com</a></li>

                                    </li>
                                    <!-- <li><a href="javascript:;"><i class="flaticon-internet"></i>www.example.com</a>
                                    </li> -->

                                    <li>
                                        <a href="https://goo.gl/maps/pSnrrjZaDm2GzbCw7"><i
                                                class="flaticon-placeholder"></i>Katargam, Surat GJ, 395004</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="section3_copyright">
                        <p>Copyright 2022-23 <a href="index.php"> Prayosha Solar</a>. all right reserved - designed by
                            <a href="https://www.linkedin.com/in/atmik-virani-7b7316241/">Atmik X Prapti. </a>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- sw footer section end-->
    <!--main js files-->

    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery_min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jqu_menu.js"></script>
    <script src="js/jqu_slickmenu.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="venobox/js/venobox.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/camera.min.js"></script>
    <script src="js/custom_2.js"></script>
    <script src="cartdisp.js"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.js'></script>
    <!--main js file end-->
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiYWtzaGF5aGFuZGdlIiwiYSI6InI2bzhEcUUifQ.8r-lNnjAuIZUk8pjhtxlFw';
        var map = new mapboxgl.Map({
            container: 'map', // container id
            style: 'mapbox://styles/mapbox/streets-v9', // stylesheet location
            center: [-74.50, 40], // starting position [lng, lat]
            zoom: 10 // starting zoom
        });
    </script>

</body>

</html>