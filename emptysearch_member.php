
<?php 
$conn = mysqli_connect("localhost","root","","sss");
  $query   = "SELECT * FROM member_registration";
  $result  = mysqli_query($conn,$query);

  
  while ($rows = mysqli_fetch_array($result)) 
  {      
       $ID    = $rows['ID'];
       $crn   = $rows['CRN_SSNumber'];
       $fname = $rows['firstname'];
       $mname = $rows['middlename'];
       $lname = $rows['lastname'];
       $bd    = $rows['birthday'];
       $em    = $rows['email_address'];
 ?>    

<tr id="record">
  <td style="width:5%;position:relative;left:10px;"><?php echo $ID ?></td>
  <td style="width:17%;position:relative;left:40px"><?php echo $crn?></td>
  <td style="width:15%;position:relative;left:10px"><?php echo $fname?></td>
  <td style="width:17%;position:relative;left:15px"><?php echo $mname?></td>
  <td style="width:17%;position:relative;left:20px"><?php echo $lname?></td>
  <td style="width:18%"><?php echo $bd?></td>
  <td>
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModals-<?php echo $ID?>"><span class="glyphicon glyphicon-edit"></span> Edit</button>
    
     <div class="modal fade modal" id="editModals-<?php echo $ID?>">
        <div class="modal-dialog">
           <div class="modal-content">
                 <div class="modal-header" style="background-color:#016194;">
                  <button type="button" class="close" data-dismiss="modal">
                   <font color="white"> &times;</font>
                  </button>
                   <h2 class="modal-title" style="color:white"><span class="glyphicon glyphicon-edit"></span> Edit</h2>
                 </div>
                 <div class="modal-body">
                     <b>ID:</b>
                     <input type="text" id="id-<?php echo $ID?>" value="<?php echo $ID?>" disabled="disabled">
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;
                     <b>CRN_SSNumber:</b>
                     <input type="text" id="crn-<?php echo $ID?>" value="<?php echo $crn?>">                    
                     <br><br>
                     <b>First Name:</b>
                     <input type="text" id="fname-<?php echo $ID?>" value="<?php echo $fname?>"> 
                     &nbsp;<b>Middle Name:</b>
                     <input type="text" id="mname-<?php echo $ID?>" value="<?php echo $mname?>">
                     <br><br>
                     <b>Last Name:</b>
                     <input type="text" id="lname-<?php echo $ID?>" value="<?php echo $lname?>">
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <b>BirthDate:</b>
                     <input type="date" id="bd-<?php echo $ID?>" value="<?php echo $bd?>">
                     <br><br>
                     <b>Email Address:</b>
                     <input type="text" class="form-control" id="em-<?php echo $ID?>" value="<?php echo $em?>"
                 </div>
                 <div class="modal-footer">
                           <button class="btn btn-success btn-block" id="btn-Update" type="submit" onclick="updateData1(<?php echo $ID?>)" data-dismiss="modal"><span class="glyphicon glyphicon-edit"  ></span> Edit</button>
                 </div>
           </div>
        </div>
     </div> 
  </td>
</tr>
<?php  
  }
 
 ?>
