<?php
session_start();
$conn=mysqli_connect("localhost","root","","project");

$otpid=$_SESSION['otpid'];
// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fire your query
$sql = "UPDATE otp SET stat = '0' WHERE  id ='$otpid'";
if ($conn->query($sql) === TRUE) {
    echo "Query fired";
} else {
    echo "Error firing query: " . $conn->error;
}

// Close the connection
$conn->close();
?>
