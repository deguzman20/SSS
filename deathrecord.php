<table class="table table-condensed">
<tr class="bg-primary">
  <td>SS Number</td>
  <td>Lastname</td>
  <td>Firstname</td>
  <td>Middlename</td>
  <td>Date of Birth</td>
  <td>Action</td>
</tr>
<?php
$conn = mysqli_connect("localhost","root","","sss");
$query = "SELECT * FROM deathbenifitrequest";
$runquery = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($runquery))
{
  $ID   	= $row['ID'];	
  $ssno 	= $row['SS_Number'];
  $lname 	= $row['Last_Name'];
  $fname 	= $row['First_Name'];
  $mname 	= $row['Middle_Name'];
  $bd   	= $row['DateOfBirth'];
  $death 	= $row['DateOfDeath'];
  $pdeath 	= $row['PlaceOfDeath'];
  $cty 		= $row['City_Province'];
  $claim 	= $row['TypeOfClaim'];
  $status 	= $row['CivilStatus'];
  $cssno 	= $row['ClaimantSSNumber'];
  $clname 	= $row['ClaimantLastName'];
  $cfname 	= $row['ClaimantFirstName'];
  $cmname 	= $row['ClaimantMiddleName'];
  $cadd 	= $row['ClaimantAddress'];
  $cbd  	= $row['ClaimantDateOfBirth'];
  $cgen 	= $row['ClaimantGender'];
  $rel 		= $row['RelationShipToMember'];
  $con 		= $row['ContactNumber'];	
?>
  <tr>
   <td><?php echo $ssno?></td>
   <td><?php echo $lname?></td>
   <td><?php echo $fname?></td>
   <td><?php echo $mname?></td>
   <td><?php echo $bd?></td>
   <td>
   <div class="btn-group">
   	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#death-<?php echo $ID?>"><span class="glyphicon glyphicon-eye-open"></span></button>
   </div>
      <div class="fade modal" id="death-<?php echo $ID?>">
                            <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                   <div class="modal-header"> 
                                      <div class="col-md-1">
                                         <img src="image/SSS-Abroad.jpg" width="150px" height="80px">
                                      </div>
                                      <div class="col-md-11">
                                        <button class="close pull-right" data-dismiss="modal">&times;</button> 
                                        <p style="text-align:center;font-family:Arial; font-size:13px">Republic of the Philippines</p>
                                        <p style="text-align:center; font-family:Arial; font-size:15px; font-weight:bold">SOCIAL SECURITY SYSTEM</p>
                                        <p style="text-align:center; font-family:Arial; font-size:20px; font-weight:bold">DEATH CLAIM APPLICATION</p>      
                                      </div> 
                                   </div>
 
                                   <div class="modal-body">
                                          
                                              <h5>MEMBER'S INFORMATION</h5>
                                       <div class="col-md-3">
                                                <b>SS Number</b>&nbsp;<input type="text" id="ssn<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $ssno?>">
                                       </div> 
                                       <div class="col-md-3">
                                                <b>Name ( Last name ) </b><input type="text" id="lnames<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $lname?>">
                                       </div>    
                                       <div class="col-md-3">
                                                <b>( First name ) </b><input type="text" id="fnames<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $fname?>">
                                       </div>
                                        <div class="col-md-3">
                                                <b>( Middle name ) </b><input type="text" id="mnames<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $mname?>">
                                        </div>    
                                       <div class="col-md-3">
                                                <b>Date of Birth</b><input type="date" id="bds<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $bd?>">
                                        </div> 
                                        <div class="col-md-3">
                                                <b>Date of Death </b><input type="date" id="deaths<?php echo $ID?>" class="form-control" value="<?php echo $death?>" disabled="disabled">
                                        </div> 
                                        <div class="col-md-3">
                                                <b>Place of Death</b><input type="text" id="places<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $death?>">
                                        </div> 
                                        <div class="col-md-3">
                                                <b>(City/Province)</b><input type="text" id="ctys<?php echo $ID?>" class="form-control" value="<?php echo $cty?>" disabled="disabled">
                                        </div> 
                                        <div class="col-md-3">
                                                <b>Type of Claim</b>
                                                <select id="claims<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $claim?>"> 
                                                  <option>Social Security</option>
                                                  <option>Employee's Compesation</option>
                                                </select>
                                                <br>
                                        </div>
                                        <div class="col-md-3">
                                                <b>Civil Status</b>
                                                <select id="statuss<?php echo $ID?>" disabled="disabled" class="form-control" value="<?php echo $status?>">
                                                  <option>Single</option>
                                                  <option>Married</option>
                                                  <option>Widow/Widower</option>
                                                  <option>Legally Seperated</option>
                                                </select>
                                        </div> 
                                        <div class="col-md-12"><h5>CLAIMANTS INFORMATION</h5></div>
                                       <div class="col-md-3"><b>SS Number</b><input type="text" id="cssnums<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $cssno?>">
                                       </div>
                                       <div class="col-md-3"><b>Claimant ( Last name )</b><input type="text" id="clnames<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $clname?>">
                                       </div> 
                                       <div class="col-md-3"><b>( First name )</b><input type="text" id="cfnames<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $cfname?>">
                                       </div>

                                       <div class="col-md-3"><b>( Middle name )</b><input type="text" id="cmnames<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $cmname?>">
                                       </div>
                                       <div class="col-md-3"><b>Address</b><input type="text" id="cadds<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $cadd?>">
                                       </div> 
                                       <div class="col-md-3"><b>Date of Birth</b><input type="date" id="cbds<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $cbd?>">
                                       </div>
                                       <div class="col-md-3"><b>Gender</b><br>
                                          <select id="cgens<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $cgen?>">
                                            <option>Male</option>
                                            <option>Female</option>
                                          </select>
                                       </div>
                                       <div class="col-md-3"><b>Relationship to member</b><input type="text" id="rels<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $rel?>"></div>
                                           <div class="col-md-4"><b>Contact no</b><input type="text" id="cons<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $con?>"></div>
                                        </div>
                                   
                                   <div class="modal-footer" style="border:solid 0px">       
        
                                  </div>
                            </div>
                         </div>
   </td>
  </tr>
<?php
}
?>
</table>