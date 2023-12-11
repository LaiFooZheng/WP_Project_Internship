<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application List</title>
    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

</head>

<body>
    <?php
    include('../includes/headerCoordinator.html');
    ?>
    <div class="container my-5">
        <h2 style="text-align:center; font-weight:bold">Pending Application List</h2>
        <p style="text-align:center; font-weight:bold"><i>Pending List Only Accessible to Coordinators</i></p>
        <a class="btn btn-primary" href="approve_reject_list.php" role="button">Original List</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
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
                require_once("../config.php");
                require_once("../functions.php");

                // Retrieve data from table
                $array = array();
                $select = "SELECT * from practical_training WHERE applicationstatus = 'Submitted' ORDER BY applicationdate ASC";
                $sql = mysqli_query($GLOBALS['conn'], $select);
                $count = 1;

                if (mysqli_num_rows($sql) > 0) {
                    // Output data of each row
                    while ($row = mysqli_fetch_array($sql)) {
                        $array['userid'] = $row['fk_userid'];
                        $profile = getUsersData($array['userid']);
                        echo "
                        <tr>
                            <td>$count</td>
                            <td>$row[applicationid]</td>
                            <td>$profile[name]</td>
                            <td>$row[applicationdate]</td>
                            <td>$row[applicationtitle]</td>
                            <td>$row[applicationstatus]</td>
                            <td>
                            <a class='btn btn-success btn-sm' href='approve_application.php?id=$row[applicationid]'>Approve</a>
                            <a class='btn btn-danger btn-sm' href='reject_application.php?id=$row[applicationid]'>Reject</a>
                            <a class='btn btn-primary btn-sm' href='../view_application.php?id=$row[applicationid]'>View</a>
                            </td>
                        </tr> 
                        ";
                        $count++;
                    }
                } else {
                    echo "<a id='echo' style='color:black; text-align:left;'>0 results</a>";
                }

                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
    <?php
    include('../includes/footer.html');
    ?>
</body>

</html>