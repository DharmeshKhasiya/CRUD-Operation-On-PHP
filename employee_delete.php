<?php
session_start();
include("connection.php");
if(!isset($_SESSION['logged_in']))
{
	header('location: index.php');
}?>
<html>
<head>
<script type="text/javascript">
	alert("Are You sure want to delete ?");
</script>



</head>
<body>
	<?php
$id=$_GET['id'];

$name =$_GET['name'];


$query ="SELECT login_id FROM login WHERE email_id='$name'";
$data = mysqli_query($con,$query);

while($row = mysqli_fetch_array($data)){
	$logid= $row['login_id'];
	}
$query2="DELETE FROM login WHERE login_id=$logid";
mysqli_query($con,$query2);

$query1 = "DELETE FROM employee_master WHERE employee_id=$id";
mysqli_query($con,$query1);

$_SESSION['deleteemp'] = TRUE;
header("location: employee.php");
?>
	
	
</body>
</html>
