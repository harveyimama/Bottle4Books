<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Bottle for Books - A Chanja Datti Initiative</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="img/fav.png">
		
		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- flexslider.css-->
        <link rel="stylesheet" href="css/flexslider.css">
		<!-- chosen.min.css-->
        <link rel="stylesheet" href="css/chosen.min.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    
    <body>
		<!-- header-area-start -->
        <header>
			<!-- header-top-area-start -->
			<div class="header-top-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="language-area">
								
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="account-area text-right">
								<ul>
								<?php if(isset($_SESSION["id"])) {?>
								<li><?=$_SESSION["name"]?></li>									
									<li><a href="logout.php?task=lo">Sign out</a></li>									
									<?php if ( $_SESSION["role"] == 1) {?>
									<li><a href="registerProject.php">new Project</a></li>
								<?php } }else{?>
								<li><a href="register.php">Register with us</a></li>									
									<li><a href="login.php" >Sign in</a></li>
								<?php }?>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- header-top-area-end -->
			<!-- header-mid-area-start -->
			<div class="header-mid-area ptb-40">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
							<div class="header-search">
                                <!-- Search form here-->
								<form action="#">
									<input type="text" placeholder="Search for a kid" />
									<a href="#"><i class="fa fa-search"></i></a>
								</form>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
							<div class="logo-area text-center logo-xs-mrg">
								<a href="index.php"><img src="img/logo/bottle-logo.png" alt="logo" /></a>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="my-cart">
								<ul>
									<!-- <li><a href="#"><i class="fa fa-gear"></i>My Profile</a> -->
										<!-- <span>2</span> -->
										<!-- <div class="mini-cart-sub">
											<div class="cart-product">
												<div class="single-cart">
													<div class="cart-img">
														<a href="#"><img src="img/product/1.jpg" alt="book" /></a>
													</div>
													<div class="cart-info">
														<h5><a href="#">Joust Duffle Bag</a></h5>
														<p>1 x £60.00</p>
													</div>
													<div class="cart-icon">
													    <a href="#"><i class="fa fa-remove"></i></a>
													</div>
												</div>
												<div class="single-cart">
													<div class="cart-img">
														<a href="#"><img src="img/product/3.jpg" alt="book" /></a>
													</div>
													<div class="cart-info">
														<h5><a href="#">Chaz Kangeroo Hoodie</a></h5>
														<p>1 x £52.00</p>
													</div>
													<div class="cart-icon">
                                                        <a href="#"><i class="fa fa-remove"></i></a>
                                                    </div>
												</div>
											</div>
											<div class="cart-totals">
												<h5>Total <span>£12.00</span></h5>
											</div>
											<div class="cart-bottom">
												<a class="view-cart" href="cart.html">view cart</a>
												<a href="checkout.html">Check out</a>
											</div>
										</div> -->
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- header-mid-area-end -->
			<!-- main-menu-area-start -->
			<div class="main-menu-area hidden-sm hidden-xs sticky-header-1" id="header-sticky">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="menu-area">
								<nav>
									<ul>
										<li class="active"><a href="index.php">Home</a>
											<!-- <div class="sub-menu">
												<ul>
													<li><a href="index-2.html">Home-2</a></li>
													<li><a href="index-3.html">Home-3</a></li>
													<li><a href="index-4.html">Home-4</a></li>
													<li><a href="index-5.html">Home-5</a></li>
													<li><a href="index-6.html">Home-6</a></li>
												</ul>
											</div> -->
										</li>
										<li><a href="about.php">About Us</a>
											
										</li>
										<li><a href="howitworks.php">How It Works</a>
											
										</li>

										<li><a href="view-all-kids.php">Sponsor a Child</a>
											
										</li>
										<li><a href="contact.php">Contact Us</a>
											
										</li>
									
										
									</ul>
								</nav>
							</div>
							<!-- <div class="safe-area">
								<a href="product-details.html">sales off</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>
			<!-- main-menu-area-end -->
			<!-- mobile-menu-area-start -->
			<div class="mobile-menu-area hidden-md hidden-lg">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="mobile-menu">
								<nav id="mobile-menu-active">
									<ul id="nav">
										<li><a href="index.php">Home</a>
											<!-- <ul>
												<li><a href="index-2.html">Home-2</a></li>
												<li><a href="index-3.html">Home-3</a></li>
												<li><a href="index-4.html">Home-4</a></li>
												<li><a href="index-5.html">Home-5</a></li>
												<li><a href="index-6.html">Home-6</a></li>
											</ul> -->
										</li>
										<li><a href="about.php">About Us</a>
											
										</li>
										<li><a href="howtiworks.php">How It Works</a>
											
										</li>
										<li><a href="view-all-kids.php">Sponsor a Child</i></a>
											
										</li>
										<li><a href="contact.php">Contact Us</a>
											
										</li>
										
										
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- mobile-menu-area-end -->
		</header>