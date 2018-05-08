<?php
$conn = mysqli_connect("localhost","root","","sss");
$ssno  = $_POST['ssno'];
$refno = $_POST['refno'];
$bd    = $_POST['bd'];
$tax   = $_POST['tax'];
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$con   = $_POST['con'];
$add   = $_POST['add'];
$street= $_POST['street'];
$brgy  = $_POST['brgy'];
$cty   = $_POST['cty'];
$em    = $_POST['em'];
$gender= $_POST['gender'];
$status= $_POST['status'];
$blname= $_POST['blname'];
$bfname= $_POST['bfname'];
$bmname= $_POST['bmname'];
$rel   = $_POST['rel'];
$school= $_POST['school'];
$sadd  = $_POST['sadd'];
$rep   = $_POST['rep'];
$amount =$_POST['amount'];

$query = "INSERT INTO educationalassistanceloan_request(SS_Number,Ref_No,DateOfBirth,TaxIdentifier,Lastname,Firstname,Middlename,ContactNo,Address,StreetName,Barangay,City,EmaiAddress,Gender,Civil_Status,BeneficiaryLastname,BeneficiaryFirstname,BeneficiaryMiddlename,RelationToMember,NameOfSchool,AddressOfSchool,RepaymentTermInYears,AmountAppliedFor) VALUES('$ssno','$refno','$bd','$tax','$lname','$fname','$mname','$con','$add','$street','$brgy','$cty','$em','$gender','$status','$blname','$bfname','$bmname','$rel','$school','$sadd','$rep','$amount')";
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