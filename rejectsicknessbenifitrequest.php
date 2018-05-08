<?php
$conn = mysqli_connect("localhost","root","","sss");
$ID = $_POST['ID'];
$query = "DELETE FROM sicknessbenifitrequest WHERE ID='$ID'";
mysqli_query($conn,$query);
?>