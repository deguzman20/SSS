<?php
$conn = mysqli_connect('localhost','root','','sss');
// ------------------------------------ 
$ssno 		= $_POST['ssno'];       
$ref  		= $_POST['ref'];        
$bd   		= $_POST['bd'];
$tax  		= $_POST['tax'];
$lname 		= $_POST['lname'];
$fname 		= $_POST['fname'];
$mname 		= $_POST['mname'];
$status 	= $_POST['status'];
$add   		= $_POST['add'];
$st    		= $_POST['st'];
$brgy  		= $_POST['brgy'];
$cty   		= $_POST['cty'];
$gen    	= $_POST['gen'];
$telno  	= $_POST['telno'];
$mobno  	= $_POST['mobno'];
$em     	= $_POST['em'];
$ben    	= $_POST['bentype'];
$con    	= $_POST['contiment'];
$bname  	= $_POST['bname'];
$branchadd  = $_POST['branchadd'];
$bacc       = $_POST['bacc'];
$accno      = $_POST['accno']; 
// ------------------------------------ 
$query = "INSERT INTO sicknessbenifitrequest(SSNumber,Reference_No,DateOfBirth,TaxIdentification,Lastname,Firstname,Middlename,Civil_Status,Address,StreetName,Barangay,City,Gender,Telephone_No,Mobile_No,Email_Address,Benifit_Type,PlaceOfConfinement,BankNameAndBranch,BankBranchAddress,BankAccountName,BankAccountNumber) VALUES('$ssno','$ref','$bd','$tax','$lname','$fname','$mname','$status','$add','$st','$brgy','$cty','$gen','$telno','$mobno','$em','$ben','$con','$bname','$branchadd','$bacc','$accno')";
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