<?php

require_once("../config.php");

if (isset($_GET["app_id"])) {
    $id = $_GET["app_id"];
}

$sql = "DELETE FROM practical_training WHERE applicationid = $id LIMIT 1";

if (mysqli_query($conn, $sql)) {
    echo "<a href='' id='echo'>User deleted successfully &#9745</a>";
} else {
    echo "Error deleting user: " . mysqli_error($conn);
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
    include('../includes/headerStudent.html');
    ?>

    <BR><BR>
    <a href="student_application_list.php" id="studentapplist">Click here to view updated application list</a>

    <?php
    include('../includes/footer.html');
    ?>
</body>

</html>