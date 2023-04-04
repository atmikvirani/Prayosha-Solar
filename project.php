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
    <title>Project</title>
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
                            <li><a href="shop.php" title="">shop</a>
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
                                <li> project</li>
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
                            <h1>Our best project</h1>
                            <img src="images/hd_line_dark.png" alt="title">
                            <p>It is difficult to determine the “best” project as it depends on various factors such as context, goals, and criteria used for evaluation. However, the notable renewable project includes use of mirrors to concentrate sunlight and generate electricity.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="sw_about_top_img">
                        <img src="images/iner_prjct.png" alt="img">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--sw about us top end-->
    <!-- sw project section start-->
    <div class="sw_project_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 col-lg-offset-3">
                    <div class="sw_left_heading_wraper sw_center_heading_wrapper">
                        <h1>Our Incredible Projects</h1>
                        <img src="images/heading_line.png" alt="title">
                        <p>There are several noteworthy projects, which are most significant renewable energy projects.</p>
                    </div>
                </div>

                <div class="gallery-area">

                    <div id="gallery">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="filter filter-demo portfolio-nav galery_2_wraper my_slide_filter">
                                <ul>
                                    <li class="button galery_hover_div is-checked waves-effect waves-light waves-ripple" data-filter="*">
                                        all
                                    </li>
                                    <li class="button galery_hover_div waves-effect waves-light waves-ripple" data-filter=".branding">
                                        household
                                    </li>

                                    <li class="button galery_hover_div waves-effect waves-light waves-ripple" data-filter=".ux">
                                        organization</li>
                                    <li class="button galery_hover_div waves-effect waves-light waves-ripple" data-filter=".rresentation">
                                        research</li>

                                    <li class="button galery_hover_div waves-effect waves-light waves-ripple" data-filter=".web">
                                        solar pannels</li>

                                    <li class="button galery_hover_div waves-effect waves-light waves-ripple" data-filter=".photoshop">
                                        wind energy</li>
                                </ul>
                            </div>
                        </div>

                        <div class="grid galler_2_btm_section">

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 grid-item rresentation branding * project_pdr_btm">
                                <div class="gallery-list img-effect zoom-slow">
                                    <div class="sp_img_box_overlay"></div>
                                    <div class="over">

                                        <img src="images/pj_1.jpg" alt="" class="img-responsive" />

                                        <div class="tab_img_overlay tab_img_overlay_3">
                                            <a href="images/pj_1.jpg" class="venobox info" data-title="PROJECT TITTLE" data-gall="gall12">
                                                <!-- <i class="fa fa-arrows-alt"></i>-->
                                            </a>
                                            <h1>RADHNESADA SOLAR PARK</h1>
                                            <p>BANASKANTHA, GJ</p>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 grid-item ux * photoshop project_pdr_btm">
                                <div class="gallery-list img-effect zoom-slow">
                                    <div class="sp_img_box_overlay"></div>
                                    <div class="over">

                                        <img src="images/solar2.jpg" alt="" class="img-responsive" />
                                        <div class="tab_img_overlay tab_img_overlay_3">

                                            <a href="images/pj_2.jpg" class="venobox info" data-title="PROJECT TITTLE" data-gall="gall12">
                                                <!-- <i class="fa fa-arrows-alt"></i> -->
                                            </a>
                                            <h1>HARSAD SOLAR PARK</h1>
                                            <p>BANASKANTHA, GJ</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 grid-item ux branding photoshop project_pdr_btm">
                                <div class="gallery-list img-effect zoom-slow">
                                    <div class="sp_img_box_overlay"></div>
                                    <div class="over">

                                        <img src="images/solar3.jpg" alt="" class="img-responsive" />
                                        <div class="tab_img_overlay tab_img_overlay_3">

                                            <a href="images/pj_3.jpg" class="venobox info" data-title="PROJECT TITTLE" data-gall="gall12">
                                                <!-- <i class="fa fa-arrows-alt"></i>  -->
                                            </a>
                                            <h1>GUJARAT SOLAR PARK</h1>
                                            <p>CHARANKA, GJ</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 grid-item rresentation web branding * project_pdr_btm">
                                <div class="gallery-list img-effect zoom-slow">
                                    <div class="sp_img_box_overlay"></div>
                                    <div class="over">

                                        <img src="images/solar6.jpg" alt="" class="img-responsive" />
                                        <div class="tab_img_overlay tab_img_overlay_3">

                                            <a href="images/pj_4.jpg" class="venobox info" data-title="PROJECT TITTLE" data-gall="gall12">
                                                <!-- <i class="fa fa-arrows-alt"></i> </a> -->
                                            <h1>AZURE SOLAR POWER PARK</h1>
                                            <p>KHADODA, GJ</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 grid-item rresentation photoshop branding project_pdr_btm">
                                <div class="gallery-list img-effect zoom-slow">
                                    <div class="sp_img_box_overlay"></div>
                                    <div class="over ">

                                        <img src="images/solar7.jpg" alt="" class="img-responsive" />
                                        <div class="tab_img_overlay tab_img_overlay_3">

                                            <a href="images/pj_5.jpg" class="venobox info" data-title="PROJECT TITTLE" data-gall="gall12">
                                                <!-- <i class="fa fa-arrows-alt"></i> -->
                                             </a>
                                            <h1>AATASH SOLAR POWER PLANT</h1>
                                            <p>SARDI SARKHANDI, GJ</p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 grid-item web branding project_pdr_btm">
                                <div class="gallery-list img-effect zoom-slow">
                                    <div class="sp_img_box_overlay"></div>
                                    <div class="over">

                                        <img src="images/solar8.jpg" alt="" class="img-responsive" />
                                        <div class="tab_img_overlay tab_img_overlay_3">

                                            <a href="images/pj_6.jpg" class="venobox info" data-title="PROJECT TITTLE" data-gall="gall12">
                                                <!-- <i class="fa fa-arrows-alt"></i>  -->
                                            </a>
                                            <h1>DHOLERA SOLAR PARK PH-I</h1>
                                            <p>DHOLERA, GJ</p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 grid-item web project_pdr_btm">
                                <div class="gallery-list img-effect zoom-slow">
                                    <div class="sp_img_box_overlay"></div>
                                    <div class="over">

                                        <img src="images/pj_11.jpg" alt="" class="img-responsive" />
                                        <div class="tab_img_overlay tab_img_overlay_3">

                                            <a href="images/pj_11.jpg" class="venobox info" data-title="PROJECT TITTLE" data-gall="gall12">
                                                <!-- <i class="fa fa-arrows-alt"></i>  -->
                                            </a>
                                            <h1>LIVE LIFE PROJECT</h1>
                                            <p>AHMEDABAD, GJ</p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 grid-item rresentation project_pdr_btm">
                                <div class="gallery-list img-effect zoom-slow">
                                    <div class="sp_img_box_overlay"></div>
                                    <div class="over ">

                                        <img src="images/pj_5.jpg" alt="" class="img-responsive" />
                                        <div class="tab_img_overlay tab_img_overlay_3">

                                            <a href="images/pj_5.jpg" class="venobox info" data-title="PROJECT TITTLE" data-gall="gall12">
                                                <!-- <i class="fa fa-arrows-alt"></i>  -->
                                            </a>
                                            <h1>EASY GENERATE SOLAR PARK</h1>
                                            <p>DIU, GJ</p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 grid-item web rresentation project_pdr_btm">
                                <div class="gallery-list img-effect zoom-slow">
                                    <div class="sp_img_box_overlay"></div>
                                    <div class="over">

                                        <img src="images/pj_7.jpg" alt="" class="img-responsive" />
                                        <div class="tab_img_overlay tab_img_overlay_3">

                                            <a href="images/pj_7.jpg" class="venobox info" data-title="PROJECT TITTLE" data-gall="gall12">
                                                <!-- <i class="fa fa-arrows-alt"></i>  -->
                                            </a>
                                            <h1>SURYA SOLAR & WATER POWER PLANT</h1>
                                            <p>DHANSURA, GJ</p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 grid-item web photoshop project_pdr_btm">
                                <div class="gallery-list img-effect zoom-slow">
                                    <div class="sp_img_box_overlay"></div>
                                    <div class="over">

                                        <img src="images/solar9.jpg" alt="" class="img-responsive" />
                                        <div class="tab_img_overlay tab_img_overlay_3">

                                            <a href="images/pj_8.jpg" class="venobox info" data-title="PROJECT TITTLE" data-gall="gall12">
                                                <!-- <i class="fa fa-arrows-alt"></i>  -->
                                            </a>
                                            <h1>SIKOTAR SOLAR PLANT</h1>
                                            <p>GODHRA, GJ</p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 grid-item web project_pdr_btm">
                                <div class="gallery-list img-effect zoom-slow">
                                    <div class="sp_img_box_overlay"></div>
                                    <div class="over">

                                        <img src="images/pj_9.jpg" alt="" class="img-responsive" />
                                        <div class="tab_img_overlay tab_img_overlay_3">

                                            <a href="images/pj_9.jpg" class="venobox info" data-title="PROJECT TITTLE" data-gall="gall12">
                                                <!-- <i class="fa fa-arrows-alt"></i> -->
                                             </a>
                                            <h1>SUN SOLAR PARK</h1>
                                            <p>GANDHINAGAR, GJ</p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 grid-item photoshop project_pdr_btm">
                                <div class="gallery-list img-effect zoom-slow">
                                    <div class="sp_img_box_overlay"></div>
                                    <div class="over">

                                        <img src="images/pj_10.jpg" alt="" class="img-responsive" />
                                        <div class="tab_img_overlay tab_img_overlay_3">

                                            <a href="images/pj_10.jpg" class="venobox info" data-title="PROJECT TITTLE" data-gall="gall12">
                                                <!-- <i class="fa fa-arrows-alt"></i>  -->
                                            </a>
                                            <h1>TCS POWER PLANT</h1>
                                            <p>SURAT, GJ</p>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="cart_checkout_btn gallery_II_btn ">
                        <ul>
                            <li>

                                <a href="project_3.html#!" class="waves-effect waves-light waves-ripple">load more</a>

                            </li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- sw project section end-->
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
                        <p>Copyright 2022-23 <a href="index.php"> Prayosha Solar</a>. all right reserved - designed by <a href="https://www.linkedin.com/in/atmik-virani-7b7316241/">Atmik X Prapti. </a></p>
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
    <script src="cartdisp.js"></script>
    <!--js code-->
</body>

</html>