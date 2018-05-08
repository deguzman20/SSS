<?php
$conn = mysqli_connect("localhost","root","","sss");
$query = "SELECT * FROM requestchange";
$result = mysqli_query($conn,$query);
if($count=mysqli_num_rows($result))
{
	echo $count;
}

?>