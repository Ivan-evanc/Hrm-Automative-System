<?php
if (isset($_POST['submit-form'])) {
//connection to the server
include '../includes/config_db.php';

$user=$_POST['username'];
$status="Pending";

$date_out=$_POST['date_out'];
//$da_out=date_create($date_out);
//$date_out_format=date_format($da_out,"Y-m-d");

$date_in=$_POST['date_in'];
//$da_in=date_create($date_in);
//$date_in_format=date_format($da_in,"Y-m-d");

$reason=$_POST['reason'];

$confirmUser="SELECT * from employee_tbl where username='$user'";
$executeUser=$connect->query($confirmUser);
$checkUser=$executeUser->fetch_assoc();
if(!$checkUser){
	include '../includes/notifyHeader.php';
	echo '<div class="container alert alert-info">Wrong username, Kindly contact the admin</div>';
	include '../includes/notifyFooter.php';

}else
{
$query_data_insert="INSERT INTO leave_tbl(username,reason,date_in,date_out,status) values('$user','$reason','$date_in','$date_out','$status')";

$result1=$connect->query($query_data_insert);
//$result1=mysql_query($query_data_insert);
if($result1){
	include '../includes/notifyHeader.php';
    echo '<div class="container alert alert-info">'.$user.' Leave request send successful!!!..Kindly wait for feedback.</div>';
	include '../includes/notifyFooter.php';
}else{
    //if request failed to be sent
	include '../includes/notifyHeader.php';
	echo '<div class="container alert alert-info"> '.$user.' is unable to request for leave.Kindly contact the admin.</div>';
	include '../includes/notifyFooter.php';	
}
}
}
?>