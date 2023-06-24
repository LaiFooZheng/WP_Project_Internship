<html>
<head>
    <link rel="shortcut icon" href="../img/2.png" type="image/x-icon">
</head>

<body>
    <?php
    include('../includes/headerAdmin.html');
    ?>

    <div class="industry-background">
        <img src="../img/background-img3.jpg" style="width: 100%;">
        <div class="homepage-caption">
            <p style="text-align: center;"><b>Best Internship Management System</b></p>
            <p style="text-align: center;"><i><b>"RECOMENDED BY MANY INDUSTRY LEADERS"</b></i></p>
        </div>
    </div>

    <form action="search_user.php" method="post">
        <div class="admin-links">
        <b><a href="user_list.php"><label class="ad-homepage-btn">View All User</label></a></b>
        <b><a href="../application_list.php"><label class="ad-homepage-btn">View Student Applicationst</label></a></b>
        <b><a href="view student application.php"><label class="ad-homepage-btn">View Student Report</label></a></b>
        </div>
    </form>
    <br> <br>
    <?php
    include('../includes/footer.php');
    ?>
</body>

</html>