<?php
$conn = mysqli_connect("localhost","root","","sss");
$id    = $_POST['id'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$bd    = $_POST['bd'];
$em    = $_POST['em'];
$crn   = $_POST['crn'];
$query = "SELECT * FROM member_registration WHERE ID='$id'";
$runquery = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($runquery))
{
	$ID    = $row['ID']; 
	$Crn   = $row['CRN_SSNumber'];
	$Fname = $row['firstname'];	
	$Mname = $row['middlename'];
	$Lname = $row['lastname'];
	$Bd    = $row['birthday'];
	$Em    = $row['email_address'];
}	

//notification activitylog

//kapag may pinalitan sa textbox value
if($Fname!=$fname || $Mname!=$mname || $Lname!=$lname || $Bd!=$bd || $Em!=$em || $Crn!=$crn)
	{
		//isang linya ng if else statement condition
	    $log   = $Fname." want to change";
       
     	  $cRn   = $Crn   != $crn   ? ", CRN_SSNumber":"";
         
        $fName = $Fname != $fname ? ", Firstname":""; 
        
        $mName = $Mname != $mname ? ", Middlename":"";
 
        $lName = $Lname != $lname ? ", Lastname":"";

        $bD    = $Bd    != $bd    ? ", Birthdate":"";

        $eMa    = $Em   != $em    ? ", Email Address":"";
          //ilalagay ang mga value sa array
     	$record =  array($log, $cRn, $fName, $mName, $lName, $bD, $eMa);
   	  $string = $record[0]."".$record[1]." ".$record[2]." ".$record[3]." ".$record[4]." ".$record[5]." ".$record[6]; 
   	  	
                     $savequery = "INSERT INTO requestchange(CRN_SSNumber,firstname,middlename,lastname,birthday,email_address,log) VALUES('$crn','$fname','$mname','$lname','$bd','$em','$string')";
   						 $runquery=mysqli_query($conn,$savequery);
    					 if(!$runquery)
   						 {
    						echo 'Request Not Send Successful';
				       	 }
    					 else
    					 {
    						echo 'Request Send Successful';
    					 } 		
 }
else
{
	echo 'nothing change';
}

?>