<?php
$id = $_GET['id'];
$connect = mysqli_connect("localhost", "root","","project");
$query = "update product set stat=0 where srno=$id";
mysqli_query($connect, $query);
mysqli_close($connect);
echo "<div align='center'>Product Deleted!</div>";
include "product.php";
?>
