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
<body class="body-panel" style="background-color: gray;color:blue;">
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
        <li><a href="../views/employeeRequest.php" class="common" ><i class="fa fa-hand-o-right" aria-hidden="true"></i> Request</a>
        </li>
         <li class="active"><a href="#" class="common" ><i class="fa fa-question" aria-hidden="true"></i> Help</a></li>
         <li><a href="../public_folder/index.php" class="common" ><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<!--create the form for the question-->
<br><br><br><br><br>
<div class="container">
  <!--form section for quiz-->
  <div class="col-sm-8">
    <frameset>
      <legend>Ask the Question to us?</legend>
      <form>
        <label>Email:</label>
        <input type="email" name="email" class="form-control" placeholder="Enter your email.."><br>
        
        <label>Category:</label>
        <select class="form-control">
          <option>--Select your category--</option>
          <option>Transport expense</option>
          <option>Salary</option>
          <option>Medication</option>
          <option>Time</option>
          <option>Leave request</option>
          <option>Others</option>
        </select><br>

        <label>Message:</label>
        <textarea class="form-control" placeholder="Your message here.."></textarea><br>

        <label>Attachment:</label>
        <input type="file" name="Attachment" disabled><br>

        <button type="button" class="btn btn-info">Submit</button>
        <button type="reset" class="btn btn-info">Clear</button>
      </form>
      
    </frameset>
  </div>
  <div class="col-sm-4" style="border: 1px black solid;">
    <frameset style="background-color: blue;">
      <legend>Help section</legend>
      <p>Dou you need help?</p>
      <p>Do you have difficult in using the system?</p>
      <h4>In case you need help:</h4>
      <ol>
        <li>Ask your quiz via this given form.</li>
        <li>Alternatively, Click on the chat link below the employee page and ask your quiz.</li>
        <li>Chat with your your collegues</li>
      </ol>


    </frameset>
  </div>

</div>
</body>
</html>