<?php
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
  
require 'admin/vendor/autoload.php';
$mail = new PHPMailer;

$otp=rand(999999,111111);

if(isset($_POST['submit'])){
    session_start();    
    $email=$_POST['txtemail'];
    $conn=mysqli_connect("localhost","root","","project");
    $query="select * from regdb where useremail='$email'";
    $result=mysqli_query($conn,$query);
    $row= mysqli_fetch_array($result);

    $forgotid=$_SESSION['uid']=$row['userid'];
    $_SESSION['forgot']=$email;

    $count= mysqli_num_rows($result);
    mysqli_close($conn);
    if($count==0)
    {
        echo "<h3 align='center' style='color:red'><b>Your Email or Password is incorrect try agian!</b></h3>";
        include "login.html";
    }
    else
    {   
        if($row['stat']==0)
        {
            echo "<h3 align='center' style='color:red'><b>Your account is disabled! <a href='./contact_us.php'><u>Contact Us</u></a></b></h3>";
            include "login.html";
        }
        else
        {
            $conn=mysqli_connect("localhost","root","","project");
            $query = "insert into otp  values(NULL,'$forgotid','$email','$otp',1,NULL)";
            mysqli_query($conn,$query);
            $otpid = mysqli_insert_id($conn);
            $_SESSION['otpid'] = $otpid;
            mysqli_close($conn);
            $user=$row['username'];	
            // $email=$_POST['txtemail'];	
            $subject="Password Reset";
            $mail->isSMTP(); // Set mailer to use SMTP 
            $mail->Host = 'smtp.gmail.com'; //Specify main and backup SMTP servers 
            $mail->SMTPAuth = 'true'; // Enable SMTP authentication 
            $mail->Username = ' atmikpatel2003@gmail.com'; // SMTP username
            $mail->Password = 'qglikovyhrzyhthg'; // SMTP password 
            $mail->SMTPSecure ='tls'; // Enable TLS encryption, `ssl` also accepted 
            $mail->Port = 587; // TCPport to connect to 
            $mail->setFrom('atmikpatel2003@gmail.com', 'Atmik Virani');
            $mail->addReplyTo('atmikpatel2003@gmail.com', 'Atmik Virani');
            $mail->addAddress($email); // Add a recipient //
            $mail->isHTML(true); // Set email format to HTML $bodyContent=$message;
            $mail->Subject =$subject; $bodyContent = 'Hello, '.$user; $bodyContent .='
            <p> Your OTP for password reset is below. <p style="font-size:2.5em;">'.$otp."</p></p>Don't recognize this action. Mail us on <u><b>prayoshacorporation@gmail.com</b></u>
            "; $mail->Body = $bodyContent; if(!$mail->send()) { echo 'Message could not be
            sent.'; echo 'Mailer Error: ' . $mail->ErrorInfo; } else { echo '<h3 align="center" id="pop" style="color:green;"> Email has
            been sent! </h6>';
            include('forgotmail.php');
            } 
        }
    }
}
else{
    header("Location: ./index.php");
}

?>

<script>
  // Get the h3 element by its id
  const h3 = document.getElementById('pop');
  
  setTimeout(() => {
    h3.style.display = 'none';
  
  }, 5000);
</script>