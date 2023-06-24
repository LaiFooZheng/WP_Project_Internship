<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Application List</title>
    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container my-5">
        <h2>Full Application List</h2>
        <p><i>Full List Only Accessible to Admins and Coordinators</i></p>
        <!-- <a class="btn btn-primary" href="user_form.php" role="button">Add User</a> -->
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Application ID</th>
                    <th>Applicant</th>
                    <th>Date Applied</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                require_once("config.php");
                require_once("functions.php");

                // Retrieve data from table
                $array = array();
                $select = "SELECT * from practical_training";
                $sql = mysqli_query($GLOBALS['conn'], $select);

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
                                <a class='btn btn-primary btn-sm' href='Student/edit_student_application_form.php?app_id=$row[applicationid]&id=$array[userid]'>Edit</a>
                                <a class='btn btn-danger btn-sm' href='delete_user.php?id=$row[applicationid]'>Delete</a>
                                <a class='btn btn-dark btn-sm' href='Student/view_student_application.php?app_id=$row[applicationid]&id=$array[userid]'>View</a>
                            </td>
                        </tr> 
                        ";
                    }
                } else {
                    echo "0 results";
                }

                mysqli_close($conn);
                ?>
            </tbody>
        </table>
</body>

</html>