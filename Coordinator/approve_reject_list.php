<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application List</title>
    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="coordinator_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cousine&family=Montserrat:ital,wght@0,400;1,200&display=swap"
        rel="stylesheet">

</head>

<body>

    <div class="outercontainer-nav">
        <div class="container-logo">
            <a href="coordinator.php"><img src="../img/1.png" alt="Logo" id="img-logo"></a>
            <!-- <p class="title">Internship Management System</p> -->
        </div>

        <div class="dropdown">
            <button class="dropbtn-logo"><img src="../img/coordinator icon.jpg" alt="Coordinator logo" width="400px">
                <p>COORDINATOR</p>
            </button>
            <div class="dropdown-content">
                <a href="EditProfile_Form.php">Profile</a>
                <a href="../login.html">Log out</a>
            </div>
        </div>
    </div>
    <nav class="stroke">
        <ul>
            <li><a href="coordinator_page.php">Home</a></li>
            <li><a href="approve_reject_list.php">Approve &#47; Reject Application</a></li>
            <li><a href="../application_list.php">Full Application List</a></li>
        </ul>
    </nav>
    
    <div class="container my-5">
        <h2>Pending Application List</h2>
        <p><i>Pending List Only Accessible to Coordinators</i></p>
        <!-- <a class="btn btn-primary" href="user_form.php" role="button">Add User</a> -->
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
                $select = "SELECT * from practical_training WHERE applicationstatus = 'Submitted'";
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
                    echo "0 results";
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