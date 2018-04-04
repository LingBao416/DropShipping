<?php session_start();
error_reporting(0); ?>
<?php
$user = $_POST['user'];
$password = $_POST['password'];

if(empty($user)){
echo '<div class="col-lg-12 bg-danger" style="color:red; width:154px;"><span class="glyphicon glyphicon-remove"></span> Enter user id.</div>';    
return;}

if(empty($password)){
echo '<div class="col-lg-12 bg-danger" style="color:red; width:154px;"><span class="glyphicon glyphicon-remove"></span> Enter password.</div>';    
return;}

$connection = mysqli_connect("localhost", "root", "", "project");
$SQL = mysqli_query($connection, "SELECT * FROM register WHERE uid = '".$user."' AND pw = '".$password."' ");
if($row= mysqli_fetch_array($SQL)){
    $_SESSION['uid'] = $row['uid'];  
 echo '<div class="col-lg-12 bg-success" style="color:green; width:254px;"><span class="glyphicon glyphicon-ok"></span> Welcome '.$row['uid'].'</div>';
?>
<script>
document.location = "myprofile.php";
</script>
<?php
}
 else {
   echo '<div class="col-lg-12 bg-danger" style="color:red; width:154px;"><span class="glyphicon glyphicon-remove"></span> Unable to login.</div>';    
}

echo 'Here: '.$user;