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

    <!-- banner -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>




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

				<div class="icons">

                    <?php
                    if(isset($_SESSION['email']))
                    {
                        ?>
                        <?php
                    }
                    else
                    {
                        ?>

                        <div id="account-btn" class="fa-solid fa-user-graduate"></div>
                    <?php

                    }
                    ?>


					<div id="menu-btn" class="fas fa-bars"></div>



				</div>
                <?php
                if(isset($_SESSION['email']))
                {
                    ?>
                    <h3><?php echo $_SESSION['email']?> </h3>
                    <a class="btn btn-danger" style="margin-left: 10px" href="logout.php">Logout</a>
                    <?php
                }
                ?>
	</header>

	<!-- account form section starts -->

	<div class="account-form">

		<div id="close-form" class="fas fa-times"></div>

		<div class="buttons">
			<span class="btn active login-btn">login</span>
			<span class="btn register-btn" value="redirect">register</span>
		</div>

		<form class="login-form active" action="login.php" method="post">
			<h3>login now</h3>
			<input type="email" placeholder="Enter Your Email" class="box" name="email">
			<input type="password" placeholder="Enter Your Password" class="box" name="password">
			<div class="flex">
				<input type="checkbox" name="" id="remember-me">
				<label for="remember-me">Remember me</label>
				<a href="#">Forgot Password?</a>
			</div>
			<input type="submit" value="login now" class="btn" name="">
		</form>

		<form class="register-form" action="registration.php" method="post">
			<h3>register now</h3>
			<input type="text" placeholder="Enter Your Name" class="box" name="name">
			<input type="email" placeholder="Enter Your Email" class="box" name="email">
			<input type="password" placeholder="Enter Your Password" class="box" name="password">

			<input type="submit" value="register now" class="btn" name="">
		</form>
	</div>

	<!-- account form section ends -->

	<!-- header section ends -->



	<!-- home section starts -->

	<section class="home">
		<div class="swiper home-slider">
			<div class="swiper-wrapper">

				<section class="swiper-slide slide" style="background: url(images/home-slide-1.jpg) no-repeat;">
					<div class="content">
						<h3>the best courses you will find here!</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut fugiat ipsa tempore corrupti
							impedit laboriosam.</p>
						<a href="courses.html" class="btn">get started</a>
					</div>
				</section>

				<section class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat;">
					<div class="content">
						<h3>develop a passion for learning new things!</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut fugiat ipsa tempore corrupti
							impedit laboriosam.</p>
						<a href="courses.html" class="btn">get started</a>
					</div>
				</section>

				<section class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat;">
					<div class="content">
						<h3>the best courses you will find here!</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut fugiat ipsa tempore corrupti
							impedit laboriosam.</p>
						<a href="courses.html" class="btn">get started</a>
					</div>
				</section>

			</div>

			<div class="swiper-pagination"></div>

		</div>
	</section>

	<!-- home section ends -->



	<!-- subjects section starts -->

	<section class="subjects">
		<h1 class="heading">our popular subjects</h1>

		<div class="box-container">

			<div class="box">
			 <a href="courses.html">
				<img src="images/subject-icon-1.png" alt="">
				<h3>graphic Design</h3>
				<p>12 modules</p>
			 </a>
			</div>

			<div class="box">
			<a href="courses.html">
				<img src="images/subject-icon-2.png" alt="">
				<h3>mathematics</h3>
				<p>12 modules</p>
			</a>
			</div>

			<div class="box">
			<a href="courses.html">
				<img src="images/subject-icon-3.png" alt="">
				<h3>teaching</h3>
				<p>12 modules</p>
			</a>
			</div>

			<div class="box">
			<a href="courses.html">
				<img src="images/subject-icon-4.png" alt="">
				<h3>development</h3>
				<p>12 modules</p>
			</a>
			</div>

			<div class="box">
			<a href="courses.html">
				<img src="images/subject-icon-5.png" alt="">
				<h3>science</h3>
				<p>12 modules</p>
			</a>
			</div>

			<div class="box">
			<a href="courses.html">
				<img src="images/subject-icon-6.png" alt="">
				<h3>engineering</h3>
				<p>12 modules</p>
			</a>
			</div>
		</div>
	</section>

	<!-- subjects section ends -->

    <!-- banner starts-->

    <section style="background: url('banner.jpg');min-height: 30vh;display: flex;align-items: center;padding: 0 50px;" class="counter-up">
        <div style="display: flex;width: 100%;height: 100%;align-items: center;color: white;flex-wrap:wrap;z-index: 2; justify-content: space-between" class="content">
            <div style="width: calc(25% -30px);border-radius: 5px;display: flex;padding: 20px;align-items: center;justify-content: space-evenly;flex-direction: column;" class="box">
                <div style="font-size: 50px;font-weight: 500;" class="counter">20,500</div>
                <div style="font-size: 20px;font-weight: 400;color:#ccc;" class="text">Graduated Students</div>
            </div>
            <div  style="width: calc(25% -30px);border-radius: 5px;display: flex;padding: 20px;align-items: center;justify-content: space-evenly;flex-direction: column;" class="box">
                <div style="font-size: 50px;font-weight: 500;" class="counter">1,240</div>
                <div style="font-size: 20px;font-weight: 400;color:#ccc;" class="text">Expert Instructors</div>
            </div>
            <div style="width: calc(25% -30px);border-radius: 5px;display: flex;padding: 20px;align-items: center;justify-content: space-evenly;flex-direction: column;" class="box">
                <div style="font-size: 50px;font-weight: 500;" class="counter">60,000</div>
                <div style="font-size: 20px;font-weight: 400;color:#ccc;" class="text">Books in our library</div>
            </div>
            <div  style="width: calc(25% -30px);border-radius: 5px;display: flex;padding: 20px;align-items: center;justify-content: space-evenly;flex-direction: column;"class="box">
                <div style="font-size: 50px;font-weight: 500;" class="counter">15,000</div>
                <div style="font-size: 20px;font-weight: 400;color:#ccc;" class="text">Students get employed</div>
            </div>
        </div>
    </section>
    <!-- banner ends -->



	<!-- home courses slider section starts -->

	<section class="home-courses">

		<h1 class="heading">Our Trending Courses</h1>

		<div class="swiper home-courses-slider">
			<div class="swiper-wrapper">

				<div class="swiper-slide slide">
					<div class="image">
						<img src="images/course-1-1.png" alt="">
						<h3>web development</h3>
					</div>
					<div class="content">
						<h3>web development</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, eaque?</p>
						<a href="courses.html" class="btn">read more</a>
					</div>
				</div>

				<div class="swiper-slide slide">
					<div class="image">
						<img src="images/course-1-2.png" alt="">
						<h3>graphic design</h3>
					</div>
					<div class="content">
						<h3>graphic design</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, eaque?</p>
						<a href="courses.html" class="btn">read more</a>
					</div>
				</div>

				<div class="swiper-slide slide">
					<div class="image">
						<img src="images/course-1-3.png" alt="">
						<h3>mathematics</h3>
					</div>
					<div class="content">
						<h3>mathematics</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, eaque?</p>
						<a href="courses.html" class="btn">read more</a>
					</div>
				</div>

				<div class="swiper-slide slide">
					<div class="image">
						<img src="images/course-1-4.png" alt="">
						<h3>engineering</h3>
					</div>
					<div class="content">
						<h3>engineering</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, eaque?</p>
						<a href="courses.html" class="btn">read more</a>
					</div>
				</div>

				<div class="swiper-slide slide">
					<div class="image">
						<img src="images/course-1-5.png" alt="">
						<h3>teaching</h3>
					</div>
					<div class="content">
						<h3>teaching</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, eaque?</p>
						<a href="courses.html" class="btn">read more</a>
					</div>
				</div>

				<div class="swiper-slide slide">
					<div class="image">
						<img src="images/course-1-6.png" alt="">
						<h3>business</h3>
					</div>
					<div class="content">
						<h3>business</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, eaque?</p>
						<a href="courses.html" class="btn">read more</a>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- home courses slider section ends -->




	<!-- footer section starts -->

	<section class="footer">
		<div class="box-container">

			<div class="box">
				<h3><i class="fas fa-lightbulb"></i>OnlineEdu</h3>
				<p>Lorem, ipsum dolor sit amet consectetur
					adipisicing elit. Vel, quod?</p>
				<div class="share">
					<a href="https://www.facebook.com/malihaafrojorna/" class="fab fa-facebook-f"></a>
					<a href="https://twitter.com/malihaafrojorna" class="fab fa-twitter"></a>
					<a href="https://www.instagram.com/malihaafrojorna/" class="fab fa-instagram"></a>
					<a href="https://www.linkedin.com/in/maliha-afroj-72415818b/" class="fab fa-linkedin"></a>
				</div>
			</div>

			<div class="box">
				<h3>quick links</h3>
				<a href="index.php" class="link">Home</a>
				<a href="about.html" class="link">About</a>
				<a href="courses.html" class="link">Courses</a>
				<a href="contact.php" class="link">Contact</a>
			</div>

			<div class="box">
				<h3>useful links</h3>
				<a href="#" class="link">help center</a>
				<a href="#" class="link">ask questions</a>
				<a href="#" class="link">send feedback</a>
				<a href="#" class="link">private policy</a>
				<a href="#" class="link">terms of use</a>
			</div>

			<div class="box">
				<h3>newsletter</h3>
				<p>Subscribe for latest updates</p>

				<form action="">
					<input style="border-radius: 8px;" type="email" name="" id="" class="email"
						placeholder="Enter Your Email">
					<input type="submit" value="Subscribe" class="btn">
				</form>
			</div>

		</div>

		<div class="credit">created by <span style="font-weight: bold;">Maliha Afroj Orna</span> <a href="mycv.zip" download> <button class="btn"  style="font-weight: bold;padding:7px 10px"> CV <i class="fa fa-download"></i></button></a> | all rights reserved!</div>

    </section>

	<!-- footer section ends -->





	<!-- swiper js link-->
	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

	<!--custom js file link -->
	<script src="js/script.js"></script>

