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
    <div class="container my-5">
        <h2>Student Application List</h2>
        <p><i>Students Can Only View their own Applications</i></p>
        <a class="btn btn-danger" href="../login.html" role="button">LOGOUT</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Application ID</th>
                    <th>Date Applied</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                include("../config.php");
                session_start();    
                // Retrieve data from table
                $id = $_SESSION['USER_ID'];
                $query = "SELECT * FROM practical_training WHERE fk_userid = '$id'";
                $sql = mysqli_query($conn, $query) or die(mysqli_connect_error());
                
                if (mysqli_num_rows($sql) > 0) {
                    // Output data of each row
                    while ($row = mysqli_fetch_array($sql)) {
                        echo "
                        <tr>
                            <td>$row[applicationid]</td>
                            <td>$row[applicationdate]</td>
                            <td>$row[applicationtitle]</td>
                            <td>$row[applicationstatus]</td>
                            <td>
                                <a class='btn btn-primary btn-sm' href='edit_user_form.php?id=$row[applicationid]'>Edit</a>
                                <a class='btn btn-danger btn-sm' href='delete_user.php?id=$row[applicationid]'>Delete</a>
                                <a class='btn btn-dark btn-sm' href='view_user.php?id=$row[applicationid]'>View</a>
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