<?php
//include the header-file for the connection to the db
if (isset($_POST['submit-info'])) {
include '../includes/config_db.php';

$code=$_POST['code'];
$user=$_POST['username'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$pass=$_POST['password'];

$confirmReg="SELECT * FROM  employee_reg_tbl where confirmation_id='$code'";
$executeData=$connect->query($confirmReg);
//$executeData=mysql_query($confirmReg);
$rowSel=$executeData->fetch_assoc();
//$rowSel=mysql_fetch_assoc($executeData);

if(!$rowSel){
	include '../includes/notifyHeader.php';
	echo '<div class="container alert alert-info">Unable to register, Kindly contact the admin</div>';
	include '../includes/notifyFooter.php';
}else{

$query="INSERT into employee_tbl(username,firstname,lastname,email,password) values('$user','$fname','$lname','$email','$pass')";

$result=$connect->query($query);
if($result){
	include '../includes/notifyHeader.php';
	echo '<div class="container alert alert-info">You have reported as '.$user.'</div>';
	include '../includes/notifyFooter.php';
}else{
	
	echo "No submitted";
}

}





}








?>