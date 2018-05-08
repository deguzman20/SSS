<?php
$conn = mysqli_connect("localhost","root","","sss");
$ID = $_POST['ID'];
$delete = "DELETE FROM dissabilitybenifitrequest WHERE ID='$ID'";
mysqli_query($conn,$delete);
?>