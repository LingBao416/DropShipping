<?php include_once './header.php'; ?>


<script>


	$(document).ready(function(){
	 var $content1 = $(".content1").hide();
	 $('.fa1').on('click', function() {
	 $(this).toggleClass('fa fa-minus-square').toggleClass('fa fa-plus-square'); // toggle our classes for the eye icon
	 $content1.slideToggle();
	 
	 });

	 var $content2 = $(".content2").hide();
	 $('.fa2').on('click', function() {
	 $(this).toggleClass('fa fa-minus-square').toggleClass('fa fa-plus-square'); // toggle our classes for the eye icon
	 $content2.slideToggle();
	 
	 });

	  var $content3 = $(".content3").hide();
	 $('.fa3').on('click', function() {
	 $(this).toggleClass('fa fa-minus-square').toggleClass('fa fa-plus-square'); // toggle our classes for the eye icon
	 $content3.slideToggle();
	 
	 });

	  var $content4 = $(".content4").hide();
	 $('.fa4').on('click', function() {
	 $(this).toggleClass('fa fa-minus-square').toggleClass('fa fa-plus-square'); // toggle our classes for the eye icon
	 $content4.slideToggle();
	 
	 });

	  var $content5 = $(".content5").hide();
	 $('.fa5').on('click', function() {
	 $(this).toggleClass('fa fa-minus-square').toggleClass('fa fa-plus-square'); // toggle our classes for the eye icon
	 $content5.slideToggle();
	 
	 });

	  var $content6 = $(".content6").hide();
	 $('.fa6').on('click', function() {
	 $(this).toggleClass('fa fa-minus-square').toggleClass('fa fa-plus-square'); // toggle our classes for the eye icon
	 $content6.slideToggle();
	 
	 });

	  var $content7 = $(".content7").hide();
	 $('.fa7').on('click', function() {
	 $(this).toggleClass('fa fa-minus-square').toggleClass('fa fa-plus-square'); // toggle our classes for the eye icon
	 $content7.slideToggle();
	 
	 });

	  var $content8 = $(".content8").hide();
	 $('.fa8').on('click', function() {
	 $(this).toggleClass('fa fa-minus-square').toggleClass('fa fa-plus-square'); // toggle our classes for the eye icon
	 $content8.slideToggle();
	 
	 });

	  var $content9 = $(".content9").hide();
	 $('.fa9').on('click', function() {
	 $(this).toggleClass('fa fa-minus-square').toggleClass('fa fa-plus-square'); // toggle our classes for the eye icon
	 $content9.slideToggle();
	 
	 });
	});
	</script>
			
			
			<div class="container" style="margin-top: 30px;">
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a>
<li class="active">You are logged in as: <?php echo $_SESSION['uid'];  ?> | <a href="logout.php"> <span class="glyphicon glyphicon-log-out" style="color: red;"> </span> Logout </a></li>        
<li class="active">Category - <b>Bags</b></li>
				</ul>
			</div><!--Sidebar Page / Shop Container-->
			<div class="sidebar-page-container left-side-bar" style="margin-top: -55px;">
				<div class="auto-container">
					<div class="row clearfix">
						<!--Content Side-->
						<div class="content-side col-lg-10 col-md-8 col-sm-12 col-xs-12 pull-right">
<!--                                                    <h3>Electronics</h3>-->
                           
                        <?php include_once './stockedbags.php';?>
                                                    

                                                    
						</div>
                                                
                                                
                                                
                                                <!--Content Side-->
						<!--Sidebar-->
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 pull-left">
							<aside class="sidebar">
								<!-- Search Form -->
