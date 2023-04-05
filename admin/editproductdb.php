<?php

if(isset($_POST['submit']))
{
    $pid= $_POST['pid'];
    $pname= $_POST['pname'];
    $pprice= $_POST['pprice'];
    $pdesc= $_POST['pdesc'];
    $imgpath= $_POST['imgpath'];
    $time=$_POST['time'];
    $stat= $_POST['stat'];

    $conn = mysqli_connect("localhost","root","","project");
    $query = "update product set pid='$pid',pname='$pname',pprice='$pprice', pdesc='$pdesc',imgpath='$imgpath',time='$time',stat='$stat' where pid='$pid'";
    
    mysqli_query($conn,$query);
    mysqli_close($conn);
    echo "<div align='center'>Product Details successfully updated! </div>";
    include "product.php";
}
else
    header("Location: ./index.php");

?>