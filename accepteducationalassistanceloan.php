<?php
$conn = mysqli_connect("localhost","root","","sss");
$ssno   = $_POST['ssno'];
$ref    = $_POST['ref'];
$bd     = $_POST['bd'];
$tax    = $_POST['tax'];
$lname  = $_POST['lname'];
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
$blname = $_POST['blname'];
$bfname = $_POST['bfname'];
$bmname = $_POST['bmname'];
$rel    = $_POST['rel'];
$school = $_POST['school'];
$cadd   = $_POST['cadd'];
$refs   = $_POST['refs'];
$sched  = $_POST['sched'];
$amount = $_POST['amount'];
$query = "INSERT INTO educationalassistanceloan(SS_Number,Ref_No,DateOfBirth,TaxIdentifier,Lastname,Firstname,Middlename,ContactNo,Address,StreetName,Barangay,City,EmailAddress,Gender,Civil_Status,BeneficiaryLastname,BeneficiaryFirstname,BeneficiaryMiddlename,RelationToMember,NameOfSchool,AddressOfSchool,RepaymentTermInYears,AmountAppliedFor) VALUES('$ssno','$ref','$bd','$tax','$lname','$fname','$mname','$con','$add','$st','$brgy','$cty','$em','$gen','$status','$blname','$bfname','$bmname','$rel','$school','$cadd','$refs','$amount')";
mysqli_query($conn,$query);

 $loanhistoryInsert = "INSERT INTO loan_history(SS_number,loan_date,TypeOfLoan) VALUES('$ssno','$sched','Educational Assistance Loan')"; 
mysqli_query($conn,$loanhistoryInsert);


 $update = "UPDATE member_registration SET LoanSchedule='$sched' WHERE CRN_SSNumber='$ssno'";
 mysqli_query($conn,$update);

$delete = "DELETE FROM educationalassistanceloan_request WHERE SS_Number='$ssno'";
mysqli_query($conn,$delete);


?>