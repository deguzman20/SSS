<table class="table table-condensed">
<tr class="bg-primary">
  <td>SS Number</td>
  <td>Reference No</td>
  <td>Date of Birth</td>
  <td>Lastname</td>
  <td>Firstname</td>
  <td>Action</td>
</tr>
<?php
$conn =mysqli_connect("localhost","root","","sss");
$query="SELECT * FROM sicknessbenifitrequest";
$runquery = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($runquery))
{
	$ID = $row['ID'];
	$ssno = $row['SSNumber'];
	$ref  = $row['Reference_No'];
	$bd   = $row['DateOfBirth'];
	$tax  = $row['TaxIdentification'];
	$lname = $row['Lastname'];
	$fname = $row['Firstname'];
	$mname = $row['Middlename'];
	$status = $row['Civil_Status'];
	$add    = $row['Address'];
	$st     = $row['StreetName'];
	$brgy   = $row['Barangay'];
	$cty    = $row['City'];
	$gen    = $row['Gender'];
	$telno  = $row['Telephone_No'];
	$mobno  = $row['Mobile_No'];
	$em     = $row['Email_Address'];
	$bentype = $row['Benifit_Type'];
	$place    =$row['PlaceOfConfinement'];
	$bname    = $row['BankNameAndBranch'];
	$branch  = $row['BankBranchAddress'];
	$bacc     = $row['BankAccountName'];
	$baccn    = $row['BankAccountNumber'];
?>
<tr>
	<td><?php echo $ssno?></td>
	<td><?php echo $ref?></td>
	<td><?php echo $bd?></td>
	<td><?php echo $lname?></td>
	<td><?php echo $fname?></td>
	<td>
    <div class="btn-group">
		<button type="button" class="btn btn-info" data-toggle="modal" data-target="#sickness-<?php echo $ID?>"><span class="glyphicon glyphicon-eye-open"></span></button>
	
    </div>
       
       <div class="fade modal" id="sickness-<?php echo $ID?>">
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
                                     <p style="text-align:center;font-family:Arial; font-size:20px; font-weight:bold">SICKNESS BENEFIT APPLICATION</p>
                                     </div>
                                 </div>
                                 <div class="modal-body">
                                      <div class="col-md-12">
                                        <h5>A. PERSONAL DATA</h5>
                                      </div>
                                      <div class="col-md-3">
                                         <b>SS Number</b><input type="text" id="ssno<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $ssno?>">
                                      </div>
                                      <div class="col-md-3">
                                         <b>Common reference number</b><input type="text" id="ref<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $ref?>">
                                      </div>
                                      <div class="col-md-3">
                                         <b>Date of birth</b><input type="date" id="bd<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $bd?>">
                                      </div>
                                      <div class="col-md-3">
                                         <b>Tax identification no</b><input type="text" id="tax<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $tax?>">
                                      </div>

                                      <div class="col-md-3">
                                         <b>Name ( Last name ) </b><input type="text" id="lname<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $lname?>">
                                      </div>
                                      <div class="col-md-3">
                                         <b>( First name ) </b><input type="text" id="fname<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $fname?>">
                                      </div>
                                      <div class="col-md-3">
                                         <b>( Middle name ) </b><input type="text" id="mname<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $mname?>">
                                      </div>
                                      <div class="col-md-3">
                                         <b>Civil status</b>
                                         <select id="status<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $status?>">
                                           <option>Single</option>
                                           <option>Married</option>
                                           <option>Widow/Widower</option>
                                         </select>
                                      </div>
                                     <div class="col-md-12">
                                        <b>Address (House Lot/Blk)</b><input type="text" id="add<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $add?>">
                                     </div> 
                                     <div class="col-md-3">
                                        <b>( Street Name )</b><input type="text" id="st<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $st?>">
                                     </div>
                                     <div class="col-md-3">
                                        <b>(Barangay/District/Locality)</b><input type="text" id="brgy<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $brgy?>">
                                     </div>
                                     <div class="col-md-3">
                                        <b>(City/Province)</b><input type="text" id="cty<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $cty?>">
                                     </div>
                                     <div class="col-md-3">
                                        <b>Gender</b><br>
                                        <select id="gen<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $gen?>">
                                          <option>Male</option>
                                          <option>Female</option>
                                        </select>
                                     </div>
                                     <div class="col-md-4">
                                        <b>Telephone Number</b><input type="text" id="telno<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $telno?>">
                                     </div>
                                     <div class="col-md-4">
                                        <b>Mobile Number</b><input type="text" id="mobno<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $mobno?>">
                                     </div>
                                     <div class="col-md-4">
                                        <b>Email Address</b><input type="text" id="em<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $em?>">
                                     </div>
                                     <div class="col-md-6">
                                        <b>Sickness benefit type</b><br>
                                        <select id="bentype<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $bentype?>">
                                          <option>SS</option>
                                          <option>EC</option>
                                        </select>
                                     </div>
                                     <div class="col-md-6">
                                        <b>Place of confinement</b><br>
                                        <select id="plccon<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $place?>">
                                          <option>Home</option>
                                          <option>Hospital</option>
                                        </select>
                                     </div>
                                     <div class="col-md-12">
                                         <h5>B. MEMBER'S ENROLLMENT IN THE PAYMENT THRU THE BANK ( if not yet enrolled )</h5>
                                     </div>
                                     <div class="col-md-6">
                                       <b>Bank name and branch</b><input type="text" id="bnkname<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $bname?>">
                                     </div>
                                     <div class="col-md-6">
                                       <b>Bank branch address</b><input type="text" id="badd<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $branch?>">
                                     </div>

                                     <div class="col-md-6">
                                       <b>Bank account name</b><input type="text" id="bacc<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $bacc?>">
                                     </div>
                                     <div class="col-md-6">
                                       <b>Bank account number</b><input type="text" id="baccn<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $baccn?>">
                                     </div>
                                     <div class="col-md-12">
                                     <br>
                                         <input type="date" id="scheds" class="form-control">
                                     </div>
                                 </div>
                                 <div class="modal-footer" style="border:solid 0px">
                                        <div class="col-md-12">
                                         <br>
                                                <button onclick="save4(<?php echo $ID?>)" type="button" class="btn btn-success" data-dismiss="modal">Accept</button>
                                                  <button type="button" data-dismiss="modal" class="btn btn-danger" onclick="del(<?php echo $ID?>)">Reject</button>
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
	function del(ID)
	{
		var dataString = "ID="+ID; 
		$.ajax({
            url:"rejectsicknessbenifitrequest.php",
            type:"POST",
            data:dataString,
            success:function(data)
            {
            	alert(data);
            	sicknessLoad();
            }
		});

	}
  function save4(ID)
  {
       var ssno   = $("#ssno"+ID).val();
            var ref   = $("#ref"+ID).val();
            var bd    = $("#bd"+ID).val();
            var tax   = $("#tax"+ID).val();
            var lname   = $("#lname"+ID).val();
            var fname   = $("#fname"+ID).val();
            var mname   = $("#mname"+ID).val();
            var status  = $("#status"+ID).val();
            var add     = $("#add"+ID).val();
            var st      = $("#st"+ID).val();
            var brgy    = $("#brgy"+ID).val();
            var cty     = $("#cty"+ID).val();
            var gen     = $("#gen"+ID).val();
            var telno   = $("#telno"+ID).val();
            var mobno   = $("#mobno"+ID).val();
            var em      = $("#em"+ID).val();
            var bentype = $("#bentype"+ID).val();
            var plccon  = $("#plccon"+ID).val();
            var bnkname = $("#bnkname"+ID).val();
            var badd    = $("#badd"+ID).val();
            var bacc    = $("#bacc"+ID).val();
            var baccn   = $("#baccn"+ID).val();
            var sched   = $("#scheds").val();
            var dataString = "ssno="+ssno+"&ref="+ref+"&bd="+bd+"&tax="+tax+"&lname="+lname+"&fname="+fname+"&mname="+mname+"&status="+status+"&add="+add+"&st="+st+"&brgy="+brgy+"&cty="+cty+"&gen="+gen+"&telno="+telno+"&mobno="+mobno+"&em="+em+"&bentype="+bentype+"&plc="+plccon+"&bnkname="+bnkname+"&badd="+badd+"&bacc="+bacc+"&baccn="+baccn+"&sched="+sched; 
            $.ajax({
                 url:"acceptsicknessbenifit.php",
                 type:"POST",
                 data:dataString,
                 success:function(data)
                 {
                   alert(data);
                   sicknessLoad();
                 }
            }); 
  }
</script>