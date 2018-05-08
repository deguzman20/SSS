<?php
$conn = mysqli_connect("localhost","root","","sss");
$ID = $_POST['ID'];
$query ="DELETE FROM funeralbenifitrequest WHERE ID='$ID'";
mysqli_query($conn,$query);
?>