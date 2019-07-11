<?php
  session_start();
  
   include 'connection.php';
  $pi = 'uploads/userpic.png';

    $sql = "INSERT INTO employee_master (employee_name,email_id,designation_id,photo,joining_date) VALUES('$_POST[name]','$_POST[emailid]','$_POST[desig]','$pi',NOW())";
    $sqlr = mysqli_query($con,$sql);
   
    $sql1 = "INSERT INTO login (email_id,password,usertype_id) VALUES('$_POST[emailid]','$_POST[cpassword]','2')";
  $sql1r = mysqli_query($con,$sql1);
   if (!$sqlr and !$sql1r)
    {
     die('Error: ' . mysqli_error($con)); 
    }
   
   $_SESSION['addemp'] = TRUE;
  header('refresh: 0; url=employee.php');
  
  ?>