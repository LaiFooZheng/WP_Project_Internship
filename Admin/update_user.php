<?php

require_once("../config.php");

//if null, you can your own js script that shows alert box or error message
if (isset($_POST["id"])) {
    $id = $_POST["id"];
}

$fullname = $_POST["fullname"];
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$age = $_POST["age"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$userlevel = $_POST["userlevel"];

// Update the tables according the variables above using sql query
$sql1 = "UPDATE users SET email='$email', name='$fullname', age='$age', phone='$phone', address='$address' where userid='$id'";
mysqli_query($conn, $sql1) or die(mysqli_connect_error());

$sql2 = "UPDATE login SET username='$username', password='$password', userlevel='$userlevel'where fk_userid='$id'";
mysqli_query($conn, $sql2) or die(mysqli_connect_error());

if (mysqli_query($conn, $sql1)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <?php
    include('../includes/headerAdmin.html');
    ?>
    <BR><BR>
    <a href="user_list.php">Click here to see the user list</a>
    <?php
    include('../includes/footer.php');
    ?>
</body>

</html>