<?php
$conn =mysqli_connect("localhost","root","","sss");
$ID = $_POST['ID'];
$query = "DELETE FROM educationalassistanceloan_request WHERE ID='$ID'";
$run_query = mysqli_query($conn,$query);
if(!$run_query)
{
  echo 'error';
}
else
{
	
  echo 'Data was Deleted successfuly';
}
?>