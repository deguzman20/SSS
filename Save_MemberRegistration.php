<?php
$conn = mysqli_connect("localhost","root","","sss");
$crn    =		mysqli_real_escape_string($conn,$_POST['crn']);
$fname  = 		mysqli_real_escape_string($conn,$_POST['fname']);
$mname 	= 		mysqli_real_escape_string($conn,$_POST['mname']);
$lname	= 		mysqli_real_escape_string($conn,$_POST['lname']);
$bd 	= 		mysqli_real_escape_string($conn,$_POST['bd']);
$em 	= 		mysqli_real_escape_string($conn,$_POST['em']);
$query= "INSERT INTO member_registration(CRN_SSNumber,firstname,middlename,lastname,birthday,email_address) VALUES('$crn','$fname','$mname','$lname','$bd','$em')";
$result= mysqli_query($conn,$query);
if($result)
{
     echo "<div class='alert alert-success'><span class='glyphicon glyphicon-ok'></span> Saved Successful</div>";
}     
?>