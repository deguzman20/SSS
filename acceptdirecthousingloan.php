
<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=sss","root","");
    $ssno = $_POST['ssno'];
    $ref  = $_POST['ref'];
    $bd   = $_POST['bd'];
    $tax  = $_POST['tax'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $con   = $_POST['con'];
    $add   = $_POST['add'];
    $st    = $_POST['st'];
    $brgy  = $_POST['brgy'];
    $cty   = $_POST['cty'];
    $em    = $_POST['em'];
    $gen   = $_POST['gen'];
    $status = $_POST['status'];
    $sched  = $_POST['sched'];
    $rep    = $_POST['rep'];
    $amount = $_POST['amount'];
         $update = "UPDATE member_registration SET LoanSchedule='$sched' WHERE CRN_SSNumber='$ssno'";
     $conn->exec($update);


     $sql ="INSERT INTO directhousingloan(SS_Number,Ref_No,DateOfBirth,TaxIdentifier,Lastname,Firstname,Middlename,ContactNo,Address,StreetName,Barangay,City,EmaiAddress,Gender,Civil_Status,RepaymentTermInYears,AmountAppliedFor) VALUES('$ssno','$ref','$bd','$tax','$lname','$fname','$mname','$con','$add','$st','$brgy','$cty','$em','$gen','$status','$rep','$amount') ";
     
     $conn->exec($sql);
    
     $loanhistoryInsert = "INSERT INTO loan_history(SS_number,loan_date,TypeOfLoan) VALUES('$ssno','$sched','Direct Housing Loan')";  
     $conn->exec($loanhistoryInsert);

     $deletequery = "DELETE FROM directhousingloan_request WHERE SS_Number='$ssno'";
     $conn->exec($deletequery);
     

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

?>
