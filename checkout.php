<!DOCTYPE html>
<!--
Project:  Prayosha Solar HTML
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
    <title>Checkout</title>
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
                                <ul>
                                    <li class="dropdown_hover"><a href="index.php" title=""> home 1</a></li>
                                    <li class="dropdown_hover"><a href="index_2.html" title=""> home 2</a></li>
                                    <li class="dropdown_hover"><a href="index_3.html" title=""> home 3</a></li>
                                    <li class="dropdown_hover"><a href="index_4.html" title=""> home 4</a></li>
                                    <li class="dropdown_hover"><a href="index_5.html" title=""> home 5</a></li>
                                    <li class="dropdown_hover"><a href="index_6.html" title=""> home 6</a></li>
                                </ul>
                            </li>
                            <li><a href="about_us.php" title="">about us</a>
                            </li>
                            <li><a href="services.php" title="">services</a>
                            </li>
                            <li><a href="project_2.html" title="">projects</a>
                                <ul>
                                    <li class="dropdown_hover"><a href="project_2.html" title=""> project 2</a></li>
                                    <li class="dropdown_hover"><a href="project_3.html" title=""> project 3</a></li>
                                    <li class="dropdown_hover"><a href="project_4.html" title=""> project 4</a></li>
                                    <li class="dropdown_hover"><a href="project_fullwidth.html" title="">project
                                            fullwidth</a></li>
                                    <li class="dropdown_hover"><a href="project_single.html" title=""> project
                                            single</a></li>

                                </ul>
                            </li>
                            <li><a href="team.php" title="">team</a>
                                <ul>
                                    <li class="dropdown_hover"><a href="team.php" title=""> team</a></li>
                                    <li class="dropdown_hover"><a href="team_details.html" title="">team details</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="blog_single.html" title="">blog</a>
                                <ul>
                                    <li class="dropdown_hover"><a href="blog.php" title=""> blog
                                            categories</a></li>
                                    <li class="dropdown_hover"><a href="blog_category.html" title=""> blog category</a>
                                    </li>
                                    <li class="dropdown_hover"><a href="blog_single.html" title=""> blog single</a></li>
                                </ul>
                            </li>
                            <li><a href="shop.php" title="">shop</a>
                                <ul>
                                    <li class="dropdown_hover"><a href="shop.php" title="">shop sidebar</a>
                                    </li>
                                    <li class="dropdown_hover"><a href="shop_fullwidth.html" title=""> shop
                                            fullwidth</a></li>
                                    <li class="dropdown_hover"><a href="shop_single.html" title=""> shop single</a></li>
                                    <li class="dropdown_hover"><a href="cart.php" title="">Cart </a></li>
                                <li class="dropdown_hover"><a href="checkout.php" title=""> Checkout</a></li>
                                </ul>
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
                                        <a href="javascript:;"><i class="fa fa-search waves-effect waves-light"
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
                                        <a class="dropdown-toggle hvr-float-shadow active waves-effect waves-light"
                                            data-toggle="dropdown" href="javascript:;"><i class="fa fa-ellipsis-v"></i></a>
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
                    <div class="container-fluid header_container">
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
                                            <li><a href="blog.php" title="">blog</a>
                                            </li>
                                            <li><a href="shop.php" title="">shop</a>
                                            </li>
                                            <li><a href="contact_us.php" title="">Contact us</a>
                                                
                                            </li>
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
                                                <a href="javascript:;"><i class="fa-regular fa-user"></i></a>
                                                <ul>
                                                    <li>
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

                                                            <a href="checkout.php#!"
                                                                class="waves-effect waves-light waves-ripple">checkout</a>

                                                        </div>
                                                    </li>

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
                                <li>Checkout</li>
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
                            <h1>Checkout</h1>
                            <img src="images/hd_line_dark.png" alt="title">
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enimnim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="sw_about_top_img">
                        <img src="images/iner_shop.png" alt="img">=
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--sw about us top end-->
    <div class="checkout-page">
        <div class="container">

            <div class="panel-group" id="accordionFourLeft">
                <div class="panel panel-default panel-checkout">
                    <div class="panel-heading checkout_panel_heading">
                        <h4 class="panel-title">
								<i class="fa fa-user"></i> Have a coupone? 
                              <a data-toggle="collapse" data-parent="#accordion_oneLeft" href="checkout.php#collapseFiveLeftone" aria-expanded="false">
                             Click here to enter your code
                              </a>
                            </h4>
                    </div>
                    <div id="collapseFiveLeftone" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                        <div class="panel-body">

                            <div class="text-accordion">
                                <div class="estimate_shiping_Wrapper_cntnt estimate_shiping_Wrapper_cntnt_3">
                                    <div class="btc_shop_single_prod_right_section shop_product_single_head related_pdt_shop_head related_pdt_shop_head_2">
                                        <h1>coupan code enetr here : </h1>
                                        <div class="lr_nl_form_wrapper">
                                            <input type="text" placeholder="Type Your Code">
                                            <button type="submit">apply</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end of panel-body -->
                    </div>
                </div>
                <div class="panel panel-default panel-checkout panel-checkout-2">
                    <div class="panel-heading checkout_panel_heading">
                        <h4 class="panel-title">
								<i class="fa fa-user"></i> Returning customer? 
                              <a data-toggle="collapse" data-parent="#accordion_oneLeft" href="checkout.php#collapseFiveLefttwo" aria-expanded="false">
                             Click here to login
                              </a>
                            </h4>
                    </div>
                    <div id="collapseFiveLefttwo" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                        <div class="panel-body">

                            <div class="text-accordion">
                                <div class="estimate_shiping_Wrapper_cntnt estimate_shiping_Wrapper_cntnt_3">
                                    <div class="btc_shop_single_prod_right_section shop_product_single_head related_pdt_shop_head related_pdt_shop_head_2">
                                        <h1>login with your account : </h1>
                                        <div class="shop_pdt_form login_form ckeckpot_form_clr_wrapper">
                                            <!--Form Group-->
                                            <div class="row">
                                                <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                                    <div class="contect2_form1">
                                                        <input type="text" placeholder=" Username*"><i class="fa fa-user"></i>
                                                    </div>

                                                    <div class="contect2_form1">
                                                        <input type="password" placeholder=" password*"><i class="fa fa-lock"></i>
                                                    </div>

                                                    <div class="remember_box">
                                                        <input type="checkbox" name="" id="">
                                                        <label class="control control--checkbox">Remember me
                                                        </label>

                                                    </div>
                                                    <div class="shop_btn_wrapper chackout_login_btn">
                                                        <ul>
                                                            <li><a href="javascript:;">log in</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end of panel-body -->
                    </div>
                </div>
            </div>

            <!--Checkout Details-->
            <div class="checkout-form">

                <div class="row clearfix">
                    <!--Column-->
                    <div class="column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="btc_shop_single_prod_right_section related_pdt_shop_head checkout_heading">
                            <h1>BILLING DETAILS </h1>
                        </div>
                        <div class="row clearfix">

                            <!--Form Group-->
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">First Name <sup>*</sup></div>
                                <input type="text" name="field-name" value="" placeholder="">
                            </div>

                            <!--Form Group-->
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">Last Name </div>
                                <input type="text" name="field-name" value="" placeholder="">
                            </div>

                            <!--Form Group-->
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label">Company Name</div>
                                <input type="text" name="field-name" value="" placeholder="">
                            </div>

                            <!--Form Group-->
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">Email Address</div>
                                <input type="text" name="field-name" value="" placeholder="">
                            </div>

                            <!--Form Group-->
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">Phone</div>
                                <input type="text" name="field-name" value="" placeholder="">
                            </div>

                            <!--Form Group-->
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 pr-0">
                                <div class="field-label">Country</div>
                                <select>
                                    <option>Pakistan</option>
                                    <option>India</option>
                                    <option>Australia</option>
                                    <option>Usa</option>
                                </select>
                            </div>

                            <!--Form Group-->
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label">Address</div>
                                <input type="text" name="field-name" value="" placeholder="Street address">
                                <input type="text" name="field-name" value="" placeholder="Apartment,suite,unit etc. (optional)">
                            </div>

                            <!--Form Group-->
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label">Town/City</div>
                                <input type="text" name="field-name" value="" placeholder="">
                            </div>

                            <!--Form Group-->
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">State / County</div>
                                <input type="text" name="field-name" value="" placeholder="">
                            </div>

                            <!--Form Group-->
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">Postcode/ ZIP</div>
                                <input type="text" name="field-name" value="" placeholder="">
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="account-option_1"> &ensp;
                                    <label for="account-option_1">Create An Account?</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="text">Create an account by entering the information below. if you are a returning custoer please login at the top of the page.</div>
                            </div>

                            <!--Form Group-->
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label"><strong>Account Password</strong></div>
                                <input type="password" name="field-name" value="" placeholder="Password">
                            </div>

                        </div>
                    </div>
                    <!--Column-->
                    <div class="column col-md-6 col-sm-12 col-xs-12 checkout_form_2_wrapper">
                        <div class="btc_shop_single_prod_right_section related_pdt_shop_head checkout_heading">
                            <h1>SHIP TO A DIFFERENT ADDRESS? </h1>
                        </div>

                        <div class="row clearfix">

                            <!--Form Group-->
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">First Name <sup>*</sup></div>
                                <input type="text" name="field-name" value="" placeholder="">
                            </div>

                            <!--Form Group-->
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">Last Name </div>
                                <input type="text" name="field-name" value="" placeholder="">
                            </div>

                            <!--Form Group-->
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label">Company Name</div>
                                <input type="text" name="field-name" value="" placeholder="">
                            </div>

                            <!--Form Group-->
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 pr-0">
                                <div class="field-label">Country</div>
                                <select>
                                    <option>Pakistan</option>
                                    <option>India</option>
                                    <option>Australia</option>
                                    <option>Usa</option>
                                </select>
                            </div>

                            <!--Form Group-->
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label">Address</div>
                                <input type="text" name="field-name" value="" placeholder="Street address">
                                <input type="text" name="field-name" value="" placeholder="Apartment,suite,unit etc. (optional)">
                            </div>

                            <!--Form Group-->
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label">Town/City</div>
                                <input type="text" name="field-name" value="" placeholder="">
                            </div>

                            <!--Form Group-->
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">State / County</div>
                                <input type="text" name="field-name" value="" placeholder="">
                            </div>

                            <!--Form Group-->
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">Postcode/ ZIP</div>
                                <input type="text" name="field-name" value="" placeholder="">
                            </div>

                            <!--Form Group-->
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label">Other Notes</div>
                                <textarea class="" placeholder="Notes about your order,e.g. special notes for delivery."></textarea>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <!--End Checkout Details-->

            <!--Order Box-->
            <div class="order-box">
                <div class="btc_shop_single_prod_right_section related_pdt_shop_head checkout_heading">
                    <h1>your order </h1>
                </div>
                <div class="title-box">
                    <div class="col">PRODUCT</div>
                    <div class="col">TOTAL</div>
                </div>
                <ul>
                    <li class="clearfix"><strong>Patient Ninja 1</strong><span>$35.00</span></li>
                    <li class="clearfix">Sub Total<span>$35.00</span></li>
                    <li class="clearfix">Shipping<span class="free">Free Shipping</span></li>
                    <li class="clearfix">TOTAL<span>$35.00</span></li>
                </ul>
            </div>
            <!--End Order Box-->

            <!--Payment Box-->
            <div class="payment-box">
                <div class="upper-box">

                    <!--Payment Options-->
                    <div class="payment-options">
                        <ul>
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-2" checked>
                                    <label for="payment-2"><strong>Direct Bank Transfer</strong><span class="small-text">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</span></label>
                                </div>
                            </li>
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-1">
                                    <label for="payment-1"><strong>Check Payments</strong><span class="small-text">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</span></label>
                                </div>
                            </li>

                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-3">
                                    <label for="payment-3"><strong>Cash on Delivery</strong><span class="small-text">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</span></label>
                                </div>
                            </li>
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-4">
                                    <label for="payment-4"><strong>PayPal</strong><span class="image"><img src="images/paypal.jpg" alt="" /></span></label>
                                    <a href="javascript:;" class="what-paypall">What is PayPal?</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="lower-box text-right">
                    <div class="shop_btn_wrapper checkout_btn">
                        <ul>
                            <li><a href="javascript:;">place order</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Payment Box-->

        </div>

    </div>
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

                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
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
                            <a href="https://www.linkedin.com/in/atmik-virani-7b7316241/">Atmik X Prapti. </a></p>
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
    <script>
        const body = document.querySelector("body");
        const fab_nav = document.querySelector(".fab-container");
        const fab_rotate = document.querySelector(".fab-rotate");
        const fab_icon = document.querySelector(".fab-icon");

        if (fab_nav) {
            fab_nav.addEventListener("click", function () {
                fab_nav.classList.toggle("fab-opened");
            });

            body.addEventListener("click", function (e) {
                if (e.target != fab_nav && e.target != fab_rotate && e.target != fab_icon) {
                    fab_nav.classList.remove("fab-opened")
                }
            });
        }

    </script>

    <!--js code-->
</body>

</html>