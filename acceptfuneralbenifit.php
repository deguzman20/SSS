<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=sss", "root", "");
      	$ssno   =    $_POST['ssno'];
		$ref   	=    $_POST['ref'];
		$bd   	=    $_POST['bd'];
		$gen   	=    $_POST['gen'];
		$lname 	=    $_POST['lname'];
		$fname  =    $_POST['fname'];
		$mname  =    $_POST['mname'];
		$con    =    $_POST['con'];
		$add    =    $_POST['add'];
		$brgy   =    $_POST['brgy'];
		$cty    =    $_POST['cty'];
		$status =    $_POST['status'];
		$death  =    $_POST['death'];
		$inter  =    $_POST['inter'];
		$pinter =    $_POST['pinter'];
		$clname =    $_POST['clname'];
		$cfname =    $_POST['cfname'];
		$cmname =    $_POST['cmname'];
		$rel    =    $_POST['rel'];
		$cssno  =    $_POST['cssno'];
		$cbd    =    $_POST['cbd'];
		$cgen   =    $_POST['cgen'];
		$mobno  =    $_POST['mobno'];
		$sched  =    $_POST['sched'];
$query = "INSERT INTO funeralbenifit( SS_Number, Reference_Number, DateOfBirth, Gender, Lastname, FirstName, MiddleName, 	Contact_Number, Address, Barangay, City, Civil_Status, PlaceOfDeath, DateOfInterment, PlaceOfInterment, ClaimantLastname, ClaimantFirstname, ClaimantMiddlename, Relation, ClaimantSS_Number, ClaimantBirthDate, ClaimantGender, ClaimantMobileNo) VALUES ('$ssno','$ref','$bd','$gen','$lname','$fname','$mname','$con','$add','$brgy','$cty','$status','$death','$inter','$pinter','$clname','$cfname','$cmname','$rel','$cssno','$cbd','$cgen','$mobno')";
    
    $conn->exec($query);
    

    $loanhistoryInsert = "INSERT INTO loan_history(SS_number,loan_date,TypeOfLoan) VALUES('$ssno','$sched','Funeral Benifit')"; 
    $conn->exec($loanhistoryInsert); 

   $update = "UPDATE member_registration SET LoanSchedule='$sched' WHERE CRN_SSNumber='$ssno'";
   $conn->exec($update); 

    $delete ="DELETE FROM funeralbenifitrequest WHERE SS_Number='$ssno'";
    $conn->exec($delete);
}
catch(PDOException $e)
    {
    echo $query . "<br>" . $e->getMessage();
    }

?>