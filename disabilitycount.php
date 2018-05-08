<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sss";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM dissabilitybenifitrequest";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo mysqli_num_rows($result);
} else {
    echo "0";
}
$conn->close();
?>