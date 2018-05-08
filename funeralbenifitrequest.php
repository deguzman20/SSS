<?php
$conn = mysql_connect("localhost","root","","sss");
$ssno = $_POST['ssno'];
$ref  = $_POST['ref'];
$bd   = $_POST['bd'];
$gen  = $_POST['gen'];
$lname= $_POST['lname'];
$fname= $_POST['fname'];
$mname= $_POST['mname'];
$con  = $_POST['con'];
$add  = $_POST['add'];
$brgy = $_POST['brgy'];
$cty  = $_POST['cty'];
$status= $_POST['status'];
$death = $_POST['death'];
$inter = $_POST['inter'];
$pinter= $_POST['pinter'];
$clname= $_POST['clname'];
$cfname= $_POST['cfname'];
$cmname= $_POST['cmname'];
$rel   = $_POST['rel'];
$cssno = $_POST['cssno'];
$cbd   = $_POST['cbd'];
$cgen  = $_POST['cgen'];
$mobno = $_POST['mobno'];
$query = "INSERT INTO deathbenifitrequest(SS_Number) VALUES('$ssno')";
$runquery = mysqli_query($conn,$query);
?>