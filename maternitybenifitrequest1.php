<table class="table table-condensed">
<tr class="bg-primary">
   <td>SS Number</td>
   <td>Reference No</td>
   <td>Date of Birth</td>
   <td>Lastname</td>
   <td>Firstname</td>
   <td>Middlename</td>
   <td>Action</td>
</tr>
<?php
$conn = mysqli_connect("localhost","root","","sss");
$query="SELECT * FROM maternitybenifitrequest";
$runquery = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($runquery))
{
 $ID   = $row['ID'];	
 $ssno   = $row['SS_Number'];
 $ref    = $row['Ref_No'];
 $bd   	 = $row['DateOfBirth'];
 $tax  	 = $row['TaxIdentifier'];
 $lname  = $row['Lastname'];
 $fname  = $row['Firstname'];
 $mname  = $row['Middlename'];
 $con    = $row['ContactNumber'];
 $add    = $row['Address'];
 $st     = $row['Street']; 
 $brgy   = $row['Barangay'];
 $cty    = $row['City'];
 $leave  = $row['Maternitiy_leave'];
 $del    = $row['Date_Deliver'];
 $dia    = $row['Diagnosis'];
 $bname  = $row['BankName'];
 $bbranch= $row['BankBranch'];
 $bacc   = $row['BankAccountName'];
 $baccn  = $row['BankAccountNumber'];
?>
<tr>
	<td><?php echo $ssno?></td>
	<td><?php echo $ref?></td>
	<td><?php echo $bd?></td>
	<td><?php echo $lname?></td>
	<td><?php echo $fname?></td>
	<td><?php echo $mname?></td>
	<td>
	  <div class="btn-group">
          	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#mat-<?php echo $ID?>"><span class="glyphicon glyphicon-eye-open"></span></button>
          	     
      </div>
      <div class="fade modal" id="mat-<?php echo $ID?>">
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
                                          <p style="text-align:center;font-family:Arial; font-size:20px; font-weight:bold">MATERNITY BENEFIT APPLICATION</p>
                                     </div>
                                 </div>
                                 <div class="modal-body">
                                         <h5>A. PERSONAL DATA</h5>
                                         <div class="col-md-3">
                                             <b>SS Number</b><input type="text" id="ss<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $ssno?>">
                                         </div>
                                         <div class="col-md-3">
                                             <b>Common ref no (if any)</b><input type="text" id="ref<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $ref?>">
                                         </div>
                                         <div class="col-md-3">
                                             <b>Date of Birth</b><input type="date" id="bd<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $bd?>">
                                         </div>
                                         <div class="col-md-3">
                                             <b>Tax identification no</b><input type="text" id="tax<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $tax?>">
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
                                             <b>Contact number</b><input type="text" id="con<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $con?>">
                                         </div>
                                          
                                          <div class="col-md-3">
                                             <b>Address ( House Lot/Blk )</b><input type="text" id="add<?php echo $ID?>" class="form-control" value="<?php echo $add?>" disabled="disabled">
                                         </div>
                                          <div class="col-md-3">
                                             <b>( Street/Name )</b><input type="text" id="st<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $st?>">
                                         </div>
                                          <div class="col-md-3">
                                             <b>(Barangay/District/Locality)</b><input type="text" id="brgy<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $brgy?>">
                                         </div>
                                          <div class="col-md-3">
                                             <b>( City/Province )</b><input type="text" id="cty<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $cty?>">
                                         </div> 
                                        <div class="col-md-3">
                                             <b>Start of maternity leave</b><input type="date" id="leave<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $leave?>">
                                         </div>
                                          <div class="col-md-3">
                                             <b>Date of delivery</b><input type="date" id="del<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $del?>">
                                         </div> 
                                        <div class="col-md-6">
                                        <br>
                                           <b>Diagnosis</b>
                                           <select id="dia<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $dia?>">
                                             <option>Normal</option>
                                             <option>Caesarean</option>
                                             <option>Miscarriage</option>
                                             <option>Ectopic(Operated)</option>
                                             <option>Ectopic(Unoperated)</option>
                                           </select>
                                        </div>
                                        <div class="col-md-12">
                                             <h5>B. MEMBER'S ENROLLMENT IN THE PAYMENT THRU THE BANK ( if not yet enrolled )</h5>
                                        </div>
                                        <div class="col-md-6">
                                             <b>Bank name and branch</b>
                                             <input type="text" id="bnkname<?php echo $ID?>" class="form-control" value="<?php echo $bname?>" disabled="disabled">
                                        </div> 
                                        <div class="col-md-6">
                                             <b>Bank branch address</b>
                                             <input type="text" id="bnkadd<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $bbranch?>">
                                        </div>
                                        <div class="col-md-6">
                                             <b>Bank account name</b>
                                             <input type="text" id="bacc<?php echo $ID?>" class="form-control" value="<?php echo $bacc?>" disabled="disabled">
                                        </div>
                                        <div class="col-md-6">
                                             <b>Bank account number</b>
                                             <input type="text" id="baccn<?php echo $ID?>" class="form-control" disabled="disabled" value="<?php echo $baccn?>">
                                        </div>
                                        <div class="col-md-12">
                                        <br>
                                            <input type="date" id="scheds" class="form-control">
                                        </div>
                                 </div>
                                 <div class="modal-footer" style="border:solid 0px">
                                            <div class="col-md-12">
                                            <br>
                                                <button onclick="matSave(<?php echo $ID?>)" type="button" class="btn btn-success"  data-dismiss="modal">Accept</button>
                                               <button class="btn btn-danger" onclick="dels(<?php echo $ID?>)" data-dismiss="modal">Reject</button>
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
 function dels(ID)
 {
  var dataString ="ID="+ID;
    $.ajax({
               url:"deletematernitybenifit.php",
               type:"POST",
               data:dataString,
               success:function(data)
               {
                 alert(data);
                 marternityLoad();
            }
         });
 }
  
 function matSave(ID)
 {
         var ss       = $("#ss"+ID).val();
         var ref      = $("#ref"+ID).val();
         var bd       = $("#bd"+ID).val();
         var tax      = $("#tax"+ID).val();
         var lname    = $("#lname"+ID).val();
         var fname    = $("#fname"+ID).val();
         var mname    = $("#mname"+ID).val();
         var con      = $("#con"+ID).val();
         var add      = $("#add"+ID).val();
         var st       = $("#st"+ID).val();
         var brgy     = $("#brgy"+ID).val();
         var cty      = $("#cty"+ID).val();
         var leave    = $("#leave"+ID).val();
         var del      = $("#del"+ID).val();
         var dia      = $("#dia"+ID).val();
         var bnkname  = $("#bnkname"+ID).val();
         var bnkadd   = $("#bnkadd"+ID).val();
         var bacc     = $("#bacc"+ID).val();
         var baccn    = $("#baccn"+ID).val();
         var sched    =  $("#scheds").val();
         var dataString = "ssno="+ss+"&ref="+ref+"&bd="+bd+"&tax="+tax+"&lname="+lname+"&fname="+fname+"&mname="+mname+"&con="+con+"&add="+add+"&st="+st+"&brgy="+brgy+"&cty="+cty+"&leave="+leave+"&del="+del+"&dia="+dia+"&bname="+bnkname+"&bnkadd="+bnkadd+"&bacc="+bacc+"&baccn="+baccn+"&sched="+sched;
           $.ajax({
              url:"acceptmaternitybenifit.php",
              type:"POST",
              data:dataString,
              success:function(data)
              {
                alert(data);
                   marternityLoad();
              }
           });

         }
</script>