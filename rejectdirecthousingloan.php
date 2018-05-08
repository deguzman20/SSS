
<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=sss","root","");
    $id = $_POST['ID'];

    $sql ="DELETE FROM directhousingloan_request WHERE ID='$id'";
     
    $conn->exec($sql);
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

?>