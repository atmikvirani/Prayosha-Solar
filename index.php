
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
    <title>Prayosha Solar</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="smart pest" />
    <meta name="keywords" content="solar system /sun & wind" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--start theme style -->
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css/meanmenu.css" />
    <link rel="stylesheet" type="text/css" href="css/slicknav.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="venobox/css/venobox.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="css/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/camera.css">
    <link rel="stylesheet" type="text/css" href="css/style_6.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive_6.css" />
    <!-- favicon link-->
    <link rel="shortcut icon" type="image/icon" href="images/favicon.png" />
</head>

<body>
    <?php session_start(); ?>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status">
            <img src="images/preloader.gif" id="preloader_image" alt="loader">
        </div>
    </div>
    <!-- top header start -->
    <div class="topbar top2 float_left">
        <div class="container-fluid">
            <div class="row">
                <div class="topheader_bg">
                    <div class="top_header_add hidden-xs">
                        <ul>
                            <li><a class="contact-info" href="tel:+919879182811"><i class="fa fa-phone"
                                        aria-hidden="true"></i> Call Us: (+91) 987 918 2811</a></li>
                            <li class="hidden-sm"><a href="https://goo.gl/maps/pSnrrjZaDm2GzbCw7"><i
                                        class="fa fa-map-marker" aria-hidden="true"></i> Visit Us: Katargam, Surat GJ,
                                    395004</a></li>
                            <li><a class="contact-info" href="mailto:sales.prayoshacorporation@gmail.com"><i
                                        class="fa fa-envelope" aria-hidden="true"></i> Mail Us:
                                    sales.prayoshacorporation@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="top_header_add visible-xs">
                        <ul>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> : (+91) 987 918 2811</li>
                        </ul>
                    </div>

                    <!-- Social Icon -->
                    <div class="social_links_wrapper">
                        <div class="social_links">
                            <span class="hidden-xs hidden-sm"><i class="fa fa-rss" aria-hidden="true"></i> Follow Us:
                            </span>
                            <ul>
                                <li><a href="javascript:;"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="javascript:;"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="javascript:;"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li> <a href="javascript:;"><i class="fa fa-linkedin-in"></i></a> </li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- top header -->
    <!--sw header wrapper start-->
    <div class="transparent-menu header-area hidden-menu-bar stick ">

        <div class="container-fluid">

            <div class="bt_main_menu_wrapper">
                <div class="main-menu-wrapper clear-fix">

                    <div class="logo float-left visible-lg visible-md hidden-sm hidden-xs">
                        <a href="index.php"><img src="images/logo4.png" class="img-responsive" alt="logo"></a>
                    </div>
                    <div class="logo float-left hidden-lg hidden-md visible-sm visible-xs">
                        <a href="index.php"><img src="images/logo4.png" class="img-responsive" alt="logo"></a>
                    </div>

                </div>
                <div class="sc_navigation hidden-sm hidden-xs">
                    <nav id="primary-nav" class="dropdown nav_left_margin">
                        <ul class="dropdown menu navigation cart_dropdown_wrapper" style="left:35px">
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
                                    if(isset($_SESSION['email'])){  
                                        echo '<p style="font-weight:625;font-family:Montserrat;text-transform:initial;color:white;font-size:15px;">'.'<font style="font-weight:425;text-transform:initial;color:white;font-size:12px;">'.'hello, '.'</font>'.$_SESSION['user'].'</p>';
                                    }
                                    else{
                                        echo '<p style="font-weight:550;font-family:Montserrat;text-transform:initial;color:white;font-size:15px;">'.'<font style="text-transform:initial;color:white;font-size:12px;">'.'<!--hello, --> '.'</font>'.'Guest User'.'</p>';
                                    }
                                    ?>

                                    <!-- <li>
                                        <div class="cc_cart_wrapper1 menu-button">
                                            <div class="cc_cart_img_wrapper">
                                                <img src="images/cart_1.png" alt="cart_img" />
                                            </div>
                                            <div class="cc_cart_cont_wrapper">
                                                <h4><a href="javascript:;">put a title here</a></h4>
                                                <p>1 <span> $145 </span> </p>
                                                <h5><i class="fa fa-times"></i></h5>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cc_cart_wrapper1 menu-button">
                                            <div class="cc_cart_img_wrapper">
                                                <img src="images/cart_2.png" alt="cart_img" />
                                            </div>
                                            <div class="cc_cart_cont_wrapper">
                                                <h4><a href="javascript:;">put a title here</a></h4>
                                                <p>1 <span> $145 </span></p>
                                                <h5><i class="fa fa-times"></i></h5>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cc_cart_wrapper1 menu-button">
                                            <div class="cc_cart_img_wrapper">
                                                <img src="images/cart_3.png" alt="cart_img" />
                                            </div>
                                            <div class="cc_cart_cont_wrapper">
                                                <h4><a href="javascript:;">put a title here</a></h4>
                                                <p>1 <span> $145 </span></p>
                                                <h5><i class="fa fa-times"></i></h5>
                                            </div>
                                        </div>
                                        <div class="btm_cart_wrapper">
                                            <h5>$450.00</h5>
                                            <p>3 items</p>
                                        </div>
                                        <div class="cart_checkout_btn">

                                            <a href="checkout.php"
                                                class="waves-effect waves-purple  waves-ripple">checkout</a>

                                        </div>
                                    </li> -->

                                </ul>
                            </li>

                            <!-- Menu -->
                            <!--search -->
                        </ul>
                        <div class="header_right_main_wrapper">
                            <!-- <div class="search-wrapper">
                                <div class="et_navbar_search_wrapper hidden-xs">
                                    <div class="et_search_bar" id="search_button">
                                        <a href="javascript:;"><i class="fa fa-search waves-effect waves-purple"
                                                aria-hidden="true"></i></a>
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
                                        <a class="dropdown-toggle hvr-float-shadow active waves-effect waves-purple"
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
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="header_btn">
                                <ul>
                                    <li>
                                        <a href="cart.php" class="waves-effect waves-purple waves-ripple">free
                                            quote</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </nav>
                </div>
                <!-- /.main-menu-wrapper -->
                <!-- mobile menu area start -->
                <div class="mobile-menu-area visible-sm visible-xs">
                    <div class="container-fluid header_container">


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
    </div>

    <!--sw header wrapper end-->
    <!--sw slider wrapper start-->
    <div class="slider-area">
        <div class="slider_overlay"></div>
        <div class="container">


            <div class="slider_main_wrapper">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="carousel-captions caption-1">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="content">
                                            
                                            <h2 data-animation="animated fadeInUp">Gujarat's biggest bidder</h2>
                                            <p data-animation="animated fadeInUp" style="color:#4f25ba"><b>Prayosha Solar is the Gujarat's
                                                Biggest Bid taker for household projects in the year 2023-24.</b></p>
                                            <div data-animation="animated fadeInUp" class="disc_btn slider_btn">
                                                <!-- <ul>
                                                        <li>
                                                            <a href="index_6.html#!" class="waves-effect waves-purple waves-ripple">read more</a>
                                                        </li>
                                                    </ul> -->

                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" carousel-captions caption-2">

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="content">

                                            <h2 data-animation="animated fadeInUp">
                                                Renewable Energy

                                                for a Sustainable World.</h2>
                                            <p data-animation="animated fadeInUp" style="color:#4f25ba"><b>Windtech redefines your relationship
                                                with energy, save money minimize
                                                your carbon footprint, take control of your power costs.</b></p>

                                            <div data-animation="animated fadeInUp" class="disc_btn slider_btn">
                                                <!-- <ul>
                                                        <li>
                                                            <a href="index_6.html#!" class="waves-effect waves-purple waves-ripple">read more</a>
                                                        </li>
                                                    </ul> -->

                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-captions caption-3">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="content">

                                            <h2 data-animation="animated fadeInUp">
                                                Renewable Energy

                                                for a Sustainable World.</h2>
                                            <p data-animation="animated fadeInUp" style="color:#4f25ba"><b>Windtech redefines your relationship
                                                with energy, save money minimize
                                                your carbon footprint, take control of your power costs.</b></p>

                                            <div data-animation="animated fadeInUp" class="disc_btn slider_btn">
                                                <!-- <ul>
                                                        <li>
                                                            <a href="index_6.html#!" class="waves-effect waves-purple waves-ripple">read more</a>
                                                        </li>
                                                    </ul> -->

                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"><span
                                    class="number"></span>
                            </li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" class=""><span
                                    class="number"></span>
                            </li>
                            <li data-target="#carousel-example-generic" data-slide-to="2" class=""><span
                                    class="number"></span>
                            </li>
                        </ol>
                        <div class="carousel-nevigation">
                            <a class="prev" href="index_6.html#carousel-example-generic" role="button"
                                data-slide="prev"> <i class="fa fa-angle-left"></i>
                                <span>PR<br>EV</span>
                            </a>
                            <a class="next" href="index_6.html#carousel-example-generic" role="button"
                                data-slide="next"> <span>NE<br>XT</span>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sw_spectrum_wrapper_shape">
            <div class="sw_banner_top_shap_img_wrapper">
                <img src="images/image.png" alt="shape">
            </div>
        </div>
    </div>
    <!-- sw slider section end-->
    <!-- sw spectrum section start-->

    <div class="sw_spectrum_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 animated fadeIn" data-animate="fadeIn">
                    <ul class="sw_service_box_wrapper">
                        <li class="sw_service_box sw_box1">
                            <div class="chose_icon_img_list">
                                <i class="flaticon-idea"></i>
                            </div>
                            <h4><a href="javascript:;">Lower Electricity Bills</a></h4>
                            <p>Generate your own power to save money on monthly utility bills.</p>
                        </li>
                        <li class="sw_service_box sw_box2">
                            <div class="chose_icon_img_list">
                                <i class="flaticon-power"></i>
                            </div>
                            <h4><a href="javascript:;">Government Incentives</a></h4>
                            <p>Take advantage of government support to offset the cost of installing solar panels. </p>
                        </li>
                        <li class="sw_service_box sw_box3">
                            <div class="chose_icon_img_list">
                                <i class="flaticon-pinwheel"></i>
                            </div>
                            <h4><a href="javascript:;">Environmental Benefits</a></h4>
                            <p>Reduce your carbon footprint and contribute to a more sustainable future. </p>
                        </li>
                        <li class="sw_service_box sw_box4">
                            <div class="chose_icon_img_list">
                                <i class="flaticon-powerpoint"></i>
                            </div>
                            <h4><a href="javascript:;">Low Installation Costs</a></h4>
                            <p>Solar panels have become more affordable, making solar energy a cost-effective solution. </p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 animated fadeIn" data-animate="fadeIn">
                    <div class="sw_service_image">
                        <div class="sw_left_heading_wraper">
                            <h1>Why Choose Solar Energy?</h1>
                            <img src="images/heading_line2.png" alt="title">
                        </div>
                        <p>Choose solar energy for energy independence, cost savings, and a sustainable future with added benefits of increased home value and government incentives. 
                        </p>
                        <p>WIt's a smart and responsible choice for homeowners and commercials looking for a reliable and sustainable energy solution.</p>
                        <div class="disc_btn">
                            <ul>
                                <li>
                                    <a href="product.php" class="waves-effect waves-purple waves-ripple">Products We offer!</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--sw spectrum wrapper end-->
    <!--sw discover wrapper start-->
    <div class="sw_discver_wrapper">
        <div class="shape_1_wrapper">
            <img src="images/shape4.png" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="visible-sm visible-xs">
                    <div class="sw_right_img_wrapper">
                        <img src="images/disc_lft_bg.png" alt="About" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="sw_disc_txt_wrapper">

                        <div class="sw_left_heading_wraper">
                            <h1>Discover the Advantages</h1>
                            <img src="images/heading_line2.png" alt="title">
                            <p>Solar power is the most abundant, fastest, and the budget friendly mode of energy source and has less negative impact on the environment. </p>
                        </div>
                        <div class="sw_desc_btm_txt">
                            <div class="sw_disc_image">
                                <i class="flaticon-sun"></i>
                            </div>
                            <div class="sw_disc_head_text">
                                <h5><a href="javascript:;">Solar Panels Service</a></h5>
                                <p>Solar panel service involves the maintenance, repair, and cleaning of solar panels to ensure they are operating at maximum efficiency.
                                    <br>
                                </p>
                            </div>
                        </div>
                        <div class="sw_desc_btm_txt">
                            <div class="sw_disc_image">
                                <i class="flaticon-wind-turbine"></i>
                            </div>
                            <div class="sw_disc_head_text">
                                <h5><a href="javascript:;">Best Renewable Energy</a></h5>
                                <p>It offers a sustainable, clean, and reliable alternative to non-renewable sources of energy.
                                    <br>
                                </p>
                            </div>
                        </div>
                        <div class="sw_desc_btm_txt">
                            <div class="sw_disc_image">
                                <i class="flaticon-power"></i>
                            </div>
                            <div class="sw_disc_head_text">
                                <h5><a href="javascript:;">Extended Guarantee</a></h5>
                                <p>Extended Guarantee include the duration, coverage, conditions, cost, and reputation of the manufacturer or warranty provider and ensures the longevity and performance of the solar energy system over the long term.
                                    <br>
                                </p>
                            </div>
                        </div>
                        <div class="disc_btn">
                            <ul>
                                <li>
                                    <a href="services.php" class="waves-effect waves-purple waves-ripple">Services We Provide</a>
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-6 hidden-sm hidden-xs">
                    <div class="sw_right_img_wrapper">
                        <img src="images/disc_lft_bg.png" alt="About" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <div class="icon2">
            <img src="images/icon_2.png" alt="img">
        </div>
        <div class="icon_4">
            <img src="images/icon_4.png" alt="img">
        </div>
    </div>
    <!-- sw discover section end-->
    <!--sw newsletter wrapper start-->
    <div class="sw_news_letter_wrapper">
        <div class="container">
            <div class="sw_nl_heading_wrapper">

                <div class="sw_disc_image">
                    <i class="flaticon-rocket"></i>
                </div>
                <h2>Get Free Consultancy About Your Project</h2>

            </div>

            <div class="sw_nl_form_wrapper">

                <div class="header_btn ltr_btn">
                    <ul>
                        <li>
                            <a href="contact_us.php" class="waves-effect waves-purple waves-ripple">ask a question</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

    </div>
    <!--sw newsletter wrapper end-->
    <div class="sw_project_wrapper">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 col-lg-offset-3">
                    <div class="sw_left_heading_wraper sw_center_heading_wrapper">
                        <h1>Our Incredible Projects</h1>
                        <img src="images/heading_line2.png" alt="title">
                        <p>There have been many incredible projects related to solar panels done successfully done by our company. </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="portfolio_nav">
                        <!--filter-->
                        <div class="filter-button-group button-group">
                            <button class="is-checked" data-filter="*">all</button>
                            <button data-filter=".household">Household</button>
                            <button data-filter=".organization">Organization</button>
                            <button data-filter=".research">Research</button>
                            <button data-filter=".solar_pannels">Solar Pannels</button>
                            <!-- <button data-filter=".wind_energy">Wind Energy</button> -->
                        </div>
                        <!-- /filter-->
                    </div><!--/.portfolio_nav-->
                </div>


                <div class="col-md-12">
                    <div class="grid popup-gallery" style="position: relative; height: 1906.65px;">
                        <div class="row">

                            <div class="col-md-4 col-xs-12 grid-item household" data-category="household"
                                style="position: absolute; left: 0%; top: 0px;">
                                <div class="item-inner">
                                    <img src="images/img1.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <div class="view-list">
                                            <a href="images/img1.jpg" class="venobox info" data-title="PROJECT TITTLE"
                                                data-gall="gall12">
                                                <!-- <i class="fa fa-arrows-alt"></i> --></a> 
                                            <h1>HARSAD SOLAR PARK</h1>
                                            <p>BANASKANTHA, GJ</p>

                                        </div>
                                    </div>
                                </div><!--/.item-inner-->
                            </div>

                            <div class="col-md-4 col-xs-12 grid-item organization" data-category="organization"
                                style="position: absolute; left: 66.6667%; top: 0px;">
                                <div class="item-inner">
                                    <img src="images/img2.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <div class="view-list">
                                            <a href="images/img2.jpg" class="venobox info" data-title="PROJECT TITTLE"
                                                data-gall="gall12">
                                                <!-- <i class="fa fa-arrows-alt"></i>  -->
                                            </a>
                                            <h1>TCS SOLAR PLANT</h1>
                                            <p>SURAT, GJ</p>

                                        </div>
                                    </div>
                                </div><!--/.item-inner-->
                            </div>

                            <div class="col-md-4 col-xs-12 grid-item organization" data-category="organization"
                                style="position: absolute; left: 66.6667%; top: 380px;">
                                <div class="item-inner">
                                    <img src="images/img3.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <div class="view-list">
                                            <a href="images/img3.jpg" class="venobox info" data-title="PROJECT TITTLE"
                                                data-gall="gall12">
                                                <!-- <i class="fa fa-arrows-alt"></i>  -->
                                            </a>
                                            <h1>GUJARAT SOLAR PARK</h1>
                                            <p>CHARANKA, GJ</p>

                                        </div>
                                    </div>
                                </div><!--/.item-inner-->
                            </div>

                            <div class="col-md-4 col-xs-12 grid-item research" data-category="research"
                                style="position: absolute; left: 66.6667%; top: 761px;">
                                <div class="item-inner">
                                    <img src="images/img4.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <div class="view-list">
                                            <a href="images/img4.jpg" class="venobox info" data-title="PROJECT TITTLE"
                                                data-gall="gall12">
                                                <!-- <i class="fa fa-arrows-alt"></i>  -->
                                            </a>
                                            <h1>DHOLERA SOLAR PARK PH-I</h1>
                                            <p>DHOLERA, GJ</p>

                                        </div>
                                    </div>
                                </div><!--/.item-inner-->
                            </div>

                            <div class="col-md-4 col-xs-12 grid-item solar_pannels" data-category="solar_pannels"
                                style="position: absolute; left: 0%; top: 762px;">
                                <div class="item-inner">
                                    <img src="images/img5.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <div class="view-list">
                                            <a href="images/img5.jpg" class="venobox info" data-title="PROJECT TITTLE"
                                                data-gall="gall12">
                                                <!-- <i class="fa fa-arrows-alt"></i>  -->
                                            </a>
                                            <h1>AZURE SOLAR POWER PARK</h1>
                                            <p>KHADODA, GJ</p>

                                        </div>
                                    </div>
                                </div><!--/.item-inner-->
                            </div>
                            <div class="col-md-4 col-xs-12 grid-item wind_energy" data-category="wind_energy"
                                style="position: absolute; left: 33.3333%; top: 762px;">
                                <div class="item-inner">
                                    <img src="images/img6.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <div class="view-list">
                                            <a href="images/img6.jpg" class="venobox info" data-title="PROJECT TITTLE"
                                                data-gall="gall12">
                                                <!-- <i class="f a fa-arrows-alt"></i> -->
                                             </a>
                                            <h1>AATASH SOLAR POWER PLANT</h1>
                                            <p>SARDI SARKHANDI, GJ</p>

                                        </div>
                                    </div>
                                </div><!--/.item-inner-->
                            </div>


                            <div class="col-md-4 col-xs-12 grid-item research" data-category="research"
                                style="position: absolute; left: 66.6667%; top: 1142px;">
                                <div class="item-inner">
                                    <img src="images/img7.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <div class="view-list">
                                            <a href="images/img7.jpg" class="venobox info" data-title="PROJECT TITTLE"
                                                data-gall="gall12">
                                                <!-- <i class="fa fa-arrows-alt"></i> -->
                                             </a>
                                            <h1>LIVE LIFE PROJECT</h1>
                                            <p>AHMEDABAD, GJ</p>

                                        </div>
                                    </div>
                                </div><!--/.item-inner-->
                            </div>



                            <div class="col-md-4 col-xs-12 grid-item wind_energy" data-category="wind_energy"
                                style="position: absolute; left: 66.6667%; top: 1523px;">
                                <div class="item-inner">
                                    <img src="images/img8.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <div class="view-list">
                                            <a href="images/img8.jpg" class="venobox info" data-title="PROJECT TITTLE"
                                                data-gall="gall12">
                                                <!-- <i class="fa fa-arrows-alt"></i> -->
                                             </a>
                                            <h1>EASY GENERATE SOLAR PARK</h1>
                                            <p>DIU, GJ</p>

                                        </div>
                                    </div>
                                </div><!--/.item-inner-->
                            </div>

                            <div class="col-md-4 col-xs-12 grid-item solar_pannels" data-category="solar_pannels"
                                style="position: absolute; left: 0%; top: 757px;">
                                <div class="item-inner">
                                    <img src="images/img9.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <div class="view-list">
                                            <a href="images/img9.jpg" class="venobox info" data-title="PROJECT TITTLE"
                                                data-gall="gall12">
                                                <!-- <i class="fa fa-arrows-alt"></i> -->
                                             </a>
                                            <h1>SURYA SOLAR & WATER POWER PLANT</h1>
                                            <p>DHANSURA, GJ</p>

                                        </div>
                                    </div>
                                </div><!--/.item-inner-->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </div>
    <!--sw testimonial wrapper start-->
    <div class="sw_testimonial_wrapper">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 col-lg-offset-3">
                    <div class="sw_left_heading_wraper sw_dark_heading_wraper dark_heading_center">
                        <h1>Why Choose Us</h1>
                        <img src="images/heading_line3.png" alt="title">
                        <p>Our company aligns with our values, provide the necessary services, and offer the best overall value for your investments. </p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sw_testimonials_slider">
                        <div class="owl-carousel owl-theme">
                            <div class="item">


                                <div class="sw_testimonial_wrap">
                                    <div class="sw_quote_icon_wrapper">
                                        <svg width="87px" height="60px">
                                            <g>
                                                <path class="sw_icon_svg"
                                                    d="M39.876,2.886 C39.876,2.886 66.886,11.131 84.508,34.153 C91.420,44.133 78.000,60.000 78.000,60.000 L7.000,60.000 C7.000,60.000 -0.098,33.661 0.391,29.803 C0.881,25.945 0.224,-7.265 39.876,2.886 Z" />
                                            </g>
                                        </svg>
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="sw_testimonial_img_wrapper">
                                        <div class="sw_image">
                                            <img src="images/image1.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                    <div class="sw_testimonial_text_wrapper">
                                        <p>Sarang drives our company's success with her visionary leadership and commitment to delivering exceptional value to our customers.</p>
                                        <div class="sw_author">
                                            <h2>Sarang Bhatt</h2>
                                            <h3>CEO</h3>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <div class="item">

                                <div class="sw_testimonial_wrap">
                                    <div class="sw_quote_icon_wrapper">
                                        <svg width="87px" height="60px">
                                            <g>
                                                <path class="sw_icon_svg"
                                                    d="M39.876,2.886 C39.876,2.886 66.886,11.131 84.508,34.153 C91.420,44.133 78.000,60.000 78.000,60.000 L7.000,60.000 C7.000,60.000 -0.098,33.661 0.391,29.803 C0.881,25.945 0.224,-7.265 39.876,2.886 Z" />
                                            </g>
                                        </svg>
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="sw_testimonial_img_wrapper">
                                        <div class="sw_image">
                                            <img src="images/image.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                    <div class="sw_testimonial_text_wrapper">
                                        <p>As Manager for our solar company, Aisha oversees the planning, design, and execution of solar panel installations for our customers.</p>
                                        <div class="sw_author">
                                            <h2>Aisha Shah</h2>
                                            <h3>Manager</h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- <div class="item">

                                <div class="sw_testimonial_wrap">
                                    <div class="sw_quote_icon_wrapper">
                                        <svg width="87px" height="60px">
                                            <g>
                                                <path class="sw_icon_svg"
                                                    d="M39.876,2.886 C39.876,2.886 66.886,11.131 84.508,34.153 C91.420,44.133 78.000,60.000 78.000,60.000 L7.000,60.000 C7.000,60.000 -0.098,33.661 0.391,29.803 C0.881,25.945 0.224,-7.265 39.876,2.886 Z" />
                                            </g>
                                        </svg>
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="sw_testimonial_img_wrapper">
                                        <div class="sw_image">
                                            <img src="images/testi_1.png" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                    <div class="sw_testimonial_text_wrapper">
                                        <p>Cras mush pardon you knees up he lost his bottle it's all gone to pot faff
                                            about porkies are, barney argy-bargy cracking goal.</p>
                                        <div class="sw_author">
                                            <h2>James Cartwright </h2>
                                            <h3>Employee</h3>
                                        </div>
                                    </div>
                                </div>

                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="icon_4">
            <img src="images/icon_4.png" alt="img">
        </div>

        <div class="icon_5">
            <img src="images/icon_5.png" alt="img">
        </div>
    </div>

    <!--sw testimonial wrapper end-->
    <!--sw best product wrapper start-->
    <div class="sw_best_product_wrapper">
        <div class="icon_4">
            <img src="images/icon_4.png" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="sw_left_heading_wraper">
                        <h1>Our Best Rated Products</h1>
                        <img src="images/heading_line2.png" alt="title">
                    </div>
                </div>

                <!-- slider start -->
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 sw_spectrm_padding">
                    <div class="best_product_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="sw_product_box_wrapper">
                                    <div class="sw_product_indx_img_wrapper">

                                        <img src="images/prdct_1.jpg" alt="shop_img" class="img-responsive" />
                                    </div>

                                    <div class="sw_product_indx_img_cont_wrapper">
                                        <div class="sw_pdct_img">
                                            <img src="images/line.png" alt="img" />
                                        </div>
                                        <h5>₹ 15000</h5>
                                        <h1><a href="javascript:;">AIR 30 Turbine</a></h1>

                                        <div class="cc_li_cont_wrapper">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <!-- <div class="cc_li_img_overlay">
                                            <div class="cc_li_img_text">
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fa fa-shopping-cart"></i></a>
                                                    </li>
                                                    <li><a href="javascript:;"><i class="fa fa-heart"></i></a></li>

                                                    <li><a href="javascript:;"><i class="fa fa-expand"></i></a></li>
                                                </ul>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="sw_product_box_wrapper">
                                    <div class="sw_product_indx_img_wrapper">

                                        <img src="images/prdct_2.jpg" alt="shop_img" class="img-responsive" />
                                    </div>

                                    <div class="sw_product_indx_img_cont_wrapper">
                                        <div class="sw_pdct_img">
                                            <img src="images/line.png" alt="img" />
                                        </div>
                                        <h5>₹ 22000</h5>
                                        <h1><a href="javascript:;">canadian 30 Turbine</a></h1>

                                        <div class="cc_li_cont_wrapper">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <!-- <div class="cc_li_img_overlay">
                                            <div class="cc_li_img_text">
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fa fa-shopping-cart"></i></a>
                                                    </li>
                                                    <li><a href="javascript:;"><i class="fa fa-heart"></i></a></li>

                                                    <li><a href="javascript:;"><i class="fa fa-expand"></i></a></li>
                                                </ul>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="sw_product_box_wrapper">
                                    <div class="sw_product_indx_img_wrapper">

                                        <img src="images/prdct_3.jpg" alt="shop_img" class="img-responsive" />
                                    </div>

                                    <div class="sw_product_indx_img_cont_wrapper">
                                        <div class="sw_pdct_img">
                                            <img src="images/line.png" alt="img" />
                                        </div>
                                        <h5>₹ 17000</h5>
                                        <h1><a href="javascript:;">AIR Turbine 40</a></h1>

                                        <div class="cc_li_cont_wrapper">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <!-- <div class="cc_li_img_overlay">
                                            <div class="cc_li_img_text">
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fa fa-shopping-cart"></i></a>
                                                    </li>
                                                    <li><a href="javascript:;"><i class="fa fa-heart"></i></a></li>

                                                    <li><a href="javascript:;"><i class="fa fa-expand"></i></a></li>
                                                </ul>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="sw_product_box_wrapper">
                                    <div class="sw_product_indx_img_wrapper">

                                        <img src="images/prdct_4.jpg" alt="shop_img" class="img-responsive" />
                                    </div>

                                    <div class="sw_product_indx_img_cont_wrapper">
                                        <div class="sw_pdct_img">
                                            <img src="images/line.png" alt="img" />
                                        </div>
                                        <h5>₹ 13000</h5>
                                        <h1><a href="javascript:;">Canadian Solar 255</a></h1>

                                        <div class="cc_li_cont_wrapper">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <!-- <div class="cc_li_img_overlay">
                                            <div class="cc_li_img_text">
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fa fa-shopping-cart"></i></a></li>
                                                    
                                                    <li><a href="javascript:;"><i class="fa fa-heart"></i></a></li>

                                                    <li><a href="javascript:;"><i class="fa fa-expand"></i></a></li>
                                                </ul>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="sw_product_box_wrapper">
                                    <div class="sw_product_indx_img_wrapper">

                                        <img src="images/prdct_2.jpg" alt="shop_img" class="img-responsive" />
                                    </div>

                                    <div class="sw_product_indx_img_cont_wrapper">
                                        <div class="sw_pdct_img">
                                            <img src="images/line.png" alt="img" />
                                        </div>
                                        <h5>₹ 21500</h5>
                                        <h1><a href="javascript:;">SolarWorld 280</a></h1>

                                        <div class="cc_li_cont_wrapper">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <!-- <div class="cc_li_img_overlay">
                                            <div class="cc_li_img_text">
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fa fa-shopping-cart"></i></a>
                                                    </li>
                                                    <li><a href="javascript:;"><i class="fa fa-heart"></i></a></li>

                                                    <li><a href="javascript:;"><i class="fa fa-expand"></i></a></li>
                                                </ul>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape_under">
            <img src="images/shape5.png" alt="shape">
        </div>
    </div>
    <!--sw best product wrapper end-->
    <!--sw our newsletter wrapper start-->
    <div class="sw_our_newsletter_wrapper">
        <div class="icon_5">
            <img src="images/icon_5.png" alt="img">
        </div>
        
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
                                    <button type="submit" class="waves-effect waves-purple waves-ripple">Subscribe</button>
                                </div>
                            </form>
                        <p>True environmental protection lies in loving the mountains, the oceans and in cher
                            <br> all creation.
                        </p>

                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="sw_letter_img_wrapper wow  zoomIn animated" data-wow-duration="1.3s"
                        style="visibility: visible; animation-duration: 1.3s; animation-name: zoomIn;">
                        <img src="images/btm_news_bg.png" alt="img">

                    </div>
                </div>
            </div>
        </div>
        <div class="icon_4">
            <img src="images/icon_4.png" alt="img">
        </div>
    </div>
    <!-- sw our newsletter section end-->
    <!-- sw partners section start-->
    <div class="sw_partners_wrapper">
        <div class="container">
            <div class="row">
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
    <div class="footer_wrapper">
        <div class="icon_4">
            <img src="images/icon_4.png" alt="img">
        </div>
        <div class="container">
            <div class="circle_btm">
                <a href="javascript:" id="return-to-top"><i class="fa fa-long-arrow-up"></i></a>
            </div>
            <div class="row">
                <div class="foter_padder">
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                        <div class="wrapper_second_about">
                            <div class="wrapper_first_image">
                                <a href="index.php"><img src="images/hd_logo.png" class="img-responsive"
                                        alt="logo" /></a>
                            </div>
                            <div class="abotus_content">
                                <p align="justify">Prayosha Solar is a highly respected and trusted company in the solar
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
                    <p>Copyright &copy; <span id="website-year">2022-23</span> <a href="index.php"> Prayosha Solar</a>. all right reserved - designed by <a
                            href="https://www.linkedin.com/in/atmik-virani-7b7316241/">Atmik X Prapti. </a></p>
                </div>
            </div>
        </div>
        <div class="icon_5">
            <img src="images/icon_5.png" alt="img">
        </div>
        <div class="icon2">
            <img src="images/icon_2.png" alt="img">
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
    <script src="js/isotop.js"></script>
    <script src="venobox/js/venobox.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/camera.min.js"></script>
    <script src="js/custom_6.js"></script>
    
    <!--js code-->
</body>

</html>
<script>
    var d = new Date();
    var n = d.getFullYear();
    var year = document.getElementById("website-year")
    year.innerHTML = n
  </script>
<script>
    var d = new Date();
    var n = d.getFullYear();
    var year = document.getElementById("website-year")
    year.innerHTML = n
  </script>