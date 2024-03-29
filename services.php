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
    <title>Services</title>
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
    <!-- favicon link-->
    <link rel="shortcut icon" type="image/icon" href="images/favicon.png" />
</head>

<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status">
            <img src="images/preloader.gif" id="preloader_image" alt="loader">
        </div>
    </div>
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
                            <li><a href="product.php" title="">products</a>
                            </li>
                            <li><a href="contact_us.php" title="">Contact us</a>
                                        </li>
                            <li class="caret_btn">
                                <a href="javascript:;"><i class="fa-regular fa-user"></i></a>
                                <ul>
                                    <?php
                                    session_start();
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
                                        <a class="dropdown-toggle hvr-float-shadow active waves-effect waves-light" data-toggle="dropdown" href="javascript:;"><i class="fa fa-ellipsis-v"></i></a>
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
                                        <li><a href="product.php" title="">products</a>
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
                    <a href="cart.php" class="waves-effect waves-light waves-ripple">free quote</a>
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
                                <li> services</li>
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
                            <h1>Our services Overview</h1>
                            <img src="images/hd_line_dark.png" alt="title">
                            <p>We offers consultation, design, installation, financing, monitoring, maintenance, education, and support service to help customers transition to solar power. Additionally, we may also provide information on government incentives and rebates and offer battery storage solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="sw_about_top_img">
                        <img src="images/iner_servce.png" alt="img">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--sw about us top end-->
    <!-- sw services wrapper start -->
    <div class="sw_iner_service_wrapper sw_iner_service_wrapper_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                    <div class="gb_icon_wrapper">
                        <div class="gb_icon_img">
                            <img src="images/spec_1.png" alt="title">
                        </div>
                        <div class="gb_icon_content">
                            <h4><a href="javascript:;">Site  <br>
                            Evaluation</a></h4>

                        </div>
                        <p>In order to create a unique solar power system that performs at its best, a solar company assesses the location's solar potential, shading, and other elements.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                    <div class="gb_icon_wrapper">
                        <div class="gb_icon_img">
                            <img src="images/spec_2.png" alt="title">
                        </div>
                        <div class="gb_icon_content">
                            <h4><a href="javascript:;">Design and <br>
Engineering</a></h4>

                        </div>
                        <p>Site assessments inform solar firms' custom solar power system designs and detailed engineering plans to ensure safe and efficient installations.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                    <div class="gb_icon_wrapper">
                        <div class="gb_icon_img">
                            <img src="images/spec_3.png" alt="title">
                        </div>
                        <div class="gb_icon_content">
                            <h4><a href="javascript:;">Installation</a></h4>

                        </div>
                        <p>Solar firms install complete solar power systems, including panels, inverters, and mounting hardware for electricity generation from sunlight.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                    <div class="gb_icon_wrapper">
                        <div class="gb_icon_img">
                            <img src="images/spec_4.png" alt="title">
                        </div>
                        <div class="gb_icon_content">
                            <h4><a href="javascript:;">Maintenance and<br>
Repair</a></h4>

                        </div>
                        <p>We maintain and repair solar power systems to including cleaning, electrical checks, and component replacements as needed.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                    <div class="gb_icon_wrapper">
                        <div class="gb_icon_img">
                            <img src="images/spec_5.png" alt="title">
                        </div>
                        <div class="gb_icon_content">
                            <h4><a href="javascript:;">Financing and <br>
