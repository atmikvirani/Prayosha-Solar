<?php
        $id = $_GET['id'];
        $connect = mysqli_connect("localhost", "root","","project");
        $query = "update project set stat=0 where proid=$id";
        mysqli_query($connect, $query);
        mysqli_close($connect);
        echo "<div align='center'>Project Deleted!</div>";
        include "project.php";
?>