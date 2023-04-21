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
    <title>Forgot Password</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="smart pest" />
    <meta name="keywords" content="solar system /sun & wind" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--start theme style -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/meanmenu.css" />
    <link rel="stylesheet" type="text/css" href="css/slicknav.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="venobox/css/venobox.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css" />
    <link rel="stylesheet" type="text/css" href="css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/camera.css" />
    <link rel="stylesheet" type="text/css" href="css/style_2.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive_2.css" />
    <!-- favicon link-->
    <link rel="shortcut icon" type="image/icon" href="images/favicon.png" />
  </head>
  <script>
    function myFunction() {
      var x = document.getElementById("pass");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>
  <body>
    <div class="login_main_wrapper">
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="image-wrap">
              <img src="images/form-image.gif" alt="img" />
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <div
              class="sw_contact_form_wrapper sw_contact_form_padder login_form_wrapper"
            >
              <div class="contact_right_wrapper">
                <div class="cmnt_area_div_mn">
                  <div class="sw_left_heading_wraper sw_dark_heading_wraper">
                    <h1>Forgot Password?</h1>
                    <img src="images/heading_line.png" alt="title" />
                  </div>
                  <div class="row">
                    <form action="pass_otpcheck.php" method="post">
                      <div class="cont_main_section">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="contect_form1">
                            <p>We have sent a code to your <u><?php echo $_SESSION['forgot']?></u> email.</p>
                            <div id="">Enter code within (<span id="timer"></span>) Seconds.</div>
                            <input
                              type="text"
                              name="txtotp"
                              placeholder="Enter Code"
                              class="require"
                              value=""
                            required title="Enter Code">
                          </div>
                        </div>
                        <!-- <ul>
                          <li>
                            <a href="javascript:;"
                              >&nbsp;&nbsp;&nbsp;&nbsp;Forget Password</a>
                          </li>
                        </ul> -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="buttons">
                            <input type="submit" value="Submit" name="submit" class="form-btn">
                          </div>
                        </div>
                      </div>
                    </form>
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
</html>


<script>
    // Set the countdown time in seconds
    var countdown = 60;
    
    // Display the initial time on the webpage
    document.getElementById("timer").innerHTML = countdown;
    
    // Start the timer and update the countdown every second
    var timer = setInterval(function() {
        countdown--;
        document.getElementById("timer").innerHTML = countdown;
        
        // When the timer reaches 0, fire the query
        if (countdown <= 0) {
            clearInterval(timer); // Stop the timer
            
            // Use AJAX to call a PHP script that updates the database
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // Display a message indicating the query was fired successfully
                    document.getElementById("timer").innerHTML = "Time Out!";
                }
            };
            xhttp.open("GET", "passotp.php", true);
            xhttp.send();
        }
    }, 1000); // 1000 milliseconds = 1 second
</script>
