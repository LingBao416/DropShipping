<?php  session_start();
 error_reporting(0);?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
        <title>umazon.com <?php if ($_SESSION['uid'] !=''){    echo ' - You are logged in as: '. $_SESSION['uid']; } ?></title>
<!-- Stylesheets -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/revolution-slider.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="images/logo.png" rel="shortcut icon" type="image/x-icon">
	<link href="images/logo.png" rel="icon" type="image/x-icon"><!-- Responsive -->
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="dist/zoomslider.css" rel="stylesheet" type="text/css">
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/bootstrap-touch-slider.css" rel="stylesheet">
	<script src="js/modernizr-2.6.2.min.js" type="text/javascript">
	</script><!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

	<style>
	   .btnn
	   {
	   border-radius: 3px;
	   text-transform: uppercase;
	   padding: 10px 20px;
	   height: 40px;
	   color: #000;
	   background-color: #fbd020;
	   border-color: #fbd020;
	   margin-right: 30px;
	   margin-top: 40px;
	   float: right;
	   }
	.buttn
	{
	   height: 24px;
	   margin-top: -2px;
	   color: white !important;
	   border-radius: 0px;
	   text-align: center;
	   padding-top: 2px;
	   background-color: #feb518;
	   border: 0px solid transparent;
	   margin-left: 5px;
	}
	.buttn:hover
	{
	   color:black !important;
	   background-color:#fbb51f;
	}
	div.description{
	   position:relative; /* absolute position (so we can position it where we want)*/
	   bottom:0px; /* position will be on bottom */
	   /*left:16px;
	   right: 15px;*/
	   /*width:100%;*/
	   /* styling bellow */
	   background-color:black;
	   color:white;
	   opacity:0.6; /* transparency */
	   filter:alpha(opacity=60); /* IE transparency */
	}
	h4.description_content{
	   padding:10px;
	   margin:0px;
	   
	   text-align:center;
	}

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
        
		<?php if($_SESSION['uid'] == 'admin'){
									?>	<li style="border-left:1px solid #666666">
                                                                                    <a href="stockitem.php">Stock</a>
										</li>
                                                                                        <?php } ?>
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
<!--										<li style="border-left:1px solid #666666">
											<a href="sell.php">Sell</a>
										</li>-->
										<li style="border-left:1px solid #666666">
											<a href="account.php">Account</a>
										</li>
								
									<li style="border-left:1px solid #666666; padding-top: 7px;">
       
         <form name="formSearch" class="formSearch" id="formSearch" method="POST" action="search.php">     
           <input name="search" class="form-control txtSearch" placeholder="Products Quick Search" style="color:#000; width:250px; padding-left: 10px; margin-bottom: 0px;">
        </form>
                                                                            <ul class="col-lg-12 search" style="background-color: #fff; border-radius: 0px 0px 6px 6px; position: absolute; display: none; padding: 0px; box-shadow: #000 0.0em 0.2em 0.1em 0.0em;">
          </ul>
                                                                        
                                                                        </li>
<!--		<li class="search-box">
		 <a class="btn" href="#"><b><span class="glyphicon glyphicon-search" style="font-size:15px;"></span></b></a>
		</li>-->
		<?php $itVart =NULL; ?>						<!--Cart Btn-->
<li class="cart-btn" style="border-left:1px solid #666666">
<!--    <a href="myprofile.php" title="<?php //echo $hhh; ?>"><span class="icon flaticon-bag"> 
        <span class="badge" style="font-size:10px; color: #ff3333; background-color: #000;
              box-shadow: #ff3333 0.0em 0.0em 0.3em 0.1em; border-radius: 3180px;"> -->
        <?php
        include_once './connection.php'; 
        $SQLQuery = mysqli_query($connection, "SELECT SUM(txtamt) AS 'cost', SUM(txtqty) AS 'totalCart' FROM cart where uid = '".$_SESSION['uid']."' AND itst = 'Not Paid' ");
    
        while($rowCart = mysqli_fetch_array($SQLQuery)){
            $itVart=$rowCart['totalCart'];
            if($itVart == 1){
             echo '<a href=myprofile.php title="You have '.$itVart.' item in your cart. Total cost is $'.number_format($rowCart['cost']).'"><span class="icon flaticon-bag"> 
        <span class="badge" style="font-size:10px; color: #ff3333; background-color: #000;
              box-shadow: #ff3333 0.0em 0.0em 0.3em 0.1em; border-radius: 3180px;">'. number_format($rowCart['totalCart']);  
        }else if($itVart > 1){
             echo '<a href=myprofile.php title="You have '.$itVart.' items in your cart. Total cost is $'.number_format($rowCart['cost']).'"><span class="icon flaticon-bag"> 
        <span class="badge" style="font-size:10px; color: #ff3333; background-color: #000;
              box-shadow: #ff3333 0.0em 0.0em 0.3em 0.1em; border-radius: 3180px;">'. number_format($rowCart['totalCart']);  
        }
 else {
     ?>
    <a href="myprofile.php"<span class="icon flaticon-bag">  
    
        <?php } }?>
     
 
        
            
        
        
        </span> 
              Cart
    </span></a>
</li>
								
							</ul>
	  
    </div>
  </div>
 
</nav>
</div>
    
      