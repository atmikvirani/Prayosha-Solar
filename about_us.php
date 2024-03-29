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
    <title>About Us</title>
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
                            <li>
                                <a href="about_us.php" title="">about us</a>
                            </li>
                            <li><a href="services.php" title="">services</a>
                            </li>
                            <li><a href="project.php" title="">projects</a>
                            </li>
                            <li><a href="team.php" title="">team</a>
                            <!-- </li>
                            </li> -->
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
                                            <li class="dropdown_hover hidden-lg"><a href="contact_us.php">Free Quote</a></li>
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
                                        <a href="calculatordisp.php" class="waves-effect waves-light waves-ripple">Calculator</a></li>
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
                                <li> about us</li>
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
                            <h1>Our Company Overview</h1>
                            <img src="images/hd_line_dark.png" alt="title">
                            <p>Solar energy is an industry that harnesses the power of the sun to generate electricity. Key players in the industry includes companies that manufacture solar panels and equipment, as well as those that provide installation, maintenance, and financing services. Our company to grow as the a bidder of solar panels and equipment and provide services to the customers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="sw_about_top_img">
                        <img src="images/iner_abt.png" alt="img">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--sw about us top end-->
    <!--sw about us top start-->
    <div class="sw_abt_btm_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="sw_road_leads_img">
                        <img src="images/leads.gif" alt="img">

                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="sw_left_heading_wraper sw_abt_tp_txt">
                        <h1>Want to Know About Us?</h1>
                        <img src="images/heading_line.png" alt="title">
                        <p>Solar energy is the fastest-growing source of renewable energy in the world, with a 43% increase in capacity in 2020 alone. Solar energy can be combined with energy storage technologies, such as batteries, to provide a reliable and continuous source of energy, even during periods of low sunlight or power outages. The solar energy is expected to create millions of jobs worldwide in the coming years, with projections estimating that the industry will employ over 18 million people by 2030.
                        </p>
                        <br>
                        <p>Our company is focused on providing solutions for both residential and commercial customers, with the aim of reducing their reliance on traditional energy sources and lowering their carbon footprint. We are the business that specializes in installing, and maintaining solar power system.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--sw about us top end-->
    <!--sw spectrum wrapper start-->
    <div class="sw_abt_spectrum_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="sw_left_heading_wraper">
                        <h1>We Cover the Whole Spectrum</h1>
                        <img src="images/heading_line.png" alt="title">
                    </div>
                </div>

                <!-- slider start -->
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 sw_spectrm_padding">
                    <div class="spectrum_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="spectrum_slider_cntnt">
                                    <div class="spectrum_slider_shadow">
                                        <img src="images/spec_1.png" alt="title" class="img-responsive">
                                        <h2><a href="javascript:;">solar system</a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="spectrum_slider_cntnt">
                                    <div class="spectrum_slider_shadow">
                                        <img src="images/spec_2.png" alt="title">
                                        <h2><a href="javascript:;">solar pv systems</a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="spectrum_slider_cntnt">
                                    <div class="spectrum_slider_shadow">
                                        <img src="images/spec_3.png" alt="title" class="img-responsive">
                                        <h2><a href="javascript:;">Wind Generators</a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="spectrum_slider_cntnt">
                                    <div class="spectrum_slider_shadow">
                                        <img src="images/spec_4.png" alt="title" class="img-responsive">
                                        <h2><a href="javascript:;">Alternative Energy</a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="spectrum_slider_cntnt">
                                    <div class="spectrum_slider_shadow">
                                        <img src="images/spec_2.png" alt="title" class="img-responsive">
                                        <h2><a href="javascript:;">Wind Generators</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--sw spectrum wrapper end-->
    <!--sw leads wrapper start-->
    <div class="sw_leads_wrapper">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="sw_disc_txt_wrapper">

                        <div class="sw_left_heading_wraper">
                            <h1>All Roads Lead to Solar!</h1>
                            <img src="images/heading_line.png" alt="title">
                            <p>A sustainable energy future is inevitable and solar power will play a central role. </p>
                        </div>

                        <div class="sw_leads_accordian">
                            <div class="panel-group" id="accordionFifteenLeft" role="tablist">
                                <div class="panel panel-default">
                                    <div class="panel-heading desktop">
                                        <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordionFifteenLeft" href="about_us.php#collapseFifteenLeftone" aria-expanded="true">The Cost Benefit Ratio: </a>
										</h4>
                                    </div>
                                    <div id="collapseFifteenLeftone" class="panel-collapse collapse in" aria-expanded="true" role="tabpanel">
                                        <div class="panel-body">

                                            <div class="panel_cont">
                                                <p>Solar energy offers a high cost-benefit ratio, providing significant long-term savings and environmental benefits compared to traditional fossil fuels.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-default -->
                                <div class="panel panel-default">
                                    <div class="panel-heading horn">
                                        <h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordionFifteenLeft" href="about_us.php#collapseFifteenLeftTwo" aria-expanded="false">Why Solar Energy ?</a>
										</h4>
                                    </div>
                                    <div id="collapseFifteenLeftTwo" class="panel-collapse collapse" aria-expanded="false" role="tabpanel">
                                        <div class="panel-body">

                                            <div class="panel_cont">
                                                <p>It is clean and renewable energy source that is cost-effective solution to our energy needs and not harmful to the climate.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-default -->
                                <div class="panel panel-default">
                                    <div class="panel-heading bell">
                                        <h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordionFifteenLeft" href="about_us.php#collapseFifteenLeftThree" aria-expanded="false">Advantage Of  Solar</a>
										</h4>
                                    </div>
                                    <div id="collapseFifteenLeftThree" class="panel-collapse collapse" aria-expanded="false" role="tabpanel">
                                        <div class="panel-body">

                                            <div class="panel_cont">
                                                <p>Solar energy offers numerous advantages, including cost savings, environmental benefits, energy independence, and increased property values.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading bell">
                                        <h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordionFifteenLeft" href="about_us.php#collapseFifteenLeftFour" aria-expanded="false">Solar System Benefits?</a>
										</h4>
                                    </div>
                                    <div id="collapseFifteenLeftFour" class="panel-collapse collapse" aria-expanded="false" role="tabpanel">
                                        <div class="panel-body">

                                            <div class="panel_cont">
                                                <p>Solar system power benefits us such as reduced electricity costs, long-term savings, and a clean source of energy.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="sw_abt_right_btm_wrapper">

                        <div class="sw_left_heading_wraper">
                            <h1>Our Mission</h1>
                            <img src="images/heading_line.png" alt="title">
                            <p>The mission of our company is to provide clean and renewable energy solutions to homes, businesses, and communities around the country. This includes developing innovative solar technology, providing high-quality solar products and services, and promoting the adoption of solar energy as a visible alternative to traditional fossil fuels.</p>
                        </div>
                        <div class="sw_left_heading_wraper">
                            <h1>Our vision</h1>
                            <img src="images/heading_line.png" alt="title">
                            <p>Our vision to create a world in which clean and renewable energy is primary source for homes, industries, and communities. The vision to create a sustainable future in which our energy needs are met without causing harm to the environment or contributing to climate change.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sw leads section end-->
    <!--sw best product wrapper start-->
    <!-- <div class="sw_best_product_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="sw_left_heading_wraper">
                        <h1>Our Expert Team</h1>
                        <img src="images/heading_line.png" alt="title">
                    </div>
                </div> -->

                <!-- slider start -->
                <!-- <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 sw_spectrm_padding">
                    <div class="best_product_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="sw_product_box_wrapper">
                                    <div class="sw_product_indx_img_wrapper">
                                        <div class="sp_img_box_overlay"></div>
                                        <img src="images/abt_pdt_1.png" alt="shop_img" class="img-responsive" />
                                        <div class="abt_img_btn_wrapper">
                                            <ul>
                                                <li><a href="javascript:;"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li><a href="javascript:;"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                            <ul class="sw_abt_icon_top_wrapper">
                                                <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                                                </li>
                                                <li><a href="javascript:;"><i class="fa fa-pinterest-p"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="sw_product_indx_img_cont_wrapper sw_product_indx_img_cont_wrapper_2 sw_prdct_11">

                                        <h1><a href="javascript:;">akshay H.</a></h1>
                                        <h5>(project manager)</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="sw_product_box_wrapper">
                                    <div class="sw_product_indx_img_wrapper">
                                        <div class="sp_img_box_overlay"></div>
                                        <img src="images/abt_pdt_2.png" alt="shop_img" class="img-responsive" />
                                        <div class="abt_img_btn_wrapper">
                                            <ul>
                                                <li><a href="javascript:;"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li><a href="javascript:;"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                            <ul class="sw_abt_icon_top_wrapper">
                                                <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                                                </li>
                                                <li><a href="javascript:;"><i class="fa fa-pinterest-p"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="sw_product_indx_img_cont_wrapper sw_product_indx_img_cont_wrapper_2 sw_prdct_11">

                                        <h1><a href="javascript:;"> farhan S.</a></h1>
                                        <h5>(site engineer)</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="sw_product_box_wrapper">
                                    <div class="sw_product_indx_img_wrapper">
                                        <div class="sp_img_box_overlay"></div>
                                        <img src="images/abt_pdt_3.png" alt="shop_img" class="img-responsive" />
                                        <div class="abt_img_btn_wrapper">
                                            <ul>
                                                <li><a href="javascript:;"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li><a href="javascript:;"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                            <ul class="sw_abt_icon_top_wrapper">
                                                <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                                                </li>
                                                <li><a href="javascript:;"><i class="fa fa-pinterest-p"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="sw_product_indx_img_cont_wrapper sw_product_indx_img_cont_wrapper_2 sw_prdct_11">

                                        <h1><a href="javascript:;">ajay S.</a></h1>
                                        <h5>(site manager)</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="sw_product_box_wrapper">
                                    <div class="sw_product_indx_img_wrapper">
                                        <div class="sp_img_box_overlay"></div>
                                        <img src="images/abt_pdt_4.png" alt="shop_img" class="img-responsive" />
                                        <div class="abt_img_btn_wrapper">
                                            <ul>
                                                <li><a href="javascript:;"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li><a href="javascript:;"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                            <ul class="sw_abt_icon_top_wrapper">
                                                <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                                                </li>
                                                <li><a href="javascript:;"><i class="fa fa-pinterest-p"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="sw_product_indx_img_cont_wrapper sw_product_indx_img_cont_wrapper_2 sw_prdct_11">

                                        <h1><a href="javascript:;">manali H.</a></h1>
                                        <h5>(site supervisor)</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="sw_product_box_wrapper">
                                    <div class="sw_product_indx_img_wrapper">
                                        <div class="sp_img_box_overlay"></div>
                                        <img src="images/abt_pdt_2.png" alt="shop_img" class="img-responsive" />
                                        <div class="abt_img_btn_wrapper">
                                            <ul>
                                                <li><a href="javascript:;"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li><a href="javascript:;"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            </ul>
                                            <ul class="sw_abt_icon_top_wrapper">
                                                <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                                                </li>
                                                <li><a href="javascript:;"><i class="fa fa-pinterest-p"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="sw_product_indx_img_cont_wrapper sw_product_indx_img_cont_wrapper_2 sw_prdct_11">

                                        <h1><a href="javascript:;">mack K.</a></h1>
                                        <h5>(environmentalist)</h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--sw best product wrapper end-->
    <!--sw newsletter wrapper start-->
    <div class="sw_news_letter_wrapper">
        <div class="container">
            <div class="sw_nl_heading_wrapper">
                <i class="flaticon-rocket"></i>
                <h2>Get Free Consultancy About Your Project</h2>

            </div>

            <div class="sw_nl_form_wrapper sw_about_inner_btn">

                <div class="disc_btn ltr_btn">
                    <ul>
                        <li>
                            <a href="contact_us.php#contact-section" class="waves-effect waves-light waves-ripple">ask a question</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

    </div>
    <!--sw newsletter wrapper end-->
    <!-- sw choose service wrapper start-->
    <div class="sw_chose_service_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 col-lg-offset-3">
                    <div class="sw_left_heading_wraper sw_center_heading_wrapper">
                        <h1>Why Choose Us solar Energy</h1>
                        <img src="images/heading_line.png" alt="title">
                        <p>Choose us for solar energy solutions to access high-quality solar products and services, cutting-edge technology, and a commitment to sustainability and customer satisfaction. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <div class="chose_text_wrapper_left">
                        <div class="chose_icon_wrapper_list">

                            <div class="chose_icon_img_list">
                                <img src="images/ser_img_1.png" alt="title">
                            </div>

                            <div class="chose_icon_content_left">
                                <h4><a href="javascript:;">Long Time to Use</a></h4>
                                <p>Long lifespan and provide reliable power for decades.</p>
                            </div>

                        </div>
                        <div class="chose_icon_wrapper_list">

                            <div class="chose_icon_img_list">
                                <img src="images/ser_img_2.png" alt="title">
                            </div>

                            <div class="chose_icon_content_left">
                                <h4><a href="javascript:;">Always Clean Energy</a></h4>
                                <p>Produces no emissions, making it environmentally-friendly energy.</p>
                            </div>

                        </div>
                        <div class="chose_icon_wrapper_list">

                            <div class="chose_icon_img_list">
                                <img src="images/ser_img_6.png" alt="title">
                            </div>

                            <div class="chose_icon_content_left">
                                <h4><a href="javascript:;">Energy Can Be Reused</a></h4>
                                <p>Can be reused and harnessed multiple times, making it efficient energy.</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 hidden-sm hidden-xs">
                    <div class="section2_img_wrapper">
                        <img class="img-responsive" src="images/cs_service.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 hidden-sm hidden-xs">
                    <div class="chose_text_wrapper_right">
                        <div class="chose_icon_wrapper_list">
                            <div class="icon_content_right">
                                <h4><a href="javascript:;">Used for Many Purposes</a></h4>
                                <p>Powering homes, businesses, schools, communities, transportation and agriculture.</p>
                            </div>

                            <div class="chose_icon_img_list">
                                <img src="images/ser_img_3.png" alt="title">
                            </div>

                        </div>
                        <div class="chose_icon_wrapper_list">

                            <div class="icon_content_right">
                                <h4><a href="javascript:;">Low Installation Costs</a></h4>
                                <p>Advancement in solar technology have resulted in lower installation costs .</p>
                            </div>

                            <div class="chose_icon_img_list">
                                <img src="images/ser_img_4.png" alt="title">
                            </div>

                        </div>
                        <div class="chose_icon_wrapper_list">

                            <div class="icon_content_right">
                                <h4><a href="javascript:;">Easy Installation</a></h4>
                                <p>Easy to install, making them convenient and accessible energy.</p>
                            </div>

                            <div class="chose_icon_img_list">
                                <img src="images/ser_img_5.png" alt="title">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 visible-sm visible-xs">
                    <div class="chose_text_wrapper_right">
                        <div class="chose_icon_wrapper_list">
                            <div class="chose_icon_img_list">
                                <img src="images/ser_img_3.png" alt="title">
                            </div>
                            <div class="icon_content_right">
                                <h4><a href="javascript:;">Used for Many Purposes</a></h4>
                                <p>Powering homes, businesses, schools, communities, transportation and agriculture.</p>
                            </div>
                        </div>
                        <div class="chose_icon_wrapper_list">

                            <div class="chose_icon_img_list">
                                <img src="images/ser_img_4.png" alt="title">
                            </div>

                            <div class="icon_content_right">
                                <h4><a href="javascript:;">Low Installation Costs</a></h4>
                                <p>Advancement in solar technology have resulted in lower installation costs .</p>
                            </div>
                        </div>
                        <div class="chose_icon_wrapper_list">
                            <div class="chose_icon_img_list">
                                <img src="images/ser_img_5.png" alt="title">

                            </div>
                            <div class="icon_content_right">
                                <h4><a href="javascript:;">Easy Installation</a></h4>
                                <p>Easy to install, making them convenient and accessible energy.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 visible-sm visible-xs">
                    <div class="section2_img_wrapper">
                        <img class="img-responsive" src="images/cs_service.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sw choose service wrapper end-->
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
                        <!-- <!-- <div class="col-lg-2 col-md-2 col-xs-12 col-sm-4">
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
                        </div> --> -->

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