<table class="table table-condensed">
<tr class="bg-primary">
  <td>SS Number</td>
  <td>Lastname</td>
  <td>Firstname</td>
  <td>Middlename</td>
  <td>Action</td>
</tr>
<?php

$conn = new mysqli("localhost", "root", "", "sss");

$sql = "SELECT * FROM  funeralbenifitrequest";
$result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
     $ID 		= $row['ID'];
     $ssno 		= $row['SS_Number'];
     $ref  		= $row['Reference_Number'];
     $bd  		= $row['DateOfBirth'];
     $gen 		= $row['Gender'];
     $lname 	= $row['Lastname'];
     $fname 	= $row['FirstName'];
     $mname 	= $row['MiddleName'];
     $con 		= $row['Contact_Number'];
     $add 		= $row['Address'];
     $brgy 		= $row['Barangay'];
     $cty 		= $row['City'];
     $status 	= $row['Civil_Status'];
     $death 	= $row['PlaceOfDeath'];
     $inter 	= $row['DateOfInterment'];
     $pinter 	= $row['PlaceOfInterment'];
     $clname 	= $row['ClaimantLastname'];
     $cfname 	= $row['ClaimantFirstname'];
     $cmname 	= $row['ClaimantMiddlename'];
     $rel 		= $row['Relation']; 
     $cssno 	= $row['ClaimantSS_Number'];
     $cbd       = $row['ClaimantBirthDate'];
     $cgen 		= $row['ClaimantGender'];
     $cmob 		= $row['ClaimantMobileNo'];
   ?>
  <tr>
  	<td><?php echo $ssno?></td>
  	<td><?php echo $lname?></td>
  	<td><?php echo $fname?></td>
  	<td><?php echo $mname?></td>
  	<td>
  		<button type="button" class="btn btn-info" data-toggle="modal" data-target="#funeral-<?php echo $ID?>"><span class="glyphicon glyphicon-eye-open"></span></button>
  		  <div class="fade modal" id="funeral-<?php echo $ID?>">
                            <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                        <div class="modal-header">
                                             <div class="col-md-1">
                                                <img src="image/SSS-Abroad.jpg" width="150px" height="80px">
                                              </div>
                                      <div class="col-md-11">
                                        <button class="close pull-right" data-dismiss="modal">&times;</button> 
                                                                                     
                                            <p style="text-align:center;font-family:Arial; font-size:13px">Republic of the Philippines</p>
                                            <p style="text-align:center;font-family:Arial; font-size:15px; font-weight:bold">SOCIAL SECURITY SYSTEM</p>
                                            <p style="text-align:center;font-family:Arial; font-size:20px; font-weight:bold">FUNERAL CLAIM APPLICATION</p>                                               
                                      </div>              
                                        </div>
                                        <div class="modal-body">
                                             <div class="col-md-12"><h5>A. DECEASED MEMBER'S INFORMATION</h5></div>
                                             <div class="col-md-3">
                                                 <b>SS Number</b><input type="text" id="ssno<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $ssno?>">
                                             </div> 
                                             <div class="col-md-3">
                                                 <b>Common reference no</b><input type="text" id="ref<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $ref?>">
                                             </div> 
                                             <div class="col-md-3">
                                                 <b>Date of birth</b><input type="date" id="bd<?php echo $ID?>" class="form-control" class="form-control" disabled="disabled" value="<?php echo $bd?>">
                                             </div> 
                                             <div class="col-md-3">
                                                 <b>Gender</b><br>
                                                 <select id="gen<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $gen?>">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                 </select>
                                             </div>
                                             <div class="col-md-3">
                                                  <b>Name ( Last name )</b><input type="text" id="lname<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $lname?>">  
                                             </div>
                                             <div class="col-md-3">
                                                  <b>( First name )</b><input type="text" id="fname<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $fname?>">  
                                             </div>
                                             <div class="col-md-3">
                                                  <b>( Middle name )</b><input type="text" id="mname<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $mname?>">  
                                             </div>
                                             <div class="col-md-3">
                                                  <b>Contact Number</b><input type="text" id="con<?php echo $ID?>" class="form-control" value="<?php echo $con?>" disabled="disabled">  
                                             </div>
                                             
                                              <div class="col-md-3">
                                                  <b>Address</b><input type="text" id="add<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $add?>">  
                                             </div>
                                             <div class="col-md-3">
                                                  <b>(Barangay/District/Locality) </b><input type="text" id="brgy<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $brgy?>">  
                                             </div>
                                             <div class="col-md-3">
                                                  <b>(City/Province) </b><input type="text" id="cty<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $cty?>">  
                                             </div>
                                             <div class="col-md-3">
                                                <b>Civil status</b>
                                                <select id="status<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $status?>">
                                                  <option>Single</option>
                                                  <option>Married</option>
                                                  <option>Widow/Widower</option>
                                                </select>
                                             </div>
                                            
                                             <div class="col-md-3">
                                                 <b>Place of Death</b><input type="text" id="death<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $death?>">  
                                             </div>
                                             <div class="col-md-3">
                                                 <b>Date of Interment</b><input type="date" id="interment<?php echo $ID?>" class="form-control" value="<?php echo $inter?>" disabled="disabled">  
                                             </div>
                                             <div class="col-md-3">
                                                 <b>Place of Interment</b><input type="text" id="pinterment<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $pinter?>">  
                                             </div>
                                             <div class="col-md-12">
                                                <h5>B. CLAIMANT'S INFORMATION</h5>
                                             </div>
                                             <div class="col-md-3">
                                                 <b>Name ( Last name ) </b><input type="text" id="clname<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $clname?>" disabled="disabled">  
                                             </div>
                                             <div class="col-md-3">
                                                 <b>( First name )</b><input type="text" id="cfname<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $cfname?>">  
                                             </div>
                                             <div class="col-md-3">
                                                 <b>( Middle name ) </b><input type="text" id="cmname<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $cmname?>">  
                                             </div>
                                             <div class="col-md-3">
                                                 <b>Relationship to member</b><input type="text" id="rel<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $rel?>">  
                                             </div>
                                            <div class="col-md-3">
                                               <b>SS Number</b><input type="text" id="cssno<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $cssno?>">  
                                             </div>
                                             <div class="col-md-3">
                                               <b>Date of Birth</b><input type="date" id="cbd<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $cbd?>">  
                                             </div>
                                             <div class="col-md-3">
                                               <b>Gender</b><br>
                                               <select id="cgen<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $cgen?>">
                                                  <option>Male</option>
                                                  <option>Female</option>
                                               </select>
                                             </div>
                                             <div class="col-md-3">
                                               <b>Mobile Number</b><input type="text" id="mobno<?php echo $ID?>" class="form-control" value="<?php echo $cmob?>" disabled="disabled"> 
                                             </div>
                                             <div class="col-md-12">
                                             <br>
                                                  <input type="date" id="scheds" class="form-control">
                                             </div>
                                        <div class="modal-footer" style="border:0px solid">
                                             <div class="col-md-12">
                                             <br>
                                                <button onclick="Inserts(<?php echo $ID?>)" type="button" class="btn btn-success" data-dismiss="modal">Accept</button>
                                                    <button  type="button" class="btn btn-danger" onclick="dele(<?php echo $ID?>)" data-dismiss="modal">Reject</button>
                                            
                                        </div>
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
<script type="text/javascript">
	function dele(ID)
	{
		var dataString = "ID="+ID;	
		$.ajax({
              url:"deletefuneral.php",
              type:"POST",
              data:dataString,
              success:function(data)
              {
              	alert(data);
              	funeralLoad();
              }
		});
	}
	function Inserts(ID)
	{
  	   var ssno = $("#ssno"+ID).val();
  	   var ref  = $("#ref"+ID).val();
  	   var bd   = $("#bd"+ID).val();
  	   var gen  = $("#gen"+ID).val();
  	   var lname = $("#lname"+ID).val();
  	   var fname = $("#fname"+ID).val();
  	   var mname = $("#mname"+ID).val();
  	   var con   = $("#con"+ID).val();
  	   var add   = $("#add"+ID).val();
  	   var brgy  = $("#brgy"+ID).val();
  	   var cty   = $("#cty"+ID).val();
       var status = $("#status"+ID).val();
       var death  = $("#death"+ID).val();
       var inter  = $("#interment"+ID).val();
       var pinter = $("#pinterment"+ID).val();
       var clname = $("#clname"+ID).val();
       var cfname = $("#cfname"+ID).val();
       var cmname = $("#cmname"+ID).val();
       var rel = $("#rel"+ID).val();
       var cssno = $("#cssno"+ID).val();
       var cbd   = $("#cbd"+ID).val();
       var cgen  = $("#cgen"+ID).val();
       var mobno = $("#mobno"+ID).val();
       var sched = $("#scheds").val();
	   var dataString = "ssno="+ssno+"&ref="+ref+"&bd="+bd+"&gen="+gen+"&lname="+lname+"&fname="+fname+"&mname="+mname+"&con="+con+"&add="+add+"&brgy="+brgy+"&cty="+cty+"&status="+status+"&death="+death+"&inter="+inter+"&pinter="+pinter+"&clname="+clname+"&cfname="+cfname+"&cmname="+cmname+"&rel="+rel+"&cssno="+cssno+"&cbd="+cbd+"&cgen="+cgen+"&mobno="+mobno+"&sched="+sched;
	   $.ajax({
           url:"acceptfuneralbenifit.php",
           type:"POST",
           data:dataString,
           success:function(data)
           {
           	alert(data);
           	 funeralLoad();
           } 
	   });
    
	}
</script>