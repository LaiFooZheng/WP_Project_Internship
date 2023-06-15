<?php
$servername = "localhost";
$username = "username";
$password = "password";
$database = "internship";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $internship);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>