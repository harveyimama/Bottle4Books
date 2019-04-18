<?php 
require_once('../processors/AuthProcessor.php'); //require('../processors/featured.php');
require_once('../processors/MessageProcessor.php'); 

?>
<!doctype html>
<html class="no-js" lang="en">
    
 <!-- The php code below includes the header, sliders and menus of the website    -->
 <?php  include('includes/header.php'); ?>


 <div class="breadcrumbs-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumbs-menu">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#" class="active">About Us</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- breadcrumbs-area-end -->
		<!-- about-main-area-start -->
		<div class="about-main-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
						<div class="about-img">
							<a href="#"><img src="img/banner/WCEFboroffice.jpg" alt="boroffice" /></a>
						</div>
					</div>
					<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
						<div class="about-content">
							<h3>Who<span>We are?</span></h3>
							<p>Mellentesque faucibus dapibus dapibus. Morbi aliquam aliquet neque. Donec placerat dapibus sollicitudin. Morbi arcu nisi, mattis ut ullamcorper in, dapibus ac nunc. Cras bibendum mauris et sapien feugiat. scelerisque accumsan nibh gravida. Quisque aliquet justo elementum lectus ultrices bibendum.</p>
							<ul>
								<li><a href="#"><i class="fa fa-check"></i>Amazing wordpress theme</a></li>
								<li><a href="#"><i class="fa fa-check"></i>HTML & CSS3 build with bootstrap</a></li>
								<li><a href="#"><i class="fa fa-check"></i>Powerfull admin panel</a></li>
								<li><a href="#"><i class="fa fa-check"></i>Icon well organized & SEO optimized friendy</a></li>
								<li><a href="#"><i class="fa fa-check"></i>Iconncredible design</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- about-main-area-end -->
		<!-- our-mission-area-start -->
		<div class="our-mission-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="single-misson">
							<h3>What<span>We do?</span></h3>
							<p>Huis nostrud exerci tation ullamcorper suscipites lobortis nisl ut aliquip ex ea commodo consequat. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="single-misson">
							<h3>Our<span>Mission</span></h3>
							<p>Huis nostrud exerci tation ullamcorper suscipites lobortis nisl ut aliquip ex ea commodo consequat. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="single-misson mrg-none-xs">
							<h3>Our<span>Vision</span></h3>
							<p>Puis nostrud exerci tation ullamcorper suscipito lobortis nisl ut aliquip ex ea commodo consequat. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- our-mission-area-end -->
		<!-- counter-area-start -->
		<div class="counter-area ptb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
						<div class="single-counter text-center">
							<h2 class="counter">99</h2>
							<span>Sponsored Kids</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
						<div class="single-counter text-center">
							<h2 class="counter">180</h2>
							<span>Happy Parents</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
						<div class="single-counter text-center">
							<h2 class="counter">500</h2>
							<span>Graduates</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 hidden-sm col-xs-12">
						<div class="single-counter text-center mrg-none-sm mrg-none-xs">
							<h2 class="counter">320</h2>
							<span>Awards Earned</span>
						</div>
					</div>
				</div>
			</div>
		</div> <br> <br>
		<!-- counter-area-end -->
		<!-- team-area-start -->
		<!-- <div class="team-area ptb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="team-title text-center mb-50">
							<h2>Meet The Team</h2>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
						<div class="single-team">
							<div class="team-img-area">
								<div class="team-img">
									<a href="#"><img src="img/team/1.jpg" alt="man" /></a>
								</div>
								<div class="team-link">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="team-content text-center">
								<h3>Marcos Alonso</h3>
								<span>Class Master</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
						<div class="single-team">
							<div class="team-img-area">
								<div class="team-img">
									<a href="#"><img src="img/team/2.jpg" alt="man" /></a>
								</div>
								<div class="team-link">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="team-content text-center">
								<h3>Luis Aragones</h3>
								<span>Marketer</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
						<div class="single-team">
							<div class="team-img-area">
								<div class="team-img">
									<a href="#"><img src="img/team/3.jpg" alt="man" /></a>
								</div>
								<div class="team-link">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="team-content text-center">
								<h3>Maria Alessis</h3>
								<span>Class Master</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 hidden-sm col-xs-12">
						<div class="single-team mrg-none-xs">
							<div class="team-img-area">
								<div class="team-img">
									<a href="#"><img src="img/team/4.jpg" alt="man" /></a>
								</div>
								<div class="team-link">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="team-content text-center">
								<h3>John Doe</h3>
								<span>PHP Devloper</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- team-area-end -->
		<!-- skill-area-start -->
		
		<!-- skill-area-end -->
		<!-- footer-area-start -->
		 <?php include('includes/footer.html');?>
		<!-- footer-area-end -->
		
		
		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- wow js -->
        <script src="js/wow.min.js"></script>
		<!-- jquery.parallax-1.1.3.js -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- jquery.countdown.min.js -->
        <script src="js/jquery.countdown.min.js"></script>
		<!-- jquery.flexslider.js -->
        <script src="js/jquery.flexslider.js"></script>
		<!-- chosen.jquery.min.js -->
        <script src="js/chosen.jquery.min.js"></script>
		<!-- jquery.counterup.min.js -->
        <script src="js/jquery.counterup.min.js"></script>
		<!-- waypoints.min.js -->
        <script src="js/waypoints.min.js"></script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>


</html>
