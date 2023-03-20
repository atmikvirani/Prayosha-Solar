<?php
    session_start();
    if(isset($_SESSION['uid']))
    {
        $id= $_SESSION['uid'];
        $name= $_SESSION['user'];
        $email= $_SESSION['email'];
        $subject= $_POST['subject'];
        $message= $_POST['message'];
        $ip = $_SERVER['REMOTE_ADDR'];

        $conn = mysqli_connect("localhost","root","","project");
        $query = "insert into contact values(NULL,'$id','$name','$email','$subject','$message',NULL,'$ip')";
        // echo $query;
        mysqli_query($conn,$query);
        mysqli_close($conn);
        echo "<h3 align='center'>inserted successfully ! </h3>";
        header("Location: ./contact_us.php");
    }
    else
    {
        $name= $_POST['name'];
        $email= $_POST['email'];
        $subject= $_POST['subject'];
        $message= $_POST['message'];
        $ip = $_SERVER['REMOTE_ADDR'];

        $conn = mysqli_connect("localhost","root","","project");
        $query = "insert into contact values(NULL,'guest','$name','$email','$subject','$message',NULL,'$ip')";
        // echo $query;
        mysqli_query($conn,$query);
        mysqli_close($conn);
        echo "<h3 align='center'>inserted successfully ! </h3>";
        header("Location: ./contact_us.php");
    }
    ?>