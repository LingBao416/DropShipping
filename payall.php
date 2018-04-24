<?php include_once './header.php'; ?>
<?php if($_SESSION['uid']==''){
    ?>
<script>
document.location = "account.php";
</script> <?php
}
?>﻿

                   
<style>
    .hv{
       background-color: #e0e0e0; padding-top: 15px; padding-bottom: 15px;
       padding-left: 1px;
    }
    .hv2{
        background-color: #efeeee; padding-top: 15px; padding-bottom: 15px;
        padding-left: 1px;
    }
    .hv:hover{
        background-color: #d4d4d4;
    }
    .hv2:hover{
        background-color: #c8c8c8;
    }
</style>
    
    
     <!--breadcrumb-->
    <div class="container" style="margin-top: 30px;">
       <ul class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li class="active">You are logged in as: <?php echo $_SESSION['uid'];  ?> | <a href="logout.php"> <span class="glyphicon glyphicon-log-out" style="color: red;"> </span> Logout </a></li>        
        </ul>
   </div>
     <div class="container">
         <h2>Integrated Payment Gateway System</h2>
         <img src="images/pay.png" class="img-responsive"/>
<?php
//$itn = $_GET['itn'];
//$itd = $_GET['itd'];
//$itc = $_GET['itc'];
//$itpic = $_GET['itpic']; 
//$itid = $_GET['itid']; 
//$itp = $_GET['itp']; 
//$transid = $_GET['transid'];
$totalCost = $_GET['totalCost'];
?>
<div class="col-lg-6" style="padding-left: 0px;padding-right: 0px; border-radius: 12px; box-shadow: #000 0.0em 0.1em 0.1em 0.0em;"> 
                  
                 <div class="col-lg-12" style="background-color: #e0e0e0; padding-top: 5px; padding-bottom: 5px;">Pay Invoice</div>
                 <div class="col-lg-12" style="padding-left: 0px; padding-right: 0px;padding-bottom: 10px;"> <img src="images/card.png"/></div>  
                 <div class="col-lg-12">You will be debited<b> <?php echo '$'.number_format($totalCost); ?></b> </div>  
                 <div class="col-lg-12" style="padding-bottom: 10px;"> Name on card<br/><input type="text" name="cname" class="form-control" placeholder="Enter the name on your card"/></div>  
                 <div class="col-lg-12" style="padding-bottom: 10px;"> Card Number<br/><input type="text" name="cnum" class="form-control" placeholder="Enter your card number"/></div>  
                
                 <div class="col-lg-7" style="padding-bottom: 10px;">Card expiry date <br/><input type="text" name="expd" class="form-control" placeholder="Enter your card expiry date"/></div>  
                 <div class="col-lg-5" style="padding-bottom: 10px;">Security code <br/><input type="password" name="secc" class="form-control" placeholder="Enter card security code"/></div>  
                
                 
                 <div class="col-lg-12" style="padding-bottom: 10px;">
                     
                     <form method="GET" action="payall2.php">
                         <input type="hidden" name="totalCost" value="<?php echo $totalCost ; ?>"/>
<!--                         <input type="hidden" name="itid" value="<?php echo $itid ; ?>"/>
                         <input type="hidden" name="itp" value="<?php echo $itp ; ?>"/>-->
                         <button class="form-control btn-info" onclick="return confirm('Are you sure you want to continue this process?');">$ Pay</button>
                 
                 
             </form> </div>  
                 
                 <div class="col-lg-12" style="background-color: #e0e0e0; padding-top: 5px; padding-bottom: 5px;"></div>
                 
            
         </div>
         <div class="col-lg-6"> 
             
             <div class="col-lg-2" style="padding-left: 0px; font-size: 28px; padding-bottom: 18px;">
            
             </div> 
 </div>
         <div class="col-lg-12" style="height: 52px;"></div>
        
<?php
 



?>

     </div>

<?php include_once './footer.php'; ?>