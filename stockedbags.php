<?php 
                            include_once './connection.php';
                            $SQLQuery = mysqli_query($connection, "SELECT * FROM item WHERE itc = 'Bags' ");
                            while ($row = mysqli_fetch_array($SQLQuery)){
                                ?> 
                            <div class="col-lg-4 hoverDIVtoday" style="padding-bottom: 38px; padding-left: 0px; padding-right: 0px;"> 
                                <div class="col-lg-12" style="padding-left: 0px; padding-right: 0px;">
                                    <center>         <img src="<?php echo $row['itpic'];?>" style="width: 280px; height: 250px;" class="img-rounded"/> </center>
                                </div> 
                                <div class="col-lg-12" style="padding-left: 0px; padding-right: 0px; text-align: center; font-size: 25px;"><?php echo $row['itn'];?> </div>  
                                <div class="col-lg-12" style="padding-left: 0px; padding-right: 0px; text-align: center;"><?php echo $row['itd'];?> </div>  
                                <div class="col-lg-12" style="padding-left: 0px; padding-right: 0px; text-align: center;"><?php echo $row['itc'];?> </div>  
                                <div class="col-lg-12" style="padding-left: 0px; padding-right: 0px; text-align: center;">$<?php echo $row['itp'];?> </div> 
                                <div class="col-lg-12" style="padding-left: 0px; padding-right: 0px; text-align: center;">
                                    <a href="itemdetails.php?itid=<?php echo $row['itid']; ?>">    <button class="btn-sm btn-warning">Order Now</button> </a>
                                </div>  
                            </div>

 <?php
                            }
                            
                            ?>