<?php
require_once("config.php");

function getUsersData($id)
{
    $array = array();
    $select = "SELECT * FROM users WHERE userid='$id'";
    $sql = mysqli_query($GLOBALS['conn'], $select);
    while ($row = mysqli_fetch_assoc($sql)) {
        $array['id'] = $row['userid'];
        $array['email'] = $row['email'];
        $array['name'] = $row['name'];
        $array['address'] = $row['address'];
        $array['age'] = $row['age'];
        $array['phone'] = $row['phone'];
    }
    $select = "SELECT * FROM login WHERE fk_userid='$id'";
    $sql = mysqli_query($GLOBALS['conn'], $select);
    while ($row = mysqli_fetch_assoc($sql)) {
        $array['username'] = $row['username'];
        $array['password'] = $row['password'];
    }
    return $array;
}

?>