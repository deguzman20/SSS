<?php 
$conn = mysqli_connect("localhost","root","","sss");
$ssno   = $_POST['ssno'];
$ref    = $_POST['ref'];
$bd     = $_POST['bd'];
$tax    = $_POST['tax'];
$lname  = $_POST['lname'];
$fname  = $_POST['fname'];
$mname  = $_POST['mname'];
$status = $_POST['status'];
$add    = $_POST['add'];
$st     = $_POST['st'];
$brgy   = $_POST['brgy'];
$cty    = $_POST['cty'];
$gen    = $_POST['gen'];
$telno  = $_POST['telno']; 
$mobno  = $_POST['mobno'];
$em     = $_POST['em'];
$bentype = $_POST['bentype'];
$plc     = $_POST['plc'];
$bnkname = $_POST['bnkname'];
$badd    = $_POST['badd'];
$bacc    = $_POST['bacc'];
$baccn   = $_POST['baccn'];
$sched   = $_POST['sched'];
$query ="INSERT INTO sicknessbenifit(SSNumber,Reference_No,DateOfBirth,TaxIdentification,Lastname,Firstname,Middlename,Civil_Status,Address,StreetName,Barangay,City,Gender,Telephone_No,Mobile_No,Email_Address,Benifit_Type,PlaceOfConfinement,BankNameAndBranch,BankBranchAddress,BankAccountName,BankAccountNumber)VALUES('$ssno','$ref','$bd','$tax','$lname','$fname','$mname','$status','$add','$st','$brgy','$cty','$gen','$telno','$mobno','$em','$bentype','$plc','$bnkname','$badd','$bacc','$baccn')";
mysqli_query($conn,$query);

$loanhistoryInsert = "INSERT INTO loan_history(SS_number,loan_date,TypeOfLoan) VALUES('$ssno','$sched','Sickness Benifit')"; 
mysqli_query($conn,$loanhistoryInsert);

$update = "UPDATE member_registration SET LoanSchedule='$sched' WHERE CRN_SSNumber='$ssno'";
mysqli_query($conn,$update);

 
$delete = "DELETE FROM sicknessbenifitrequest WHERE SSNumber='$ssno' ";
mysqli_query($conn,$delete);
?>