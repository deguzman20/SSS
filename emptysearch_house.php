
<?php 
$conn = mysqli_connect("localhost","root","","sss");
  $query   = "SELECT * FROM household_registration";
  $result  = mysqli_query($conn,$query);

    
  while ($rows = mysqli_fetch_array($result)) 
  {      
       $ID      = $rows['ID'];
       $dat_covs = $rows['Date_Coverage'];
       $lnd     = $rows['Landline_Number'];
       $mob     = $rows['Mobile_Number'];
       $pref    = $rows['Preferred_User_ID'];
       $em      = $rows['HR_Email_Address'];     
 ?>    

<tr id="record">
  <td style="width:3%;position:relative;left:10px"><?php echo $ID ?></td>
  <td style="width:14%;position:relative;left:10px"><?php echo $dat_covs?></td>
  <td style="width:14%;position:relative;left:50px"><?php echo $lnd?></td>
  <td style="width:14%;position:relative;left:15px"><?php echo $mob?></td>
  <td style="width:20%;position:relative;left:15px"><?php echo $pref?></td>
  <td><?php echo $em?></td>
    <td>
     <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal1-<?php echo $ID?>"><span class="glyphicon glyphicon-edit"></span> Edit</button>
    
     <div class="modal fade modal" id="editModal1-<?php echo $ID?>">
         <div class="modal-dialog">
             <div class="modal-content">
                   <div class="modal-header" style="background-color:#016194;">
                      <button class="close" data-dismiss="modal" style="color:white">&times;</button> <h1 style="color:white"><span class="glyphicon glyphicon-edit"></span> Edit</h1>                      
                   </div>
                   <div class="modal-body">
                      <b>ID:</b>
                      <input type="text" id="id-<?php echo $ID?>" value="<?php echo $ID?>" class="form-control" disabled="disabled">
                      <b>Date Coverage:</b>
                      <input type="date" id="dats-<?php echo $ID?>" value="<?php echo $dat_covs?>" class="form-control">
                      <b>Landline No:</b>
                      <input type="text" id="lnds-<?php echo $ID?>" value="<?php echo $lnd?>" class="form-control">
                       <b>Mobile No:</b>
                       <input type="text" id="mob-<?php echo $ID?>" value="<?php echo $mob?>" class="form-control">
                       <b>Preferred User ID:</b>
                       <input type="text" id="prefs-<?php echo $ID?>" value="<?php echo $pref?>" class="form-control">
                       <b>HR Email Address</b>
                       <input type="text" id="hrem-<?php echo $ID?>" value="<?php echo $em?>" class="form-control">
                   </div>
                   <div class="modal-footer">
                       <button class="btn btn-success btn-block" id="btn-Update" type="submit" onclick="updateData2(<?php echo $ID?>)" data-dismiss="modal"><span class="glyphicon glyphicon-edit"  ></span> Edit</button>
                   </div>
             </div>
         </div>
     </div>
    </td>
 </tr> 
<?php

}
?>