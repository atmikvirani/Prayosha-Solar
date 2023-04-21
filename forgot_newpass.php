<?php
session_start();
    if(isset($_POST['submit']))
    {
        $forgotemail=$_SESSION['forgot'];
        $password= $_POST['txtpass'];
        $password = md5($password);

        $conn = mysqli_connect("localhost","root","","project");
        $query = "update regdb set password='$password' where useremail='$forgotemail'";
        
        mysqli_query($conn,$query);
        mysqli_close($conn);
        echo "<h3 align='center'>Password Updated.</h3>";
        include "login.html";
    }
    else
        header("Location: ./index.php");
?>