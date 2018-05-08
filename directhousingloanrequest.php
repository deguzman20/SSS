<?php
$conn = mysqli_connect("localhost","root","","sss");
$ssno 	= $_POST['ssno'];
$refno 	= $_POST['refno'];
$bd   	= $_POST['bd'];
$tax  	= $_POST['tax'];
$lname 	= $_POST['lname'];
$fname  = $_POST['fname'];
$mname  = $_POST['mname'];
$con    = $_POST['con'];
$add    = $_POST['add'];
$st     = $_POST['st'];
$brgy   = $_POST['brgy'];
$cty    = $_POST['cty'];
$em     = $_POST['em'];
$gen    = $_POST['gen'];
$status = $_POST['status'];
$rep    = $_POST['rep'];
$amount = $_POST['amount'];
$query ="INSERT INTO directhousingloan_request(SS_Number,Ref_No,DateOfBirth,TaxIdentifier,Lastname,Firstname,Middlename,ContactNo,Address,StreetName,Barangay,City,EmaiAddress,Gender,Civil_Status,RepaymentTermInYears,AmountAppliedFor) VALUES('$ssno','$refno','$bd','$tax','$lname','$fname','$mname','$con','$add','$st','$brgy','$cty','$em','$gen','$status','$rep','$amount')";
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