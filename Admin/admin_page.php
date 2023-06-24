<html>

<head>
    <link rel="shortcut icon" href="../images/transparent-logo.png" type="image/x-icon">
</head>

<body>
    <?php include('admin.html'); ?>

    <div class="industry-background">
        <img src="../images/background-img3.jpg" style="width: 100%;">
        <div class="homepage-caption">
            <p class="cCaption">Best Practical Training Management System</p>
            <p class="cCaption2"><i>"RECOMENDED BY MANY INDUSTRY LEADERS"</i></p>
        </div>
    </div>

    <form action="search_user.php" method="post">
        <div class="admin-links">
            <b> <a href="user_list.php"><label class="ad-homepage-btn">View All Users</label></a>
                <a href="../application_list.php"><label class="ad-homepage-btn">View Student Applications</label></a>
                <a href="view student application.php"><label class="ad-homepage-btn">View Student Report</label></a>
            </b>
        </div>
    </form>
    <br> <br>
    <form action="search_user.php" method="POST">
        <div class="co-homepage-table">
            <span class="profile">Search Student's Profile:</span>
            <input type="text" class="co-homepage-input" name="search" />
            <br>

            <span class="profile">Column: </span>
            <select class="select" name="column">
                <option value="userid">User ID</option>
                <option value="name">Name</option>
                <option value="phone">Phone Number</option>
            </select>
            <br>
            <input class="co-homepage-submit" type="submit" value="Search"> <!--added value-->
    </form>
</body>

</html>