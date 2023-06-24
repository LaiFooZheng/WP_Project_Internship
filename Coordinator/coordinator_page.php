<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coordinator</title>
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
                <a href="../view_profile.php">Profile</a>
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

    <div class="industry-background">
        <img src="../img/CoordinatorPageBackground.jpg" style="width: 100%; ">
        <div class="homepage-caption">
            <p class="cCaption">Best Internship Management System</p>
            <p class="cCaption2"><i>"RECOMENDED BY MANY INDUSTRY LEADERS"</i></p>
        </div>
    </div>

    <br> <br>

    <div class="coordinator-links">
        <b><a href="ViewApplicationList.php"><label class="co-homepage-btn">View Application List</label></a></b>
        <b><a href="ViewSortedReport.php"><label class="co-homepage-btn">View Sorted Report</label></a></b>
        <b><a href="ViewSortedSubmission.php"><label class="co-homepage-btn">View Sorted Submission</label></a></b>
    </div>

    <form action="search_student.php" method="POST">
        <div class="co-homepage-table">
            <span class="profile">Search Student's Profile:</span>
            <input type="text" class="co-homepage-input" name="search" />
            <br>

            <span class="profile">Column: </span>
            <select class="select" name="column">
                <option value="name">Name</option>
                <option value="phone">Phone Number</option>
                <option value="userid">User ID</option>
            </select>
            <br>
            <input class="co-homepage-submit" type="submit" value="Search"> <!--added value-->
    </form>

    <br> <br>

    <form action="search_student_application.php" method="POST">
        <span class="profile">Search Student's Application:</span>
        <input class="co-homepage-input" type="text" name="search"><br>

        <span class="profile">Column:</span>
        <select class="select" name="column">
            <option value="applicationid">Application ID</option>
            <option value="applicationstatus">Application Status</option>
            <option value="fk_userid">User ID</option>
            <option value="applicationtitle">Application Title</option>
            <option value="applicationdate">Application Date</option>
        </select><br>
        <input class="co-homepage-submit" type="submit" value="Search"> <!--added value-->
    </form>
    </div>
    <?php
    include('../includes/footer.html');
    ?>
</body>

</html>