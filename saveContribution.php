
 <?php
 $conn = mysqli_connect('localhost','root','','sss');
$ssno  = $_POST['ssno'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$date  = $_POST['date'];
$amount = $_POST['amount'];

$query = "INSERT INTO listofcontribution(firstname, middlename, lastname, SS_Number, AmountOfContribution, DateOfContribution) VALUES ('$fname','$mname','$lname','$ssno','$amount','$date')";
mysqli_query($conn,$query);
 ?>