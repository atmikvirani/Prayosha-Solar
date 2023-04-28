<?php
    session_start();
    if(isset($_SESSION['uid']))
    {
        $userid= $_SESSION['uid'];
        $name= $_SESSION['user'];
        $email= $_SESSION['email'];
        $subject= $_POST['subject'];
        $message= $_POST['message'];
        $ip = $_SERVER['REMOTE_ADDR'];

        $conn = mysqli_connect("localhost","root","","project");
        $query = "insert into contact values(NULL,'$userid','$name','$email','$subject','$message',NULL,'$ip')";
        // echo $query;
        mysqli_query($conn,$query);
        mysqli_close($conn);
        // echo"<script>".alert('your query submitted!');."</script>";
        // echo "<h3 align='center' id='pop'>We have received your query, we will get back to you soon! </h3>";
        header("Location: ./index.php");
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
        // echo "<h3 align='center' id='pop'>We have received your query, we will get back to you soon! </h3>";
        header("Location: ./index.php");
    }
    ?>