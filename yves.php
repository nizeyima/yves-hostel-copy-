<?php
// Define database connection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yves";

// Create database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if connection is successful
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
