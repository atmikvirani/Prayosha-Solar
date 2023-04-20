<?php
if(isset($_POST['submit'])){
    session_start();    
    $email=$_POST['txtemail'];
    $pass=md5($_POST['txtpass']);
    $conn=mysqli_connect("localhost","root","","project");
    $query="select * from regdb where useremail='$email' and password='$pass'";
    $result=mysqli_query($conn,$query);
    $row= mysqli_fetch_array($result);

    $count= mysqli_num_rows($result);
    mysqli_close($conn);
    if($count==0)
    {
        echo "<h3 align='center' style='color:red'><b>Invalid Username or Password</b></h3>";
        include "login.html";
    }
    else
    {   
        if($row['stat']==0)
        {
            echo "<h3 align='center' style='color:red'><b>Your account is disabled! <a href='./contact_us.php'><u>Contact Us</u></a></b></h3>";
            include "login.html";
        }
        else
        {
            $_SESSION['uid']=$row['userid'];
            $_SESSION['user']=$row['username'];
            $_SESSION['email']=$row['useremail'];
            $_SESSION['status']=$row['stat'];
            header("Location: ./index.php");
        }
    }
}
else{
    header("Location: ./index.php");
}
?>