<?php
    if(isset($_POST['submit'])) {
        $username = $_POST['txtuser'];
        $email = $_POST['txtemail'];
        $password = $_POST['txtpass'];
        $password = md5($password);
        $ip = $_SERVER['REMOTE_ADDR'];
    
        $conn = mysqli_connect("localhost", "root", "", "project");
    
        // Insert the new row into the database
        $query = "insert into regdb  values(NULL,'$username','$email','$password',NULL,'$ip',1)";
    
        try {
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "<h3 align='center' style='color:green'><b>Registered Successfully!</b></h3>";
                include "login.html";
            }
        } catch (mysqli_sql_exception $e) {
            $error_code = $e->getCode();
            if ($error_code == 1062) {
                echo "<h3 align='center' style='color:red'><b>This email is already Registered!</b></h3>";
                include "create_account.html";
            } else {
                // Another error occurred
                echo "An error occurred: " . $e->getMessage();
                include "error.php";
            }
        }
    } else {
        header("Location: ./index.php");
    }
    ?>
    <script>
  // Get the h3 element by its id
  const h3 = document.getElementById('pop');
  
  setTimeout(() => {
    h3.style.display = 'none';
  
  }, 4000);
</script>