<!-- banner -->
 <script>
	let navbar = document.querySelector('.header .navbar')

document.querySelector('#menu-btn').onclick = () => {
	navbar.classList.add('active');
}

document.querySelector('#close-navbar').onclick = () =>{
	navbar.classList.add('active');
}

 </script>

 <script>
	let registerBtn = document.querySelector('.account-form .register-btn');
let loginBtn = document.querySelector('.account-form .login-btn');

registerBtn.onclick = () =>{
	registerBtn.classList.add('active');
	loginBtn.classList.remove('active');
	document.querySelector('.account-form .login-form').classList.remove('active');
	document.querySelector('.account-form .register-form').classList.add('active');
};
loginBtn.onclick = () =>{
	registerBtn.classList.remove('active');
	loginBtn.classList.add('active');
	document.querySelector('.account-form .login-form').classList.add('active');
	document.querySelector('.account-form .register-form').classList.remove('active');
};

 </script>

    <script>
        $(document).ready(function(){
            $('.counter').counterUp({
                delay: 60,
                time: 1200
            });
        });
    </script>

<script>
    var swiper = new Swiper(".home-slider", {
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        loop:true,
        grabCursor:true,
    });

</script>

<script>
    var swiper = new Swiper(".home-courses-slider", {
        loop:true,
        grabCursor:true,
        spaceBetween: 20,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            991: {
                slidesPerView: 3,
            },
        },
    });
</script>

</body>

</html>