<?php
		session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>StackProbe</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="HostSpace template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header trans_400">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
						<div class="logo"><a href="#">Stack<span>Probe</span></a></div>
						<nav class="main_nav ml-auto mr-auto">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li class="active"><a href="index.php">Home</a></li>
								
								<li><a href="serv.html">Services</a></li>
								
								
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>

						<div class="log_reg">
							<div class="log_reg_content d-flex flex-row align-items-center justify-content-start">
								<?php
										if(isset($_SESSION['uname']) && $_SESSION['logged_in'] == true):
								?>
										<h3 style="color:white;"><?= $_SESSION['uname']; ?></h3>
								<?php else: ?>
							
								<div class="login log_reg_text"><a href="./login.html">Login</a></div>
								<div class="register log_reg_text"><a href="./login.html">Register</a></div>
							<?php endif; ?>
							</div>
						</div>
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->
	
	<div class="menu_overlay trans_400"></div>
	<div class="menu trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="log_reg">
			<div class="log_reg_content d-flex flex-row align-items-center justify-content-end">
				<div class="login log_reg_text"><a href="./login.html">Login</a></div>
				<div class="register log_reg_text"><a href="./login.html">Register</a></div>
			</div>
		</div>
		<nav class="menu_nav">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About us</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href="blog.html">News</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background"></div>
		<div class="background_image background_city" style="background-image:url(images/city.png)"></div>
		<div class="cloud cloud_1"><img src="images/cloud.png" alt=""></div>
		<div class="cloud cloud_2"><img src="images/cloud.png" alt=""></div>
		<div class="cloud cloud_3"><img src="images/cloud_full.png" alt=""></div>
		<div class="cloud cloud_4"><img src="images/cloud.png" alt=""></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">The Best Technology Comparing Portal</div>
							<div class="home_text"></div>
						</div>
					</div>
				</div>
			<!--	<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="domain_search_form_container">
							<form action="#" id="domain_search_form" class="domain_search_form d-flex flex-md-row flex-column align-items-center justify-content-start">
								<div class="d-flex flex-row align-items-center justify-content-start">
									<input type="text" class="domain_search_input" placeholder="yourdomain" required="required">
									<div class="domain_search_dropdown d-flex flex-row align-items-center justify-content-start">
										<i class="fa fa-chevron-down" aria-hidden="true"></i>
										<div class="domain_search_selected">WT</div>
										<ul>
											<li>Java</li>
											<li>Machine Learning</li>
											<li>Hadoop</li>
										</ul>
									</div>
								</div>
								<button class="domain_search_button d-flex flex-row align-items-center justify-content-center"><img src="images/search.png" alt="">Search</button>
							</form>
						</div>
					</div>-->
				</div>
			</div>
		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col magic_fade_in">
					<div class="section_title text-center"><h2>How to get started</h2></div>
				</div>
			</div>
			<div class="row intro_row">
				<div class="intro_dots magic_fade_in" style="background-image:url(images/dots.png)"></div>
				
				<!-- Intro Item -->
				<div class="col-lg-4 intro_col magic_fade_in">
					<div class="intro_item d-flex flex-column align-items-center justify-content-start text-center">
						<div class="intro_icon_container d-flex flex-column align-items-center justify-content-center">
							<div class="intro_icon"><img src="1.1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						</div>
						<div class="intro_item_content">
							<div class="intro_item_title">Find Trends</div>
							<div class="intro_item_text">
								<p>Discover what's been trending</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->
				<div class="col-lg-4 intro_col magic_fade_in">
					<div class="intro_item d-flex flex-column align-items-center justify-content-start text-center">
						<div class="intro_icon_container d-flex flex-column align-items-center justify-content-center">
							<div class="intro_icon"><img src="1.2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						</div>
						<div class="intro_item_content">
							<div class="intro_item_title">Compare Techs</div>
							<div class="intro_item_text">
								<p>Compare any two technologies from stackoverflow</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->
				<div class="col-lg-4 intro_col magic_fade_in">
					<div class="intro_item d-flex flex-column align-items-center justify-content-start text-center">
						<div class="intro_icon_container d-flex flex-column align-items-center justify-content-center">
							<div class="intro_icon"><img src="1.4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						</div>
						<div class="intro_item_content">
							<div class="intro_item_title">Find Related Technology</div>
							<div class="intro_item_text">
								<p>Find all technologies that are related to a particular technology</p>
							</div>
						</div>
					</div>
				</div>

			</div>
			
		</div>
	</div>

	


	<!-- Why Choose Us -->

	<div class="choice">
		<div class="container">
			<div class="row row-lg-eq-height">
				
				<!-- Choice Image -->
				<div class="col-lg-6 choice_col magic_fade_in">
					<div class="choice_image"><img src="analysis.svg" alt=""></div>
				</div>

				<!-- Choice Content -->
				<div class="col-lg-6 choice_col magic_fade_in">
					<div class="choice_content">
						<div class="section_title magic_fade_in"><h2>Why Choose us?</h2></div>
						<div class="choice_text">
							<p>Direct analysis of the data from the stackoverflow website itself providing illustrative and understandable outcomes, helping users get acquainted with the technology trends from the website, compare different techs and many more things.</p>
						</div>
						<div class="choice_list">
							<ul class="d-flex flex-row align-items-start justify-content-between">
								<li class="d-flex flex-column align-items-center justify-content-center magic_fade_in">
									<div class="choice_icon"><img src="1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
									<div class="choice_title"></div>
								</li>
								<li class="d-flex flex-column align-items-center justify-content-center magic_fade_in">
									<div class="choice_icon"><img src="2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
									<div class="choice_title"></div>
								</li>
								<li class="d-flex flex-column align-items-center justify-content-center magic_fade_in">
									<div class="choice_icon"><img src="3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
									<div class="choice_title"></div>
								</li>
								<li class="d-flex flex-column align-items-center justify-content-center magic_fade_in">
									<div class="choice_icon"><img src="4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
									<div class="choice_title"></div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer magic_fade_in">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-6 footer_col magic_fade_in">
					<div class="footer_about">
						<div class="footer_logo">Stack<span>Probe</span></div>
						
						<div class="footer_text">
							<p>We hope you enjoyed our service.<br>Any suggestions or feedbacks from your side, will be appreciated!</p>
						</div>
						<div class="contact_container">
							<form action="#" id="contact_form" class="contact_form">
								<div class="row">
									<div class="col-md-6">
										<input type="text" class="contact_input" placeholder="Your Name" required="required">
									</div>
									<div class="col-md-6">
										<input type="email" class="contact_input" placeholder="Your e-mail" required="required">
									</div>
								</div>
								<div>
									<textarea class="contact_input contact_textarea" placeholder="Message" required="required"></textarea>
								</div>
								<button class="contact_button">Send</button>
							</form>
						</div>
					</div>
				</div>

				<div class="col-lg-6 footer_col">
					<div class="footer_links">
						<div class="row">
							<div class="col-sm-6 footer_list_col magic_fade_in">
								<div class="footer_list_container">
									
							</div>
							<div class="col-sm-6 footer_list_col magic_fade_in">
								
							</div>
							<div class="col-sm-6 footer_list_col magic_fade_in">
								
							</div>
							<div class="col-sm-6 footer_list_col magic_fade_in">
								<div class="footer_list_container">
									
									
								</div>	
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>