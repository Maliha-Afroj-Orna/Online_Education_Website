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


    <!-- html to excel -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="//code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

</head>

<body>


<!-- header section starts -->
<header style="background: #F1E1F5;" class="header">
    <a href="index.php" class="logo"><i class="fa-solid fa-user-graduate"></i>OnlineEdu<a>

            <nav class="navbar">
                <div id="close-navbar" class="fas fa-times"></div>
                <a href="index.php">Home</a>
                <a href="about.html">About</a>
                <a href="courses.html">Courses</a>
                <a href="contact.php">Contact</a>
                <a href="http://localhost/project/admin.php">Admin</a>
            </nav>


</header>




<!-- database section starts -->

<?php
    $connection = mysqli_connect("localhost","root","","maliha");
	$query = "SELECT * FROM user";
	$query_run = mysqli_query($connection,$query);
?>

<div style="margin:0 auto 4% auto;" class="table-responsive">
	<table style="text-align: center; margin:2% auto" class="table table-bordered" id="dataTable" width="40%%" cellspacing="0">
        <caption style="text-decoration: underline;font-size: 4rem;color: #6F1E51;font-weight: bold;margin-bottom: 2%">USER</caption>
		<thead>
			<tr style="font-size: 3rem;font-weight: bold;color: #6F1E51">
				<th style="padding:0 130px">ID</th>
				<th style="padding:0 130px">NAME</th>
				<th style="padding:0 130px">EMAIL</th>
				<th style="padding:0 130px">PASSWORD</th>
			</tr>
		</thead>
		<tbody>
        <?php
        if(mysqli_num_rows($query_run)>0)
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
                ?>



			<tr style="font-size: 2rem;">
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['password']; ?></td>
			</tr>

                <?php
            }
        }
        else{
            echo "No Record Found";
        }
        ?>

		</tbody>
	</table>
</div>

<!-- database section ends -->



<!-- export data starts -->
<div style="margin: 3% 43%;" class="text-center">
    <a href="exportUser.php" class="btn" target="_blank">DOWNLOAD</a>
</div>
<!-- export data ends -->



<!-- footer section starts -->

<section class="footer">



    <div style="padding-top: .25%;" class="credit">created by <span style="font-weight: bold;">Maliha Afroj Orna</span> <a href="mycv.zip" download> <button class="btn"  style="font-weight: bold;padding:7px 10px"> CV <i class="fa fa-download"></i></button></a> | all rights reserved!</div>
</section>

</body>
</html>





