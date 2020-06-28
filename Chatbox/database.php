<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "chatbox";

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);
// Check connection
if (mysqli_connect_error($conn)) {
  die("Connection failed: " );
}
