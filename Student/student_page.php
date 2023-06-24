<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="shortcut icon" href="images/transparent-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cousine&family=Montserrat:ital,wght@0,400;1,200&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php
    include('../includes/headerStudent.html');
    ?>

    <div class="industry-background">
        <img src="../img/studentPageImage.jpg" style="width: 100%;">
        <div class="homepage-caption">
            <p class="cCaption">Best Internship Management System</p>
            <p class="cCaption2"><i>"RECOMENDED BY MANY INDUSTRY LEADERS"</i></p>
            <a href="student_application_form.php"><button class="button">Apply Now!</button></a>
        </div>
    </div>

    <br> <br>


    <div class="container-purpose-with-img">
        <div class="our-purpose-desc">
            <h3>Our Purpose</h3>
            <h1 style="color: rgb(26, 26, 26);">Students' Internship Management System</h1>
            <p>Our purpose is to revolutionize the student internship experience with our innovative Student Internship Management System. 
                We streamline the process, connecting students with placements that align with their goals and providing valuable learning opportunities. 
                By optimizing efficiency and enhancing transparency, we empower students to gain practical skills, network with industry experts, and accelerate their professional growth.
            </p>
        </div>
        <img src="../img/studentPageImage2.jpg" alt="civil-engineer-work" style="height: 270px;">
    </div>

    <br> <br>

    <div class="container-promise-with-img">
        <img src="../img/studentPageImage3.jpg" alt="programmer-work" style="height: 265px;">

        <div class="our-promise-desc">
            <h3>Our Promise</h3>
            <h1 style="color: rgb(26, 26, 26);">Reliable and Efficient System</h1>
            <p>Our system is reliable and efficient, providing a seamless internship management experience. 
                With stability, accuracy, and streamlined workflows, we prioritize the success of students and organizations alike.
            </p>
        </div>
    </div>
    <?php
    include('../includes/footer.html');
    ?>
</body>

</html>