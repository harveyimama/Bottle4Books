<?php 
require_once ('api/objects/project.php');
?>
</div>
<footer>
        <!-- footer-top-start -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-top-menu bb-2">
                            <nav>
                                <ul>
                                    <li><a href="index.php">home</a></li>									
                                    <li><a href="about.php">about us</a></li>
                                    <li><a href="howitworks.php">how it works</a></li>
                                    <li><a href="contact.php">contact us</a></li>
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
                                        <h3>Bottle Calculator</h3>
                                    </div>
                                    <div class="footer-mid-menu">
                                        <div class="header-search">                                                                                             
                                            <form action="#">
                                                <input type="text" id="noOfBottles" name="amount" placeholder="Enter Number of Bottles" />
                                                <br><br><input type="text" id="output" placeholder="Amount" />                                            
                                            </form>
                                        </div>                                                   
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
                            <p>Copyright © 2019 <a href="#">Chanja Datti </a>. All Right Reserved.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- footer-bottom-end -->
    </footer>
    <!-- footer-area-end -->
    <!-- Modal -->
    
    
       
    <?php 
                    $Project = new Project();
				    foreach ($projectArray as  $key) {
				        $project = $key['res'];
				        $User = new User();
				        $user = json_decode($User->getuser($project['userId']),true);
				        $plegdeArray =  $project['pledgeId']; 
	?>
	
 <div class="modal fade" id="<?=$project['id']?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
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
                                <div class="product-details-small quickview-active owl-carousel">
                                    <a class="active" href="#image-1"><img src="img/product/quickview-s4.jpg" alt="" /></a>
                                    <a href="#image-2"><img src="img/product/quickview-s2.jpg" alt="" /></a>
                                    <a href="#image-3"><img src="img/product/quickview-s3.jpg" alt="" /></a>
                                    <a href="#image-4"><img src="img/product/quickview-s5.jpg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="modal-pro-content">
                                <h3><?=$user['fullname'] ?></h3>
                                <div class="price">
                                    <span><?=number_format($project['estinatedBottles'])?> Bottles	</span>| Needed
                                </div>
                                <h2>
                                  (N <?php $ret = json_decode( $Project->getEstimatedAmount($project['estinatedBottles']),true);
                                    echo   number_format($ret['message']);
                                    ?>)
                                </h2>
                                <p><?=$project['desc']?></p>	
                                
                                <?php if(isset($_SESSION["id"])) {?>
                                <form method="POST"  action="../processors/PledgeProcessor.php">	
                                <?php }else { ?>                                
                                  <form method="POST" action="login.php">
                                	<?php }?>
                                	
                                <div class="quick-view-select">
                                    <div class="select-option-part">
                                        <label>Options</label>
                                        <select class="select" id="pledgeType" name="pledgeType">
                                            <option value="1">Anonymous</option>
                                            <option value="2">Identified</option>                                            
                                        </select>
                                    </div>
                                    
                                </div>
                               
                                    <input style="width:100px"  placeholder="bottles" type="number" id="bottles" name="bottles" required/>
                                    <input value="<?=$project['id']?>" type="hidden" id="id" name="id" />
                                    <button id = "needsLogin"  name = "needsLogin">Pledge</button>
                                </form>                               
                                <hr/>
                                <?php if(count($plegdeArray) > 0) {?>
                                 <div class="quickview-color-wrap">
                                        <label>Top Pledges</label>
                                        <p/>
                                        <div class="quickview-color">
                                            <ul>
                                            <?php  
                                            
                                            $Pledge = new Pledge(); 
                                            $totalPledged = 0;
                                            $totalRedeemed = 0;
                                            $i = 1;
                                            
                                            foreach ($plegdeArray as  $k) {                                                
                                            $pledge = json_decode( $Pledge->getPledge($k),true);
                                            $pledger  =  "Anonymous";
                                            $colour = "blue";
                                              
                                            if($i==2)
                                            {
                                                $colour = "red";
                                            }
                                            elseif ($i==3)
                                             {
                                                 $colour = "pink";
                                             }
                                             elseif ($i==4)
                                                {
                                                    break;
                                                }
                                                
                                                $i=$i+1;
                                                
                                             if($pledge['projectTypeId']!=1)
                                             {
                                                 $user = json_decode($User->getuser($pledge['adminId']),true); 
                                                 if($user['responseCode']==0)
                                                 $pledger =$user['fullname'];
                                             }
                                             
                                             $totalPledged = $totalPledged +$pledge['bottles'];
                                             
                                             if($pledge['status'] ==0)
                                                 $totalRedeemed = $totalRedeemed + $pledge['bottles'];
                                             
                                                ?>
                                                <li class="<?=$colour?>"></li><?=$pledger?> | <?=number_format($pledge['bottles'])?>
                                                <p/>
                                             <?php
                                            }
                                                 }?>
                                            </ul>
                                        </div>
                                    </div>
                                      <div class="quickview-color-wrap">
                               <div class="price"><span><?=number_format($totalPledged)?> </span>| Pledged </div> 
                               <div class="price"><span><?=number_format($totalRedeemed)?> </span>| Redeemed </div> 
                                <?php if ($totalRedeemed >= $totalPledged) { ?>
                                <span><i class="fa fa-check"></i> Target Met</span>
                                  <?php }else {?>
                                   <span><i class="fa fa-hand-pointer-o"></i> Open to Pledges</span>
                                   <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
         </div>
   </div>
             <?php  } ?>
                            <!-- single-product-end -->
                            <!-- single-product-start -->
                          
