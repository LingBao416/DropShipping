<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>umazon.com - Registry Page</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="images/logo.png" rel="shortcut icon" type="image/x-icon">
<link href="images/logo.png" rel="icon" type="image/x-icon"><!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link href="css/responsive.css" rel="stylesheet">
<link rel="stylesheet" href="css/lightGallery.css" type="text/css" media="all" />
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<style>
/* about */
.gallery{
    padding: 10px 0 60px;
}
h3.wthree_head {
    position: relative;
    text-align: center;
    font-size: 40px;
    color: #000;
    text-transform: capitalize;
    margin-bottom: 30px;
}

/* //about */





/* heading style */
.wthree_head:before, .wthree_head:after {
    position: absolute;
    background: #5ec05d;
    height: 2px;
    content: '';
    width: 12%;
}
.wthree_head:after {
    width: 17%;
    right: 42%;
    bottom: 0%;
}
i.fa.fa-scissors {
    position: absolute;
    right: 49%;
    bottom: 100%;
    color: #cc4141;
}
/* //heading style */



/*-- gallery --*/
.w3l_gallery_grid li{
	display: inline-block;
    float: left;
    width: 25%;
    padding: .3%;
}
.box {
    position: relative;
    overflow: hidden;
}

.box img {
  position: absolute;
  left: 0;
  -webkit-transition: all 300ms ease-out;
  -moz-transition: all 300ms ease-out;
  -o-transition: all 300ms ease-out;
  -ms-transition: all 300ms ease-out;
  transition: all 300ms ease-out;
}

.box .overbox {
	background-color: hsla(0, 0%, 11%, 0.6);
    position: absolute;
    top: 0;
    left: 0;
    color: #fff;
    z-index: 100;
    -webkit-transition: all 300ms ease-out;
    -moz-transition: all 300ms ease-out;
    -o-transition: all 300ms ease-out;
    -ms-transition: all 300ms ease-out;
    transition: all 300ms ease-out;
    opacity: 0;
    width: 100%;
       padding: 7em 2em 2em;
}
.box,.box .overbox {
	height: 200px;
}
.box:hover .overbox { opacity: 1; }

.box .overtext {
  -webkit-transition: all 300ms ease-out;
  -moz-transition: all 300ms ease-out;
  -o-transition: all 300ms ease-out;
  -ms-transition: all 300ms ease-out;
  transition: all 300ms ease-out;
  transform: translateY(40px);
  -webkit-transform: translateY(40px);
}

.box .title {
    color: #fff;
    padding: 12px 10px;
    border: 1px solid rgba(204, 204, 204, 0.3);
    display: block;
    font-weight: bold;
    font-size: 1.5em;
    width: 70%;
    margin: 0 auto 1em;
    background: rgba(3, 169, 244, 0.2);
    text-transform: uppercase;
    letter-spacing: 2px;
	text-align:center;
}

.box:hover .title,
.box:focus .title {
  opacity: 1;
  transform: translateY(0px);
  -webkit-transform: translateY(0px);
}

.box .tagline {
	font-size: 13px;
    line-height:1.8em;
	opacity: 0;
	transition-delay: 0.2s;
	transition-duration: 0.2s;
}

.box:hover .tagline,
.box:focus .tagline {
  opacity: 1;
  transform: translateX(0px);
  -webkit-transform: translateX(0px);
}
ul#lightGallery {
    margin-top: 2em;
}
.modal-content  img{
	width:100%;
}
.modal-content h4 {
    color: #0099e5;
    text-align: center;
    font-size: 35px;
    margin-bottom: 15px;
}
.modal-content h5 {
    color: #000;
    padding: 20px 0 6px;
    font-size: 22px;
    margin-left: 0px;
}
.modal-content p {
    color: #676464;
    font-size: 14px;
    line-height: 28px;
    letter-spacing: 0.2px;
    word-spacing: 1px;
}
.modal-header {
    min-height: 16.42857143px;
    padding: 20px 30px;
}
 .modal-dialog {
    width: 600px;
    margin: 109px auto;
}
.agileits_about_left h3 {
    text-align: left;
}
.agileits_about_left p {
    text-align: left;
}
/* gallery */


</style>
</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="30">

<div class="page-wrapper">
		<!-- Preloader -->
		<div class="preloader"></div><!-- Main Header-->
		
