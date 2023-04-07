<?php
    if(isset($_POST['submit']))
    {
        session_start();
        $userid=$_SESSION['uid'];
        $useremail=$_SESSION['email'];
        $fname= $_POST['fname'];
        $lname= $_POST['lname'];
        $cname= $_POST['cname'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $saddress= $_POST['saddress'];
        $landmark= $_POST['landmark'];
        $city= $_POST['city'];
        $state= $_POST['state'];
        $pincode= $_POST['pincode'];
        $ip = $_SERVER['REMOTE_ADDR'];

        $conn = mysqli_connect("localhost","root","","project");
        $query = "insert into billing  values(NULL,'$userid','$useremail','$fname','$lname','$cname','$email','$phone','$saddress','$landmark','$city','$state','$pincode',NULL,'$ip',0)";

        mysqli_query($conn,$query);
        mysqli_close($conn);
        include "checkoutdetail.php";
        echo '<script>alert("Billing details Saved!")</script>';
    }
    else
        header("Location: ./index.php");
    ?>

