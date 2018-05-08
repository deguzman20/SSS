<?php
$conn=mysqli_connect('localhost','root','','sss');
session_start();
    $user=mysqli_real_escape_string($conn,$_POST['user']);
	$pass=mysqli_real_escape_string($conn,$_POST['pass']);
	$user_type=mysqli_real_escape_string($conn,$_POST['usertype']);
//for admin
if($user_type=="Admin")
{
	$query="SELECT * FROM admin WHERE username='$user' AND password='$pass'";
	$result=mysqli_query($conn,$query);
	if(mysqli_num_rows($result)==1)
	{
		echo "<div class='text-success'><b>Correct</b></div>";
	$_SESSION['username'] = $user;
	$_SESSION['password'] = $pass;
     echo '<script>
              window.location.href="AdminDashBoard.php";
           </script>';
	}
else
	{
	echo "<div class='text-danger'><b>Incorrect Username and Password</b></div>";
	}
}
//for member
else if($user_type=="Member")
{
$query="SELECT * FROM member_registration WHERE CRN_SSNumber='$user' AND CRN_SSNumber='$pass'";
	$result=mysqli_query($conn,$query);
	if(mysqli_num_rows($result)==1)
	{
		echo "<div class='text-success'><b>Correct</b></div>";
	 $row=mysqli_fetch_array($result);
	 //ifefetch ang data
	 $ID   = $row['ID'];
	 $CRN   =$row['CRN_SSNumber'];
	 $fname = $row['firstname'];
	 $mname = $row['middlename'];
	 $lname = $row['lastname'];
	 $bd    = $row['birthday'];
	 $em    = $row['email_address'];
	 $sched = $row['LoanSchedule'];
    //ipapassed ang data sa SESSION papuntang kabilang page and also to display the information based on the user ID input from login form
	$_SESSION['identification']= $ID;
	$_SESSION['crn']           =$CRN; 
	$_SESSION['firstname']     = $fname;
	$_SESSION['middlename']    = $mname;
	$_SESSION['lastname']      = $lname;
	$_SESSION['birthday']      = $bd;
	$_SESSION['email_address'] = $em;
	$_SESSION['sched']     = $sched;
	 echo '<script>
              window.location.href="user.php";
        </script>';
	}
else
	{
	echo "<div class='text-danger'><b>Incorrect Username and Password</b></div>";
	}	
}
//for employee
else if($user_type=="Employee")
{
	$query="SELECT * FROM employer_registration WHERE PreferredUserID='$user' AND PreferredUserID='$pass'";
	$result=mysqli_query($conn,$query);
	if(mysqli_num_rows($result)==1)
	{
		echo "<div class='text-success'><b>Correct</b></div>";
		 $row=mysqli_fetch_array($result);
	      $pref = $row['PreferredUserID'];
	// $_SESSION['username'] = $user;
	// $_SESSION['password'] = $pass;
	      $_SESSION['pref'] = $pref;
     echo '<script>
              window.location.href="Employee.php";
        </script>';
	}
else
	{
	echo "<div class='text-danger'><b>Incorrect Username and Password</b></div>";
	}
}
?>
