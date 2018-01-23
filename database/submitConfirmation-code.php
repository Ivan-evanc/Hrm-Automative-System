<?php
if (isset($_POST['submit_code'])) {
include '../includes/config_db.php';
include '../includes/config_db.php';

$code=$_POST['code'];

$code_insert="INSERT into employee_reg_tbl(confirmation_id) VALUES('$code')";
$data_submit=$connect->query($code_insert);

if ($data_submit) {
	include '../includes/notifyHeader.php';
	echo '<div class="container alert alert-info">Code '.$code.' add to the database.<br><br>
     <p><button class="btn btn-default"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Back</button></p>
	</div>';
	include '../includes/notifyFooter.php';

}else{

	include '../includes/notifyHeader.php';
	echo '<div class="alert alert-info">'.$code.' not added to the database, Contact system support!';
	include '../includes/notifyFooter.php';

}
}
?>