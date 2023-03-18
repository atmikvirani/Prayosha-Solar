<?php
    session_start();
    {
        // $userid=$_SESSION['uid'];
        // $conn = mysqli_connect("localhost","root","","project");
        // $query = "update regdb set stat=0 where id=$userid";
        // mysqli_query($conn,$query);
        echo'<script>alert("Want to log out?")</script>';
        unset($_SESSION['uid']);
        unset($_SESSION['user']);
        unset($_SESSION['email']);
        unset($_SESSION['status']);
        // mysqli_close($conn);
        
        
        header("Location: ./index.php");
    }
?>