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
    <title>Reset Password</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="smart pest" />
    <meta name="keywords" content="solar system /sun & wind" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--start theme style -->
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
    <div class="login_main_wrapper res_main_wrapper">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="image-wrap">
                        <img src="images/form-image.gif" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">

                    <div class="sw_contact_form_wrapper sw_contact_form_padder login_form_wrapper">
                        <div class="contact_right_wrapper">
                            <div class="cmnt_area_div_mn">
                                <div class="sw_left_heading_wraper sw_dark_heading_wraper">
                                    <h1>Reset Password</h1>
                                    <img src="images/heading_line.png" alt="title">
                                </div>
                                <div class="row">
                                    <form action="forgot_newpass.php" method="post">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="contect_form1">
                                                    <input type="password" name="txtpass" placeholder="New Password*"
                                                        class="require" data-valid="email"
                                                        data-error="Email should be valid." id="password" required
                                                        title="Enter Password">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="contect_form1">
                                                    <input type="password" name="txtcpass"
                                                        placeholder="Confirm Password*" class="require"
                                                        data-valid="email" data-error="Email should be valid."
                                                        id="confirmPassword" required title="Re-Enter Password">
                                                </div>
                                                <div id="message"></div>
                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="checkbox" class="none" onclick="myFunction()" id="show" />
                                            <label for="show">Show Password</label>
                                            <!-- <ul>
                                                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <input type="checkbox" name="" id="check">
                                                    <label for="check" required
                                                        title="You need to accept Terms &amp; Conditions">Yes, I
                                                        understand and agree
                                                        <a href="javascript:;" class="text-color">Terms &amp;
                                                            Conditions.</a>
                                                    </label>
                                                </li>
                                            </ul> -->
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="buttons">
                                                    <input type="submit" value="Reset" class="form-btn" name="submit" id="submit" disabled>

                                                </div>
                                            </div>
                                    </form>
                                    <!-- <div class="col-lg-12">
                                        <div class="login-sec">
                                            <span>Already have an account?</span>
                                            <u><a href="login.html"> Login Now.</a></u>
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
    </div>


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

    <!--js code-->
</body>
<script>
    // show password
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        var x = document.getElementById("confirmPassword");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    // password match   
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirmPassword');
    const message = document.getElementById('message');

    password.addEventListener('keyup', validate);
    confirmPassword.addEventListener('keyup', validate);

    function validate() {
        if (password.value != confirmPassword.value) {
            message.innerHTML = "Passwords do not match";
            // document.getElementById("submit").disabled = false;
        } else {
            message.innerHTML = "";
        }
    }
    
    // if password and confirm password is matching then allow user to submit
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirmPassword');
    const submitBtn = document.getElementById('submit');


    function checkPasswords() {
        if (passwordInput.value === confirmPasswordInput.value) {
            submitBtn.disabled = false;
        } else {
            submitBtn.disabled = true;
        }
    }
    passwordInput.addEventListener('input', checkPasswords);
    confirmPasswordInput.addEventListener('input', checkPasswords);
    
</script>

</html>