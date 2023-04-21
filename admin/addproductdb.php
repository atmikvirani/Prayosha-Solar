<?php

if(isset($_POST['submit']))
{
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $pdesc = $_POST['pdesc'];
    $imgpath = $_POST['imgpath'];
    $rating = $_POST['rating'];
    $stat = $_POST['stat'];

    $conn = mysqli_connect("localhost","root","","project");
    $query = "insert into product  values(NULL,'$pid','$pname','$pprice','$pdesc','$imgpath','$rating',NULL,'$stat')";
    
    mysqli_query($conn,$query);
    mysqli_close($conn);
    // echo "<h3 align='center'>Registered Successfully ! </h3>";
    // include "login.html";
}
else {
    header("Location: ./index.php");
}
echo "<div align='center'>Product Added!</div>";
include "product.php";
?>
