<?php
    if(isset($_POST['submit']))
    {
        $id = $_POST['id'];
        $name = $_POST['username'];
        $email = $_POST['useremail'];
        $pswd = $_POST['password'];
        $time = $_POST['time'];
        $ip = $_POST['ip'];
        $stat = $_POST['stat'];

        $connect = mysqli_connect("localhost", "root", "", "project");
        $query = "update regdb set userid='$id',username='$name',useremail='$email', password='$pswd',time='$time',ip='$ip',stat='$stat' where srno=$id";
     
        mysqli_query($connect, $query);

        echo "<div align='center'>Successfully Updated</div>";
        include "users.php";
    }
    else
    {
        header("Location: ./index.php");
    }
    
?>