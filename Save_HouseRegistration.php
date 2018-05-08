 <?php
$conn = mysqli_connect("localhost","root","","sss");
$dat_covs 	=	 mysqli_real_escape_string($conn,$_POST['dat_covs']);
$landlines 	=	 mysqli_real_escape_string($conn,$_POST['landlines']);
$mobNo  	=	 mysqli_real_escape_string($conn,$_POST['mobno']);
$hr_emp 	=	 mysqli_real_escape_string($conn,$_POST['hr_emp']);
$prefer 	=    mysqli_real_escape_string($conn,$_POST['prefer']); 
$query= "INSERT INTO household_registration(Date_Coverage,Landline_Number,Mobile_Number,HR_Email_Address,Preferred_User_ID	) VALUES('$dat_covs','$landlines','$mobNo','$hr_emp','$prefer')";
$result= mysqli_query($conn,$query);

if($result)
{
   echo "<div class='alert alert-success'><span class='glyphicon glyphicon-ok'></span> Saved Successful</div>";
}
?>