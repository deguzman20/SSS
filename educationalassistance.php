<table class="table table-condensed">
<tr class="bg-primary">
 <td>SS Number</td>
 <td>Reference No</td>
 <td>Date of Birth</td>
 <td>Tax Identifier</td>
 <td>Lastname</td>
 <td>Firstname</td>
 <td>Middlename</td>
 <td>Action</td>
</tr>
<?php 
$conn = mysqli_connect("localhost","root","","sss");
$query ="SELECT * FROM  educationalassistanceloan_request";
$runquery = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($runquery))
{    
	$ID   = $row['ID'];
	$ssno = $row['SS_Number'];
	$ref  = $row['Ref_No'];
	$bd   = $row['DateOfBirth'];
	$tax  = $row['TaxIdentifier'];
	$lname = $row['Lastname'];
	$fname = $row['Firstname'];
	$mname = $row['Middlename'];
	$con   = $row['ContactNo'];
	$add   = $row['Address'];
	$st    = $row['StreetName'];
	$brgy  = $row['Barangay'];
	$cty   = $row['City'];
	$em    = $row['EmaiAddress'];
	$gen   = $row['Gender'];
	$status = $row['Civil_Status'];
	$blname = $row['BeneficiaryLastname'];
	$bfname = $row['BeneficiaryFirstname'];
	$bmname = $row['BeneficiaryMiddlename'];
	$rel    = $row['RelationToMember'];
	$school = $row['NameOfSchool'];
	$sadd   = $row['AddressOfSchool'];
    $rep    = $row['RepaymentTermInYears'];
    $amount = $row['AmountAppliedFor'];
?>
<tr>
	<td><?php echo $ssno?></td>
   	<td><?php echo $ref?></td> 
   	<td><?php echo $bd?></td> 
	<td><?php echo $tax?></td>
	<td><?php echo $lname?></td>
	<td><?php echo $fname?></td>
	<td><?php echo $mname?></td>
    <td>
   <div class="btn-group">
    <button type="button" id="<?php echo $ID?>" class="btn btn-info" data-toggle="modal" data-target="#educ_ass-<?php echo $ID?>"><span class="glyphicon glyphicon-eye-close"></span></button>
        
         </div>
         <div class="fade modal" id="educ_ass-<?php echo $ID?>">
                            <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                   <div class="modal-header">
                                      <button type="button" data-dismiss="modal" class="close">&times;</button> 
                                      <div class="col-md-1">
                                         <img src="image/SSS-Abroad.jpg" width="150px" height="80px" style="position:relative;top:40px">
                                      </div>
                                      <div class="col-md-11">
                                          <p style="text-align:center;font-family:Arial; font-size:13px">Republic of the Philippines</p>
                                          <p style="text-align:center; font-family:Arial; font-size:15px; font-weight:bold">SOCIAL SECURITY SYSTEM</p>
                                          <p style="text-align:center; font-family:Arial; font-size:20px; font-weight:bold">APPLICATION FOR EDUCATIONAL ASSISTANCE<br> LOAN PROGRAM</p>
                                      </div> 
                                   </div>
 
                                   <div class="modal-body">    
                                      <h5>MEMBER'S INFORMATION</h5>
                                      <div class="col-md-3">
                                         <b>SS Number</b>&nbsp;<input type="text" id="ssno<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $ssno?>">
                                      </div>
                                      <div class="col-md-3">
                                         <b>Common ref no (if any)</b>&nbsp;<input type="text" id="ref<?php echo $ID?>" class="form-control" value="<?php echo $ref?>" disabled="disabled">
                                      </div>      
                                      <div class="col-md-3">
                                         <b>Date of Birth</b>&nbsp;<input type="date" id="bd<?php echo $ID?>" class="form-control"  disabled="disabled" value="<?php echo $bd?>">
                                      </div>  
                                      <div class="col-md-3">
                                          <b>Tax identifi no ( if any )</b>&nbsp;<input type="text" id="tax<?php echo $ID?>" value="<?php echo $tax?>" class="form-control" disabled="disabled">
                                      </div>
                                      <div class="col-md-3">
                                          <b>Name ( Last name ) </b>&nbsp;<input type="text" id="lname<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $lname?>"> 
                                      </div>
                                      <div class="col-md-3">
                                          <b>( First name ) </b>&nbsp;<input type="text" id="fname<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $fname?>"> 
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
                                          <select id="gen<?php echo $ID?>" value="<?php echo $gen?>" class="form-control" disabled="disabled">
                                            <option>Male</option>
                                            <option>Female</option>
                                          </select>
                                      </div>
                                      <div class="col-md-6">
                                          <b>Civil Status</b><br>
                                          <select id="status<?php echo $ID?>" value="<?php echo $status?>" class="form-control" disabled="disabled">
                                            <option>Single</option>
                                            <option>Married</option>
                                            <option>Widow/Widower</option>
                                          </select>
                                      </div>
                                      <div class="col-md-12">
                                         <h5 class="pull-left">Name of Beneficiary ( if other than the member)</h5>
                                      </div>
                                      <div class="col-md-3">
                                         <b>( Last name )</b>&nbsp;<input type="text" id="blname<?php echo $ID?>" class="form-control" value="<?php echo $blname?>" disabled="disabled">
                                      </div>
                                      <div class="col-md-3">
                                         <b>( First name )</b>&nbsp;<input type="text" id="bfname<?php echo $ID?>" class="form-control" value="<?php echo $bfname?>" disabled="disabled">
                                      </div>
                                      <div class="col-md-3">
                                         <b>( Middle name )</b>&nbsp;<input type="text" id="bmname<?php echo $ID?>" class="form-control" value="<?php echo $bmname?>" disabled="disabled">
                                      </div>
                                       <div class="col-md-2">
                                          <b>Relation to member</b>
                                          <select id="rel<?php echo $ID?>" class="form-control" value="<?php echo $rel?>" disabled="disabled"> 
                                            <option>Legal Spouse</option>
                                            <option>Child</option>
                                            <option>Sibling</option>
                                          </select>
                                      </div>
                                      <div class="col-md-3">
                                         <b>Name of School</b>&nbsp;<input type="text" id="school<?php echo $ID?>" class="form-control" value="<?php echo $school?>" disabled="disabled">
                                      </div>
                                      <div class="col-md-3">
                                         <b>Address of School</b>&nbsp;<input type="text" id="cadd<?php echo $ID?>" class="form-control" value="<?php echo $add?>" disabled="disabled">
                                      </div>  
                                      <div class="col-md-3">
                                         <b>Repayment term in years</b><br>
                                         <select id="refs<?php echo $ID?>" class="form-control" value="<?php echo $ref?>" disabled="disabled">
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                         </select>
                                      </div>
                                       <div class="col-md-3">
                                         <b>Amount applied for</b>&nbsp;<input type="text"  class="form-control" id="amount<?php echo $ID?>" value="<?php echo $amount?>" disabled="disabled">
                                      </div> 
                                  </div>
                                   <div class="col-md-12">
                                   <br>
                                        <input type="date" id="scheds" class="form-control">
                                   </div> 
                                   <div class="modal-footer" style="border:solid 0px">
                                        <div class="col-md-12">
                                        <br>
                                           <button type="button" class="btn btn-success" onclick="save2(<?php echo $ID?>)" data-dismiss="modal">Accept</button>
                                            <button type="button" class="btn btn-danger" onclick="educdel(<?php echo $ID?>)" data-dismiss="modal">Reject</button>
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
	function educdel(data)
	{
		var dataString = "ID="+data;
		$.ajax({
               url: "deleteeducationalassistance.php",
               type:"POST",
               data:dataString,
               success:function(data)
               {
               	alert(data);
                educRecord();
               }
		});
    alert(dataString);
	}
  function save2(ID)
  {
         var ssno    =      $("#ssno"+ID).val();
      var ref     =      $("#ref"+ID).val();
      var bd      =      $("#bd"+ID).val();
      var tax     =      $("#tax"+ID).val();
      var lname   =      $("#lname"+ID).val();
      var fname   =      $("#fname"+ID).val();
      var mname   =      $("#mname"+ID).val();
      var con     =      $("#con"+ID).val();  
      var add     =      $("#add"+ID).val();
      var st      =      $("#st"+ID).val(); 
      var brgy    =      $("#brgy"+ID).val();
      var cty     =      $("#cty"+ID).val();
      var em      =      $("#em"+ID).val();
      var gen     =      $("#gen"+ID).val();
      var status  =      $("#status"+ID).val(); 
      var blname  =      $("#blname"+ID).val();
      var bfname  =      $("#bfname"+ID).val(); 
      var bmname  =      $("#bmname"+ID).val();
      var rel     =      $("#rel"+ID).val();
      var school  =      $("#school"+ID).val(); 
      var cadd    =      $("#cadd"+ID).val(); 
      var refs    =      $("#refs"+ID).val();
      var sched   =      $("#scheds").val();
      var amount  =      $("#amount"+ID).val(); 
      var dataString ="ssno="+ssno+"&ref="+ref+"&bd="+bd+"&tax="+tax+"&lname="+lname+"&fname="+fname+"&mname="+mname+"&con="+con+"&add="+add+"&st="+st+"&brgy="+brgy+"&cty="+cty+"&em="+em+"&gen="+ gen+"&status="+status+"&blname="+blname+"&bfname="+bfname+"&bmname="+bmname+"&rel="+rel+"&school="+school+"&cadd="+cadd+"&refs="+refs+"&sched="+sched+"&amount="+amount;
          $.ajax({
               url:"accepteducationalassistanceloan.php",
               type:"POST",
               data:dataString,
               success:function(data)
               {
                 alert(data);
                 educRecord();
               }
          });
         
  }
</script>

 