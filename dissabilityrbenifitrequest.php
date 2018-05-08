<?php
$conn = mysqli_connect("localhost","root","","sss");
$ssno = $_POST['ssno'];
$lname= $_POST['lname'];
$fname= $_POST['fname'];
$mname= $_POST['mname'];
$add  = $_POST['add'];
$st   = $_POST['st'];
$brgy = $_POST['brgy'];
$cty  = $_POST['cty'];
$con  = $_POST['con'];
$gen  = $_POST['gen'];
$claim = $_POST['claim'];
$tin   = $_POST['tin'];
$query = "INSERT INTO dissabilitybenifitrequest(SS_Number,Lastname,Firstname,Middlename,Address,Street,Barangay,City,Contact_Number,Gender,TypeOfClaim,TIN) VALUES('$ssno','$lname','$fname','$mname','$add','$st','$brgy','$cty','$con','$gen','$claim','$tin')";
$runquery = mysqli_query($conn,$query);
if(!$runquery)
{
	echo 'Request has not send successfully';
}
else
{
	echo 'Request was send successfully';
}
?>