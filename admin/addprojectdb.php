<?php

if(isset($_POST['submit']))
{
    $pname = $_POST['pname'];
    $ploc = $_POST['ploc'];
    $imgpath = $_POST['imgpath'];

    $conn = mysqli_connect("localhost","root","","project");
    $query = "insert into project  values(NULL,'$pname','$ploc','$imgpath',NULL,1)";
    
    mysqli_query($conn,$query);
    mysqli_close($conn);
    echo "<div align='center'>Project Added Successfully ! </div>";
    include "project.php";
}
else {
    header("Location: ./index.php");
}
