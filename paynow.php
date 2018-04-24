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
         <h2>This is the summary of what you are about to pay for</h2>
         <!--<img src="images/pay.png" class="img-responsive"/>-->
<?php
$itn = $_GET['itn'];
$itd = $_GET['itd'];
$itc = $_GET['itc'];
$itpic = $_GET['itpic']; 
$itid = $_GET['itid']; 
$itp = $_GET['itp']; 
$transid = $_GET['transid'];
$txtqty = $_GET['txtQty'];
$txtamt = $_GET['txtAmt'];
?>
         <div class="col-lg-6"> <div class="col-lg-12" style="padding-left: 0px; font-size: 16px;"><img src="<?php echo $itpic; ?>" class="img-responsive img-rounded"/></div>
         </div>
         <div class="col-lg-6"> 
             <div class="col-lg-12" style="padding-left: 0px; font-size: 28px; padding-bottom: 24px;"> <font size="3"> Item Name</font> <br/> <b><?php echo $itn; ?></b></div>
             <div class="col-lg-12" style="padding-left: 0px; font-size: 16px; padding-bottom: 18px;"><font size="3"> Item Description </font><br/><b> <?php echo $itd; ?></b></div>
             <div class="col-lg-12" style="padding-left: 0px; font-size: 16px; padding-bottom: 18px;"><font size="3"> Item Category </font> <br/><b> <?php echo $itc; ?></b></div>
             <div class="col-lg-12" style="padding-left: 0px; font-size: 28px; padding-bottom: 18px;"><font size="3"> Unit Price</font><br/><b> $<?php echo number_format($itp); ?></b></div>
             <div class="col-lg-12" style="padding-left: 0px; font-size: 28px; padding-bottom: 18px;"><font size="3"> Quantity Selected</font><br/><b> <?php echo number_format($txtqty); ?></b></div>
             <div class="col-lg-12" style="padding-left: 0px; font-size: 28px; padding-bottom: 18px;"><font size="3"> Total Cost for item(s)</font><br/><b> $<?php echo number_format($txtamt); ?></b></div>
            
             <div class="col-lg-5" style="padding-left: 0px; font-size: 28px; padding-bottom: 18px;">
                 <form method="GET" action="paymentgateway.php">
                      <input type="hidden" name="transid" value="<?php echo $transid; ?>"
                      <input type="hidden" name="itid" value="<?php echo $itid; ?>"/>
                     <input type="hidden" name="itn" value="<?php echo $itn; ?>"/>
                     <input type="hidden" name="itd" value="<?php echo $itd; ?>"/>
                     <input type="hidden" name="itc" value="<?php echo $itc; ?>"/>
                     <input type="hidden" name="itpic" value="<?php echo $itpic; ?>"/>
                     <input type="hidden" name="itp" value="<?php echo $itp; ?>"/>
                     <input type="hidden" name="txtAmt" value="<?php echo $txtamt; ?>"/>
                     <input type="hidden" name="txtQty" value="<?php echo $txtqty; ?>"/>
                     <button type="POST" class="form-control btn-warning">$ Continue to payment</button>
                 </form>    
             
             </div>
 </div>
        
<?php
 



?>

     </div>

<?php include_once './footer.php'; ?>