<nav class="navbar navbar-inverse wow bounceIn animated" id="my-navbar" style="visibility: visible; animation-name: bounceIn">

<div class="auto-container">

    <div class="navbar-header">
	
      <button type="button" class="navbar-toggle collapsed wow bounceIn animated" data-toggle="collapse" data-target="#myNavbar" style="background-color:#ffffff; border:1; border-color:#aaa">
	  
		<span class="glyphicon glyphicon-chevron-down" style="color:#222222"></span>
        </button>
	
		<a style="img-thubmnail" href="index.php"><img src="images/umazon-logo.png" align="left" alt="UMAZON.COM" width="180px" height="50px"></a>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
	
      <ul class="nav navbar-nav navbar-right navigation clearfix">
        
		
										<li style="border-left:1px solid #666666">
											<a href="category.php">Categories</a>
										</li>
										<li style="border-left:1px solid #666666">
											<a href="todaysdeal.php">Today's Deals</a>
										</li>
										<li style="border-left:1px solid #666666">
											<a href="giftcards.php">Gift Cards</a>
										</li>
										<li style="border-left:1px solid #666666">
											<a href="registry.php">Registry</a>
										</li>
										<li style="border-left:1px solid #666666">
											<a href="sell.php">Sell</a>
										</li>
										<li style="border-left:1px solid #666666">
											<a href="account.php">Account</a>
										</li>
								
									<li style="border-left:1px solid #666666">
									<a><input name="search" placeholder="Products Search" style="color:#000; width:250px; padding-left: 10px; margin-bottom: 7px;" type="search"></a>
								</li>
								<li class="search-box">
								 <a class="btn" href="#"><b><span class="glyphicon glyphicon-search" style="font-size:18px"></span></b></a>
								</li>
								<!--Cart Btn-->
								<li class="cart-btn" style="border-left:1px solid #666666">
									<a href="shopping-cart.php"><span class="icon flaticon-bag" style="font-size:18px">&nbsp; Cart</span></a>
								</li>
								
							</ul>
	  
    </div>
  </div>

</div>
</nav>
</div>
        
                   
    
    
    
     <!--breadcrumb-->
    <div class="container" style="margin-top: 30px;">
       <ul class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li class="active">Registry</li>        
        </ul>
   </div>
    <!--End Breadcrumb-->
    



<div class="container-fluid" style="padding-top:0px">

<div class="container">	

<h2 style="text-align:center; font-size:38px; color:#aaa; font-family: 'Dancing Script', Arial;">- Register with umazon -</h2>
 <br/>

	<div class="row">
        <!-- Boxes de Acoes -->
    	<div class="col-xs-12 col-sm-6 col-sm-6">
			<div style="background-color:#eeeeee; border:thin; border-style:solid; border-color:#aaa">							
				
				<div style="background-color:#eeeeee">
					<br/>
						<a href="#" target="_blank"><h5 style="color:#0066CC" align="center">Find a registrant</h5></a>
						<br/>
    					<p><a href="#" target="_blank"><img src="images/Wedding_registry_new.png" width="100%" height="auto"></a>
						</p>
					</div>

			</div> 
		</div>
			
       
			
        <div class="col-xs-12 col-sm-6 col-sm-6">
			<div style="background-color:#eeeeee; border:thin; border-style:solid; border-color:#aaa">								
									
					<div style="background-color:#eeeeee">
					<br/>
						<a href="#" target="_blank"><h5 style="color:#0066CC" align="center">Find a registrant</h5></a>
						<br/>
    					<p><a href="#" target="_blank"><img src="images/Baby_registry_new.png" width="100%" height="auto"></a>
						</p>
					</div>
				</div>

		</div>		    
		<!-- /Boxes de Acoes -->
	</div>
</div>

