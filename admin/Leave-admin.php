<!doctype html>
<html lang="en">
<head>
<title>LeaveForm | admin</title>
<meta charset="UTF-8">
<link href="../custom-css/custom.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">


<script type="text/javascript" src="../jquery/jquery.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>


</head>
<body class="body-panel">
<nav class="navbar navbar-inverse navbar-fixed-top nav-bar-header" id="nav">       
  <div class="container-fluid nav-bar-header">
    <div class="navbar-header nav-bar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">HRM System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../admin/Dashboard-admin.php"><i class="fa fa-users" aria-hidden="true"></i> Dashboard</a></li>
        <li><a href="../admin/Employees-admin.php"><i class="fa fa-users" aria-hidden="true"></i> Employees</a></li>
         <li class="active"><a href="#" class="common" ><i class="fa fa-question" aria-hidden="true"> Leave</i> </a></li>
         <li><a href="../admin/Report-admin.php" class="common" ><i class="fa fa-question" aria-hidden="true"> Report</i> </a></li>
         <li><a href="../public_folder/index.php" class="common" ><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br>

<div class="container alert alert-success">
  <p><span class="text-warning">Company Leave Requests</span></p>
</div>
<div class="container">



<?php
mysql_connect('localhost','root','');
mysql_select_db('resourcedb');
$queryEmpl="SELECT leave_tbl.username,leave_tbl.reason,leave_tbl.date_in,leave_tbl.date_out,leave_tbl.status FROM leave_tbl";
$recordGet=mysql_query($queryEmpl);
$value=1;
?>
<!--table for holding the fetch database data-->
  <table class="table table-striped table-hover">
    <tr>
      <th>No.</th>
      <th>Username</th>
      <th>Reason</th>
      <th>Date out</th>
      <th>Date in</th>
      <th>Status</th>
      <th>Update</th>
    </tr>
    <?php
     while ($foundPeople=mysql_fetch_assoc($recordGet)) {
      
       echo "<tr>";
        echo "<td>".$value."</td>";
       echo "<td>".$foundPeople['username']."</td>";
      echo "<td>".$foundPeople['reason']."</td>";
      echo "<td>".$foundPeople['date_in']."</td>";
         echo "<td>".$foundPeople['date_out']."</td>";
         echo "<td><span class='label label-success'>".$foundPeople['status']."</span></td>";
         $val=$foundPeople['status'];
         echo "<td><input type='text' value=".$val."></td>";
       echo "<tr>";
       $value++;
     }
    ?>

</table>











</div>
<!--create the footer div-->

<div class="container alert alert-success">
  <p class="text-center"><span style="color: black;">Copyright &copy. All rights reserved.</span></p>
</div>



</body>
</html>