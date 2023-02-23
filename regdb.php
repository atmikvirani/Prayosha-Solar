<?php
    if(isset($_POST['submit']))
    {
        $username= $_POST['txtuser'];
        $email= $_POST['txtemail'];
        $password= $_POST['txtpass'];
        $password = md5($password);
        $ip = $_SERVER['REMOTE_ADDR'];

        $conn = mysqli_connect("localhost","root","","project");
        $query = "insert into regdb  values(NULL,'$username','$email','$password',NULL,'$ip',1)";
        // $querys = "select * from user";
        // $result = mysqli_query($conn,$querys);
        // $row = mysqli_fetch_array($result);
        // session_start();
        // $_SESSION['userid'] = $row['id'];
        mysqli_query($conn,$query);
        mysqli_close($conn);
        echo "<h3 align='center'>Registered Successfully ! </h3>";
        include "login.html";
    }
    else
        header("Location: ./index.html");
    ?>