<!doctype html>
<html lang="en">
<head>
<title>HrResource | admin</title>
<meta charset="UTF-8">
<link href="../custom-css/custom.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">


<script type="text/javascript" src="../jquery/jquery.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>


</head>
<body class="body-panel" style="background-color: gray;">
<nav class="navbar navbar-inverse navbar-fixed-top nav-bar-header" id="nav">       
  <div class="container-fluid nav-bar-header" style="border-bottom: 5px brown solid;">
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
        <li class="active"><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Dashboard</a></li>
        <li><a href="../admin/Employees-admin.php"><i class="fa fa-users" aria-hidden="true"></i> Employees</a></li>
         <li><a href="../admin/Leave-admin.php" class="common" ><i class="fa fa-question" aria-hidden="true"> Leave</i> </a></li>
         <li><a href="../admin/Report-admin.php" class="common" ><i class="fa fa-question" aria-hidden="true"> Report</i> </a></li>
         <li><a href="../public_folder/index.php" class="common" ><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br>
<div class="container">
  <div class="col-sm-5 alert alert-info" style="background-color: green;border-radius: 12px; border-bottom: 5px brown solid;">
      <h3><span style="color: white;">Company Employees</span></h3><hr>

      <?php
      //fetch the count users from the db
      mysql_connect('localhost','root','');
      mysql_select_db('resourcedb');
      $countNumber=mysql_num_rows(mysql_query('select * from employee_tbl'));
      ?>

      <p style="color: white;">Permanent <button class="btn btn-success"><span class="badge"><?php echo $countNumber; ?></span></button></p>
      <p>Contract <span class="badge"> 0</span><span class="text-danger"> Sorry, It is unavailable!!</span></p>
    </div>
    <!--another div col in the right side-->
   <div class="col-sm-2 alert text-center">
   </div>
    <div class="col-sm-5 alert alert-info" style="background-color: green;border-radius: 12px; border-bottom: 5px brown solid;">
        <h3 style="color: white;">Today's attendance</h3><hr>
        <?php
        mysql_connect('localhost','root','');
        mysql_select_db('resourcedb');
        $countReport=mysql_num_rows(mysql_query('select * from workreport_tbl'));


        ?>
        <p style="color: white;">Come on time <button class="btn btn-success"><span class="badge"> <?php echo $countReport; ?></span></button></p>
        <p>Come late today<span class="badge"> 0</span></p>
    </div>
  </div>
</div>
<!--create the notice area for the admin-->
 <div class="container alert alert-info">
    <p>Notice board</p>
  </div>
 <div class="container panel panel-default">
    <div class="panel-body">We are sorry!! No notice today
      <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#modalForm">Add info</button>




    </div>
  </div>
<!--create the footer for the admin-->
<div class="container alert-info" style="background-color: gray; color: blue;">
  <p class="text-center">Copyright &copy. All right reserved.</p>
</div>







  <!-- Modal for add information for the employee-->
  <div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add information to notice</h4>
        </div>


        <div class="modal-body">
          <p class="statusMsg"></p>
          <form id="info_form" method="POST" action="../database/adminAddNotice.php">
            <label>Category:</label>
            <select name="name_category" id="category" class="form-control" required>
              <option>--Select the category--</option>
              <option>Management</option>
              <option>Renumeration</option>
              <option>Time</option>
              <option>Leave</option>
              <option>Jobs and Oppotunities</option>
              <option>Training</option>
            </select><br>

            <label>Information:</label>
            <input type="text" id="info" name="name_info" class="form-control" placeholder="Enter our information here.." required><br>
            
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" name="submit" class="btn btn-success  submitBtn" id="submit_form" onclick="submitContactForm()">Submit</button>
          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<br><br>
  <div class="container alert alert-info text-center">
    <p>Current date</p>
    <?php $date=date('m/d/Y');
     echo $date;
    ?>
  </div>
  
 
 











 <!--create the js for handling the submission of the modal data-->


 <script type="text/javascript">

function submitContactForm(){

var category=$('#category').val();
var information=$('#info').val();

if(category.trim()=='')
{
alert('Please select the category');
$('#category').focus();
return false;

}else if(information.trim()=='')
{
alert('Enter your information');
$('#info').info();
return false;
}
else{
$.ajax({
type: 'POST',
url:'../database/adminAddNotice.php',
data:'formSubmit=$category='+category+'$information='+information,
beforeSend: function()
{
$('.submitBtn').attr("disabled","disabled");
$('.modal-body').css('opacity','.5');
},

success: function(msg){
if(msg=='ok'{
$('#category').val('');
$('#info').val('');


  $('.statusMsg').html('<span style="color:green;">Thanks for contacting us, we\'ll get back to you soon.</p>');
                }else{
                    $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                }
                $('.submitBtn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            }
        });
    }
}
</script>






</body>
</html>