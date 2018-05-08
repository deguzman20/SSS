<?php
$conn = mysqli_connect("localhost","root","","sss");

$dat_cov       = mysqli_real_escape_string($conn,$_POST['dat_cov']);
$add_ln1       = mysqli_real_escape_string($conn,$_POST['add_ln1']);
$add_ln2       = mysqli_real_escape_string($conn,$_POST['add_ln2']);
$ctypro        = mysqli_real_escape_string($conn,$_POST['ctypro']);
$pos_cd        = mysqli_real_escape_string($conn,$_POST['pos_cd']);
$lnum          = mysqli_real_escape_string($conn,$_POST['lnum']);
$mnum          = mysqli_real_escape_string($conn,$_POST['mnum']);
$pref          = mysqli_real_escape_string($conn,$_POST['pref']);
$com_email     = mysqli_real_escape_string($conn,$_POST['com_email']);
//insert data
$query = "INSERT INTO employer_registration(Date_Coverage,Address_Line1,Address_Line2,CityProvince,PostalCode,Landline_No,Mobile_No,PreferredUserID,CompanyEmailAd ) VALUES('$dat_cov','$add_ln1','$add_ln2','$ctypro','$pos_cd','$lnum','$mnum','$pref','$com_email')"; 
$result=mysqli_query($conn,$query);
if($result)
{
     echo "<div class='alert alert-success'><span class='glyphicon glyphicon-ok'></span> Saved Successful</div>";
}     
?>