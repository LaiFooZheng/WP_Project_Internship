<?php
session_start();
require_once("../config.php");

$userlevel= $_GET["userlevel"];

    
  if (isset($_GET["app_id"])) {
    $application_id = $_GET["app_id"];
  }

  // Retrieve the updated values from the form or any other source
  $application_title = $_POST['companyName'] . "/" . $_POST['jobTitle'];
  $status = "Submitted";
  $fullname = $_POST["fullname"];
  $matricnumber = $_POST["matricnumber"];
  $age = $_POST["age"];
  $phoneNumber = $_POST["phoneNumber"];
  $age = $_POST["age"];
  $gender = $_POST["gender"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $nationality = $_POST["nationality"];
  $companyName = $_POST["companyName"];
  $companyContact = $_POST["companyContact"];
  $companyEmail = $_POST["companyEmail"];
  $depName = $_POST["depName"];
  $jobTitle = $_POST["jobTitle"];
  $startDate = $_POST["startDate"];
  $endDate = $_POST["endDate"];

  // Update the practical_training table
  $query = "UPDATE practical_training SET
      applicationtitle = '$application_title',
      applicationstatus = '$status'
      WHERE applicationid = $application_id";
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  // Update the company table
  $query2 = "UPDATE company SET
      companyname = '$companyName',
      companycontactno = '$companyContact',
      companyemail = '$companyEmail',
      department = '$depName',
      jobtitle = '$jobTitle',
      startdate = '$startDate',
      enddate = '$endDate'
      WHERE fk_applicationid = $application_id";
  $result2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));

  // Update the user_detail table
  $query3 = "UPDATE user_detail SET
      gender = '$gender',
      matricnumber = '$matricnumber',
      nationality = '$nationality'
      WHERE fk_applicationid = $application_id";
  $result3 = mysqli_query($conn, $query3) or die(mysqli_error($conn));

  if ($result && $result2 && $result3) {
    if ($userlevel == 1 || $userlevel == 2) {
      header('location: ../Coordinator/application_list.php');
    } else if ($userlevel == 3) {
      header('location: student_application_list.php');
    }
  } else {
    header('location: ../Coordinator/application_list.php');
      // header('location: student_application_form.php');
  }

?>
