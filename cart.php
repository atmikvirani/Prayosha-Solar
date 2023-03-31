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
    <title>Cart</title>
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
    
    <!-- <script src="angular/angular.js"></script> -->
    <!-- <script src="script.js"></script>   -->
    

    <!-- favicon link-->
    <link rel="shortcut icon" type="image/icon" href="images/favicon.png" />
</head>

<body ng-app="Items" ng-controller="dispItems">
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
                    <a href="shop.php" class="waves-effect waves-light waves-ripple">Shop</a>
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
                                <li>Shopping Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page_title_section end -->
    <!--sw about us top start-->
    <!-- <div class="sw_about_top_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="sw_abot_top_txt_wrapper">
                        <div class="sw_left_heading_wraper sw_dark_heading_wraper">
                            <h1>Shopping Cart</h1>
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
                        <img src="images/iner_shop.png" alt="img">

                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--sw about us top end-->
    <div class="cart_product_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="btc_shop_single_prod_right_section shop_product_single_head related_pdt_shop_head">
                        <h1>Your Cart</h1>
                    </div>
                </div>
                <div class="shop_cart_page_wrapper" >
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                        <div class="table-responsive cart-calculations">
                            <form action="cartadd.php" method="post">
                            <table class="table">

                                <thead class="cart_table_heading">
                                    <tr>
                                        <th>item</th>

                                        <th>product</th>

                                        <th> price</th>

                                        <th>Quantity</th>

                                        <th>Total price</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <div id="label"></div>
                                
                                
                                <tbody id="shopping-cart">

                                </tbody>
                            
                        <tfoot>
                            <td><b>Total</b></td>
                            <td></td>
                            <td></td>
                            <td style="text-align: center;"><b><span id="cartAmount"></span></b></td>
                            <td><b><span id="cartTotal"></span></b></td>
                            <tr>
                            <td class="shop_btn_wrapper shop_car_btn_wrapper">

                                <ul>
                                    <li><a href="shop.php">continue shopping</a>
                                    </li>
                                </ul>
    
                            </td>
                            <td>

                                <!-- <ul>
                                    <input type="submit" value="Checkout" name="submit">
                                </ul> -->

                                <div class="shop_btn_wrapper shop_btn_wrapper_shipping">
                                    <ul>
                                        <li><a href="#" id="checkout-link" name="submit">Checkout</a>
                                        </li>
                                    </ul>
                                </div>

    
                            </td>
                        </tr>
                        </tfoot>
                        
                    </table>
                    </form>
                </div>

                        <!-- coupon code -->
                        <!-- <div class="estimate_shiping_Wrapper_cntnt estimate_shiping_Wrapper_cntnt_2">
                            <div
                                class="btc_shop_single_prod_right_section shop_product_single_head related_pdt_shop_head related_pdt_shop_head_2">
                                <h1> code enetr here : </h1>
                                <div class="lr_nl_form_wrapper">
                                    <input type="text" placeholder="Type Your Code">
                                    <button type="submit">apply</button>
                                </div>
                            </div>
                        </div> -->
                        <!-- coupon code ends -->

                    </div>
                    <div id="label" class="text-center"></div>

                    <div class="shopping-cart" id="shopping-cart"></div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <!-- estimate shipping -->
                        <!-- <div class="shipping_Wrapper">
                            <div
                                class="btc_shop_single_prod_right_section shop_product_single_head related_pdt_shop_head related_pdt_shop_head_2">
                                <h1>estimate shipping : </h1>
                            </div>
                            
                           <div class="estimate_shiping_Wrapper_cntnt">
                                <div class="custome-select style2">
                                    <select id="year">
                                        <option value="hide">Select country </option>
                                        <option value="USA">USA</option>
                                        <option value="Austraila">Austraila</option>
                                        <option value="London">London</option>
                                    </select>
                                </div>
                                <div class="custome-select style2">
                                    <select id="year">
                                        <option value="hide">Select State</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Rajsthan">Rajsthan</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    </select>
                                </div>
                                <input type="text" class="form-control" placeholder="Enter ZIP code" />
                                <div class="shop_btn_wrapper shop_btn_wrapper_shipping">
                                    <ul>
                                        <li><a href="javascript:;">check</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>  -->
                        <!-- estimate shipping ends -->

                            <div class="estimate_shiping_Wrapper_cntnt estimate_shiping_Wrapper_repsnse">

                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>Sub Total : </th>
                            <td><b><span id="cartTotal1"></span></b></td>
                                        </tr>
                                        <tr>
                                            <th>CGST 18% :</th>
                                            <td><span id="cgst"></span></td>
                                        </tr>
                                        <tr>
                                            <th>SGST 20% :</th>
                                            <td><span id="sgst"></span></td>
                                        </tr>
                                        <tr>
                                            <th> Discount :</th>
                                            <td><span id="discount"></span></td>
                                        </tr>
                                        <tr>
                                            <th class="cart_btn_cntnt">Total :</th>
                                            <td><span class="cart_btn_cntnt_clr" id="Total"></span> </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>

                    </div>
                </div>

            </div>
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

    <!-- <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
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
    <script>
        function increaseCount(a, b) {
            var input = b.previousElementSibling;
            var value = parseInt(input.value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            input.value = value;
        }

        function decreaseCount(a, b) {
            var input = b.nextElementSibling;
            var value = parseInt(input.value, 10);
            if (value > 1) {
                value = isNaN(value) ? 0 : value;
                value--;
                input.value = value;
            }
        }

    </script>
    <script>
        /*
Reference: http://jsfiddle.net/BB3JK/47/
*/

$('select').each(function(){
    var $this = $(this), numberOfOptions = $(this).children('option').length;
  
    $this.addClass('select-hidden'); 
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled"></div>');

    var $styledSelect = $this.next('div.select-styled');
    $styledSelect.text($this.children('option').eq(0).text());
  
    var $list = $('<ul />', {
        'class': 'select-options'
    }).insertAfter($styledSelect);
  
    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
        //if ($this.children('option').eq(i).is(':selected')){
        //  $('li[rel="' + $this.children('option').eq(i).val() + '"]').addClass('is-selected')
        //}
    }
  
    var $listItems = $list.children('li');
  
    $styledSelect.click(function(e) {
        e.stopPropagation();
        $('div.select-styled.active').not(this).each(function(){
            $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').toggle();
    });
  
    $listItems.click(function(e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        //console.log($this.val());
    });
  
    $(document).click(function() {
        $styledSelect.removeClass('active');
        $list.hide();
    });

});
    </script>
    <!--js code-->
</body>

</html>
    
    <!-- <script src="main.js"></script> -->
    <script src="Data.js"></script>
    <script src="cartdisp.js"></script> 
    <script>
    document.getElementById('checkout-link').addEventListener('click', function(event) {
    event.preventDefault(); // prevent the default link behavior
    document.querySelector('form').submit(); // submit the form
  });
</script>