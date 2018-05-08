<?php
try
{

$conn = new PDO("mysql:host=localhost;dbname=sss", "root");

$ssno = $_POST['ssno'];
$ref  = $_POST['ref'];
$bd   = $_POST['bd'];
$gen  = $_POST['gen'];
$lname= $_POST['lname'];
$fname= $_POST['fname'];
$mname= $_POST['mname'];
$con  = $_POST['con'];
$add  = $_POST['add'];
$brgy = $_POST['brgy'];
$cty  = $_POST['cty'];
$status= $_POST['status'];
$death = $_POST['death'];
$inter = $_POST['inter'];
$pinter= $_POST['pinter'];
$clname= $_POST['clname'];
$cfname= $_POST['cfname'];
$cmname= $_POST['cmname'];
$rel   = $_POST['rel'];
$cssno = $_POST['cssno'];
$cbd   = $_POST['cbd'];
$cgen  = $_POST['cgen'];
$mobno = $_POST['mobno'];
    $query = "INSERT INTO funeralbenifitrequest (SS_Number,Reference_Number,DateOfBirth,Gender,Lastname,FirstName,MiddleName,Contact_Number,Address,Barangay,City,Civil_Status,PlaceOfDeath,DateOfInterment,PlaceOfInterment,ClaimantLastname,ClaimantFirstname,ClaimantMiddlename,Relation,ClaimantSS_Number,ClaimantBirthDate,ClaimantGender,	ClaimantMobileNo) VALUES('$ssno','$ref','$bd','$gen','$lname','$fname','$mname','$con','$add','$brgy','$cty','$status','$death','$inter','$pinter','$clname','$cfname','$cmname','$rel','$cssno','$cbd','$cgen','$mobno')";
    if($conn->exec($query))
    {
    	echo "Request Send Succesful";
    }
    else
    {
    	echo 'Request Send Failed';
    }
}
catch(PDOException $e)
    {
    echo $query . "<br>" . $e->getMessage();
    }
?>