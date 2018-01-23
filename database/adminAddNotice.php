<!DOCTYPE html>
<html>
<head>
	<title>add | information</title>

</head>
<body>
	<?php 
	if (isset($_POST["formSubmit"])) {
     
 include '../includes/config_db.php';  
$date=date('Y-m-d');
$category=$_POST['category'];
$information=$_POST['information'];

$sql= "insert into notice_tbl(notice_date,notice_category,notice_information) values('$date','$category','$information')";

$result=$conn->query($sql);

if ($result) {
	echo "information added!!";
}else{
	echo "failed to add information";
}

		
	}else{
		echo "No button clicked!!!";
	}


	?>

</body>
</html>