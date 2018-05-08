<?php
$conn =mysqli_connect("localhost","root","","sss");
$ID = $_POST['ID'];
$query="DELETE FROM maternitybenifitrequest WHERE ID= '$ID'";
$runquery = mysqli_query($conn,$query);
?>