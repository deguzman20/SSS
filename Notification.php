<?php
$value = $_POST['value'];


$conn= mysqli_connect("localhost","root","","sss");
                $query  = "SELECT * FROM employer_registration";
                $query1 = "SELECT * FROM member_registration";
                $query2 = "SELECT * FROM household_registration"; 

                $run_query = mysqli_query($conn,$query);
                $run_query1 = mysqli_query($conn,$query1); 
                $run_query2 = mysqli_query($conn,$query2); 

                $count = mysqli_num_rows($run_query);
                $count1 = mysqli_num_rows($run_query1);
                $count2 = mysqli_num_rows($run_query2);
            echo ($count+$count1+$count2)-$value;
            ?>