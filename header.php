<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Sikkha</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="manifest" href="site.html">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/meanmenu.css">
	<link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>

<body>
	<!-- header-start -->
	<header id="home">
		<div class="header-area">
			<!-- header-top -->
			<div class="header-top primary-bg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-6 col-12">
							<div class="header-contact-info d-flex">
								<div class="header-contact header-contact-phone">
									<span class="ti-headphone"></span>
									<p class="phone-number">+0123456789</p>
								</div>
								<div class="header-contact header-contact-email">
									<span class="ti-email"></span>
									<p class="email-name">support@gmail.com</p>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<div class="header-social-icon-list">
								<?php
								require('config.php');
								$msel="SELECT * FROM social_media WHERE sm_id='1'";
								$Qr=mysqli_query($con,$msel);
								$social=mysqli_fetch_assoc($Qr);
								?>
								<ul>
									<?php
                                   if($social['sm_facebook']!=''){ 
									?>
									<li><a href="<?= $social['sm_facebook'];?>"><span class="ti-facebook"></span></a></li>

									<?php
										 }
									 if($social['sm_twitter']!=''){	?>
									<li><a href="<?= $social['sm_twitter'];?>"><span class="ti-twitter-alt"></span></a></li>
									<?php
										 }
									 if($social['sm_linkedin']!=''){ ?>
									<li><a href="<?= $social['sm_linkedin'];?>"><span class="ti-linkedin"></span></a></li>
									<?php
										 }
									 if($social['sm_google']!=''){	?>
									<li><a href="<?= $social['sm_google'];?>"><span class="ti-google"></span></a></li>
									<?php
										 }
									 if($social['sm_pinterest']!=''){?>
									<li><a href="<?= $social['sm_pinterest'];?>"><span class="ti-pinterest"></span></a></li>
									<?php
																	}
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /end header-top -->
			<!-- header-bottom -->
			<div class="header-bottom-area header-sticky" style="transition: .6s;">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-xl-2 col-lg-2 col-md-6 col-6">
							<div class="logo">
								<a href="index.html">
									<img src="img/logo/logo.png" alt="">
								</a>
							</div>
						</div>
						<div class="col-xl-10 col-lg-10 col-md-6 col-6">
							<div class="header-bottom-icon f-right">
								<ul>
									<li class="toggle-search-icon"><a href="#"><span class="ti-search"></span>
											<div class="toggle-search-box">
												<form action="#" id="searchbox">
													<input placeholder="Search" type="text">
													<button class="button-search"><span class="ti-search"></span></button>
												</form>
											</div>
										</a>

									</li>
									<li class="shopping-cart"><a href="#"><span class="ti-shopping-cart"></span>
											<span class="shopping-counter">0</span>
										</a></li>
								</ul>
							</div>
							<div class="main-menu f-right">
								<nav id="mobile-menu" style="display: block;">
									<ul>
										<li>
											<a href="#home">Home</a>
										</li>
										<li>
											<a href="#">PAGES</a>
											<ul class="submenu">
												<li>
													<a href="about_us.html">About Us</a>
												</li>
												<li>
													<a href="advisors.html">Advisors</a>
												</li>
												<li>
													<a href="advisors_details.html">Advisors Details</a>
												</li>
												<li>
													<a href="faq.html">FAQ</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="event.html">EVENTS</a>
											<ul class="submenu">
												<li>
													<a href="event.html">Events 01</a>
												</li>
												<li>
													<a href="event_details.html">Events Details</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="course.html">Courses</a>
											<ul class="submenu">
												<li>
													<a href="course.html">Courses</a>
												</li>
												<li>
													<a href="course_details.html">Course Details</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="blog.html">BLOG</a>
											<ul class="submenu">
												<li>
													<a href="blog.html">Blog Single</a>
												</li>
												<li>
													<a href="blog-details.html">Blog Details</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="contact.html">CONTACT</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-12">
							<div class="mobile-menu"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- /end header-bottom -->
		</div>
	</header>
	<!-- header-end -->
