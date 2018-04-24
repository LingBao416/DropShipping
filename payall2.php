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
         
          
      <?php 
      $totalCost = $_GET['totalCost'];
$transactionID = time('s');
 
include_once './connection.php'; 
$SQLUpdate = mysqli_query($connection, "UPDATE cart SET itst = 'Paid' WHERE uid = '".$_SESSION['uid']."' ");
if(mysqli_affected_rows($connection)>0){
?>
<div class="col-lg-12" style="font-size: 27px; padding-bottom: 34px;"> 
             Transaction Status - <span style="color: #0099e5;">Successful! </span> <span>  <img src="images/received.png" style="width: 30px;"/> </span> </div>
         
         <div class="col-lg-6" style="padding-left: 0px;padding-right: 0px; border-radius: 12px; box-shadow: #000 0.0em 0.1em 0.1em 0.0em;"> 
                   <div class="col-lg-12" style="font-size: 22px;">
                       <center>    <img src="images/status.png" class="img-responsive img-circle" style="width: 67px;"/></center>
                       <br/> <center> <span style="font-size: 30px;"> $<?php echo number_format($totalCost); ?></span></center><br/>
                       Your payment of <b>$<?php echo number_format($totalCost); ?></b> is successful. <p/>
                       Your order will be delivered as soon as possible.
       <p/>     Transaction ID:    <?php echo $transactionID; ?>
       <center>
           <br/><a href="account.php"> <button class="form-control btn-info">Back to profile</button> </a></center>
             </div>
         </div>
         <div class="col-lg-6"> 
             
             
 </div>
        <div class="col-lg-12" style="padding-left: 0px; font-size: 28px; padding-bottom: 18px;">
              
             </div>
<?php  } else {
      echo '<h1 style="color: red;"> Something went wrong!'. mysqli_error($connection).' </h1>';
?>
<script>
document.location = "account.php";
</script> <?php
} ?>


     </div>

<?php include_once './footer.php'; ?>