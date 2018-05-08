<table class="table table-condensed">
<tr class="bg-primary">
  <td>SS Number</td>
  <td>Lastname</td>
  <td>Firstname</td>
  <td>Middlename</td>
  <td>Action</td>
</tr>
<?php 
$conn = new mysqli("localhost","root","","sss");

$query ="SELECT * FROM dissabilitybenifitrequest";
$result = $conn->query($query);

while($row = $result->fetch_assoc()) {
   $ID 		= $row['ID'];
   $ssno 	= $row['SS_Number'];
   $lname 	= $row['Lastname'];
   $fname 	= $row['Firstname'];
   $mname 	= $row['Middlename'];
   $add   	= $row['Address'];
   $st   	= $row['Street'];
   $brgy 	= $row['Barangay'];
   $cty  	= $row['City'];
   $con  	= $row['Contact_Number'];
   $gen  	= $row['Gender'];
   $claim 	= $row['TypeOfClaim'];
   $tin  	= $row['TIN'];
     ?>
  <tr>
    <td><?php echo $ssno?></td>
    <td><?php echo $lname?></td>
    <td><?php echo $fname?></td>
    <td><?php echo $mname?></td>
    <td><button class="btn btn-info" data-toggle="modal" data-target="#dissability-<?php echo $ID?>"><span class="glyphicon glyphicon-eye-open"></span></button>
         <div class="fade modal" id="dissability-<?php echo $ID?>">
                           <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                  <div class="modal-header">
                                    <div class="col-md-1">
                                          <img src="image/SSS-Abroad.jpg" width="150px" height="80px">
                                    </div>
                                     <div class="col-md-11">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <p style="text-align:center; font-family:Arial; font-size:13px">Republic of the Philippines</p>
                                        <p style="text-align:center;font-family:Arial; font-size:15px; font-weight:bold">SOCIAL SECURITY SYSTEM</p>
                                        <p style="text-align:center;font-family:Arial; font-size:20px; font-weight:bold">DISSABILITY CLAIM APPLICATION</p> 
                                     </div> 
                                  </div>
                                  <div class="modal-body">
                                       <div class="col-md-12">
                                         <h5>A. PERSONAL INFORMATION</h5>
                                       </div>
                                       <div class="col-md-3">
                                           <b>SS Number</b><input type="text" id="ssno<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $ssno?>">
                                       </div>
                                       <div class="col-md-3">
                                           <b>Name ( Last name ) </b><input type="text" id="lname<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $lname?>">
                                       </div>
                                       <div class="col-md-3">
                                           <b>( First name ) </b><input type="text" id="fname<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $fname?>">
                                       </div>
                                       <div class="col-md-3">
                                           <b>Name (Middle name ) </b><input type="text" id="mname<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $mname?>">
                                       </div>
                                       
                                       <div class="col-md-3">
                                           <b>Address(House lot/Blk)</b><input type="text" id="add<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $add?>">
                                       </div>
                                       <div class="col-md-3">
                                           <b>Name ( Street/name ) </b><input type="text" id="st<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $st?>">
                                       </div>
                                       <div class="col-md-3">
                                           <b>(Barangay/District/Locality)</b><input type="text" id="brgy<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $brgy?>">
                                       </div>
                                       <div class="col-md-3">
                                           <b>(City/Province)</b><input type="text" id="cty<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $cty?>">
                                       </div>
                                       <div class="col-md-3">
                                           <b>Contact number</b><input type="text" id="con<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $con?>">
                                       </div> 
                                       <div class="col-md-3">
                                           <b>Gender</b><br>
                                           <select id="gen<?php echo $ID?>" disabled="disabled"  value="<?php echo $gen?>" class="form-control">
                                             <option>Male</option>
                                             <option>Female</option>
                                           </select>  
                                       </div>
                                       <div class="col-md-3">
                                           <b>Type of claim</b><br>
                                           <select id="claim<?php echo $ID?>" value="<?php echo $claim?>" class="form-control" disabled="disabled">
                                             <option>SS Claim</option>
                                             <option>EC Claim</option>
                                           </select>  
                                       </div>
                                       <div class="col-md-3">
                                           <b>TIN</b><input type="text" id="tin<?php echo $ID?>" value="<?php echo $tin?>" class="form-control" disabled="disabled">
                                       </div> 
                                       <div class="col-md-12">
                                       <br>
                                            <input type="date" id="scheds" class="form-control">
                                       </div>
                                  </div>
                                  <div class="modal-footer" style="border:0 ">
                                        <div class="col-md-12">
                                        <br>
                                                <button  type="button" class="btn btn-success" onclick="accept(<?php echo $ID?>)" data-dismiss="modal">Accept</button>
                                                <button  type="button" class="btn btn-danger" onclick="reject(<?php echo $ID?>)" data-dismiss="modal">Reject</button>
                                            
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
<script>
 function reject(ID)
 {
    var dataString = "ID="+ID;
     $.ajax({
            url: "rejectdisability1.php",
            type:"POST",
            data:dataString,
            success:function(data)
            {
             alert(data);
             disabilityLoad(); 
            }
     }); 
    
 }
 function accept(ID)
 {
   var ssno = $("#ssno"+ID).val();
   var lname = $("#lname"+ID).val();
   var fname = $("#fname"+ID).val();
   var mname = $("#mname"+ID).val();
   var add   = $("#add"+ID).val();
   var st    = $("#st"+ID).val();
   var brgy  = $("#brgy"+ID).val();
   var cty   = $("#cty"+ID).val();
   var con   = $("#con"+ID).val();
   var gen   = $("#gen"+ID).val();
   var claim = $("#claim"+ID).val();
   var tin   = $("#tin"+ID).val();
   var sched = $("#scheds").val();
   var dataString = "ssno="+ssno+"&lname="+lname+"&fname="+fname+"&mname="+mname+"&add="+add+"&st="+st+"&brgy="+brgy+"&cty="+cty+"&con="+con+"&gen="+gen+"&claim="+claim+"&tin="+tin+"&sched="+sched;
   $.ajax({
       url:"acceptdisability.php",
      type:"POST",
      data:dataString,
      success:function(data)
      {
        alert(data);
        disabilityLoad();
      }
   });
 }
</script>