<?php

if(isset($_POST['submit']))
{
    $pid= $_POST['pid'];
    $pname= $_POST['protitle'];
    $proloc= $_POST['proloc'];
    $imgpath= $_POST['imgpath'];
    $time=$_POST['time'];
    $stat=$_POST['stat'];

    $conn = mysqli_connect("localhost","root","","project");
    $query = "update project set proid='$pid',protitle='$pname',proloc='$proloc',imgpath='$imgpath',time='$time',stat='$stat' where proid='$pid'";
    
    mysqli_query($conn,$query);
    mysqli_close($conn);
    echo "<div align='center'>Project Details successfully updated! </div>";
    include "project.php";
}
else
    header("Location: ./index.php");

?>

