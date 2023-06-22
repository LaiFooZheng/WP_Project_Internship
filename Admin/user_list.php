<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container my-5">
        <h2>User List</h2>
        <p><i>Only Accessible to Admins</i></p>
        <a class="btn btn-primary" href="user_form.php" role="button">Add User</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                //Call connection to database
                require_once("../config.php");
                
                //Retrieve data from table
                $sql1 = mysqli_query($conn, "SELECT * FROM users") or die(mysqli_connect_error());
                $sql2 = mysqli_query($conn, "SELECT * FROM login") or die(mysqli_connect_error());

                if (mysqli_num_rows($sql1) > 0) {
                    //Output data of each row
                    while ($row = mysqli_fetch_array($sql1)) {
                        $row2 = mysqli_fetch_array($sql2);
                        echo "
                        <tr>
                            <td>$row[userid]</td>
                            <td>$row[name]</td>
                            <td>$row2[username]</td>
                            <td>$row[email]</td>
                            <td>";
                        if ($row2['userlevel'] == 1) {
                            echo 'Admin';
                        } else if ($row2['userlevel'] == 2) {
                            echo 'Coordinator';
                        } else if ($row2['userlevel'] == 3) {
                            echo 'Student';
                        }
                        echo "
                            </td>
                            <td>
                                <a class='btn btn-primary btn-sm' href='edit_user_form.php?id=$row[userid]'>Edit</a>
                                <a class='btn btn-danger btn-sm' href='delete_user.php?id=$row[userid]'>Delete</a>
                                <a class='btn btn-danger btn-sm' href='view_user.php?id=$row[userid]'>View</a>
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