<?php 
require('../processors/AuthProcessor.php'); //require('../processors/featured.php');
require('../processors/MessageProcessor.php'); 
?>

<!doctype html>	
<html class="no-js" lang="en">

<?php  include('includes/header.php'); 
?>
    
		<!-- header-area-end -->
		<!-- breadcrumbs-area-start -->
		<div class="breadcrumbs-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumbs-menu">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#" class="active">register</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs-area-end -->
		<!-- user-login-area-start -->
		<div class="user-login-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="login-title text-center mb-30">
							<h2>Register New Project</h2>
						</div>
					</div>
					
						
						<div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
						<div class="billing-fields">
						<form method="POST" action="../processors/RegistrationProcessor.php"  enctype="multipart/form-data">	
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="single-register">																	
									<label class="btn btn-default btn-sm center-block btn-file">
  									 <i class="fa fa-upload fa-2x" aria-hidden="true"> Upload Photo </i>                
  									<input type="file" name="photo" id="photo" style="display: none;">
									</label>															
									</div>
								</div>
								
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									
								</div>
							</div>	
							<br/>
							<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="single-register">								
									<label>Project Type	<span>*</span></label>
									<Select name="project_type" id="project_type" required>	
											<option value=1>Education</option>
											<option value=2>Health</option>
											<option value=3>Other</option>
											</Select>								
							</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
							<div class="single-register">								
									<label>Project Title	<span>*</span></label>
									<input  type="text"  id="project_title" name="project_title" required/>								
							</div>							
							</div>
							</div>					
							<div class="single-register">									
									<label>Project Description<span>*</span></label>
									<Textarea  id="project_desc"  name="project_desc"   required></Textarea>								
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="single-register">																	
											<label>Project Cost<span>*</span></label>
											<input type="text" name="project_cost" id="project_cost"  required/>																			
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="single-register">																	
											<label>Project Due Date<span>*</span></label>
											<input type="date" id="project_duedate"  name="project_duedate"  required/>																			
									</div>
								</div>
							</div>		
							<hr/>
							<div class="single-register">								
									<label>Benficiary Name<span>*</span></label>
									<input  type="text"  id="beneficiary_name" name="beneficiary_name" required/>								
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="single-register">																	
											<label>Benficiary Dob<span>*</span></label>
											<input type="date" name="beneficiary_dob"   id="beneficiary_dob"  required/>																			
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="single-register">										
											<label>Benficiary Gender<span>*</span></label>
											<Select name="beneficiary_gender" id="beneficiary_gender" required>	
											<option value=1>Male</option>
											<option value=2>Female</option>
											</Select>						
									</div>
								</div>
							</div>												
							<div class="single-register">									
									<label>Benficiary Address<span>*</span></label>
									<Textarea  name="beneficiary_address"  id="beneficiary_address" required></Textarea>								
							</div>
							
							<br/><br/>
							<div class="single-register">								
								<input type="submit" name="reg" id ="reg" value="Register"/>								
							</div>
							
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- user-login-area-end -->
		<!-- footer-area-start -->
		<footer>
			<!-- footer-top-start -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="footer-top-menu bb-2">
								<nav>
									<ul>
										<li><a href="#">home</a></li>
										<li><a href="#">Enable Cookies</a></li>
										<li><a href="#">Privacy and Cookie Policy</a></li>
										<li><a href="#">contact us</a></li>
										<li><a href="#">blog</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-top-start -->
			<!-- footer-mid-start -->
			<div class="footer-mid ptb-50">
				<div class="container">
					<div class="row">
				        <div class="col-lg-8 col-md-8 col-sm-12">
				            <div class="row">
				                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-footer br-2 xs-mb">
                                        <div class="footer-title mb-20">
                                            <h3>Products</h3>
                                        </div>
                                        <div class="footer-mid-menu">
                                            <ul>
                                                <li><a href="about.html">About us</a></li>
                                                <li><a href="#">Prices drop </a></li>
                                                <li><a href="#">New products</a></li>
                                                <li><a href="#">Best sales</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-footer br-2 xs-mb">
                                        <div class="footer-title mb-20">
                                            <h3>Our company</h3>
                                        </div>
                                        <div class="footer-mid-menu">
                                            <ul>
                                                <li><a href="contact.html">Contact us</a></li>
                                                <li><a href="#">Sitemap</a></li>
                                                <li><a href="#">Stores</a></li>
                                                <li><a href="register.html">My account </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-footer br-2 xs-mb">
                                        <div class="footer-title mb-20">
                                            <h3>Your account</h3>
                                        </div>
                                        <div class="footer-mid-menu">
                                            <ul>
                                                <li><a href="contact.html">Addresses</a></li>
                                                <li><a href="#">Credit slips </a></li>
                                                <li><a href="#"> Orders</a></li>
                                                <li><a href="#">Personal info</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
				            </div>
				        </div>
				        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="single-footer mrg-sm">
                                <div class="footer-title mb-20">
                                    <h3>STORE INFORMATION</h3>
                                </div>
                                <div class="footer-contact">
                                    <p class="adress">
                                        <span>My Company</span>
                                        42 avenue des Champs Elysées 75000 Paris France
                                    </p>
                                    <p><span>Call us now:</span> (+1)866-540-3229</p>
                                    <p><span>Email:</span>  support@hastech.com</p>
                                </div>
                            </div>
				        </div>
					</div>
				</div>
			</div>
			<!-- footer-mid-end -->
			<!-- footer-bottom-start -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row bt-2">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="copy-right-area">
								<p>Copyright ©<a href="#">Koparion</a>. All Right Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="payment-img text-right">
								<a href="#"><img src="img/1.png" alt="payment" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-bottom-end -->
		</footer>
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

<!-- Mirrored from demo.devitems.com/koparion-v2/koparion/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Feb 2019 15:22:31 GMT -->
</html>
