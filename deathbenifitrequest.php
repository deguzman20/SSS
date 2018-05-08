 <?php
$conn = mysqli_connect("localhost","root","","sss");
$ssno 	= $_POST['ssno'];
$lname 	= $_POST['lname'];
$fname 	= $_POST['fname'];
$mname 	= $_POST['mname'];
$bd    	= $_POST['bd'];
$death 	= $_POST['death'];
$place 	= $_POST['place'];
$cty   	= $_POST['cty'];
$claim 	= $_POST['claim'];
$status = $_POST['status'];
$cssnum = $_POST['cssnum'];
$clname = $_POST['clname'];
$cfname = $_POST['cfname'];
$cmname = $_POST['cmname'];
$cadd   = $_POST['cadd'];
$cbd    = $_POST['cbd'];
$cgen   = $_POST['cgen'];
$rel    = $_POST['rel'];
$ccon   = $_POST['ccon'];

$query = "INSERT INTO deathbenifitrequest(SS_Number,Last_Name,First_Name,Middle_Name,DateOfBirth,DateOfDeath,PlaceOfDeath,City_Province,TypeOfClaim,CivilStatus,ClaimantSSNumber,ClaimantLastName,ClaimantFirstName,ClaimantMiddleName,ClaimantAddress,ClaimantDateOfBirth,ClaimantGender,RelationShipToMember,ContactNumber) VALUES('$ssno','$lname','$fname','$mname','$bd','$death','$place','$cty','$claim','$status','$cssnum','$clname','$cfname','$cmname','$cadd','$cbd','$cgen','$rel','$ccon')";
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