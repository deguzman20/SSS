<?php 
$conn = mysqli_connect("localhost","root","","sss");
$ssno    = $_POST['ssno'];
$fname   = $_POST['fname'];
$mname   = $_POST['mname'];
$lname   = $_POST['lname'];
$address = $_POST['add'];
$bd      = $_POST['bd'];
$gender  = $_POST['gen'];
$cp      = $_POST['no'];
$savequery ="INSERT INTO salaryloanrequest(SS_number,firstname,middlename,lastname,address,birthdate,gender,cp) VALUES('$ssno','$fname','$mname','$lname','$address','$bd','$gender','$cp')";
$runquery = mysqli_query($conn,$savequery);
if(!$runquery)
{
	echo 'save not successful';
}
else
{
	echo 'save successful';
}
?>