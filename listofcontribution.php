
  <table class="table table-condensed " id="contribution_record">
                        
                        <tr class="bg-primary">
                           <td>Fullname</td>
                           <td>SS Number</td>
                           <td>Amount of Contribution</td>
                           <td>Date of Contribution</td>
                        </tr>
      <?php
       $conn = mysqli_connect('localhost','root','','sss');
       $query = "SELECT * FROM listofcontribution";
       $runquery = mysqli_query($conn,$query);
       while($row = mysqli_fetch_array($runquery))
       {
       	  $fname = $row['firstname'];
       	  $mname = $row['middlename'];
       	  $lname = $row['lastname'];
       	  $ssno  = $row['SS_Number'];
       	  $amount = $row['AmountOfContribution'];
       	  $date   = $row['DateOfContribution'];
          $fullname = $fname." ".$mname." ".$lname;
       	?>
         <tr>
            <td><?php echo $fullname?></td>
            <td><?php echo $ssno?></td> 
            <td>&#8369;&nbsp;<?php echo $amount?></td>
            <td><?php echo $date?></td> 
         </tr>
       <?php	
       } 
      ?>                  
      
  </table>
