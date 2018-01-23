<!doctype html>
<html lang="en">
<head>
<title>HrEmployee | Request</title>
<meta charset="UTF-8">
<link href="../custom-css/custom.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">


<script type="text/javascript" src="../jquery/jquery.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>


</head>
<body class="body-panel" style="background-color: gray; color: blue;">
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
        <li><a href="../views/reportWork.php"><i class="fa fa-users" aria-hidden="true"></i> Employee</a></li>
        <li class="active"><a href="#" class="common" ><i class="fa fa-hand-o-right" aria-hidden="true"></i>Request</a>
        </li>
         <li><a href="../views/seekHelp.php" class="common" ><i class="fa fa-question" aria-hidden="true"></i> Help</a></li>
         <li><a href="../public_folder/index.php" class="common" ><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br>

<!--create the form for request send-->
<div class="container alert" style="background-color: green;color: black;">
  <span style="color: white"><p>Employee Leave Request</p></span>
</div>
<div class="container">
  <form method="POST" action="../database/employee-leave-request.php">
    <label>Username:</label>
    <input type="text" name="username" class="form-control" placeholder="Username..." required><br>

    <label>Date Out:</label>
    <input type="date" name="date_out" class="form-control" placeholder="Enter date out.." required><br>

    <label>Date In:</label>
    <input type="date" name="date_in" class="form-control" placeholder="Enter date in.." required><br>

    <label>Reasons:</label>
    <textarea name="reason" class="form-control" placeholder="Your reasons..." required></textarea><br>

    <!--<button type="button" class="btn btn-primary" name="submit-form">Submit</button>-->
    <!--<button type="button" class="btn btn-primary" disabled>Clear</button>-->

    <input type="submit" class="btn btn-primary" name="submit-form" value="Submit">

  </form>
</div>
</body>
</html>