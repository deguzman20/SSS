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

$sql = "SELECT * FROM retirementbenifitrequest";
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
                                      <div class="col-md-12">
                                      <br>
                                          <input type="date" id="scheds" class="form-control">
                                      </div>                                      
                                 </div>
                                 <div class="modal-footer" style="border:0">
                                     <div class="col-md-12">
                                       <br>
                                                <button  type="button" class="btn btn-success" onclick="accept1(<?php echo $ID?>)" data-dismiss="modal">Accept</button>
                                                <button  type="button" class="btn btn-danger" onclick="reject1(<?php echo $ID?>)" data-dismiss="modal">Reject</button>
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
<script>
	function reject1(ID)
	{
		var dataString = "ID="+ID;
		$.ajax({
          url:"rejectretirementbenifit.php",
          type:"POST",
          data:dataString,
          success:function(data)
          {
           alert(data);
           retirementLoad();
          }
      });
    }
   function accept1(ID)
   {
   	  
   	  var ssno 		= $("#ssno"+ID).val();
   	  var lname 	= $("#lname"+ID).val();
   	  var fname 	= $("#fname"+ID).val();
   	  var mname 	= $("#mname"+ID).val();
   	  var add   	= $("#add"+ID).val();
   	  var bd     	= $("#bd"+ID).val();
   	  var place  	= $("#place"+ID).val();
   	  var gen    	= $("#gen"+ID).val();
   	  var telno   = $("#telno"+ID).val();
   	  var mobno   = $("#mobno"+ID).val();
      var sched   = $("#scheds").val();
   	  var dataString = "ssno="+ssno+"&lname="+lname+"&fname="+fname+"&mname="+mname+"&add="+add+"&bd="+bd+"&place="+place+"&gen="+gen+"&telno="+telno+"&mobno="+mobno+"&sched="+sched;
   	   $.ajax({
          url:"acceptretirementbenifit.php",
          type:"POST",
          data:dataString,
          success:function(data)
          {
          	alert(data);
          	retirementLoad();
          }
   	   });

   }
</script>