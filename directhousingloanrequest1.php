<table class="table table-condensed">
<tr class="bg-primary">
	<td>SS Number</td>
	<td>Reference No</td>
	<td>Date Of Birth</td>
	<td>Tax Identifier</td>
	<td>Lastname</td>
	<td>Action</td>
</tr>
<?php

$conn = mysqli_connect("localhost","root","","sss");

$query ="SELECT * FROM directhousingloan_request";

$result = mysqli_query($conn,$query);
  while($row = $result->fetch_assoc()){
    $ID  = $row['ID'];
    $ssno = $row['SS_Number'];
    $ref = $row['Ref_No']; 
    $bd = $row['DateOfBirth'];
    $tax = $row['TaxIdentifier'];
    $lname = $row['Lastname'];
    $fname = $row['Firstname'];
    $mname = $row['Middlename'];
    $con   = $row['ContactNo'];
    $add   = $row['Address'];
    $st    = $row['StreetName'];
    $brgy  = $row['Barangay'];
    $cty  = $row['City'];
    $em    = $row['EmaiAddress'];
    $gen   = $row['Gender'];
    $status =$row['Civil_Status'];
    $rep = $row['RepaymentTermInYears'];
    $amount = $row['AmountAppliedFor']; 
  ?>
  <tr>
  	<td><?php echo $ssno?></td>
  	<td><?php echo $ref?></td>
  	<td><?php echo $bd?></td>
  	<td><?php echo $tax?></td>
  	<td><?php echo $lname?></td>
  	<td>
    <div class="btn-group">
  	<button type="button" class="btn btn-info" data-target="#modals<?php echo $ID?>" data-toggle="modal"><span class="glyphicon glyphicon-eye-open"></span></button>
	</div>
	
	    <div class="fade modal" id="modals<?php echo $ID?>">
                              <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <button type="button" data-dismiss="modal" class="close">&times;</button>
                                          <div class="col-md-1">
                                               <img src="image/SSS-Abroad.jpg" width="150px" height="80px" style="position:relative;top:20px">
                                          </div>
                                          <div class="col-md-11">
                                              <p style="text-align:center; font-family:Arial;font-size:13px">Republic of the Philippines</p>
                                              <p style="text-align:center;font-family:Arial;font-size:15px; font-weight:bold">SOCIAL SECURITY SYSTEM</p>
                                              <p style="text-align:center;font-family:Arial; font-size:20px; font-weight:bold">APPLICATION FOR DIRECT HOUSE<br> REPAIR AND/OR IMPROVEMENT LOAN</p>

                                          </div> 
                                    </div>
                                    <div class="modal-body">
                                        <h5>A. PERSONAL DATA</h5>
                                        <div class="col-md-3">
                                         <b>SS Number</b>&nbsp;<input type="text" class="form-control" disabled="disabled" id="ssno<?php echo $ID?>" value="<?php echo $ssno?>">
                                      </div>
                                      <div class="col-md-3">
                                         <b>Common ref no (if any)</b>&nbsp;<input type="text" id="ref<?php echo $ID?>" disabled="disabled" value="<?php echo $ref?>" class="form-control">
                                      </div>      
                                      <div class="col-md-3">
                                         <b>Date of Birth</b>&nbsp;<input type="date" id="bd<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $bd?>">
                                      </div>  
                                      <div class="col-md-3">
                                          <b>Tax identifi no ( if any )</b>&nbsp;<input type="text" id="tax<?php echo $ID?>" value="<?php echo $tax?>" class="form-control" disabled="disabled">
                                      </div>
                                      <div class="col-md-3">
                                          <b>Name ( Last name ) </b>&nbsp;<input type="text" id="lname<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $lname?>" disabled="disabled"> 
                                      </div>
                                      <div class="col-md-3">
                                          <b>( First name ) </b>&nbsp;<input type="text" id="fname<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $fname?>" disabled="disabled"> 
                                      </div>
                                      <div class="col-md-3">
                                          <b>( Middle name ) </b>&nbsp;<input type="text" id="mname<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $mname?>"> 
                                      </div>
                                      <div class="col-md-3">
                                          <b>Contact No</b>&nbsp;<input type="text" id="con<?php echo $ID?>" class="form-control" value="<?php echo $con?>" disabled="disabled"> 
                                      </div>
                                      <div class="col-md-3">
                                          <b>Address (House Lot/Blk.)</b>&nbsp;<input type="text" id="add<?php echo $ID?>" class="form-control" value="<?php echo $add?>" disabled="disabled">
                                      </div>
                                      <div class="col-md-3">
                                          <b>(Street Name)</b>&nbsp;<input type="text" id="st<?php echo $ID?>" class="form-control" value="<?php echo $st?>" disabled="disabled">
                                      </div>
                                      <div class="col-md-3">
                                          <b>(Barangay/District/Locality)</b>&nbsp;<input type="text" id="brgy<?php echo $ID?>" class="form-control" value="<?php echo $brgy?>" disabled="disabled">
                                      </div>
                                      <div class="col-md-3">
                                          <b>(City/Province)</b>&nbsp;<input type="text" id="cty<?php echo $ID?>" class="form-control" value="<?php echo $cty?>" disabled="disabled">
                                      </div>
                                      <div class="col-md-3">
                                          <b>E-mail Address</b>&nbsp;<input type="text" id="em<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $em?>">
                                      </div>
                                       <div class="col-md-3">
                                          <b>Gender</b><br>
                                          <select id="gen<?php echo $ID?>" class="form-control" value="<?php echo $gen?>" disabled="disabled">
                                            <option>Male</option>
                                            <option>Female</option>
                                          </select>
                                      </div>
                                      <div class="col-md-6">
                                          <b>Civil Status</b><br>
                                          <select id="status<?php echo $ID?>" value="<?php echo $status?>" disabled="disabled" class="form-control">
                                            <option>Single</option>
                                            <option>Married</option>
                                            <option>Widow/Widower</option>
                                          </select>
                                      </div>
                                         <div class="col-md-3">
                                         <b>Repayment term in years</b><br>
                                         <select id="rep<?php echo $ID?>" value="<?php echo $rep?>" class="form-control" disabled="disabled">
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                         </select>
                                      </div>
                                      <div class="col-md-3">
                                         <b>Amount applied for</b>&nbsp;<input type="text" id="amount<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $amount?>">
                                      </div>  
                                      <div class="col-md-12">
                                       <br><br>
                                            <b>Choose Date of Loan</b>
                                            <input type="date" class="form-control" id="schedule">
                                      </div>
                                    </div>
                                    <div class="modal-footer" style="border:solid 0px">
                                        <div class="col-md-12">
                                        <br>
                                              <button type="button" class="btn btn-success" onclick="insert(<?php echo $ID?>)" data-dismiss="modal">Accept</button>
                                         <button type="button" class="btn btn-danger"  onclick="deleteData(<?php echo $ID?>)" data-dismiss="modal">Reject</button>
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
  function deleteData(ID)
{
       var dataString = "ID="+ID;
   $.ajax({
       url:"rejectdirecthousingloan.php",
       type:"POST",
       data:dataString,
       success:function(data)
       {
         alert(data);
         directhouseLoad();
       } 
    }); 
}
function insert(ID)
{
    var ssno     =  $("#ssno"+ID).val();
  var ref        =  $("#ref"+ID).val();
  var bd         =  $("#bd"+ID).val();
  var tax        =  $("#tax"+ID).val();
  var lname      =  $("#lname"+ID).val();
  var fname      =  $("#fname"+ID).val();
  var mname      =  $("#mname"+ID).val();
  var con        =  $("#con"+ID).val();
  var add        =  $("#add"+ID).val();
  var st         =  $("#st"+ID).val();
  var brgy       =  $("#brgy"+ID).val();
  var cty        =  $("#cty"+ID).val();
  var em         =  $("#em"+ID).val();
  var gen        =  $("#gen"+ID).val();
  var status     =  $("#status"+ID).val();
  var schedules  =  $("#schedule").val();
  var rep        =  $("#rep"+ID).val();
  var amount     =  $("#amount"+ID).val();
  var dataString = "ssno="+ssno+"&ref="+ref+"&bd="+bd+"&tax="+tax+"&lname="+lname+"&fname="+fname+"&mname="+mname+"&con="+con+"&add="+add+"&st="+st+"&brgy="+brgy+"&cty="+cty+"&em="+em+"&gen="+gen+"&status="+status+"&sched="+schedules+"&rep="+rep+"&amount="+amount;
  
  $.ajax({
       url:"acceptdirecthousingloan.php",
       type:"POST",
       data:dataString,
       success:function(data)
       {
        alert(data);
        directhouseLoad();  
       }
  });

}
</script>

