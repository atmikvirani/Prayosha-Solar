
<?php
    session_start();
    if(isset($_SESSION['email']))
    {
      $pid= $_POST['pid'];
      $pname= $_POST['pname'];
      $pdesc= $_POST['pdesc'];
      $pprice= $_POST['pprice'];
      $pquant = $_POST['pquant'];
      $ppricetot = $_POST['ppricetot'];
      $ip = $_SERVER['REMOTE_ADDR'];
      $userid=$_SESSION['uid'];
      $email=$_SESSION['email'];
      if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $p) {
          echo "<li>".$p."</li>";
          }
        }

        $conn = mysqli_connect("localhost","root","","project");
        $query = "insert into cart  values(NULL,'$userid','$email','$pid','$pname','$pdesc','$pprice','$pquant','$ppricetot',NULL,'$ip')";
        
        mysqli_query($conn,$query);
        mysqli_close($conn);
        include "checkout.php";
   }
   else
      echo "<h3 align='center'>You need to <u><a href='login.html'>Login</a></u> inorder to checkout! </h3>";
      include "login.html";
    ?>