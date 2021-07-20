<?php
$servername = "localhost";
$username = "root";
$password = "asha";
$dbname = "asha";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed due to: " . $conn->connect_error);
}
?>