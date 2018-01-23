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
        <li class="active"><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Employee</a></li>
        <li><a href="../views/employeeRequest.php" class="common" ><i class="fa fa-hand-o-right" aria-hidden="true"></i>Request</a>
        </li>
         <li><a href="../views/seekHelp.php" class="common" ><i class="fa fa-question" aria-hidden="true"></i> Help</a></li>
         <li><a href="../public_folder/index.php" class="common" ><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br>
<div class="container">
  <frameset class="form-group">
    <legend>Check in</legend>
    <form method="POST" action="../database/employeeReport.php">

      <label>Username:</label>
      <input type="text" name="username" class="form-control" placeholder="Enter your username.." required><br>

      <label for="date">Date report:</label>
       <?php $date=date('d/m/Y'); ?>
      <input type="date" name="date_of_report" class="form-control" value="<?php echo htmlspecialchars($date);?>"><br>

      <label>Time Check-in:</label>
      <input type="time" name="time_check_in" id="check_in" class="form-control" onkeyup="disableField()"><br>

      <label>Time check-out:</label>
      <input type="time" name="time_check_out" id="check_out" class="form-control" onkeyup="disableField2()"><br>

      <button class="btn btn-primary" name="submit_data">Submit</button>
      <button class="btn btn-primary">Clear</button>
    </form>
  </frameset>
</div><br>
<div class="container"><span style="color: white;">Copyright &copy 2018. All Right is reserved.</span></div>

<div class="container">
<span class="pull-right" style="padding-top: 100px;"><a href="../chat/test.html" class="common" ><i class="fa fa-commenting fa-3x" aria-hidden="true"></i> Chat</a></span>  
</div>

<!--script for disabling the fields-->
<script type="text/javascript">
      
var disableField = function () {
  var state = document.getElementById("check_in").value.length > 0;
  document.getElementById("check_out").disabled = state;
};

var disableField2=function(){
  var state2=document.getElementById("check_out").value.length>0;
  document.getElementById("check_in").disabled=state2;
}

</script>

</body>
</html>