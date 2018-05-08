
<?php
$conn = new mysqli("localhost","root","","sss");
$ssno     	=     $_POST['ssno'];
$lname     	=     $_POST['lname'];
$fname     	=     $_POST['fname'];
$mname     	=     $_POST['mname'];
$add     	=     $_POST['add'];
$bd     	=     $_POST['bd'];
$place     	=     $_POST['place'];
$gen     	=     $_POST['gen'];
$telno     	=     $_POST['telno'];
$mobno     	=     $_POST['mobno'];
$sched      =     $_POST['sched'];
//insert data to retirementbenifit
$query = "INSERT INTO retirementbenifit(SS_Number, Lastname, Firstname, Middlename, Address, DateOfBirth, PlaceOfBirth, Gender, Telephone_Number, Mobile_Number) VALUES ('$ssno','$lname','$fname','$mname','$add','$bd','$place','$gen','$telno','$mobno')";
mysqli_query($conn,$query);

$loanhistoryInsert = "INSERT INTO loan_history(SS_number,loan_date,TypeOfLoan) VALUES('$ssno','$sched','Retirement Benifit')"; 
    mysqli_query($conn,$loanhistoryInsert); 

   $update = "UPDATE member_registration SET LoanSchedule='$sched' WHERE CRN_SSNumber='$ssno'";
   mysqli_query($conn,$update);


//delete data from retirement benifit request
$delete = "DELETE FROM retirementbenifitrequest WHERE SS_Number='$ssno'";
mysqli_query($conn,$delete);


?>