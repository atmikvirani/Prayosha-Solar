<?php
if(isset($_POST['submit'])){
    session_start();    
    $email=$_POST['txtemail'];
    $pass=md5($_POST['txtpass']);
    $conn=mysqli_connect("localhost","root","","project");
    $query="select * from regdb where email='$email' and password='$pass'";
    $result=mysqli_query($conn,$query);
    $row= mysqli_fetch_array($result);

    $count= mysqli_num_rows($result);
    mysqli_close($conn);
    if($count==0)
    {
        echo "<h3 align='center' style='color:red'><b>Invalid Username and Password</b></h3>";
        include "login.html";
    }
    else
    
    {   
        $_SESSION['uid']=$row['id'];
        $_SESSION['user']=$row['username'];
        $_SESSION['email']=$row['email'];
        $_SESSION['status']=$row['stat'];
        header("Location: ./index.php");
    }
}
else{
    header("Location: ./index.php");
}
?>