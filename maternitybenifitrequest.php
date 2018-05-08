<?php 
$conn = mysqli_connect("localhost","root","","sss");
$ssno = $_POST['ssno'];
$ref  = $_POST['ref'];
$bd   = $_POST['bd'];
$tax  = $_POST['tax'];
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$con   = $_POST['con'];
$add   = $_POST['add'];
$street= $_POST['st'];
$brgy  = $_POST['brgy'];
$cty   = $_POST['cty'];
$leave = $_POST['leave'];
$del   = $_POST['del'];
$dia   = $_POST['dia'];
$bname = $_POST['bname'];
$badd  = $_POST['badd'];
$bacc  = $_POST['bacc'];
$bno   = $_POST['bno'];
$query = "INSERT INTO maternitybenifitrequest(SS_Number,Ref_No,DateOfBirth,TaxIdentifier,Lastname,Firstname,Middlename,ContactNumber,Address,Street,Barangay,City,Maternitiy_leave,Date_Deliver,Diagnosis,BankName,BankBranch,BankAccountName,BankAccountNumber) VALUES('$ssno','$ref','$bd','$tax','$lname','$fname','$mname','$con','$add','$street','$brgy','$cty','$leave','$del','$dia','$bname','$badd','$bacc','$bno')";
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