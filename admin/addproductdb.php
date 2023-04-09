<?php

if(isset($_POST['submit']))
{
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $pdesc = $_POST['pdesc'];
    $imgpath = $_POST['imgpath'];
    $rating = $_POST['rating'];
    $stat = $_POST['stat'];

    $conn = mysqli_connect("localhost","root","","project");
    $query = "insert into product  values(NULL,'$pid','$pname','$pprice','$pdesc','$imgpath','$rating',NULL,'$stat')";
    
    mysqli_query($conn,$query);
    mysqli_close($conn);
    // echo "<h3 align='center'>Registered Successfully ! </h3>";
    // include "login.html";
}
else {
    header("Location: ./index.php");
}

$item = [
  "id" => "$pid",
  "name" => "$pname",
  "price" => $pprice,
  "desc" => "$pdesc",
  "img" => "cart/".$imgpath,
];

$filename = "C:/xampp/htdocs/pro/Light/Data.js";

// Load the existing data from the file
$data = file_get_contents($filename);

// Check if the closing bracket exists at the end of the array
if (substr(trim($data), -2) === "];") {
  // If it exists, remove it
  $data = substr(trim($data), 0, -2);
}

if (substr(trim($data), -1) === ",") {
  // If it exists, remove it
  $data = substr(trim($data), 0, -1);
}

// Check if the data is empty
if (empty($data)) {
  // If it's empty, start the array with the let statement
  $data = "let shopItemsData = [";
} else {
  // If it's not empty, add a comma before adding the new item
  $data .= ",";
}

// Add the new item to the array
$data .= json_encode($item);

// Close the array with a closing bracket
$data .= "];";

// Write the updated data back to the file
file_put_contents($filename, $data);

echo "<div align='center'>Product Added!</div>";
include "product.php";

?>
