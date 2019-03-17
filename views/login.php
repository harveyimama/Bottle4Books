<!doctype html>
<html class="no-js" lang="en">

<?php 
include('includes/login_active.html');
include('processors/LoginProcessor.php');
?>


<div class="breadcrumbs-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumbs-menu">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#" class="active">login</a></li>
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
							<h2>Login</h2>
							<p>doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo<br>inventore veritatis et quasi architecto beat</p>
						</div>
					</div>
					<div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-12 col-xs-12">
						<form method="POST">
						<div class="login-form">
							<div class="single-login">
								<label>Username or email<span>*</span></label>
								<input type="text" name="admname" />
							</div>
							<div class="single-login">
								<label>Passwords <span>*</span></label>
								<input type="password" name="admpass"/>
							</div>
							<div class="single-login single-login-2">
								<input type="submit" name="admlogin">login</a>
								<input id="rememberme" type="checkbox" name="rememberme" value="forever">
								<span>Remember me</span>
							</div>
							<a href="#">Lost your password?</a>
						</div>
						</form>
					</div>
				</div>
			</div>
        </div>
        
        <?php include('includes/footer.html'); ?>

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