<!--								<div class="sidebar-widget search-box">
									<form action="blog.php" method="post">
										<div class="form-group">
							<input name="search-field" placeholder="Search Product" type="search" value="">
                                                        <button type="submit"><span class="icon flaticon-magnifying-glass-1"></span></button>
										</div>
									</form>
								</div>
                                                                -->
                                                                <!-- Recent Articles -->
								<div class="sidebar-widget recent-articles wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
									<div class="sidebar-title">
										<h2>Categories</h2>
									</div>
									<ul class="list">
										
                                                                            <?php include_once './connection.php';
                                                                            $sqlQuery = mysqli_query($connection, "SELECT DISTINCT itc FROM item "); 
                                                                            while ($row = mysqli_fetch_array($sqlQuery)){
                                                                                ?>
                               <li> <a href="<?php if($row['itc']==="Bags"){
     echo 'bags.php';
                               } else if($row['itc']==="Clothing"){
     echo 'clothing.php';
                               }else if($row['itc']==="Electronics"){
     echo 'electronics.php';
                               }  ?> " title="<?php echo $row['itc']; ?>"><?php echo $row['itc']; ?></a> </li>
                                                                            <?php
                                                                            }
                                                                            ?>
<!--                                                                            
                                                                            <li>
											<a href="#">All</a>
										</li>
										<li>
											<a href="#">Sari</a>
										</li>
										<li>
											<a href="#">Men Clothings</a>
										</li>
										<li>
											<a href="#">Women Clothings </a>
										</li>
										<li>
											<a href="#">Dress</a>
										</li>
										<li>
											<a href="#">Mobile</a>
										</li>
										<li>
											<a href="#">Sweet</a>
										</li>
										<li>
											<a href="#">Dessert</a>
										</li>-->
									</ul>
								</div><!-- Price Filters -->
								<!-- Popular Posts -->
								<div class="sidebar-widget popular-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
									<div class="sidebar-title">
										<h2>Top Rated</h2>
									</div>
                                                                    
                                                                        
                                                                            <?php include_once './connection.php';
                          $sqlQuery2 = mysqli_query($connection, "SELECT DISTINCT * FROM cart LIMIT 6"); 
                                                                            while ($row = mysqli_fetch_array($sqlQuery2)){
                                                                                ?><article class="post">
                                                                        <!--<div class="col-xs-12">-->
                                                                        <figure class="post-thumb">   <img src="<?php echo $row['itpic']; ?>" style="padding-bottom: 5px;"/>
                                                                            <a href="itemdetails.php?itid=<?php echo $row['itid']; ?>">  
                                                                                <button class="form-control btn-warning" style="font-size: 10px;">Order Now</button> </a>     
                                                                         </figure>
                                                                        <h4><?php echo $row['itn']; ?></h4>
										<div class="post-price">
                                                                                    <b>   <?php echo '$'. $row['itp']; ?></b>
											<!--$ 90.00 <span class="discount">$100</span>-->
										</div></article>
 <?php
                                                                            }
                                                                            ?>
                                                                <!--</div>-->
                                                                        
										
											 
										
									
<!--									<article class="post">
										<figure class="post-thumb">
											<a href="#"><img alt="" src="images/resource/post-thumb-4.jpg"></a>
										</figure>
										<h4><a href="#">Mexican Cuisine</a></h4>
										<div class="post-price">
											$ 90.00 <span class="discount">$100</span>
										</div>
									</article>
									<article class="post">
										<figure class="post-thumb">
											<a href="#"><img alt="" src="images/resource/post-thumb-5.jpg"></a>
										</figure>
										<h4><a href="#">House Market Indicators</a></h4>
										<div class="post-price">
											$ 80.00 <span class="discount">$100</span>
										</div>
									</article>
									<article class="post">
										<figure class="post-thumb">
											<a href="#"><img alt="" src="images/resource/post-thumb-6.jpg"></a>
										</figure>
										<h4><a href="#">Is Condo Life For You?</a></h4>
										<div class="post-price">
											$ 75.00 <span class="discount">$100</span>
										</div>
									</article>-->
								</div>
							</aside>
						</div><!--Sidebar-->
					</div>
				</div>
			</div>
			
	
                        
                        <?php include_once './footer.php'; ?>