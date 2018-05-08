<?php
$conn = mysqli_connect("localhost","root","","sss");
  $dat  =  $_POST['dat'];
  $add1 =  $_POST['add1'];
  $add2 =  $_POST['add2'];
  $cty =   $_POST['cty'];
  $pos =   $_POST['pos'];
  $lnd=    $_POST['lnd'];
  $mob =   $_POST['mob'];
  $pref =  $_POST['pref'];
  $conem = $_POST['conem'];
  $query="UPDATE  employer_registration SET Date_Coverage='$dat',Address_Line1='$add1',Address_Line2='$add2',CityProvince='$cty',PostalCode='$pos',Landline_No='$lnd',Mobile_No='$mob',CompanyEmailAd='$conem' WHERE PreferredUserID='$pref'";
if(mysqli_query($conn,$query))
{
	echo 'success';
}
else
{
	echo 'not success';
}
?>