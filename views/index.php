<?php 
require_once('../processors/AuthProcessor.php'); 
require_once('../processors/MessageProcessor.php'); 
require_once ('api/objects/project.php');
require_once ('api/objects/pledge.php');
?>

<!doctype html>
<html class="no-js" lang="en">

<?php  
include('includes/header.php'); 

?>

<div class="banner-area banner-res-large ptb-35">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
							<div class="single-banner">
								<div class="banner-img">
									<a href="#"><img src="img/banner/icon1.png" alt="banner" /></a>
								</div>
								<div class="banner-text">
									<h4>First things first</h4>
									<p>Get your bottles ready</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
							<div class="single-banner">
								<div class="banner-img">
									<a href="#"><img src="img/banner/icon2.png" alt="banner" /></a>
								</div>
								<div class="banner-text">
									<h4>Second step goes</h4>
									<p>Schedule a pick up</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 hidden-sm col-xs-12">
							<div class="single-banner">
								<div class="banner-img">
									<a href="#"><img src="img/banner/icon3.png" alt="banner" /></a>
								</div>
								<div class="banner-text">
									<h4>Third Step</h4>
									<p>Choose a kid's project to sponsor</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
							<div class="single-banner mrg-none-xs">
								<div class="banner-img">
									<a href="#"><img src="img/banner/icon4.png" alt="banner" /></a>
								</div>
								<div class="banner-text">
									<h4>Forth Step</h4>
									<p>We take it up from there</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<div class="slider-area">
				<div class="slider-active owl-carousel">
					<div class="single-slider pt-125 pb-130 bg-img" style="background-image:url(img/slider/3.jpg);">
						<div class="container">
							<div class="row">
								<div class="col-md-5">
									<div class="slider-content slider-animated-1 text-center">
										<h3>Did you know</h3>
										<h3>You can send a child to school</h3>
										<h3>WITH YOUR USED BOTTLES ?</h3>
										<a href="howitworks.php">Find Out More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="single-slider slider-h1-2 pt-125 pb-130 bg-img" style="background-image:url(img/slider/2.jpg);">
						<div class="container">
							<div class="slider-content slider-content-2 slider-animated-1">
								<h3>Put a smile on the</h3>
								<h3>face of a kid today</h3>
								<h3>WITH YOUR BOTTLES!</h3>
								<a href="#">Find Out How</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		<!-- slider-area-end -->
		<!-- product-area-start -->
		<div class="product-area pt-95 xs-mb">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title text-center mb-50">
							<h4>Oprah Winfrey</h4>
							<p>â€œEducation is the key to unlocking the world, a passport to freedom.â€�</p>
						</div>
					</div>
					<div class="col-lg-12">
						<!-- tab-menu-start -->
						<div class="tab-menu mb-40 text-center">
							<ul>
								<li class="active"><a href="#Audiobooks" data-toggle="tab">Sponsor a Child</a></li>
								<!-- <li><a href="#books"  data-toggle="tab">Sponsor a Girl</a></li> -->								
							</ul>
						</div>
						<!-- tab-menu-end -->
					</div>
				</div>
				
				<div class="tab-content">
					<div class="tab-pane active" id="Audiobooks">
                        <div class="tab-active owl-carousel">
				<?php 
				
				$Projects = new Project();
				$ret = $Projects->getfeaturedprojects();
				if ($ret != null) 
				{ 
				   $json = json_decode($ret, true);  				  
				
				if($json["responseCode"]==0)
				{	
				    $projectArray = $json['list'];
				    foreach ($projectArray as  $key) {
				        $project =  $key["res"]; 
				        $User = new User();
				       
				        $user = json_decode($User->getuser($project['userId']),true);
				      
				        if ($user['responseCode'] == 0)
				        {

				?>
                             <!-- single-product-start -->
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="<?=$user['picture']?>" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-target="#<?=$project['id']?>" data-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="#"><?=$project['name']?></a></li>                                            
                                        </ul>
                                    </div>
                                    <h4><a href="#"><?=$user['fullname']?></a></h4>
                                    
                                </div>
                                	
                            </div>
                            
                  <?php 
				        }
				    }
				    ?>
                            <!-- single-product-end -->
                   </div>
                    </div>
           </div>          <!-- single-product-start -->
                          
		
		<?php }else{?>
		
		  
                        No Records Found
                        </div>
                    </div>
           </div>
		
		
		<?php } } else{?>
		
                        No Records Found
                        </div>
                    </div>
           </div>
		
		<?php }?>
		<!-- product-area-end -->
		<!-- Calulator -->        
            
		<!-- banner-area-end -->
		<!-- bestseller-area-start --> <br><br>
		<div class="bestseller-area pb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<div class="bestseller-content">
														                            
                            <p> <h1>About Bottles for Books</h1>
                            At Chanja Datti we are committed to transforming waste to value! 
                                With an increasing demand to rid our environment of non-biodegradable 
                                waste materials, we have made a commitment to making Abuja 
                                (and by extension Northern Nigeria) safer and cleaner 
                                one-recyclable-at-a-time, as we primarily focus on Plastic 
                                (PET bottles, pure water sachet, nylon bags etc.) and other waste 
                                streams such as Aluminium cans, </p>
							<div class="social-author">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="banner-img-2">
							<a href="#"><img src="img/banner/capture.png" alt="banner" /></a>
						</div>
                    </div>
                    
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="bestseller-active owl-carousel">
							<div class="bestseller-total">
                            <h1>About Chanja Datti</h1>
								<div class="single-bestseller mb-25">                                
						
							<p>At <b>Chanja Datti</b> we are committed to transforming waste to value! 
                                With an increasing demand to rid our environment of non-biodegradable 
                                waste materials, we have made a commitment to making Abuja 
                                (and by extension Northern Nigeria) safer and cleaner 
                                one-recyclable-at-a-time, as we primarily focus on Plastic 
                                (PET bottles, pure water sachet, nylon bags etc.) and other waste 
                                streams such as Aluminium cans,  </p>
							
								</div>								
                            </div>
                            
							<div class="bestseller-total">
								<div class="single-bestseller mb-25">
                                
							<p>Paper (old newspapers, old textbooks, 
                                corrugated cardboard, carton etc.), Glass bottles and Tires. 
                                Our name â€˜Chanja Dattiâ€™ is derived from the Hausa language and it 
                                means â€˜to change or transform dirtâ€™. The name reflects the fact that 
                                our company was birthed and is located in the northern part of Nigeria, 
                                and signifies our dedication to incorporating the local essence of 
                                Northern Nigeria into our company. We are passionate about providing 
                                high quality purified recycled products at very competitive prices to 
                                meet our customersâ€™ needs and expectations, giving us that competitive 
                                edge in the market.</p>
							
								</div>
								
							</div>
							
						</div>
                    </div>                    
				</div>
			</div>
        </div>   	
        
        
        
        <!-- php code that includes the page's footer -->
		<?php  include("includes/footer.php");?>
		
        <!-- Javascript code for calculator header_register_callback -->

            <script> 
                    function myFunction() {
                var loan = $('#amount').val(),
                    month = $('#months').val(),
                    int = $('#interest').val(),
                    years = $('#years').val(),
                    down = $('#down').val(),
                    amount = parseInt(loan),
                    months = parseInt(month),
                    down = parseInt(down),
                    annInterest = parseFloat(int),
                    monInt = annInterest / 1200,
                    calculation = ((monInt + (monInt / (Math.pow((1 + monInt), months) -1))) * (amount - (down || 0))).toFixed(2);
            
                document.getElementById("output").innerHTML = calculation;
            }


                $(function(){
                    var month = $(this).val(),
                    doneTypingInterval = 500,
                    months = parseInt(month),
                    typingTimer;

                $('#months').keyup(function(){
                    month = $(this).val();
                    months = parseInt(month);
                
                    clearTimeout(typingTimer);
                    if (month) {
                        typingTimer = setTimeout(doneTyping, doneTypingInterval);
                    }
                });

            function doneTyping () {
                $('#years').val(months/12);  
            }
            })

            $(function(){
                var month = $(this).val(),
                doneTypingInterval = 500,
                months = parseInt(month),
                typingTimer;

            $('#months').keyup(function(){
                month = $(this).val();
                months = parseInt(month);
            
                clearTimeout(typingTimer);
                if (month) {
                    typingTimer = setTimeout(doneTyping, doneTypingInterval);
                }
            });

            function doneTyping () {
                $('#years').val(months/12);  
            }
            })

            $(function(){
                var year = $(this).val(),
                doneTypingInterval = 500,
                years = parseInt(year),
                typingTimer;

            $('#years').keyup(function(){
                year = $(this).val();
                myears = parseInt(year);
            
                clearTimeout(typingTimer);
                if (year) {
                    typingTimer = setTimeout(doneTyping, doneTypingInterval);
                }
            });

            function doneTyping () {
                $('#months').val(year * 12);  
            }
            })
        </script>
        
   
        <!-- End of calculator function -->
		
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
