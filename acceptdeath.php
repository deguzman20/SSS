<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=sss", "root", "");
     $ssno = $_POST['ssno'];
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$bd    = $_POST['bd'];
$death = $_POST['death'];
$place = $_POST['place'];
$cty   = $_POST['cty'];
$claim = $_POST['claim'];
$status = $_POST['status'];
$cssno = $_POST['cssno'];
$clname = $_POST['clname'];
$cfname = $_POST['cfname'];
$cmname = $_POST['cmname'];
$cadds  =$_POST['cadds'];
$cbds  = $_POST['cbds'];
$cgens = $_POST['cgens'];
$rels= $_POST['rels'];
$con = $_POST['con'];
$sched = $_POST['sched'];
    $sql = "INSERT INTO deathbenifit(SS_Number, Last_Name, First_Name, Middle_Name, DateOfBirth, DateOfDeath, PlaceOfDeath, City_Province, TypeOfClaim, CivilStatus, ClaimantSSNumber, ClaimantLastName, ClaimantFirstName, ClaimantMiddleName, ClaimantAddress, ClaimantDateOfBirth, ClaimantGender, RelationShipToMember, ContactNumber) VALUES ('$ssno','$lname','$fname','$mname','$bd','$death','$place','$cty','$claim','$status','$cssno','$clname','$cfname','$cmname','$cadds','$cbds','$cgens','$rels','$con')";
    $conn->exec($sql);
    
    $loanhistoryInsert = "INSERT INTO loan_history(SS_number,loan_date,TypeOfLoan) VALUES('$ssno','$sched','Death Benifit')"; 
    $conn->exec($loanhistoryInsert); 

   $update = "UPDATE member_registration SET LoanSchedule='$sched' WHERE CRN_SSNumber='$ssno'";
   $conn->exec($update);


    $delete ="DELETE FROM deathbenifitrequest WHERE SS_Number='$ssno'";
    $conn->exec($delete);
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

?>