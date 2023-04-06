
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

      
      $conn = mysqli_connect("localhost","root","","project");
      
        for ($i = 0; $i < count($pname); $i++) {
          $query = "INSERT INTO cart VALUES (NULL,'$userid','$email','".$pid[$i]."','".$pname[$i]."', '".$pdesc[$i]."', '".$pprice[$i]."', '".$pquant[$i]."', '".$ppricetot[$i]."',NULL,1)";
          if (mysqli_query($conn, $query)) {
              echo "";
          } else {
              echo "Error inserting record: " . mysqli_error($conn);
          }
        }

        mysqli_close($conn);
        include "checkout.php";
    }
   else{
      echo "<h3 align='center'>You need to <u><a href='login.html'>Login</a></u> inorder to checkout! </h3>";
      include "login.html";
  }
    ?>