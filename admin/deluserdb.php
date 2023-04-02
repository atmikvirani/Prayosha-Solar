<?php
        $id = $_GET['userid'];
        $connect = mysqli_connect("localhost", "root","","project");
        $query = "update regdb set stat=0 where userid=$id";
        mysqli_query($connect, $query);
        mysqli_close($connect);
        echo "<div align='center'>Account Disabled!</div>";
        include "users.php";
?>