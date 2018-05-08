<table class="table table-condensed">
<tr class="bg-primary">
  <td>SS Number</td>
  <td>Lastname</td>
  <td>Firstname</td>
  <td>Middlename</td>
  <td>Action</td>
</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sss";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT * FROM retirementbenifit";
$result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)) {
   //mga na fetch na data galing kay database
 	  //-------------------------------------------------//
  	                      
			  $ID = $row['ID'];
			  $ssno = $row['SS_Number'];
			  $lname = $row['Lastname'];
			  $fname = $row['Firstname'];
			  $mname = $row['Middlename'];
			  $add   = $row['Address'];
			  $bd    = $row['DateOfBirth'];
			  $place = $row['PlaceOfBirth'];
			  $gender = $row['Gender'];
			  $telno  = $row['Telephone_Number'];
			  $mobno  = $row['Mobile_Number'];

//----------------------------------------------------//
?>
<tr>
	<td><?php echo $ssno?></td>
	<td><?php echo $lname?></td>
	<td><?php echo $fname?></td>
	<td><?php echo $mname?></td>
	<td>
		<button type="button" class="btn btn-info" data-toggle="modal" data-target="#retirement-<?php echo $ID?>"><span class="glyphicon glyphicon-eye-open"></span></button>
		<div class="fade modal" id="retirement-<?php echo $ID?>">
                          <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                 <div class="modal-header">
                                     <div class="modal-header">
                                             <div class="col-md-1">
                                                <img src="image/SSS-Abroad.jpg" width="150px" height="80px">
                                              </div>
                                              <div class="col-md-11">
                                              <button class="close pull-right" data-dismiss="modal">&times;</button>
                                              <p style="text-align:center; font-size:13px; font-family:Arial; font-size:18px">Republic of the Philippines</p>
                                              <p style="text-align:center;font-family:Arial; font-size:15px; font-weight:bold">SOCIAL SECURITY SYSTEM</p>
                                              <p style="text-align:center;font-family:Arial; font-size:20px; font-weight:bold">RETIREMENT CLAIM APPLICATION</p>

                                              </div>
                                             
                                  
                                      </div>
                                 <div class="modal-body">
                                      <div class="col-md-12">
                                          <h5>A. MEMBER'S INFORMATION</h5> 
                                      </div>
                                      <div class="col-md-3">
                                        <b>SS Number</b><input type="text" id="ssno<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $ssno?>">
                                      </div>
                                      <div class="col-md-3">
                                        <b>Name ( Last name ) </b><input type="text" id="lname<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $lname?>">
                                      </div>
                                      <div class="col-md-3">
                                        <b>( First name )</b><input type="text" id="fname<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $fname?>">
                                      </div>
                                      <div class="col-md-3">
                                        <b>( Middle name )</b><input type="text" id="mname<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $mname?>">
                                      </div>
                                       
                                      <div class="col-md-3">
                                        <b>Address</b><input type="text" id="add<?php echo $ID?>" disabled="disabled" class="form-control" value="<?php echo $add?>">
                                      </div> 
                                      
                                      <div class="col-md-3">
                                        <b>Date of Birth</b><input type="date" id="bd<?php echo $ID?>" class="form-control" value="<?php echo $bd?>" disabled="disabled">
                                      </div> 

                                      <div class="col-md-3">
                                        <b>Place of Birth</b><input type="text" id="place<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $place?>">
                                      </div>

                                      <div class="col-md-3">
                                        <b>Gender</b><br>
                                        <select id="gen<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $gen?>">
                                          <option>Male</option>
                                          <option>Female</option>
                                        </select>
                                      </div>

                                      
                                      <div class="col-md-3">
                                        <b>Telephone Number</b><input type="text" id="telno<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $telno?>">
                                      </div>
                                      <div class="col-md-3">
                                        <b>Mobile Number</b><input type="text" id="mobno<?php echo $ID?>" class="form-control" value="<?php echo $mobno?>" disabled="disabled">
                                      </div>
                                                                          
                                 </div>
                                 <div class="modal-footer" style="border:0">
                                     
                                 </div>
                              </div>
                          </div>
                         </div>
          </div> 
	</td>
</tr>
<?php
    }
?>
</table>
