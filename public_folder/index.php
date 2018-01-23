<!doctype html>
<html lang="en">
<head>
<title>HRM | index.php</title>
<meta charset="UTF-8">
<link href="../custom-css/custom.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
</head>

<!--body page-->
<body class="body-panel" style="background-color: gray;">
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
        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
         <li><a href="../views/seekHelp.php" class="common" ><i class="fa fa-question" aria-hidden="true"></i> Help</a></li>
      </ul>
    </div>
  </div>
</nav>


<div>
<br><br><br>
<h4 class="text-center" style="color: blue;">Employee Login</h4><hr>
<fieldset class="container alert alert-success" style="width: 480px;margin-top: 0px;"><br>
<form name="vform" onsubmit="return validate()" method="POST" action="../database/login-customers.php">


<label>Email ID:</label>
<input type="email" name="email" class="form-control" placeholder="Enter your email.."/><br>
<div id="email_error" class="val_error text-danger"></div>

<label>Password:</label>
<input type="password" class="form-control" name="password" placeholder="Enter your Password.."/><br>
<div id="password_error" class="val_error text-danger"></div>

<button class="btn btn-primary">Login</button><br><br>

Not Registered? <a href="../views/employeesReg.php">Signup</a>
</form>
</fieldset>
<div class="container">
  <p><a href="../views/employeesReg.php"></a></p>
</div>
</div>
<footer class="container" style="width: 450px">
<p>All Right Reserved, copyright &copy; 2017</p>
</footer>
</body>
</html>
<!--javascript for handling-->
<script>
var email=document.forms["vform"]["email"];
var pass=document.forms["vform"]["password"];

//display all the errors
var email_error=document.getElementById("email_error");
var password_error=document.getElementById("password_error");
	
    email.addEventListener("blur",emailVerify,true);
    pass.addEventListener("blur",passwordVerify,true);
	
	function validate(){
		if (email.value=="") {
    		email.style.border="1px solid red";
    		email_error.textContent="Email is required";
    		email.focus();
    		return false;
    	}
    	//validate password
    	if (pass.value=="") {
    		pass.style.border="1px solid red";
    		password_error.textContent="Password is required";
    		pass.focus();
    		return false;
    	}
		
	}

	
	function emailVerify(){
	if(email.value!=""){
	email.style.border="1px solid #5E6E66";
	email_error.innerHTML="";
	return true;
	}
	
}

function passwordVerify(){
	if(pass.value!=""){
		pass.style.border="1px solid #5E6E66";
		password_error.innerHTML="";
		return true;
	}
}
	
</script>


