<!doctype html>
<html>
<head>
<title>User | login</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
</head>
<body>
<?php
include '../includes/config_db.php';

$email=$_POST['email'];
$password=$_POST['password'];

if ($email=='admin@gmail.com'&&$password=='admin123') {
	
	include '../admin/Dashboard-admin.php';

}else{


$query="SELECT * FROM employee_tbl WHERE email='$email' AND password='$password'";

$result=$connect->query($query);
if(!$row=$result->fetch_assoc()){
	include '../includes/notifyHeader.php';
	echo "<br><br><br><div class='container alert alert-warning'>";
	echo 'No user found in the system';
	echo "</div>";
	include '../includes/notifyFooter.php';
	// include '../public/index.php';
}
else{
	//include '../views/userClaimForm.php';
	echo "<br><br><br><div class='container alert alert-info'>";
	echo 'Welcome <span style="color:black"><u>'.$email.'</u></span> to this site';
	echo "</div>";
	include '../views/reportWork.php';

}
}
?>
</body>
</html>
