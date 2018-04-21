<?php include_once './header.php'; ?>
<?php
if($_SESSION['uid']=='admin'){} else {
       ?>
<script>
document.location = "logout.php";
</script> <?php
}
?>﻿   
<style>
    #output_image{
        
    }
    #output_image:hover{
        cursor: pointer;
        opacity: 0.5;
    }
    
</style>
     <!--breadcrumb-->
    <div class="container" style="margin-top: 30px;">
       <ul class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li class="active">You are logged in as: <?php echo $_SESSION['uid'];  ?> | <a href="logout.php"> <span class="glyphicon glyphicon-log-out" style="color: red;"> </span> Logout </a></li>        
        </ul>
        
        
        <div class="container" style="padding-left: 0px;">
       
        <div class="col-lg-6 breadcrumb " style="background-color: #fff; background-color: #efefef; padding-left: 2px; padding-bottom: 2px; padding-top: 12px; padding-right: 2px;">
            <form class="form2" action="stockitem2.php" method="POST" enctype="multipart/form-data">
            <div class="col-lg-12" style="text-align: center;"> Stock New Item</div> <br/>
        <div class="col-lg-12" style="padding-bottom: 8px; padding-top: 18px; background-color: #fff;"> <input type="text" placeholder="Item Name" name="itn" class="form-control"/> </div>
        <div class="col-lg-12" style="padding-bottom: 8px; background-color: #fff;"> <input type="text" placeholder="Item Description" name="itd" class="form-control"/> </div>
        <div class="col-lg-12" style="padding-bottom: 8px; background-color: #fff;"> 
            <select name="itc" class="form-control">
                <option value="">Select Item Category</option>
                <option value="Bags">Bags</option>
                <option value="Electronics">Electronics</option>
                <option value="Clothing">Clothing</option>
                <option value="Phone">Phone</option> 
            </select>
        </div>
        <div class="col-lg-12" style="padding-bottom: 8px; background-color: #fff;"> <input type="text" placeholder="Item Price (Number Only)" name="itp" class="form-control itp"/> </div>
        <div class="col-lg-12" style="padding-bottom: 8px; background-color: #fff;"> 
            <label style="color: #959595;">Click to add item picture<br/>
                <input type="file" id="img" class="showpic" name="file" accept="image/*" onchange="preview_image(event)" style="display: none;">
                <img id="output_image" src="images/sample.png" class="img-rounded" style="width: 188px; height: 188px;" title="Click to add picture "/> 
            </label>     
       
        </div>
        
        <div class="col-lg-12" style="padding-bottom: 8px; background-color: #fff;">
            <button type="submit" class="btnAddItem form-control btn-primary glyphicon glyphicon-upload"> Save </button> </div>
        </form>
            <div class="col-lg-12" style="padding: 12px;"> <div class="msg">  </div> </div>
    </div>
            
     <div class="col-lg-6">
         
    </div>
    </div>
        
   </div>
    <!--End Breadcrumb-->
    

<br/><br/><br/>
<div class="container" style="padding-top:10px">
</div>
    
    
<?php include_once './footer.php'; ?>