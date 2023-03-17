<?php
if(isset($_POST['submit'])){
    session_start();    
    $user=$_POST['txtuser'];
    $pass=md5($_POST['txtpass']);
    $conn=mysqli_connect("localhost","root","","project");
    $query="select * from regdb where username='$user' and password='$pass'";
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
        // $row= mysqli_fetch_array($result);
        $_SESSION['user']=$row['email'];
        // echo $query;
        header("Location: ./index.html");
    }
}
else{
    header("Location: ./index.html");
}
?>