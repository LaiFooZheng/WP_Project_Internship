<?php
$servername = "localhost";
$user_name = "root";
$password = "";
$database = "internship";

// Create connection
$conn = mysqli_connect($servername, $user_name, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "<h3>Connected successfully</h3>\n";
?>