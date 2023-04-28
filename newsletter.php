<?php
        $newsl= $_POST['txtnews'];
        $ip = $_SERVER['REMOTE_ADDR'];

        $conn = mysqli_connect("localhost","root","","project");
        $query = "insert into newsltr values(NULL,'$newsl',NULL,'$ip')";
        
        mysqli_query($conn,$query);
        mysqli_close($conn);
        echo "<h3 align='center' id='pop'>We value your inbox, you will receieve Newsletters periodically! </h3>";
        include "index.php";
?>
<script>
  // Get the h3 element by its id
  const h3 = document.getElementById('pop');
  
  setTimeout(() => {
    h3.style.display = 'none';
  
  }, 4000);
</script>