</div></div>
<br/><br/>


    
    <!--Contact Banner-->
    <div class="contact-banner" style="background-image:url(images/background/11.jpg);">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<div class="column col-md-6 col-sm-12 col-xs-12">
                	<h2>It's better to visit our place once</h2>
                </div>
                <div class="column col-md-6 col-sm-12 col-xs-12 text-right">
                	<a href="registry.php" class="theme-btn btn-style-one">Sell Your Products</a>
                </div>
            </div>
        </div>
    </div>
    <!--Contact Banner-->
    
    
    <!--Main Footer-->
    <footer class="main-footer">
			<div class="auto-container">
				<!--Widgets Section-->
				<div class="widgets-section">
					<div class="row clearfix">
						<!--Big Column-->
						<div class="big-column col-md-6 col-sm-12 col-xs-12">
							<div class="row clearfix">
								<!--Footer Column-->
								<div class="footer-column col-md-4 col-sm-6 col-xs-12">
									<div class="footer-widget links-widget">
										<h2>usefull links</h2>
										<div class="widget-content">
											<ul class="list">
												<li>
													<a href="index.php">Umazon.com</a>
												</li>
												<li>
													<a href="category.php">Category</a>
												</li>
												<li>
													<a href="todaysdeal.php">Today's Deal</a>
												</li>
												<li>
													<a href="giftcards.php">Gift Cards</a>
												</li>
												<li>
													<a href="registry.php">Registry</a>
												</li>
												<li>
													<a href="sell.php">Sell</a>
												</li>
												<li>
													<a href="account.php">Account</a>
												</li>
											</ul>
										</div>
									</div>
								</div><!--Footer Column-->
								
								<div class="footer-column col-md-5 col-sm-6 col-xs-12">
									<div class="footer-widget about-widget">
										<h2>Service Area</h2>
										<div class="widget-content">
											<!--Contact Info-->
											<ul class="contact-info">
												<li><span class="icon flaticon-arrows-6"></span> 789 Yonge Street City, Province,<br>
												Postal Code : Toronto, ON, M4W 2G8</li>
											<li><span class="icon flaticon-technology"></span> (289) 221-1361</li>
											<li><span class="icon flaticon-empty-email"></span> mailazeezadefarati@gmail.com</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div><!--Big Column-->
						<div class="big-column col-md-6 col-sm-12 col-xs-12">
							<div class="row clearfix">
								<!--Footer Column-->
								<div class="footer-column col-md-6 col-sm-6 col-xs-12">
									<div class="footer-widget posts-widget">
										<h2>Address</h2>
										<div class="widget-content">
											<!--Contact Info-->
											<ul class="contact-info">
												<li><span class="icon flaticon-arrows-6"></span> 789 Yonge Street City, Province,<br>
												Postal Code : Toronto, ON, M4W 2G8</li>
											<li><span class="icon flaticon-technology"></span> (289) 221-1361</li>
											<li><span class="icon flaticon-empty-email"></span> mailazeezadefarati@gmail.com</li>
											</ul>
										</div>
										<h2>Social Links</h2>
										<div class="social-icon" style="font-size: 21px; margin-top: -18px;">
											<a href="#"><span class="fa fa-facebook"></span></a>&nbsp;&nbsp;&nbsp; <a href="#"><span class="fa fa-twitter"></span></a>&nbsp;&nbsp;&nbsp; <a href="#"><span class="fa fa fa-youtube"></span></a>&nbsp;&nbsp;&nbsp; <a href="#"><span class="fa fa fa-tumblr"></span></a>
										</div>
									</div>
								</div><!--Footer Column-->
								<div class="footer-column col-md-6 col-sm-6 col-xs-12">
									<div class="footer-widget opening-widget">
										<h2>Facebook Updates</h2>
										<div class="widget-content"><img src="images/facebook.png" style="width:170px;"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Footer Bottom-->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="copyright-text">
					<p style="color:#fff !important">Umazon © 2018 All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</footer><!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>
<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- for bootstrap working -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- //for bootstrap working -->
<!-- //js -->

<!-- For Gallery js files -->
<script src="js/lightGallery.js"></script>
	<script>
    	 $(document).ready(function() {
			$("#lightGallery").lightGallery({
				mode:"fade",
				speed:800,
				caption:true,
				desc:true,
				mobileSrc:true
			});
		});
    </script>
<!-- //For Gallery js files -->



<script src="js/jquery.js">
	</script> 
	<script src="js/bootstrap.min.js">
	</script> 
	<script src="js/revolution.min.js">
	</script> 
	<script src="js/jquery.fancybox.pack.js">
	</script> 
	<script src="js/jquery.fancybox-media.js">
	</script> 
	<script src="js/owl.js">
	</script> 
	<script src="js/wow.js">
	</script> 
	<script src="js/jquery.mCustomScrollbar.concat.min.js">
	</script> 
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js">
	</script> 
	<script src="js/script.js">
	</script>

</body>
</html>