<?php
session_start();
if (session_destroy()) {
	header("Location: check_login.php");
}
?>