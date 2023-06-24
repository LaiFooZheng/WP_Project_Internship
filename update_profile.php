<?php

require_once("config.php");

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

if ($userlevel == 1) {
    echo '<a href="Admin/admin_page.php">Click here to Go Back to Admin Page</a>';
} else if ($userlevel == 2) {
    echo '<a href="Coordinator/coordinator_page.php">Click here to Go Back to Coordinator Page</a>';
} else if ($userlevel == 3) {
    echo '<a href="Student/student_page.php">Click here to Go Back to Student Page</a>';
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
    <!-- <BR><BR>
    <script>
        document.write('<a href="' + document.referrer + '">Click here to Go Back</a>');
    </script> -->
</body>

</html>