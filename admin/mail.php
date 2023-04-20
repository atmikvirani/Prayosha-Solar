<?php
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
  
require 'vendor/autoload.php';

$mail = new PHPMailer;
if(isset($_POST['send'])){
// getting post values
$fname=$_POST['fname'];		
$toemail=$_POST['toemail'];	
$subject=$_POST['subject'];	
$message=$_POST['message'];
$mail->isSMTP(); // Set mailer to use SMTP 
$mail->Host = 'smtp.gmail.com'; //Specify main and backup SMTP servers 
$mail->SMTPAuth = 'true'; // Enable SMTP authentication 
$mail->Username = ' atmikpatel2003@gmail.com'; // SMTP username
$mail->Password = 'qglikovyhrzyhthg'; // SMTP password 
$mail->SMTPSecure ='tls'; // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 587; // TCPport to connect to 
$mail->setFrom('atmikpatel2003@gmail.com', 'Atmik Virani');
$mail->addReplyTo('atmikpatel2003@gmail.com', 'Atmik Virani');
$mail->addAddress($toemail); // Add a recipient //
$mail->isHTML(true); // Set email format to HTML $bodyContent=$message;
$mail->Subject =$subject; $bodyContent = 'Hello, '.$fname; $bodyContent .='
<p>'.$message.'</p> <br><br>Thank you for contacting us! 
'; $mail->Body = $bodyContent; if(!$mail->send()) { echo 'Message could not be
sent.'; echo 'Mailer Error: ' . $mail->ErrorInfo; } else { echo '<h6 align="center" id="pop" style="color:green;"> Email has
been sent! </h6>'; echo"    <script>
const h6 = document.getElementById('pop');

setTimeout(() => {
  h3.style.display = 'none';

}, 4000);
</script>"; } } ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Email</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <style>
      /* body {
  animation: animateBg 5s linear infinite;
  background-image: linear-gradient(0deg,#bd4faf,#5794db,#bd4faf,#5794db);
  background-size: 100% 300%;
}
@keyframes animateBg {
  0% { background-position: 0% 100%; }
  100% { background-position: 0% 0%; }
} */
      /* body {
        color: #fff;
        background: #000;
        font-family: "Roboto", sans-serif;
      } */

      .background-image {
        
        color: #fff;
        background: #000;
        font-family: "Roboto", sans-serif;
        background-image: url("./pc.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        /* display: flex; */
        justify-content: center;
        align-items: center;
        height: 100vh;
      }

      .contact-form {
        padding: 50px;
        margin: 30px auto;
      }
      .contact-form h1 {
        font-size: 42px;
        font-family: "Berlin Sans FB", sans-serif;
        margin: 0 0 50px;
        text-align: center;
      }
      .contact-form .form-group {
        margin-bottom: 20px;
      }
      .contact-form .form-control,
      .contact-form .btn {
        min-height: 40px;
        border-radius: 2px;
      }
      .contact-form .form-control {
        border-color: #e2c705;
      }
      .contact-form .form-control:focus {
        border-color: #d8b012;
        box-shadow: 0 0 8px #dcae10;
      }
      .contact-form .btn-primary,
      .contact-form .btn-primary:active {
        min-width: 250px;
        color: #000;
        background: #fff !important;
        margin-top: 20px;
        border: none;
      }
      .contact-form .btn-primary:hover {
        color: green;
      }
      .contact-form .btn-primary i {
        margin-right: 5px;
      }
      .contact-form label {
        opacity: 0.9;
      }
      .contact-form textarea {
        resize: vertical;
      }
      .bs-example {
        margin: 20px;
      }
      .text-center .p-4{
        background: "black";
      }
    </style>
  </head>
  <body>
    <?php
    $id=$_GET['id'];
    $conn= mysqli_connect("localhost","root","","project");
    $query = "Select * from contact where srno='$id'";
    $result = mysqli_query($conn, $query) or die (mysqli_error($db));
    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="background-image">
    <div>
      
    </div>
      <div class="container-lg">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <div class="contact-form">
              <h1><a type="button" style="position:relative; top:50px; left:-140px;" class="btn btn-secondary" href="contact.php">Back</a>Prayosha Email</h1>
              <form method="post">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="inputName">Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="inputName"
                        name="fname"
                        value="<?php echo $row['username'];?>"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="inputEmail">Email</label>
                      <input
                        type="email"
                        class="form-control"
                        id="inputEmail"
                        name="toemail"
                        value="<?php echo $row['useremail'];?>"
                        required
                      />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputSubject">Subject</label>
                  <input
                    type="text"
                    class="form-control"
                    id="inputSubject"
                    name="subject"
                    value="reply to your query: <?php echo $row['subject'];?>"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="inputMessage">Message</label>
                  <textarea
                    class="form-control"
                    id="inputMessage"
                    name="message"
                    rows="5"
                    required
                  ></textarea>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="send">
                    <i class=""></i> Send!
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <footer>
    <div class="m-3">
    <?php include('C:\xampp\htdocs\pro\Light\admin\include\footer.php'); ?>
    </div>
    </footer>
</html>
