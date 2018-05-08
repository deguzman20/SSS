
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sss";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $ssno = $_POST['ssno'];
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$add   = $_POST['add'];
	$st    = $_POST['st'];
	$brgy  = $_POST['brgy'];
	$cty   = $_POST['cty'];
	$con   = $_POST['con'];
	$gen   = $_POST['gen'];
	$claim = $_POST['claim'];
	$tin   = $_POST['tin'];
    $sched = $_POST['sched'];
    $query = "INSERT INTO disabilitybenifit(SS_Number, Lastname, Firstname, Middlename, Address, Street, Barangay, City, Contact_Number, Gender, TypeOfClaim, TIN) VALUES ('$ssno','$lname','$fname','$mname','$add','$st','$brgy','$cty','$con','$gen','$claim','$tin')";
    $conn->exec($query);

    $loanhistoryInsert = "INSERT INTO loan_history(SS_number,loan_date,TypeOfLoan) VALUES('$ssno','$sched','Disability Benifit')"; 
    $conn->exec($loanhistoryInsert); 

   	$update = "UPDATE member_registration SET LoanSchedule='$sched' WHERE CRN_SSNumber='$ssno'";
   	$conn->exec($update);

   	$delete= "DELETE FROM dissabilitybenifitrequest WHERE SS_Number='$ssno'";
   	$conn->exec($delete); 

    }
catch(PDOException $e)
    {
    echo $query . "<br>" . $e->getMessage();
    }
?>