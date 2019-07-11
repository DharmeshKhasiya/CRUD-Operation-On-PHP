<?php session_start();
include("connection.php");
if(!isset($_SESSION['logged_in'])){
	header('location: index.php');
}
$employee_id = $_GET['id'];

$query       = "SELECT employee_id,employee_name,address,mobile_no,joining_date,email_id,gender,birth_date,designation_id,photo FROM employee_master WHERE employee_id='$employee_id'";
$data        = mysqli_query($con,$query);
$query1      = "SELECT designation_id,designation_name FROM designation";
$data1       = mysqli_query($con,$query1);

while($row = mysqli_fetch_array($data))
{
	$employee_id = $row['employee_id'];
	$employee_name = $row['employee_name'];
	$address       = $row['address'];
	$mobile_no     = $row['mobile_no'];
	$joining_date  = $row['joining_date'];
	$email_id      = $row['email_id'];
	$gender        = $row['gender'];
	$birthdate     = $row['birth_date'];
	$employee_image= $row['photo'];
	$designation_id = $row['designation_id'];

}
if(isset($_POST['edit_project_submit'])){
	
	       
   
	$employee_name = $_POST['edit_employee_name'];

	$address       = $_POST['edit_address'];

	$mobile_no     = $_POST['edit_pro_mobile_no'];
	$joining_date  = $_POST['edit_pro_joining_date'];
	$email_id      = $_POST['edit_pro_email_id'];
	$gender        = $_POST['edit_pro_gender'];
	$birthdate     = $_POST['edit_pro_birthdate'];
	$designation_id= $_POST['edit_pro_designation_id'];


	$query1 = "UPDATE employee_master SET employee_name='$employee_name',address= '$address',mobile_no= '$mobile_no',joining_date= '$joining_date',email_id= '$email_id',gender= '$gender',birth_date= '$birthdate',designation_id='$designation_id' WHERE  employee_id='$employee_id'";

	mysqli_query($con,$query1);
	$_SESSION['updateemp'] = TRUE;

	header("location: employee.php");
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="lt-ie9 lt-ie8 lt-ie7" lang="en">
<![endif]-->
<!--[if IE 7]>
<html class="lt-ie9 lt-ie8" lang="en">
<![endif]-->
<!--[if IE 8]>
<html class="lt-ie9" lang="en">
<![endif]-->
<!--[if gt IE 8]>
<!-->
<html lang="en">
<!--
<![endif]-->
<head>
<meta charset="utf-8">
<title>
StartUp Admin
</title>
<meta name="author" content="Srinu Basava">
<meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
<meta name="description" content="StartUp Admin UI">
<meta name="keywords" content="StartUp Admin UI, Admin UI, Admin Dashboard, Srinu Basava, Best admin UI, Best backend UI, Best Dashboard, Responsive admin UI, Responsive dashboard, Responsive Backend, Mobile admin, Mobile Backend, Mobile Dashboard">
<script src="js/html5-trunk.js"></script>

<link href="icomoon/style.css" rel="stylesheet">
<!--[if lte IE 7]>
<script src="css/icomoon-font/lte-ie7.js"></script>
<![endif]-->
<link href="css/nvd-charts.css" rel="stylesheet">
<!-- bootstrap css -->
<link href="css/main.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/html5-trunk.js"></script>
<link href="icomoon/style.css" rel="stylesheet">
<!--[if lte IE 7]>
<script src="css/icomoon-font/lte-ie7.js"></script>
<![endif]-->

<!-- bootstrap css -->
<link href="css/main.css" rel="stylesheet">

<link href="css/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet">
<link href="css/wysiwyg/wysiwyg-color.css" rel="stylesheet">
<link href="css/timepicker.css" rel="stylesheet">
<link href="css/bootstrap-editable.css" rel="stylesheet">
<link href="css/select2.css" rel="stylesheet">
<script>
$(document).ready(function(){
$("#pro").click(function(){
$("#profile").show(200);
$("#profile").css("display","block");
});
});
$(document).ready(function(){
$("#info").click(function(){
$("#information").show(200);
$("#information").css("display","block");
});
});
$(document).ready(function(){
$("#close1").click(function(){
$("#information").hide(200);
$("#profile").hide(200);
});
});


</script>
</head>
<body>
<?php
include 'connection.php';
?>
<?php include 'adminheader.php'; ?>
<div class="container-fluid">
<?php include 'adminside.php'; ?>
<div class="dashboard-wrapper">
<?php include 'adminmenu.php'; ?>
<div class="main-container">
<div class="navbar hidden-desktop">
<div class="navbar-inner">
<div class="container">
<a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">
<span class="icon-bar">
</span>
<span class="icon-bar">
</span>
<span class="icon-bar">
</span>
</a>
<div class="nav-collapse collapse navbar-responsive-collapse">
<ul class="nav">
<li>
<a href="index.php">
Dashboard
</a>
</li>
<li>
<a href="reports.php">
Reports
</a>
</li>
<li>
<a href="forms.php">
Basic Forms
</a>
</li>
<li>
<a href="extended-forms.php">
Extended Forms
</a>
</li>
<li>
<a href="form-wizards.php">
Form Wizard
</a>
</li>
<li>
<a href="graphs.php">
Flot Charts
</a>
</li>
<li>
<a href="google-charts.php">
Google Charts
</a>
</li>
<li>
<a href="animated-charts.php">
Animated Charts
</a>
</li>
<li>
<a href="ui-elements.php">
General Elements
</a>
</li>
<li>
<a href="clients-list.php">
Clients List
</a>
</li>
<li>
<a href="messages.php">
Messages
</a>
</li>
<li>
<a href="timeline.php">
Timeline
</a>
</li>
<li>
<a href="pricing.php">
Pricing Plans
</a>
</li>
<li>
<a href="grid.php">
Grid Layout
</a>
</li>
<li>
<a href="icons.php">
Buttons &amp; Icons
</a>
</li>
<li>
<a href="typography.php">
Typography
</a>
</li>
<li>
<a href="tables.php">
Static Tables
</a>
</li>
<li>
<a href="dynamic-tables.php">
Dynamic Tables
</a>
</li>
<li>
<a href="gallery.php">
Gallery
</a>
</li>
<li>
<a href="invoice.php">
Invoice
</a>
</li>
<li>
<a href="calendar.php">
Calendar
</a>
</li>
<li>
<a href="profile.php">
Profile
</a>
</li>
<li>
<a href="error.php">
404 Error
</a>
</li>
<li>
<a href="faq.php">
Faq
</a>
</li>
<li>
<a href="login.php">
Login
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="page-header">
<div class="pull-left">
<h2>
Employee Editing
</h2>
</div>
<div class="pull-right">
<ul class="stats">
<li class="color-first hidden-phone">
<span class="fs1" aria-hidden="true" data-icon="&#xe0b3;">
</span>
<div class="details">
<span class="big">
12
</span>
<span>
New Tasks
</span>
</div>
</li>
<li class="color-second">
<span class="fs1" aria-hidden="true" data-icon="&#xe052;">
</span>
<div class="details" id="date-time">
<span>
Date
</span>
<span>
Day, Time
</span>
</div>
</li>
</ul>
</div>
<div class="clearfix">
</div>
</div>

<div class="row-fluid">
<div class="span12">
<div class="widget">

<div class="widget-header" id="pro" style="cursor: pointer;" data-original-title="Edit Profile Picture Of employee" data-placement="top" >
<div class="title">
<span class="fs1" aria-hidden="true" data-icon="&#xe023;"></span>Employee Profile
</div>
</div>
<div class="widget-body" id="profile" style="display: none;" >

<h5 class="text-info">Profile Image</h5>
<hr>
<div class="control-group">

<div class="controls" align="center">


<img style="height: 200px;width: 200px;" src=<?php echo $employee_image ?>  />


 <hr />
    <form action="upload.php?id=<?php echo $employee_id;?>" method="post" enctype="multipart/form-data">
		<input id="uploadImage" type="file" accept="image/jpeg" name="image"  />
		<input type="submit" value="Upload Profile Image" class="btn btn-primary">
<a href="employee.php">
<button type="button" class="btn" id="close1">
Cancel
</button></a>
		<!-- hidden inputs -->
		<input type="hidden" id="x" name="x" />
		<input type="hidden" id="y" name="y" />
		<input type="hidden" id="w" name="w" />
		<input type="hidden" id="h" name="h" />
	</form>
</div>
<br />
</div>
</div>
</div>
</div>
<div class="row-fluid">
<div class="span12">
<div class="widget">
<div class="widget-header" id="info" style="cursor: pointer;" data-original-title="Edit Profile Information Of employee" data-placement="top">
<div class="title">
<span class="fs1" aria-hidden="true" data-icon="&#xe023;"></span> Employee Information
</div>
</div>

	
		
<div class="widget-body" id="information" style="display: none;" >

<h5 class="text-info">Profile Information</h5>
<hr>
<form class="form-horizontal no-margin " method="POST">
<div class="control-group">
<label class="control-label">
Employee Name :
</label>
<div class="controls">

<input type="text" id="edit_employee_name" name="edit_employee_name" value="<?php echo $employee_name; ?>" class="span6" required> </input>

</div>
</div>
<div class="control-group">
<label class="control-label">
Address :
</label>
<div class="controls">
<input type="text" id="edit_address" name="edit_address"  value="<?php echo $address; ?>" class="span6"> </input>


</div>
</div>
<div class="control-group">
<label class="control-label">
Mobile No:
</label>
<div class="controls">
<input type="text" id="edit_pro_mobile_no" name="edit_pro_mobile_no"  value="<?php echo $mobile_no; ?>" class="span6"></input>
</div>
</div>
<div class="control-group">
<label class="control-label">
Joining Date :
</label>
<div class="controls">
<input type="date" id="edit_pro_joining_date" name="edit_pro_joining_date"  value="<?php echo $joining_date; ?>" class="span6"> </input>

</div>
</div>
<div class="control-group">
<label class="control-label">
Email ID :
</label>
<div class="controls">
<input type="email" id="calendar" name="edit_pro_email_id"  value="<?php echo $email_id; ?>"class="span6" required> </input>

</div>
</div>

<div class="control-group">
<label class="control-label">
Gender :
</label>
<div class="controls">
  <?php
                           if ($gender == 'male')
                            {?>
                                <input type="radio" name="edit_pro_gender" value="male" id="sex" checked> Male </input>
								<input type="radio" name="edit_pro_gender" value="female" id="sex"> Female </input>
                         <?php   }
                            else
                            { ?>
                               <input type="radio" name="edit_pro_gender" value="male" id="sex"> Male </input><input type="radio" name="edit_pro_gender" value="female" id="sex" checked> Female </input>
                         <?php   }
                            ?>
</div>

</div>
<div class="control-group">
<label class="control-label">
Birthdate  :
</label>
<div class="controls">
<input type="date" class="span6" value="<?php echo $birthdate;?>" name="edit_pro_birthdate" id="calendar"/>
</div>
</div>
<div class="control-group">
<label class="control-label">
designation Id:
</label>
<div class="controls">
	<?php

		$country= mysqli_query($con,"SELECT designation_name From designation WHERE designation_id= '$designation_id'");
					  while($row=mysqli_fetch_array($country)){
					  	$designationname=$row['designation_name'];
					  } ?>
<select name="edit_pro_designation_id" id="edit_pro_designation_id" class="span6">
<option value="<?php echo $designation_id ?>"><?php echo $designationname; ?></option>
<?php

while($rw = mysqli_fetch_array($data1))
{
	?>
	<option value="<?php echo $rw['designation_id']?>">
	<?php echo $rw['designation_name']?>
	</option>
	<?php
} ?>
</select>


</div>
</div>
<div class="form-actions no-margin">
<input type="submit" class="btn btn-primary" value="Update" id="edit_project_submit" name="edit_project_submit">

<a href="employee.php">
<button type="button" class="btn" id="close1">
Cancel
</button></a>
</div>
</form>
</div>
</div>
</div>
</div>

</div>
</div>
</div>

<script src="js/wysiwyg/wysihtml5-0.3.0.js"></script>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/moment.js"></script>

<script src="js/wysiwyg/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="js/date-picker/date.js"></script>
<script type="text/javascript" src="js/date-picker/daterangepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-timepicker.js"></script>

<!-- Editable Inputs -->
<script src="js/bootstrap-editable.min.js"></script>
<script src="js/select2.js"></script>

<!-- Easy Pie Chart JS -->
<script src="js/pie-charts/jquery.easy-pie-chart.js"></script>

<!-- Tiny scrollbar js -->
<script src="js/tiny-scrollbar.js"></script>

<!-- custom Js -->
<script src="js/custom-forms.js"></script>
<script src="js/theming.js"></script>
<script src="js/custom.js"></script>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-41161221-1', 'srinu.me');
ga('send', 'pageview');

</script>

</body>
</html>
