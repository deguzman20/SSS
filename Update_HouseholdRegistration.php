<?php
$conn 	= mysqli_connect('localhost','root','','sss');
$id 	= $_POST['id'];
$dats   = $_POST['dats'];
$lnd    = $_POST['lnd'];
$mob    = $_POST['mobno'];
$pref   = $_POST['prefs'];
$hrem   = $_POST['hrem'];

$query="UPDATE household_registration SET Date_Coverage='$dats',Landline_Number='$lnd',Mobile_Number='$mob',Preferred_User_ID='$pref',HR_Email_Address='$hrem' WHERE ID='$id'";
$runquery =mysqli_query($conn,$query);
if($runquery)
{
	echo 'Update Successful';
}
else
{
	echo 'Failed To Update';
}
?>