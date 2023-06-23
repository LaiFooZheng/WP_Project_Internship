<?php

require_once("../config.php");

$userid = $_SESSION['USER_ID'];
$applicationid = $_GET['id'];
$status = "Rejected";
$select = "SELECT * from practical_training where fk_userid='$userid'";
$sql = mysqli_query($GLOBALS['conn'], $select);
$row = mysqli_fetch_assoc($sql);
$res = $row['fk_userid'];
if ($res == $userid) {
    $update = "UPDATE practical_training set applicationstatus='$status'where applicationid='$applicationid'";
    $sql2 = mysqli_query($GLOBALS['conn'], $update);
    if ($sql2) {
        /*Successful*/
        header('location: approve_reject_list.php');
    }
} else {
    echo "Error";
}

?>