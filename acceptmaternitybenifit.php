
<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=sss", "root", "");
    $ssno   = 	$_POST['ssno'];
$ref    = 	$_POST['ref'];
$bd     = 	$_POST['bd'];
$tax    = 	$_POST['tax'];
$lname  = 	$_POST['lname'];
$fname  = 	$_POST['fname'];
$mname  = 	$_POST['mname'];
$con    = 	$_POST['con'];
$add    = 	$_POST['add'];
$st     = 	$_POST['st'];
$brgy   = 	$_POST['brgy'];
$cty    = 	$_POST['cty'];
$leave  = 	$_POST['leave'];
$del    = 	$_POST['del'];
$dia    = 	$_POST['dia'];
$bname  = 	$_POST['bname'];
$bnkadd = 	$_POST['bnkadd'];
$bacc   = 	$_POST['bacc'];
$baccn  = 	$_POST['baccn'];
$sched  =   $_POST['sched'];
    $sql = "INSERT INTO maternitybenifit(SS_Number,Ref_No,DateOfBirth,TaxIdentifier,Lastname,Firstname,Middlename,ContactNumber,Address,Street,Barangay,City,Maternitiy_leave,Date_Deliver,Diagnosis,BankName,BankBranch,BankAccountName,BankAccountNumber) VALUES('$ssno','$ref','$bd','$tax','$lname','$fname','$mname','$con','$add','$st','$brgy','$cty','$leave','$del','$dia','$bname','$bnkadd','$bacc','$baccn')";
    $conn->exec($sql);
 
    $loanhistoryInsert = "INSERT INTO loan_history(SS_number,loan_date,TypeOfLoan) VALUES('$ssno','$sched','Maternity Benifit')"; 
    $conn->exec($loanhistoryInsert); 

   $update = "UPDATE member_registration SET LoanSchedule='$sched' WHERE CRN_SSNumber='$ssno'";
   $conn->exec($update); 

   $delete= "DELETE FROM maternitybenifitrequest WHERE SS_Number='$ssno'";
   $conn->exec($delete);

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

?>