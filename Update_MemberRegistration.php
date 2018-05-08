<?php 
$conn   = mysqli_connect("localhost","root","","sss");
$ID     = $_POST['id'];
$crn 	= $_POST['crn'];
$fname	= $_POST['fname'];
$mname  = $_POST['mname'];
$lname  = $_POST['lname'];
$bd     = $_POST['bd'];
$em     = $_POST['em'];

$query ="UPDATE member_registration SET firstname='$fname',CRN_SSNumber='$crn',middlename='$mname',lastname='$lname',birthday='$bd',email_address='$em' WHERE ID = '$ID'"; 
$run_query= mysqli_query($conn,$query);
if(!$run_query)
{
  echo 'not successful';
}
else
{
	echo 'successful';
}
?>	