<?php

require_once("config.php");

if (isset($_POST["id"])) {
    $id = $_POST["id"];
}

session_start();
$userID = $_SESSION['USER_ID'];
$query = mysqli_query($conn, "SELECT * FROM login WHERE fk_userid = $userID") or die(mysqli_connect_error());
$row2 = mysqli_fetch_assoc($query);
$userlevel2 = $row2['userlevel'];

$fullname = $_POST["fullname"];
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$age = $_POST["age"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$userlevel = $_POST["userlevel"];

$sql1 = "UPDATE users SET email='$email', name='$fullname', age='$age', phone='$phone', address='$address' WHERE userid='$id'";
mysqli_query($conn, $sql1) or die(mysqli_connect_error());

$sql2 = "UPDATE login SET username='$username', password='$password' WHERE fk_userid='$id'";
mysqli_query($conn, $sql2) or die(mysqli_connect_error());

if (mysqli_query($conn, $sql1)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

echo '<br>';

if ($userlevel2 == 1) {
    header('location: Admin/admin_page.php');
} else if ($userlevel2 == 2) {
    header('location: Coordinator/coordinator_page.php');
} else if ($userlevel2 == 3) {
    header('location: Student/student_page.php');
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
    <link rel="shortcut icon" href="img/aidslogoshortcut.png" type="image/x-icon">

</head>

<body>
    <!-- <BR><BR>
    <script>
        document.write('<a href="' + document.referrer + '">Click here to Go Back</a>');
    </script> -->
</body>

</html>