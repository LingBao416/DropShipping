<?php session_start(); ?>
<?php
$uID = $_POST['uID'];
$em = $_POST['em'];
$pw = $_POST['pw'];
$ph = $_POST['ph'];

if(empty($uID)){
    echo '<div class="col-lg-12 bg-danger" style="color:red; width:154px;"><span class="glyphicon glyphicon-remove"></span> Enter user id</div>';
    return;
}

if(empty($em)){
    echo '<div class="col-lg-12 bg-danger" style="color:red; width:154px;"><span class="glyphicon glyphicon-remove"></span> Enter email address</div>';
    return;
}

if(empty($pw)){
    echo '<div class="col-lg-12 bg-danger" style="color:red; width:154px;"><span class="glyphicon glyphicon-remove"></span> Enter password</div>';
    return;
}

if(empty($ph)){
    echo '<div class="col-lg-12 bg-danger" style="color:red; width:154px;"><span class="glyphicon glyphicon-remove"></span> Enter mobile number</div>';
    return;
}

include_once './connection.php';

$SQLCheckUser = mysqli_query($connection, "SELECT * FROM register WHERE uid = '".$uID."' ");
if($row = mysqli_fetch_array($SQLCheckUser)){
echo '<div class="col-lg-12 bg-danger" style="color:red; width:100%;"><span class="glyphicon glyphicon-remove"></span> User id <b>'.$uID.'</b> already exists. Choose another one.</div>';       
return;
}
$SQL = "INSERT INTO register (uid,em,pw,ph) VALUES('".$uID."','".$em."','".$pw."','".$ph."')";
mysqli_query($connection, $SQL);
if(mysqli_affected_rows($connection)>0){
echo '<div class="col-lg-12 bg-success" style="color:green; width:254px;"><span class="glyphicon glyphicon-ok"></span> you have signed up successfully</div>';
 $_SESSION['uid'] = $uID; 
?>
<script>
document.location = "myprofile.php";
</script>
<?php

}
 else {
   echo '<div class="col-lg-12 bg-danger" style="color:red; width:154px;"><span class="glyphicon glyphicon-remove"></span> Unable to sign up.</div>';    
}
