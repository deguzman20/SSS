<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=sss", "root","");
   		$ssno = $_POST['ssno'];
		$lname = $_POST['lname'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$add   = $_POST['add'];
		$bd    = $_POST['bd'];
		$place = $_POST['place'];
		$gen   = $_POST['gen'];
		$telno  = $_POST['telno'];
		$mobno  = $_POST['mobno'];

   $query = "INSERT INTO  retirementbenifitrequest(SS_Number,Lastname,Firstname,Middlename,Address,DateOfBirth,PlaceOfBirth,Gender,Telephone_Number,Mobile_Number) VALUES('$ssno','$lname','$fname','$mname','$add','$bd','$place','$gen','$telno','$mobno')";
    if($conn->exec($query))
    {
    	echo "Request Send Successfully";
    }
    else{
    	echo "Request Send Failed";
    }
    }
catch(PDOException $e)
    {
    echo $query . "<br>" . $e->getMessage();
    }
?>