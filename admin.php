<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="house.png">

    <!-- font awesome cnd link -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- bootstrap css -->
    <link rel="stylesheet" href="file:///C:/xampp/htdocs/project/bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">

    <!-- bootstrap js-->
    <script type="text/javascript" src="file:///C:/xampp/htdocs/project/bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>


<!-- header section starts -->
<header style="background: #F1E1F5" class="header">
    <a href="index.php" class="logo"><i class="fa-solid fa-user-graduate"></i>OnlineEdu<a>

            <nav class="navbar">
                <div id="close-navbar" class="fas fa-times"></div>
                <a href="index.php">Home</a>
                <a href="about.html">About</a>
                <a href="courses.html">Courses</a>
                <a href="contact.php">Contact</a>
            </nav>


</header>




<section style="padding: 10% 20%;">
    <a  style="margin:0 12%;align-items: center;padding:40px 90px;font-size: 3rem;font-weight: bold;" href="http://localhost/project/databaseuser.php" class="btn">USER</a>
    <a  style="align-items: center;padding:40px 65px;font-size: 3rem;font-weight: bold;" href="http://localhost/project/databasefeedback.php" class="btn">FEEDBACK</a>
</section>





<!-- footer section starts -->

<section class="footer">



    <div style="padding-top: .25%;" class="credit">created by <span style="font-weight: bold;">Maliha Afroj Orna</span> <a href="mycv.zip" download> <button class="btn"  style="font-weight: bold;padding:7px 10px"> CV <i class="fa fa-download"></i></button></a> | all rights reserved!</div>
</section>

</body>
</html>