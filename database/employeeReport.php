<?php
//include the header-file for the connection to the db
if (isset($_POST['submit_data'])) {
include '../includes/config_db.php';

$user=$_POST['username'];
$date_report=$_POST['date_of_report'];
$time_in=$_POST['time_check_in'];
$time_out=$_POST['time_check_out'];

$confirmUser="SELECT * from employee_tbl where username='$user'";
$executeUser=$connect->query($confirmUser);
$checkUser=$executeUser->fetch_assoc();
if(!$checkUser){
	include '../includes/notifyHeader.php';
	echo '<div class="container alert alert-info">Unable to report, Kindly contact the admin</div>';
	include '../includes/notifyFooter.php';

}else{


$query="INSERT into workreport_tbl(username,date_report,time_in) values('$user','$date_report','$time_in')";

$result=$connect->query($query);
if($result){
	include '../includes/notifyHeader.php';
    echo '<div class="container alert alert-info"><p>'.$user.' have reported successfully</p>
      <p>NOTE:Remember to report out of work before leaving</p>
    </div>';
	include '../includes/notifyFooter.php';
}else{
    //update the time_out after checking if the user is part of the employee
	$updateTime="UPDATE workreport_tbl set time_out='$time_out' where username='$user'";
	$result2=$connect->query($updateTime);
	if($result2){
	include '../notification-panel/employee-report-notify-panel.php';
	include '../includes/notifyFooter.php';

	}else{
	include '../includes/notifyHeader.php';
	echo '<div class="container alert alert-info">The username is duplicated,try different username</div>';
	include '../includes/notifyFooter.php';

	}

	
}


}





}








?>