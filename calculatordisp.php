<html>

<head>
    <!-- <link rel="stylesheet" href="fontawesome/css/all.css">
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
    <link rel="stylesheet" type="text/css" href="css/camera.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="calculation.js"></script>

    <!-- <script src="angular/angular.js"></script> -->
    <!-- <script src="script.js"></script>   -->

    <!-- favicon link-->
    <link rel="shortcut icon" type="image/icon" href="images/favicon.png" />
</head>

<style>
    .cardbox {
        background: #fff;
        border: none;
        padding: 10px 15px;
        border-radius: 10px;
        box-shadow: 0 0 0px #00000080;
        height: 100px;
    }

    .cardbox:hover {
        transition: opacity 153ms cubic-bezier(0.335, 0.055, 0.585, 0.11) 10ms;
        background: #fff;
        border: none;
        padding: 10px 15px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 1px #7e7e7e;
        height: 100px;
    }

    .select {
        position: relative;
        display: inline-block;
        margin-bottom: 15px;
        width: 100%;
    }

    .select select {
        font-family: 'Roboto', sans-serif;
        display: inline-block;
        width: 100%;
        cursor: pointer;
        padding: 10px 22px;
        outline: 0;
        border: 0px solid #000000;
        border-radius: 0px;
        background: #2c86c7;
        color: #ffffff;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
    }

    .select select::-ms-expand {
        display: none;
    }

    .select select:hover,
    .select select:focus {
        color: #ffffff;
        background: #2c86c7;
    }

    .select select:disabled {
        opacity: 0.5;
        pointer-events: none;
    }

    .select_arrow {
        position: relative;
        top: -40px;
        left: 237px;
        width: 0px;
        height: 0px;
        border: solid #fff;
        border-width: 0 3px 3px 0;
        display: inline-block;
        padding: 3px;
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
    }

    .select select:hover~.select_arrow,
    .select select:focus~.select_arrow {
        border-color: #ffffff;
    }

    .select select:disabled~.select_arrow {
        border-top-color: #ffffff;
    }

    /* .calculat_button{
        position: relative;
        top: 20px;
        left:500px;

    } */
</style>


<body>
    <!-- preloader Start -->
    <!-- <div id="preloader">
        <div id="status">
            <img src="images/preloader.gif" id="preloader_image" alt="loader">
        </div>
    </div> -->
    <!--sw header wrapper start-->

    <div class="cart_product_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="btc_shop_single_prod_right_section shop_product_single_head related_pdt_shop_head">
                        <h1>Calculator</h1>
                        <i style="font-size:12px">(For your convenience, please provide the average of your last 6 months' data of units or electricity bill.)</i>
                    </div>
                </div>
                <div class="container">
                    <div class="row form-details">
                        <div class="select">
                            <div class="col-md-3 mt-5">
                                <div class="label"> STATE</div>
                                <select class="selectpicker" value="Gujarat">
                                    <option>Gujarat</option>
                                </select>
                                <div class="select_arrow"></div>
                            </div>
                            <div class="col-md-3 mt-5">
                                <div class="label"> AREA</div>
                                <select class="selectpicker" id="select" style="border: 1px solid #009846;">
                                    <option id="residential" selected data-default>Residential</option>
                                    <option id="commercial">Commercial</option>
                                    <option>Industrial</option>
                                </select>
                                <div class="select_arrow"></div>
                            </div>
                            <div class="col-md-3 mt-5">
                                <div class="label"> CALCULATE WITH</div>
                                <select class="selectpicker" id="input_method" style="border: 1px solid #009846;">
                                    <option id="unit_select" selected data-default>Unit</option>
                                    <option id="electricity_bill">Electricity Bill</option>
                                </select>
                                <div class="select_arrow"></div>
                            </div>
                            <div class="col-md-3 mt-5">
                                <div class="label"> VALUE</div>
                                <input type="number" min="0" id="unit" value="0"
                                    style="border-radius: 0px; border:1px solid #000;width: 100%;padding-left: 10px;color: #000000;">
                            </div>
                        </div>

                        <div class="calculat_button col-md-12 mt-5" align="center">
                            <button type="button" class="btn" id="click"
                                style="position:relative; top: 30px; margin-bottom: 25px;">Calculate</button>
                        </div>
                    </div>
                </div>
                <hr>

                    <div class="container col-lg-12">
                        <div class="row">
                                <div class="col-lg-3 ">
                                    <div class="cardbox">
                                        <h5 style="text-align: center;"> Electricity Bill</h5>
                                        <!-- <div id="bill" class="calculated-number"></div> -->
                                        <text align="center" id="bill"></span>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="cardbox">
                                        <h5 style="text-align: center;">Needed KW</h5>
                                        <div id="kw" class="calculated-number"></div>
                                    </div>
                                </div>
                                <div class="col-lg-2" >
                                    <div class="cardbox">
                                        <h5 style="text-align: center;">Cost</h5>
                                        <div id="rupiya" class="calculated-number"></div>
                                    </div>
                                </div>
                                <div class="col-lg-2 ">
                                    <div class="cardbox">
                                        <h5 style="text-align: center;">Area (SQ F)</h5>
                                        <div id="area" class="calculated-number"></div>
                                    </div>
                                </div>
                                <div class="col-lg-3 ">
                                    <div class="cardbox">
                                        <h5 style="text-align: center;">Generation Annually</h5>
                                        <div id="generation" class="calculated-number"></div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <center>
                        <label for="">*The figures which are being displayed here are just an estimate, We encourage you to <u><a href="contact_us.php">Contact Us</a></u> for more query!</label>
                    </center>
            </div>
        </div>
    </div>
</body>

</html>