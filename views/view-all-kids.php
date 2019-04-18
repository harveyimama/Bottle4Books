<?php
require_once ('../processors/AuthProcessor.php');

require_once ('../processors/MessageProcessor.php');
require_once ('../processors/PageProcessor.php');
require_once ('api/objects/project.php');
require_once ('api/objects/pledge.php');
?>

<!doctype html>
<html class="no-js" lang="en">

<?php

include ('includes/header.php');

$Projects = new Project();

if (isset($_SESSION['age']))
    $age = $_SESSION['age'];
else
    $age = null;
if (isset($_SESSION['cat']))
    $cat = $_SESSION['cat'];
else
    $cat = null;
if (isset($_SESSION['amt']))
    $amt = $_SESSION['amt'];
else
    $amt = null;
if (isset($_SESSION['pageNo']))
    $page = $_SESSION['pageNo'];
else
    $page = 1;

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
						<li><a href="#" class="active">Sponsor a Child</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- breadcrumbs-area-end -->
<!-- shop-main-area-start -->
<div class="shop-main-area mb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
				<div class="shop-left">
					<div class="section-title-5 mb-30">
						<h2>Project Category</h2>
					</div>

					<div class="left-menu mb-30">
						<ul>
								 <?php

        $ret = $Projects->getallcats($age, $cat, $amt, $page);

        if ($ret != null) {
            $json = json_decode($ret, true);

            if ($json["responseCode"] == 0) {
                $catArray = $json['list'];
                foreach ($catArray as $key) {
                    $c = $key["res"];
                    ?>
									<li><a href="view-all-kids.php?cat=<?=$c['id']?>"><?=$c['name']?><span>(<?=$c['value']?>)</span></a></li>
									
									<?php
                }
            }
        }
        ?>
									
								</ul>
						<hr>
					</div>
					<div class="left-title mb-20">
						<h4>Sponsor by Age</h4>
					</div>
					<div class="left-menu mb-30">
						<ul>
									 <?php

        $ret = $Projects->getallages($age, $cat, $amt, $page);

        if ($ret != null) {
            $json = json_decode($ret, true);

            if ($json["responseCode"] == 0) {
                $ageArray = $json['list'];
                foreach ($ageArray as $key) {
                    $a = $key["res"];
                    ?>
									<li><a href="view-all-kids.php?age=<?=$a['id']?>"><?=$a['name']?><span>(<?=$a['value']?>)</span></a></li>
									
									<?php
                }
            }
        }
        ?>
								
								</ul>
					</div>

					<div class="left-title mb-20">
						<h4>Sponsor by Budget</h4>
					</div>
					<div class="left-menu mb-30">
						<ul>
									 <?php

		$ret = $Projects->getallAmts($age, $cat, $amt, $page);

        if ($ret != null) {
            $json = json_decode($ret, true);

            if ($json["responseCode"] == 0) {
                $amtArray = $json['list'];
                foreach ($amtArray as $key) {
                    $am = $key["res"];
                    ?>
									<li><a href="view-all-kids.php?amt=<?=$am['id']?>"><?=$am['name']?><span>(<?=$am['value']?>)</span></a></li>
									
									<?php
                }
            }
        }
        ?>
								</ul>
					</div>

					<!-- ad banners here -->

				</div>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
				<div class="category-image mb-30">
					<a href="#"><img src="img/banner/WCEFboroffice.jpg" alt="banner" /></a>
				</div>
				<div class="section-title-5 mb-30">
					<h2>Kids' Lists</h2>
				</div>
				<div class="toolbar mb-30"></div>

				<div class="tab-content">
					<div class="tab-pane active" id="th">
						<div class="row"> 
						
						 <?php

    $ret = $Projects->getallprojects($age, $cat, $amt, $page);

    if ($ret != null) {
        $json = json_decode($ret, true);

        if ($json["responseCode"] == 0) {
            $items = 0;
            $projectArray = $json['list'];
            foreach ($projectArray as $key) {
                $project = $key["res"];
                $User = new User();

                $user = json_decode($User->getuser($project['userId']), true);

                if ($user['responseCode'] == 0) {
                    $items = $items + 1;
                    if ($items > 10)
                        break;
                    ?>
						<!-- tab-area-start -->

							<div class="col-lg-3 col-md-4 col-sm-6">
								<!-- single-product-start -->
								<div class="product-wrapper mb-40">
									<div class="product-img">
										<a href="#"> <img src="<?=$user['picture']?>" alt="book"
											class="primary" />
										</a>
										<div class="quick-view">
											<a class="action-view" href="#"
												data-target="#<?=$project['id']?>" data-toggle="modal"
												title="Quick View"> <i class="fa fa-search-plus"></i>
											</a>
										</div>
										<div class="product-flag">
											<ul>
												<li><span class="sale">new</span></li>
												<li><span class="discount-percentage">-5%</span></li>
											</ul>
										</div>
									</div>
									<div class="product-details text-center">
										<div class="product-rating">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
											</ul>
										</div>
										<h4>
											<a href="#"><?=$project['name']?></a>
										</h4>
										<div class="product-price">
											<ul>
												<li><?=number_format($project['estinatedBottles'])?> Bottles </li>
											</ul>
										</div>
									</div>
									<!-- 
                                            <div class="product-link">
                                                <div class="product-button">
                                                    <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>	
                                             -->
								</div>

							</div>



							<!-- single-product-end -->
							       <?php
                }

            }
        }
        
        $pagerange = getPageRange($page, $items);
    }
    ?>
								<!-- single-shop-end -->
						</div>
						<!-- tab-area-end -->
						<!-- pagination-area-start -->
						<div class="pagination-area mt-50">
							<div class="list-page-2">
								<p>Items <?=$pagerange ?> of <?=$items?></p>
							</div>
							<div class="page-number">
								<ul>
                        								<?php
                                $pageitems = 0;
                                while ($items > $pageitems) {
                                    $pageitems = $pageitems + 10;

                                    if ($pageitems / 10 == $page) {
                                        ?>	
                        								    							    
									<li><a href="view-all-kids?page=<?=$page?>" class="active"><?=$pageitems/10?></a></li>
									<?php
                                    } else {
                                        ?>
									<li><a href="view-all-kids?page=<?=$page?>"><?=$pageitems/10?></a></li>	
											
									<?php
                                    }
                                }
                                if ($pageitems > 40) {
                                    ?>
									<li><a href="#" class="angle"><i class="fa fa-angle-right"></i></a></li>
									<?php }?>
								</ul>
							</div>
						</div>
						<!-- pagination-area-end -->
					</div>
				</div>
			</div>
		</div>

		<!-- shop-main-area-end -->
		<!-- footer-area-start -->
        
        <?php include('includes/footer.php'); ?>
        

		<!-- footer-area-end -->
		<!-- Modal -->
		<div class="modal fade" id="productModal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"
							aria-label="Close">
							<span aria-hidden="true">x</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-5 col-sm-5 col-xs-12">
								<div class="modal-tab">
									<div class="product-details-large tab-content">
										<div class="tab-pane active" id="image-1">
											<img src="img/product/quickview-l4.jpg" alt="" />
										</div>
										<div class="tab-pane" id="image-2">
											<img src="img/product/quickview-l2.jpg" alt="" />
										</div>
										<div class="tab-pane" id="image-3">
											<img src="img/product/quickview-l3.jpg" alt="" />
										</div>
										<div class="tab-pane" id="image-4">
											<img src="img/product/quickview-l5.jpg" alt="" />
										</div>
									</div>
									<div
										class="product-details-small quickview-active owl-carousel">
										<a class="active" href="#image-1"><img
											src="img/product/quickview-s4.jpg" alt="" /></a> <a
											href="#image-2"><img src="img/product/quickview-s2.jpg"
											alt="" /></a> <a href="#image-3"><img
											src="img/product/quickview-s3.jpg" alt="" /></a> <a
											href="#image-4"><img src="img/product/quickview-s5.jpg"
											alt="" /></a>
									</div>
								</div>
							</div>
							<div class="col-md-7 col-sm-7 col-xs-12">
								<div class="modal-pro-content">
									<h3>Chaz Kangeroo Hoodie3</h3>
									<div class="price">
										<span>$70.00</span>
									</div>
									<p>Pellentesque habitant morbi tristique senectus et netus et
										malesuada fames ac turpis egestas. Vestibulum tortor quam,
										feugiat vitae, ultricies eget, tempor sit amet.</p>
									<div class="quick-view-select">
										<div class="select-option-part">
											<label>Size*</label> <select class="select">
												<option value="">S</option>
												<option value="">M</option>
												<option value="">L</option>
											</select>
										</div>
										<div class="quickview-color-wrap">
											<label>Color*</label>
											<div class="quickview-color">
												<ul>
													<li class="blue">b</li>
													<li class="red">r</li>
													<li class="pink">p</li>
												</ul>
											</div>
										</div>
									</div>
									<form action="#">
										<input type="number" value="1" />
										<button>Add to cart</button>
									</form>
									<span><i class="fa fa-check"></i> In stock</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal end -->






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