Incentives</a></h4>

                        </div>
                        <p>Solar firms guide customers on financing options, incentives, and financing methods such as leases or loans for solar power systems.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                    <div class="gb_icon_wrapper">
                        <div class="gb_icon_img">
                            <img src="images/spec_6.png" alt="title">
                        </div>
                        <div class="gb_icon_content">
                            <h4><a href="javascript:;">Energy storage  <br> Solutions</a></h4>

                        </div>
                        <p>For consumers who want to store surplus solar energy and use it later, several solar companies provide energy storage options like batteries.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sw services wrapper end -->
    <!--sw discover wrapper start-->
    <div class="sw_discver_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="sw_disc_txt_wrapper">

                        <div class="sw_left_heading_wraper">
                            <h1>Discover the Advantages</h1>
                            <img src="images/heading_line.png" alt="title">
                            <p>Solar power is the most abundant, fastest, and the cheapest energy source and has less negative impact on the environment. </p>
                        </div>
                        <div class="sw_desc_btm_txt">
                            <div class="sw_disc_image">
                                <i class="flaticon-sun"></i>
                            </div>
                            <div class="sw_disc_head_text">
                                <h5><a href="javascript:;">Solar Panels Service</a></h5>
                                <p>Solar panel service involves the maintenance, repair, and cleaning of solar panels to ensure they are operating at maximum efficiency.</p>
                            </div>
                        </div>
                         <div class="sw_desc_btm_txt">
                            <div class="sw_disc_image">
                                <i class="flaticon-wind-turbine"></i>
                            </div>
                            <div class="sw_disc_head_text">
                                <h5><a href="javascript:;">Best Wind Energy</a></h5>
                                <p>It offers a sustainable, clean, and reliable alternative to non-renewable sources of energy.</p>
                            </div>
                        </div>
                          <div class="sw_desc_btm_txt">
                            <div class="sw_disc_image">
                                <i class="flaticon-power"></i>
                            </div>
                            <div class="sw_disc_head_text">
                                <h5><a href="javascript:;">Extended Guarantee</a></h5>
                                <p>Extended Guarantee include the duration, coverage, conditions, cost, and reputation of the manufacturer or warranty provider and ensures the longevity and performance of the solar energy system over the long term.</p>
                            </div>
                        </div>
                        <!-- <div class="disc_btn">
                            <ul>
                                <li>
                                    <a href="services.php#!" class="waves-effect waves-light waves-ripple">view all</a>
                                </li>
                            </ul>

                        </div> -->

                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1 col-sm-12 col-xs-12 clm_img">
                    <div class="sw_right_img_wrapper">
                        <div class="sw_disc_img_overlay"></div>
                        <img src="images/disc_lft_bg.jpg" alt="About" class="img-responsive sw_right_img_div">

                        <div class="sw_disc_img_btm">
                            <img src="images/disc_lft.jpg" alt="About" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sw discover section end-->
    <!-- counter wrapper start-->
    <div class="counter_section">
        <div class="counter-section section-padding" data-stellar-background-ratio="0.5">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow  zoomIn animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: zoomIn;">
                        <div class="counter_hover">
                            <div class="icon"> <a href="services.php"><i class="flaticon-powerpoint"></i></a>
                            </div>
                            <div class="count-description">
                                <h5 class="con1">project complete</h5>
                                <span class="timer">1353</span>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow  zoomIn animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: zoomIn;">
                        <div class="counter_hover">
                            <div class="icon"> <a href="services.php"><i class="flaticon-user"></i></a>
                            </div>
                            <div class="count-description">
                                <h5 class="con2">happy customers</h5>
                                <span class="timer">1205</span>+

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow  zoomIn animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: zoomIn;">
                        <div class="counter_hover">
                            <div class="icon"> <a href="services.php"><i class="flaticon-cup"></i></a>
                            </div>
                            <div class="count-description">
                                <h5 class="con2">awards winner</h5>
                                <span class="timer">845</span>+

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow  zoomIn animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: zoomIn;">
                        <div class="counter_hover">
                            <div class="icon"> <a href="services.php"><i class="flaticon-time"></i></a>
                            </div>
                            <div class="count-description">
                                <h5 class="con4">years in service</h5>
                                <span class="timer">27</span>+

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- counter wrapper end-->
    <!-- sw pricing section start-->
    <!-- <div class="sw_pricing_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 col-lg-offset-3">
                    <div class="sw_left_heading_wraper sw_center_heading_wrapper pd_0">
                        <h1>Affordable Pricing Packages</h1>
                        <img src="images/heading_line.png" alt="title">
                        <p>Get perfect package of consultation, design, installation, and monitoring services at an affordable price. </p>
                    </div>
                </div>

                <div class="pricing_box1_wrapper">
                    <div class="box1_heading_wrapper box1_orange">

                        <h1><sup>₹</sup>8500<span> /  month</span></h1>
                        <div class="jp_pricing_label_wrapper">

                        </div>
                    </div>

                    <div class="price_box1_wrapper">
                        <div class="disc_btn pricing_btn">
                            <ul>
                                <li>
                                    <a href="services.php#!" class="waves-effect waves-light waves-ripple">basic</a>
                                </li>
                            </ul>

                        </div>

                        <div class="pricing_btm_txt_wrapper txt_clr_oange">
                            <div class="pricing_cont">
                                <p>Battery Capacity 11 - 15 kWh</p>
                                <ul>
                                    <li> free service</li>
                                    <li>ranted battery</li>
                                    <li>free installation</li>
                                    <li>24 hour support</li>

                                </ul>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="pricing_box1_wrapper sw_pricing_box_transition">
                    <div class="box1_heading_wrapper box1_blue">

                        <h1><sup>₹</sup>10000<span> /  month</span></h1>
                        <div class="jp_pricing_label_wrapper jp_pricing_label_blue">

                        </div>
                    </div>
                    <div class="price_box1_wrapper price_box1_wrapper_center">
                        <div class="disc_btn pricing_btn">
                            <ul>
                                <li>
                                    <a href="services.php#!" class="waves-effect waves-light waves-ripple">business</a>
                                </li>
                            </ul>

                        </div>

                        <div class="pricing_btm_txt_wrapper txt_clr_blue">
                            <div class="pricing_cont">
                                <p>Battery Capacity 16 - 20 kWh</p>
                                <ul>
                                    <li> free service</li>
                                    <li>ranted battery</li>
                                    <li>free installation</li>
                                    <li>24 hour support</li>

                                </ul>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="pricing_box1_wrapper padder_btm_0">
                    <div class="box1_heading_wrapper box1_green">

                        <h1><sup>₹</sup>12500<span> /  month</span></h1>
                        <div class="jp_pricing_label_wrapper jp_pricing_label_green">

                        </div>
                    </div>

                    <div class="price_box1_wrapper">
                        <div class="disc_btn pricing_btn">
                            <ul>
                                <li>
                                    <a href="services.php#!" class="waves-effect waves-light waves-ripple">ultimate</a>
                                </li>
                            </ul>

                        </div>

                        <div class="pricing_btm_txt_wrapper txt_clr_green">
                            <div class="pricing_cont">
                                <p>Battery Capacity all kWh</p>
                                <ul>
                                    <li> free service</li>
                                    <li>ranted battery</li>
                                    <li>free installation</li>
                                    <li>24 hour support</li>

                                </ul>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div> -->
    <!-- sw pricing section end-->
    <!-- sw contact form section start-->
    <div class="sw_contact_form_wrapper sw_contact_form_padder">

        <div class="container">
            <div class="contact_left_wrapper">
                <img src="images/form_bg.png" alt="img" class="img-responsive">
            </div>
            <div class="contact_right_wrapper">
                <div class="cmnt_area_div_mn">
                    <div class="sw_left_heading_wraper sw_dark_heading_wraper">
                        <h1>Fill Free Contact Us</h1>
                        <img src="images/hd_line_dark.png" alt="title">
                        <p>Use the form below to get in contact with our services. </p>
                    </div>
                    <div class="row">
                        <form action="contact.php" method="post">
                            <div class="cont_main_section">

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="contect_form1">
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
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="contect_form1">
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
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="contect_form1">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="contect_form4">
                                        <textarea rows="5" name="message" placeholder="Message" class="require"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="response"></div>
                                    <div class="cntct_2_btn_wrapper">
                                        <button type="submit" class="submitForm waves-effect waves-light waves-ripple">send</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- sw contact form section end-->
    <!--sw our newsletter wrapper start-->
    <!-- <div class="sw_our_newsletter_wrapper">

        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                    <div class="sw_nl_heading_wrapper sw_our_news_txt">
                        <i class="flaticon-rocket"></i>
                        <h2>Subscribe Our Newsletter</h2>
                        <h6>Get the latest News & Offers..</h6>

                        <div class="prs_newsletter_field">
                            <input type="text" placeholder="Email*">
                            <button type="submit" class="waves-effect waves-light waves-ripple">Submit</button>
                        </div>
                        <p>True environmental protection lies in loving the mountains, the oceans and in cher
                            <br> all creation.</p>

                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="sw_letter_img_wrapper">
                        <img src="images/abt_ltr_img.png" alt="img">

                    </div>
                </div>
            </div>
        </div>

    </div> -->
    <!-- sw our newsletter section end-->
    <!-- sw partners section start-->
    <div class="sw_partners_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="sw_left_heading_wraper">
                        <h1>Our Partners</h1>
                        <img src="images/heading_line.png" alt="title">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 sw_spectrm_padding">
                    <div class="partners_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="images/partner_1.png" alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="images/partner_2.png" alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="images/partner_3.png" alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="images/partner_4.png" alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="images/partner_5.png" alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="images/partner_2.png" alt="partner_img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sw partners section end-->
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
                                    <a href="index.php"><img src="images/hd_logo.png" class="img-responsive" alt="logo" /></a>
                                </div>
                                <div class="abotus_content">
                                    <p>Prayosha Solar is a highly respected and trusted company in the solar
                                    industry. Our commitment to excellence in every aspect of our business has earned us
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
                            <img src="images/heading_line3.png" alt="title" class="pd_btm_3">
                            <ul>
                                <li><a href="about_us.php"><i class="fa fa-angle-right"></i>About us</a>
                                </li>
                                <li><a href="product.php"><i class="fa fa-angle-right"></i>shop </a>
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
                            <img src="images/heading_line3.png" alt="title" class="pd_btm_3">
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
                        <p>Copyright &copy; <span id="website-year">2022-23</span> <a href="index.php"> Prayosha Solar</a>. all right reserved - designed by <a href="https://www.linkedin.com/in/atmik-virani-7b7316241/">Atmik X Prapti. </a></p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- sw footer section end-->
    <!--main js files-->

    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery_min.js"></script>
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
    
    <!--js code-->
</body>

</html>
<script>
    var d = new Date();
    var n = d.getFullYear();
    var year = document.getElementById("website-year")
    year.innerHTML = n
  </script>