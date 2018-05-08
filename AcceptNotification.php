<?php
$conn =mysqli_connect("localhost","root","","sss");
$id = $_POST['id'];
$selectquery = "SELECT * FROM requestchange WHERE ID='$id'";
$runquery = mysqli_query($conn,$selectquery);
while($rows = mysqli_fetch_array($runquery))
{
	$iD    = $rows["ID"];
	$crn   = $rows['CRN_SSNumber'];
	$fname = $rows['firstname'];
	$mname = $rows['middlename'];
	$lname = $rows['lastname'];
	$bd    = $rows['birthday'];
	$em    = $rows['email_address'];
	$log   = $rows['log'];

}
$update_query = "UPDATE member_registration SET  firstname='$fname', middlename='$mname',lastname='$lname',birthday='$bd',email_address='$em' WHERE CRN_SSNumber='$crn'";
$runupdatequery=mysqli_query($conn,$update_query);
if($runupdatequery)
{
   echo 'Request was Approved';
}
?>

<?php
$conn =mysqli_connect("localhost","root","","sss");
$id = $_POST['id'];


$deletequery="DELETE FROM requestchange WHERE ID  ='$id'";
$rundeletequery =mysqli_query($conn,$deletequery);
?>