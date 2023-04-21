<?php
if(isset($_POST['submit'])){
    session_start();    
    $email=$_SESSION['forgot'];
    $otp=$_POST['txtotp'];
    $otpid=$_SESSION['otpid'];

    $conn=mysqli_connect("localhost","root","","project");
    $query="select * from otp where id='$otpid' and code='$otp' and stat='1'";
    $result=mysqli_query($conn,$query);
    $row= mysqli_fetch_array($result);

    $count= $row['stat'];
    mysqli_close($conn);
    if($count==0)
    {
        echo "<h3 align='center' style='color:red'><b>Invalid Code!</b></h3>";
        include "forgot_pass.html";
    }
    else
    {   
        echo"<h3 align='center' style='color:green'><b>Code entered Successfully!</b></h3>";
        include "pass_res.php";
    }
}
else{
    header("Location: ./index.php");
}
?>