<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application List</title>
    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../img/aidslogoshortcut.png" type="image/x-icon">

</head>

<body>
    <?php
    include('../includes/headerStudent.html');
    ?>

    <div class="container my-5">
        <h2 style="text-align:center; font-weight:bold">Student Application List</h2>
        <p style="text-align:center; font-weight:bold"><i>Students Can Only View their own Applications</i></p>
        <a class="btn btn-primary" href="student_application_form.php" role="button">New Application</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Application ID</th>
                    <th>Name</th>
                    <th>Date Applied</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php

                session_start();

                // Retrieve data for the logged-in student
                $studentId = $_SESSION['USER_ID'];

                // Check if the student ID is set
                if (isset($studentId)) {
                    require_once("../config.php");
                    require_once("../functions.php");

                    // Retrieve data from the table
                    $array = array();
                    $query = mysqli_query($conn, "SELECT * FROM login WHERE fk_userid = $studentId") or die(mysqli_connect_error());
                    $row2 = mysqli_fetch_assoc($query);
                    $userlevel = $row2['userlevel'];
                    $select = "SELECT * FROM practical_training WHERE fk_userid = $studentId AND applicationstatus = 'Submitted'";
                    $sql = mysqli_query($GLOBALS['conn'], $select);

                    // Check if the query executed successfully
                    if ($sql) {
                        if (mysqli_num_rows($sql) > 0) {
                            // Output data of each row
                            while ($row = mysqli_fetch_array($sql)) {
                                $array['userid'] = $row['fk_userid'];
                                $profile = getUsersData($array['userid']);
                                echo "
                              <tr>
                                  <td>$row[applicationid]</td>
                                  <td>$profile[name]</td>
                                  <td>$row[applicationdate]</td>  
                                  <td>$row[applicationtitle]</td>
                                  <td>$row[applicationstatus]</td>
                                  <td>
                                      <a class='btn btn-primary btn-sm' href='edit_student_application_form.php?app_id=$row[applicationid]&userlevel=$userlevel'>Edit</a>
                                      <a class='btn btn-danger btn-sm' href='delete_student_application.php?app_id=$row[applicationid]'>Withdraw</a>
                                      <a class='btn btn-dark btn-sm' href='view_student_application.php?app_id=$row[applicationid]&userlevel=$userlevel'>View</a>
                                  </td>
                              </tr> 
                              ";
                            }
                        } else {
                            echo "<a id='echo' style='color:black; text-align:left;'>0 results</a>";
                        }

                        mysqli_close($conn);
                    } else {
                        echo "Query execution failed.";
                    }
                } else {
                    echo "Student ID is not set.";
                }

                ?>
            </tbody>
        </table>
    </div>

    <?php
    include('../includes/footer.html');
    ?>
</body>

</html>