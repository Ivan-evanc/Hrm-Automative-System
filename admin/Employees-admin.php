<!doctype html>
<html lang="en">
<head>
<title>Employees | admin</title>
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
        <li class="active"><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Employees</a></li>
         <li><a href="../admin/Leave-admin.php" class="common" ><i class="fa fa-question" aria-hidden="true"> Leave</i> </a></li>
         <li><a href="../admin/Report-admin.php" class="common" ><i class="fa fa-question" aria-hidden="true"> Report</i> </a></li>
         <li><a href="../public_folder/index.php" class="common" ><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br>

<div class="container-fluid alert alert-success">
<span class="text-warning">Company Employees</span>
</div>
<div class="container-fluid">
<div class="container col-sm-9">
<!--create the php for selecting the employee from the database-->
<?php
mysql_connect('localhost','root','');
mysql_select_db('resourcedb');
$queryEmpl="SELECT employee_tbl.username,employee_tbl.firstname,employee_tbl.lastname,employee_tbl.email FROM employee_tbl";
$recordGet=mysql_query($queryEmpl);
$value=1;
?>
<!--table for holding the fetch database data-->
  <table class="table table-striped table-hover">
    <tr>
      <th>No.</th>
      <th>Username</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email ID</th>
      <th>Status</th>
    </tr>
    <?php
     while ($foundPeople=mysql_fetch_assoc($recordGet)) {
      
       echo "<tr>";
        echo "<td>".$value."</td>";
       echo "<td>".$foundPeople['username']."</td>";
      echo "<td>".$foundPeople['firstname']."</td>";
      echo "<td>".$foundPeople['lastname']."</td>";
         echo "<td>".$foundPeople['email']."</td>";
         echo "<td><span class='label label-success'>Active</span></td>";
       echo "<tr>";
       $value++;
     }
    ?>

</table>
</div>
<div class="panel panel-default col-sm-3" style="background-color: white;">
  <div class="panel-heading" style="background-color: green;color:white; "><span>Employee Registration Cofirmation code:</span></div>
  <div class="panel-body">
    <form method="POST" action="../database/submitConfirmation-code.php" name="form_code">
      <label>Enter the confirmation code:</label>
      <input type="number" name="code" class="form-control" placeholder="confirmation code.."><br>

      <button class="btn btn-primary" name="submit_code">Submit code</button>
    </form>
  </div>
  
</div>
</div>

<!--create the footer div-->
<div class="container">
 <p><?php include '../includes/notifyFooter.php';?></p>
</div>

</body>
</html>