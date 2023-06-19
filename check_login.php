<?php
session_start();
include("config.php");

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['userlevel'])) {
	$myusername = $_POST['username'];
	$mypassword = $_POST['password'];
	$mylevel = $_POST['userlevel'];

	// echo "1";
	$sql = "SELECT * FROM login WHERE username='$myusername' and password='$mypassword' and userlevel='$mylevel'";

	if ($result = mysqli_query($conn, $sql)) {
		$rows = mysqli_fetch_array($result); //fetch record row
		// mysql_num_row is counting table row
		$count = mysqli_num_rows($result);
	}

	$user_level = $rows['userlevel'];
	$user_id = $rows['fk_userid'];
	$username = $rows['username'];


	// If result matched $myusername and $mypassword, table row must be 1 row
	if ($count == 1) {
		$_SESSION["Login"] = "YES";

		// Add user information to the session (global session variables)
		$_SESSION['LEVEL'] = $user_level;
		$_SESSION['USER_ID'] = $user_id;
		$_SESSION['USERNAME'] = $username;

		echo "<h1>You are now correctly logged in</h1>";
		if ($_SESSION['LEVEL'] == "1") {
			header("Location: Admin/admin_page.php");
		} else if ($_SESSION['LEVEL'] == "2") {
			header("Location: coordinator.html");
		}
		if ($_SESSION['LEVEL'] == "3") {
			header("Location: student.html");
		}
	}
	//if wrong username and password
	else {
		$_SESSION["Login"] = "NO";
		header("Location: login.html");

		// Make a link named Try Again and link to login.html
	}
}

?>