
<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=sss", "root", "");
    $ID = $_POST['ID'];
$query = "DELETE FROM deathbenifitrequest WHERE ID='$ID'";    
    $conn->exec($query);
    }
catch(PDOException $e)
    {
    echo $query . "<br>" . $e->getMessage();
    }

?>
