<!doctype html>
<html lang="en">
<head>
<title>HrResource | app</title>
<meta charset="UTF-8">
<link href="../custom-css/custom.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">


<script type="text/javascript" src="../jquery/jquery.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>


</head>
<body class="body-panel" style="background-color: gray;color: blue;">
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
        <li class="active"><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Registration</a></li>
         <li><a href="../public_folder/index.php" class="common" ><i class="fa fa-power-off" aria-hidden="true"></i> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br>

<!--create the header form-->
<div class="container">
  <frameset>
    <legend>Employee Registration</legend>

    <form method="POST" action="../database/employee-register.php" name="formReg">
      <label>Confirmation code:</label>
      <input type="number" name="code" class="form-control" placeholder="Enter the Confirmation code.." required><br>

      <label>Username:</label>
      <input type="text" name="username" class="form-control" placeholder="Enter the username.." required><br>

      <label>First Name:</label>
      <input type="text" name="firstname" class="form-control" placeholder="Enter the first name.." required><br>
      
      <label>Last Name:</label>
      <input type="text" name="lastname" class="form-control" placeholder="Enter the last name.." required><br>


      <label>Email ID:</label>
      <input type="email" name="email" class="form-control" placeholder="Enter the email.." required><br>

      <label>Password:</label>
      <input type="password" name="password" class="form-control" placeholder="Enter the password.." required><br>

      <button name="submit-info" class="btn btn-success">Submit</button>
      <button type="clear" class="btn btn-success">Clear</button>

      
    </form>
  </frameset>
</div>
<br>
<?php
include '../includes/notifyFooter.php';
?>


</body>
</html>