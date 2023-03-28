<?php
    if(isset($_SESSION['uid']))
    {
        $pid= $_POST['pid'];
        $pname= $_POST['pname'];
        $pdesc= $_POST['pdesc'];
        $pprice= $_POST['pprice'];
        $pquant = $_POST['pquant'];
        $ppricetot = $_POST['ppricetot'];
        $ip = $_SERVER['REMOTE_ADDR'];

        $conn = mysqli_connect("localhost","root","","project");
        $query = "insert into cart  values(NULL,'$pid','$pname','$pdesc','$pprice','$pquant','$ppricetot',NULL,'$ip')";
        
        mysqli_query($conn,$query);
        mysqli_close($conn);
        include "checkout.php";
    }
    else
        header("Location: ./index.php");
    ?>