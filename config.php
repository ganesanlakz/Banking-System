<?php
$dbhost = "localhost";
$username = "root";
$password = "";
$dbname = "viewcustomer";

// Create connection
$conn = new mysqli($dbhost, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>