<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact</title>
	<link rel="icon" type="image/x-icon" href="contact.png">

	<!-- font awesome cnd link -->
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

	<!-- swiper css link -->
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

	<!-- custom css file link -->
	<link rel="stylesheet" href="css/style.css">

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

					<div id="menu-btn" class="fas fa-bars"></div>
				</div>
	</header>


	<!-- account form section starts -->

	<div class="account-form">

		<div id="close-form" class="fas fa-times"></div>

		<div class="buttons">
			<span class="btn active login-btn">login</span>
			<span class="btn register-btn">register</span>
		</div>

		<form class="login-form active" action="">
			<h3>login now</h3>
			<input type="email" placeholder="Enter Your Email" class="box" name="">
			<input type="password" placeholder="Enter Your Password" class="box" name="">
			<div class="flex">
				<input type="checkbox" name="" id="remember-me">
				<label for="remember-me">Remember me</label>
				<a href="#">Forgot Password?</a>
			</div>
			<input type="submit" value="login now" class="btn" name="">
		</form>

		<form class="register-form" action="" method="post">
			<h3>register now</h3>
			<input type="email" placeholder="Enter Your Email" class="box" name="">
			<input type="password" placeholder="Enter Your Password" class="box" name="">
			<input type="password" placeholder="Confirm Your Password" class="box" name="">

			<input type="submit" value="register now" class="btn" name="">
		</form>
	</div>

	<!-- account form section ends -->



	<!-- header section ends -->





	<section class="heading-link">
		<h3>contact us</h3>
		<p><a href="index.php">home</a> / contact</p>
	</section>



	<!-- contact section starts -->

	<section class="contact">

		<h1 class="heading">get in touch</h1>

		<div class="icons-container">

			<div class="icons">
				<i class="fas fa-clock"></i>
				<h3>opening hours :</h3>
				<p>10:00am to 06:00pm</p>
			</div>

			<div class="icons">
				<i class="fas fa-phone"></i>
				<h3>phone :</h3>
				<p>+880 177******5</p>
				<p>+880 130******6</p>
			</div>

			<div class="icons">
				<i class="fas fa-envelope"></i>
				<h3>email :</h3>
				<p>orna16@cse.pstu.ac.bd</p>
				<p>malihaafrozorna@gmail.com</p>
			</div>

			<div class="icons">
				<i class="fas fa-map"></i>
				<h3>address :</h3>
				<p>Gazipur, Bangladesh</p>
			</div>

		</div>

		<div class="row">
			<div class="image">
				<img src="images/contact-img.png" alt="">
			</div>

			<form action="complain.php" method="post">
				<h3>send us a feedback</h3>
				<input type="text" placeholder="Your Name" class="box" name="name">
				<input type="email" placeholder="Your Email" class="box" name="email">
				<input type="text" placeholder="Your Phone" class="box" name="phone">
				<textarea name="feedback" class="box" placeholder="Message" id="" cols="30" rows="10"></textarea>
				<input type="submit" value="send message" class="btn">
			</form>

		</div>

	</section>

	<!-- contact section ends -->





	<!-- faq section starts -->

	<section class="faq">

		<h1 class="heading">frequently asked questions</h1>

		<div class="accordion-container">

			<div class="accordion active">
				<div class="accordion-heading">
					<h3>how to contact for help?</h3>
					<i class="fas fa-angle-down"></i>
				</div>
				<p class="accordion-content">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet harum excepturi eligendi nostrum
					aliquid nulla recusandae! Animi, recusandae eaque quidem minus possimus soluta aperiam ullam
					assumenda quasi necessitatibus dignissimos voluptatibus.
				</p>
			</div>

			<div class="accordion">
				<div class="accordion-heading">
					<h3>what is the best career in 2022?</h3>
					<i class="fas fa-angle-down"></i>
				</div>
				<p class="accordion-content">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet harum excepturi eligendi nostrum
					aliquid nulla recusandae! Animi, recusandae eaque quidem minus possimus soluta aperiam ullam
					assumenda quasi necessitatibus dignissimos voluptatibus.
				</p>
			</div>

			<div class="accordion">
				<div class="accordion-heading">
					<h3>how much fees for web development?</h3>
					<i class="fas fa-angle-down"></i>
				</div>
				<p class="accordion-content">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet harum excepturi eligendi nostrum
					aliquid nulla recusandae! Animi, recusandae eaque quidem minus possimus soluta aperiam ullam
					assumenda quasi necessitatibus dignissimos voluptatibus.
				</p>
			</div>

			<div class="accordion">
				<div class="accordion-heading">
					<h3>can I choose my own tutor?</h3>
					<i class="fas fa-angle-down"></i>
				</div>
				<p class="accordion-content">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet harum excepturi eligendi nostrum
					aliquid nulla recusandae! Animi, recusandae eaque quidem minus possimus soluta aperiam ullam
					assumenda quasi necessitatibus dignissimos voluptatibus.
				</p>
			</div>

			<div class="accordion">
				<div class="accordion-heading">
					<h3>what payment methods are available?</h3>
					<i class="fas fa-angle-down"></i>
				</div>
				<p class="accordion-content">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet harum excepturi eligendi nostrum
					aliquid nulla recusandae! Animi, recusandae eaque quidem minus possimus soluta aperiam ullam
					assumenda quasi necessitatibus dignissimos voluptatibus.
				</p>
			</div>

			<div class="accordion">
				<div class="accordion-heading">
					<h3>can I have free trial for a month?</h3>
					<i class="fas fa-angle-down"></i>
				</div>
				<p class="accordion-content">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet harum excepturi eligendi nostrum
					aliquid nulla recusandae! Animi, recusandae eaque quidem minus possimus soluta aperiam ullam
					assumenda quasi necessitatibus dignissimos voluptatibus.
				</p>
			</div>

		</div>
	</section>

	<!-- faq section ends -->




	<!-- logo slider starts -->

	<section class="logo-container">
		<div class="swiper logo-slider">
			<div class="swiper-wrapper">
				<div class="swiper-slide"> <img src="images/partner-logo-1.png" alt=""> </div>
				<div class="swiper-slide"> <img src="images/partner-logo-1.png" alt=""> </div>
				<div class="swiper-slide"> <img src="images/partner-logo-1.png" alt=""> </div>
				<div class="swiper-slide"> <img src="images/partner-logo-1.png" alt=""> </div>
				<div class="swiper-slide"> <img src="images/partner-logo-1.png" alt=""> </div>
			</div>
		</div>
	</section>

	<!-- logo slider ends -->






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



	<script>
		 var swiper = new Swiper(".logo-slider", {
	loop:true,
	grabCursor:true,
	spaceBetween: 20,
	breakpoints: {
		0: {
		  slidesPerView: 1,
		},
		450: {
			slidesPerView: 2,
		  },
		768: {
		  slidesPerView: 3,
		},
		991: {
		  slidesPerView: 4,
		},
		1200: {
			slidesPerView: 5,
		  },
	  },
  });

	</script>
	

<script>
        let answers=document.querySelectorAll(".accordion");
        answers.forEach((event)=>{
            event.addEventListener('click',()=>{
                if(event.classList.contains("active")){
                    event.classList.remove("active");
                }
                else{
                    event.classList.add("active");
                }
            })
        })
    </script>





</body>

</html>