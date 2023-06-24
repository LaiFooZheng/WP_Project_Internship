<?php

include("config.php");
session_start();
$id = $_SESSION['USER_ID'];

$sql1 = "SELECT * FROM users where userid='$id'";
$tab1 = mysqli_query($conn, $sql1) or die(mysqli_connect_error());

$sql2 = "SELECT * FROM login where fk_userid='$id'";
$tab2 = mysqli_query($conn, $sql2) or die(mysqli_connect_error());

if (mysqli_num_rows($tab1) == 1) {
    $data1 = mysqli_fetch_array($tab1);
    $data2 = mysqli_fetch_array($tab2);

    $fullname = $data1["name"];
	$username = $data2["username"];
	$password = $data2["password"];
	$email = $data1["email"];
	$age = $data1["age"];
	$phone = $data1["phone"];
	$address = $data1["address"];
	$userlevel = $data2["userlevel"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h2 style="text-align:center; font-weight:bold">View Profile</h2>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Full Name</label>
            <div class="col-sm-6">
                <?php echo $fullname;?>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Username</label>
            <div class="col-sm-6">
                <?php echo $username;?>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-6">
            <!-- <input type="password" class="form-control" value="********" disabled> -->
                <input type="password" class="form-control" value="********" disabled <?php echo $password;?>>
            </div>
        </div>
        <!-- maybe add a password confirmation field -->
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-6">
                <?php echo $email;?>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Age</label>
            <div class="col-sm-6">
                <?php echo $age;?>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Phone Number</label>
            <div class="col-sm-6">
                <?php echo $phone;?>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Address</label>
            <div class="col-sm-6">
                <?php echo $address;?>
            </div>
        </div>
        <!-- dropdown option for the user level -->
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">User Level</label>
            <div class="col-sm-6">
                <?php echo $userlevel;?>
            </div>
        </div>
        <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
                <a class="btn btn-primary" href="edit_profile.php">Edit</a>
            </div>
        </div>
    </div>
</body>

</html>