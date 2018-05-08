<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="image/SSS-Abroad.jpg">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<title>SSS User</title>
<style type="text/css" rel="stylesheet">
html{
  overflow-x:scroll;
}
 ::-webkit-scrollbar {
    width: 12px;
}
}
 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    border-radius: 10px;
}
 
::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}

  #info,#loans,#history,#check
  {
    cursor:pointer;
    position:relative;
    left:-1px;
  }
  
</style>
</head>
<?php
session_start();
?>

 <div class="container-fluid">
          <div class="row">
	         	<div class="col-md-2">
		    	     <img src="image/SSS-Abroad.jpg" class="img-responsive">
			     </div>
      		<div class="col-md-10">
             <?php 
                 $conn = mysqli_connect('localhost','root','','sss');
                 $query = "SELECT SUM(AmountOfContribution) FROM listofcontribution WHERE SS_Number='$_SESSION[crn]'";
                 $runquery = mysqli_query($conn,$query);
                 $fetch = mysqli_fetch_array($runquery);

                ?>
              <p></p>
      	  		<ul class="nav nav-tabs">
   					<button class="btn btn-link pull-right" name="logout"><a href="sss_main.php">logout</a></button>
              <p class="pull-right">welcome <b><?php echo $_SESSION['firstname']?></b></p>
      	  		</ul>
      		</div>
      	</div>	
        <div class="row">
            <div class="col-md-2 bg bg-primary">
                <font style="font-weight:bolder">Menu</font>
                <br>

            </div>
            <div class="col-md-10">
 
            </div>      
        </div>
        <div class="row">
            <div class="col-md-2 panel panel-primary">
                  <font style="font-weight:bolder" id="info"><span class="glyphicon glyphicon-info-sign"></span> Information</font>
                  <br>
                  <font style="font-weight:bolder" id="loans">&nbsp;<span>&#8369;</span> Loans/Benifits</font>
                  <br>
                  <font style="font-weight:bolder" id="history"><span class="glyphicon glyphicon-globe"></span> Loan History</font>
                  <br>
                  <font style="font-weight:bolder" id="check"><span class="glyphicon glyphicon-check"></span> Check Contribution</font>

            </div>
              <div id="loan-history" class="col-md-10">
                <h1>Loan History</h1>
                  <table class="table table-condensed table-responsive table-striped">
                       <tr style="color: #fff;background-color: #337ab7;">
                          <td><span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;Loan Date</td>
                          <td>Type of Loan</td>     
                       </tr>
                       <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "sss";

                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        
                        $sql = "SELECT * FROM loan_history WHERE SS_number='$_SESSION[crn]'";
                        $result = mysqli_query($conn, $sql);

                            while($row = mysqli_fetch_assoc($result)) 
                            {
                              $ssno = $row['SS_number'];
                              $date = $row['loan_date'];
                              $type  = $row['TypeOfLoan'];

                         ?>
                         <tr>
                          
                              <td><?php echo $date?></td>
                              <td><?php echo $type?></td>
                         </tr>
                         <?php     
                            }
                         ?>
                        
                  </table>
            </div>
            <div id="contribution" class="col-md-10">
                   <h1>List of Contribution</h1>
                   <?php
                     $conn = mysqli_connect('localhost','root','','sss');
                       $sum = "SELECT SUM(AmountOfContribution) FROM listofcontribution WHERE SS_number='$_SESSION[crn]'";
                       $runsum = mysqli_query($conn,$sum);
                       $fetchsum = mysqli_fetch_array($runsum);
                   ?>
                   <h5><b>Total Contribution:</b>&#8369;<?php echo $fetchsum[0]?></h5>
                   <table class="table table-condensed table-responsive table-striped">
                       <tr style="color: #fff;background-color: #337ab7;">
                          <td><span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;Date of Contribution</td>
                          <td>&#8369; &nbsp;Amount of Contribution</td>     
                       </tr>
                       <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "sss";

                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        $query ="SELECT * FROM  listofcontribution WHERE SS_Number='$_SESSION[crn]'";
                        $result = mysqli_query($conn,$query);
                        while($row = mysqli_fetch_assoc($result))
                        {
                              $amount = $row['AmountOfContribution'];
                              $date   = $row['DateOfContribution'];
                          
                        ?>
                        <tr>
                          
                       <td><?php echo $date?></td>
                       <td>&#8369;<?php echo $amount?></td>
                        </tr> 
                       <?php       
                        } 
                       ?> 
                    
                   </table>    
                   
            </div>
            <div class="col-md-10" id="info-panel">
               <h1>Information</h1>
               <hr>
                  <p><b>CRN SSNumber:</b><input type="text" value="<?php echo $_SESSION["crn"]?>" class="form-control" id="crn" disabled="disabled"></p>
                 <p><b>Firstname:</b><input type="text" value="<?php echo $_SESSION["firstname"]?>" class="form-control" id="fname"></p>
                 <p><b>Middlename:</b><input type="text" value="<?php echo $_SESSION['middlename']?>" class="form-control" id="mname"></p>
                   <p><b>Lastname:</b><input type="text" value="<?php echo $_SESSION['lastname']?>" class="form-control" id="lname"></p>
                   <p><b>Birthday:</b><input type="date" value="<?php echo $_SESSION['birthday']?>" class="form-control" id="bd"></p>
                   <p><b>Email Address</b><input type="text" value="<?php echo $_SESSION['email_address']?>" class="form-control" id="em"></p>
                   <button class="btn btn-warning pull-right" id="update"><span class="glyphicon glyphicon-edit"></span> Update</button>
                 <input type="text" value="<?php echo $_SESSION['identification']?>" style="display:none" id="ID">
            </div>
            <div class="col-md-10" id="loan-panel">
                  <div class="row">
                       <h1>&nbsp;&nbsp;SSS Transaction</h1>
                  </div>
                  <div class="row">
                     <div class="col-md-6">     
                        <button type="button" class="btn-primary btn-block" id="mem-loan"><b>Member Loans</b></button>                           
                     </div>
                     <div class="col-md-6">     
                        <button type="button" class="btn-primary btn-block" id="ben-loan"><b>Benifits Loans</b></button>                   
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 pull-left" id="mem-panel">
                         <button type="button" class="btn-primary btn-block" data-target="#dir_house" data-toggle="modal">Direct Housing Loan</button>
                           <button type="button" class="btn-primary btn-block" data-target="#educ_ass" data-toggle="modal">Educational Assistance Loan</button>
                        
                         <div class="fade modal" id="educ_ass">
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
                                         <b>SS Number</b>&nbsp;<input type="text" id="educ_ssno" class="form-control" disabled="disabled" value="<?php echo $_SESSION['crn']?>">
                                      </div>
                                      <div class="col-md-3">
                                         <b>Common ref no (if any)</b>&nbsp;<input type="text" id="educ_refno" class="form-control">
                                      </div>      
                                      <div class="col-md-3">
                                         <b>Date of Birth</b>&nbsp;<input type="date" id="educ_bd" class="form-control"  disabled="disabled" value="<?php echo $_SESSION['birthday']?>">
                                      </div>  
                                      <div class="col-md-3">
                                          <b>Tax identifi no ( if any )</b>&nbsp;<input type="text" id="educ_tax" class="form-control">
                                      </div>
                                      <div class="col-md-3">
                                          <b>Name ( Last name ) </b>&nbsp;<input type="text" id="educ_lname" class="form-control" disabled="disabled" value="<?php echo $_SESSION['lastname']?>"> 
                                      </div>
                                      <div class="col-md-3">
                                          <b>( First name ) </b>&nbsp;<input type="text" id="educ_fname" class="form-control" disabled="disabled" value="<?php echo $_SESSION['firstname']?>"> 
                                      </div>
                                      <div class="col-md-3">
                                          <b>( Middle name ) </b>&nbsp;<input type="text" id="educ_mname" class="form-control" disabled="disabled" value="<?php echo $_SESSION['middlename']?>"> 
                                      </div>
                                      <div class="col-md-3">
                                          <b>Contact No</b>&nbsp;<input type="text" id="educ_con" class="form-control"> 
                                      </div>
                                      <div class="col-md-3">
                                          <b>Address (House Lot/Blk.)</b>&nbsp;<input type="text" id="educ_add" class="form-control">
                                      </div>
                                      <div class="col-md-3">
                                          <b>(Street Name)</b>&nbsp;<input type="text" id="educ_st" class="form-control">
                                      </div>
                                      <div class="col-md-3">
                                          <b>(Barangay/District/Locality)</b>&nbsp;<input type="text" id="educ_brgy" class="form-control">
                                      </div>
                                      <div class="col-md-3">
                                          <b>(City/Province)</b>&nbsp;<input type="text" id="educ_cty" class="form-control">
                                      </div>
                                      <div class="col-md-3">
                                          <b>E-mail Address</b>&nbsp;<input type="text" id="educ_em" class="form-control" disabled="disabled" value="<?php echo $_SESSION['email_address']?>">
                                      </div>
                                       <div class="col-md-3">
                                          <b>Gender</b><br>
                                          <select id="educ_gen" class="form-control">
                                            <option>Male</option>
                                            <option>Female</option>
                                          </select>
                                      </div>
                                      <div class="col-md-6">
                                          <b>Civil Status</b><br>
                                          <select id="educ_status" class="form-control">
                                            <option>Single</option>
                                            <option>Married</option>
                                            <option>Widow/Widower</option>
                                          </select>
                                      </div>
                                      <div class="col-md-12">
                                         <h5 class="pull-left">Name of Beneficiary ( if other than the member)</h5>
                                      </div>
                                      <div class="col-md-3">
                                         <b>( Last name )</b>&nbsp;<input type="text" id="educ_blname" class="form-control">
                                      </div>
                                      <div class="col-md-3">
                                         <b>( First name )</b>&nbsp;<input type="text" id="educ_bfname" class="form-control">
                                      </div>
                                      <div class="col-md-3">
                                         <b>( Middle name )</b>&nbsp;<input type="text" id="educ_bmname" class="form-control">
                                      </div>
                                       <div class="col-md-2">
                                          <b>Relation to member</b>
                                          <select id="educ_rel" class="form-control"> 
                                            <option>Legal Spouse</option>
                                            <option>Child</option>
                                            <option>Sibling</option>
                                          </select>
                                      </div>
                                      <div class="col-md-3">
                                         <b>Name of School</b>&nbsp;<input type="text" id="educ_school" class="form-control">
                                      </div>
                                      <div class="col-md-3">
                                         <b>Address of School</b>&nbsp;<input type="text" id="educ_sadd" class="form-control">
                                      </div>  
                                      <div class="col-md-3">
                                         <b>Repayment term in years</b><br>
                                         <select id="educ_rep" class="form-control">
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                         </select>
                                      </div>
                                      <div class="col-md-3">
                                         <b>Amount applied for</b>&nbsp;<input type="text" id="educ_amount" class="form-control">
                                      </div>  
                                  </div>
                                   
                                   <div class="modal-footer" style="border:solid 0px">
                                          <div class="col-md-12">
                                              <div class="btn-group">
                                               <button id="educ_clr" type="button" class="btn btn-danger">Clear</button>
                                                <button id="educ_sub" type="button" class="btn btn-success">Submit</button>
                                              </div>
                                         </div>
                                         <div class="col-md-12">
                                            <img src="image/education.jpg">
                                         </div>
                                   </div>
                               </div>
                            </div> 
                        
                         </div>
                         <div class="fade modal" id="dir_house">
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
                                         <b>SS Number</b>&nbsp;<input type="text" id="hou_ssno" class="form-control" disabled="disabled" value="<?php echo $_SESSION['crn']?>">
                                      </div>
                                      <div class="col-md-3">
                                         <b>Common ref no (if any)</b>&nbsp;<input type="text" id="hou_refno" class="form-control">
                                      </div>      
                                      <div class="col-md-3">
                                         <b>Date of Birth</b>&nbsp;<input type="date" id="hou_bd" class="form-control" disabled="disabled" value="<?php echo $_SESSION['birthday']?>">
                                      </div>  
                                      <div class="col-md-3">
                                          <b>Tax identifi no ( if any )</b>&nbsp;<input type="text" id="hou_tax" class="form-control">
                                      </div>
                                      <div class="col-md-3">
                                          <b>Name ( Last name ) </b>&nbsp;<input type="text" id="hou_lname" class="form-control" disabled="disabled" value="<?php echo $_SESSION['lastname']?>"> 
                                      </div>
                                      <div class="col-md-3">
                                          <b>( First name ) </b>&nbsp;<input type="text" id="hou_fname" class="form-control" disabled="disabled" value="<?php echo $_SESSION['firstname']?>"> 
                                      </div>
                                      <div class="col-md-3">
                                          <b>( Middle name ) </b>&nbsp;<input type="text" id="hou_mname" class="form-control" disabled="disabled" value="<?php echo $_SESSION['middlename']?>"> 
                                      </div>
                                      <div class="col-md-3">
                                          <b>Contact No</b>&nbsp;<input type="text" id="hou_con" class="form-control"> 
                                      </div>
                                      <div class="col-md-3">
                                          <b>Address (House Lot/Blk.)</b>&nbsp;<input type="text" id="hou_add" class="form-control">
                                      </div>
                                      <div class="col-md-3">
                                          <b>(Street Name)</b>&nbsp;<input type="text" id="hou_st" class="form-control">
                                      </div>
                                      <div class="col-md-3">
                                          <b>(Barangay/District/Locality)</b>&nbsp;<input type="text" id="hou_brgy" class="form-control">
                                      </div>
                                      <div class="col-md-3">
                                          <b>(City/Province)</b>&nbsp;<input type="text" id="hou_cty" class="form-control">
                                      </div>
                                      <div class="col-md-3">
                                          <b>E-mail Address</b>&nbsp;<input type="text" id="hou_em" class="form-control" disabled="disabled" value="<?php echo $_SESSION['email_address']?>">
                                      </div>
                                       <div class="col-md-3">
                                          <b>Gender</b><br>
                                          <select id="hou_gen" class="form-control">
                                            <option>Male</option>
                                            <option>Female</option>
                                          </select>
                                      </div>
                                      <div class="col-md-6">
                                          <b>Civil Status</b><br>
                                          <select id="hou_status" class="form-control">
                                            <option>Single</option>
                                            <option>Married</option>
                                            <option>Widow/Widower</option>
                                          </select>
                                      </div>
                                      <div class="col-md-3">
                                         <b>Repayment term in years</b><br>
                                         <select id="hou_rep" class="form-control">
                                           <option>5</option>
                                           <option>10</option>
                                           <option>15</option>
                                           <option>20</option>
                                         </select>
                                      </div>
                                      <div class="col-md-3">
                                         <b>Amount applied for</b>&nbsp;<input type="text" id="hou_amount" class="form-control">
                                      </div>  
                                    </div>
                                    <div class="modal-footer" style="border:solid 0px">
                                       <div class="col-md-12">
                                              <div class="btn-group">
                                               <button id="hou_clr" type="button" class="btn btn-danger">Clear</button>
                                                <button id="hou_sub" type="button" class="btn btn-success">Submit</button>
                                              </div>
                                         </div>
                                         <div class="col-md-12">
                                            <img src="image/dir_ins.png" class="img-responsive">
                                         </div>
                                    </div>
                                 </div>
                              </div>
                         </div>
                     

                       
                     </div>

                     <div class="col-md-12 center-block" id="ben-panel">
                         <button type="button" class="btn-primary btn-block" data-target="#maternity" data-toggle="modal">Maternity Benifit</button>
                         <button type="button" class="btn-primary btn-block" data-target="#sickness" data-toggle="modal">Sickness Benifit</button>
                         <button type="button" class="btn-primary btn-block" data-target="#death" data-toggle="modal">Death Benifit</button>
                         <button type="button" class="btn-primary btn-block" data-target="#funeral" data-toggle="modal">Funeral Benifit</button>
                         <button type="button" class="btn-primary btn-block" data-target="#dissability" data-toggle="modal">Dissability Benifit</button>
                         <button type="button" class="btn-primary btn-block" data-target="#retirement" data-toggle="modal">Retirement Benifit</button>
                          <!-- modal of  death benifit -->
                         <div class="fade modal" id="death">
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
                                                <b>SS Number</b>&nbsp;<input type="text" id="dir_ssnum" class="form-control" disabled="disabled" value="<?php echo $_SESSION['crn']?>">
                                       </div> 
                                       <div class="col-md-3">
                                                <b>Name ( Last name ) </b><input type="text" id="dir_lname" class="form-control" disabled="disabled" value="<?php echo $_SESSION['lastname']?>">
                                       </div>    
                                       <div class="col-md-3">
                                                <b>( First name ) </b><input type="text" id="dir_fname" class="form-control" disabled="disabled" value="<?php echo $_SESSION['firstname']?>">
                                       </div>
                                        <div class="col-md-3">
                                                <b>( Middle name ) </b><input type="text" id="dir_mname" class="form-control" disabled="disabled" value="<?php echo $_SESSION['middlename']?>">
                                        </div>    
                                       <div class="col-md-3">
                                                <b>Date of Birth</b><input type="date" id="dir_bd" class="form-control" disabled="disabled" value="<?php echo $_SESSION['birthday']?>">
                                        </div> 
                                        <div class="col-md-3">
                                                <b>Date of Death </b><input type="date" id="dir_death" class="form-control">
                                        </div> 
                                        <div class="col-md-3">
                                                <b>Place of Death</b><input type="text" id="dir_place" class="form-control">
                                        </div> 
                                        <div class="col-md-3">
                                                <b>(City/Province)</b><input type="text" id="dir_cty" class="form-control">
                                        </div> 
                                        <div class="col-md-3">
                                                <b>Type of Claim</b>
                                                <select id="dir_claim" class="form-control"> 
                                                  <option>Social Security</option>
                                                  <option>Employee's Compesation</option>
                                                </select>
                                                <br>
                                        </div>
                                        <div class="col-md-3">
                                                <b>Civil Status</b>
                                                <select id="dir_status" class="form-control">
                                                  <option>Single</option>
                                                  <option>Married</option>
                                                  <option>Widow/Widower</option>
                                                  <option>Legally Seperated</option>
                                                </select>
                                        </div> 
                                        <div class="col-md-12"><h5>CLAIMANTS INFORMATION</h5></div>
                                       <div class="col-md-3"><b>SS Number</b><input type="text" id="dir_cssnum" class="form-control"></div>
                                       <div class="col-md-3"><b>Claimant ( Last name )</b><input type="text" id="dir_clname" class="form-control"></div> 
                                       <div class="col-md-3"><b>( First name )</b><input type="text" id="dir_cfname" class="form-control"></div> 
                                       <div class="col-md-3"><b>( Middle name )</b><input type="text" id="dir_cmname" class="form-control"></div>
                                       <div class="col-md-3"><b>Address</b><input type="text" id="dir_cadd" class="form-control"></div> 
                                       <div class="col-md-3"><b>Date of Birth</b><input type="date" id="dir_cbd" class="form-control"></div>
                                       <div class="col-md-3"><b>Gender</b><br>
                                          <select id="cgender" class="form-control">
                                            <option>Male</option>
                                            <option>Female</option>
                                          </select>
                                       </div>
                                       <div class="col-md-3"><b>Relationship to member</b><input type="text" id="dir_rel" class="form-control"></div>
                                           <div class="col-md-4"><b>Contact no</b><input type="text" id="dir_ccon" class="form-control"></div>
                              </div>
                                   
                                   <div class="modal-footer" style="border:solid 0px">
                                          <div class="col-md-12">
                                              <div class="btn-group">
                                              <button id="dir_clr" type="button" class="btn btn-danger">Clear</button>
                                              <button id="dir_sub" type="button" class="btn btn-success">Submit</button>
                                          </div>
                                          </div>
                                   </div>
                               </div>
                            </div>
                         </div>
                         <!-- modal of maternity benifit -->
                         <div class="fade modal" id="maternity">
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
                                             <b>SS Number</b><input type="text" id="mat_ssno" class="form-control" disabled="disabled" value="<?php echo $_SESSION['crn']?>">
                                         </div>
                                         <div class="col-md-3">
                                             <b>Common ref no (if any)</b><input type="text" id="mat_ref" class="form-control">
                                         </div>
                                         <div class="col-md-3">
                                             <b>Date of Birth</b><input type="date" id="mat_bd" class="form-control" disabled="disabled" value="<?php echo $_SESSION['birthday']?>">
                                         </div>
                                         <div class="col-md-3">
                                             <b>Tax identification no</b><input type="text" id="mat_tax" class="form-control">
                                         </div>

                                          <div class="col-md-3">
                                             <b>Name ( Last name ) </b><input type="text" id="mat_lname" class="form-control" disabled="disabled" value="<?php echo $_SESSION['lastname']?>">
                                         </div>
                                          <div class="col-md-3">
                                             <b>( First name )</b><input type="text" id="mat_fname" class="form-control" disabled="disabled" value="<?php echo $_SESSION['firstname']?>">
                                         </div>
                                          <div class="col-md-3">
                                             <b>( Middle name )</b><input type="text" id="mat_mname" class="form-control" disabled="disabled" value="<?php echo $_SESSION['middlename']?>">
                                         </div>
                                          <div class="col-md-3">
                                             <b>Contact number</b><input type="text" id="mat_con" class="form-control">
                                         </div>
                                          
                                          <div class="col-md-3">
                                             <b>Address ( House Lot/Blk )</b><input type="text" id="mat_add" class="form-control">
                                         </div>
                                          <div class="col-md-3">
                                             <b>( Street/Name )</b><input type="text" id="mat_st" class="form-control">
                                         </div>
                                          <div class="col-md-3">
                                             <b>(Barangay/District/Locality)</b><input type="text" id="mat_brgy" class="form-control">
                                         </div>
                                          <div class="col-md-3">
                                             <b>( City/Province )</b><input type="text" id="mat_cty" class="form-control">
                                         </div> 
                                        <div class="col-md-3">
                                             <b>Start of maternity leave</b><input type="date" id="mat_leave" class="form-control">
                                         </div>
                                          <div class="col-md-3">
                                             <b>Date of delivery</b><input type="date" id="mat_del" class="form-control">
                                         </div> 
                                        <div class="col-md-6">
                                        <br>
                                           <b>Diagnosis</b>
                                           <select id="mat-dia" class="form-control">
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
                                             <input type="text" id="mat_bnkname" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                             <b>Bank branch address</b>
                                             <input type="text" id="mat_bnkadd" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                             <b>Bank account name</b>
                                             <input type="text" id="mat_bnkacc" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                             <b>Bank account number</b>
                                             <input type="text" id="mat_bnkno" class="form-control">
                                        </div>
                                 </div>
                                 <div class="modal-footer" style="border:solid 0px">
                                        <div class="col-md-12">
                                              <div class="btn-group">
                                                <button id="mat_clr" type="button" class="btn btn-danger">Clear</button>
                                                <button id="mat_sub" type="button" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                 </div>
                               </div>
                             </div>
                         </div>

                         <!-- modal of sickness -->
                         <div class="fade modal" id="sickness">
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
                                         <b>SS Number</b><input type="text" id="sck_ssno" class="form-control" disabled="disabled" value="<?php echo $_SESSION['crn']?>">
                                      </div>
                                      <div class="col-md-3">
                                         <b>Common reference number</b><input type="text" id="sck_ref" class="form-control">
                                      </div>
                                      <div class="col-md-3">
                                         <b>Date of birth</b><input type="date" id="sck_bd" class="form-control" disabled="disabled" value="<?php echo $_SESSION['birthday']?>">
                                      </div>
                                      <div class="col-md-3">
                                         <b>Tax identification no</b><input type="text" id="sck_tax" class="form-control">
                                      </div>

                                      <div class="col-md-3">
                                         <b>Name ( Last name ) </b><input type="text" id="sck_lname" class="form-control" disabled="disabled" value="<?php echo $_SESSION['lastname']?>">
                                      </div>
                                      <div class="col-md-3">
                                         <b>( First name ) </b><input type="text" id="sck_fname" class="form-control" disabled="disabled" value="<?php echo $_SESSION['firstname']?>">
                                      </div>
                                      <div class="col-md-3">
                                         <b>( Middle name ) </b><input type="text" id="sck_mname" class="form-control" disabled="disabled" value="<?php echo $_SESSION['middlename']?>">
                                      </div>
                                      <div class="col-md-3">
                                         <b>Civil status</b>
                                         <select id="sck_status" class="form-control">
                                           <option>Single</option>
                                           <option>Married</option>
                                           <option>Widow/Widower</option>
                                         </select>
                                      </div>
                                     <div class="col-md-12">
                                        <b>Address (House Lot/Blk)</b><input type="text" id="sck_add" class="form-control">
                                     </div> 
                                     <div class="col-md-3">
                                        <b>( Street Name )</b><input type="text" id="sck_st" class="form-control">
                                     </div>
                                     <div class="col-md-3">
                                        <b>(Barangay/District/Locality)</b><input type="text" id="sck_brgy" class="form-control">
                                     </div>
                                     <div class="col-md-3">
                                        <b>(City/Province)</b><input type="text" id="sck_cty" class="form-control">
                                     </div>
                                     <div class="col-md-3">
                                        <b>Gender</b><br>
                                        <select id="sck_gen" class="form-control">
                                          <option>Male</option>
                                          <option>Female</option>
                                        </select>
                                     </div>
                                     <div class="col-md-4">
                                        <b>Telephone Number</b><input type="text" id="sck_telno" class="form-control">
                                     </div>
                                     <div class="col-md-4">
                                        <b>Mobile Number</b><input type="text" id="sck_mobno" class="form-control">
                                     </div>
                                     <div class="col-md-4">
                                        <b>Email Address</b><input type="text" id="sck_em" class="form-control" disabled="disabled" value="<?php echo $_SESSION['email_address']?>">
                                     </div>
                                     <div class="col-md-6">
                                        <b>Sickness benefit type</b><br>
                                        <select id="sck_bentype" class="form-control">
                                          <option>SS</option>
                                          <option>EC</option>
                                        </select>
                                     </div>
                                     <div class="col-md-6">
                                        <b>Place of confinement</b><br>
                                        <select id="sck_plccon" class="form-control">
                                          <option>Home</option>
                                          <option>Hospital</option>
                                        </select>
                                     </div>
                                     <div class="col-md-12">
                                         <h5>B. MEMBER'S ENROLLMENT IN THE PAYMENT THRU THE BANK ( if not yet enrolled )</h5>
                                     </div>
                                     <div class="col-md-6">
                                       <b>Bank name and branch</b><input type="text" id="sck_bnkname" class="form-control">
                                     </div>
                                     <div class="col-md-6">
                                       <b>Bank branch address</b><input type="text" id="sck_branchadd" class="form-control">
                                     </div>

                                     <div class="col-md-6">
                                       <b>Bank account name</b><input type="text" id="sck_bnkacc" class="form-control">
                                     </div>
                                     <div class="col-md-6">
                                       <b>Bank account number</b><input type="text" id="sck_bnkaccno" class="form-control">
                                     </div>
                                 </div>
                                 <div class="modal-footer" style="border:solid 0px">
                                        <div class="col-md-12">
                                              <div class="btn-group">
                                                <button id="sck_clr" type="button" class="btn btn-danger">Clear</button>
                                                <button id="sck_sub" type="button" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                 </div>
                               </div>
                             </div>
                         </div>
                        <div class="fade modal" id="funeral">
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
                                                 <b>SS Number</b><input type="text" id="fun_ssno" class="form-control" disabled="disabled" value="<?php echo $_SESSION['crn']?>">
                                             </div> 
                                             <div class="col-md-3">
                                                 <b>Common reference no</b><input type="text" id="fun_ref" class="form-control">
                                             </div> 
                                             <div class="col-md-3">
                                                 <b>Date of birth</b><input type="date" id="fun_bd" class="form-control" class="form-control" disabled="disabled" value="<?php echo $_SESSION['birthday']?>">
                                             </div> 
                                             <div class="col-md-3">
                                                 <b>Gender</b><br>
                                                 <select id="fun_gen" class="form-control">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                 </select>
                                             </div>
                                             <div class="col-md-3">
                                                  <b>Name ( Last name )</b><input type="text" id="fun_lname" class="form-control" disabled="disabled" value="<?php echo $_SESSION['lastname']?>">  
                                             </div>
                                             <div class="col-md-3">
                                                  <b>( First name )</b><input type="text" id="fun_fname" class="form-control" disabled="disabled" value="<?php echo $_SESSION['firstname']?>">  
                                             </div>
                                             <div class="col-md-3">
                                                  <b>( Middle name )</b><input type="text" id="fun_mname" class="form-control" disabled="disabled" value="<?php echo $_SESSION['middlename']?>">  
                                             </div>
                                             <div class="col-md-3">
                                                  <b>Contact Number</b><input type="text" id="fun_con" class="form-control">  
                                             </div>
                                             
                                              <div class="col-md-3">
                                                  <b>Address</b><input type="text" id="fun_add" class="form-control">  
                                             </div>
                                             <div class="col-md-3">
                                                  <b>(Barangay/District/Locality) </b><input type="text" id="fun_brgy" class="form-control">  
                                             </div>
                                             <div class="col-md-3">
                                                  <b>(City/Province) </b><input type="text" id="fun_cty" class="form-control">  
                                             </div>
                                             <div class="col-md-3">
                                                <b>Civil status</b>
                                                <select id="fun_status" class="form-control">
                                                  <option>Single</option>
                                                  <option>Married</option>
                                                  <option>Widow/Widower</option>
                                                </select>
                                             </div>
                                            
                                             <div class="col-md-3">
                                                 <b>Place of Death</b><input type="text" id="fun_death" class="form-control">  
                                             </div>
                                             <div class="col-md-3">
                                                 <b>Date of Interment</b><input type="date" id="fun_interment" class="form-control">  
                                             </div>
                                             <div class="col-md-3">
                                                 <b>Place of Interment</b><input type="text" id="fun_pinterment" class="form-control">  
                                             </div>
                                             <div class="col-md-12">
                                                <h5>B. CLAIMANT'S INFORMATION</h5>
                                             </div>
                                             <div class="col-md-3">
                                                 <b>Name ( Last name ) </b><input type="text" id="fun_clname" class="form-control">  
                                             </div>
                                             <div class="col-md-3">
                                                 <b>( First name )</b><input type="text" id="fun_cfname" class="form-control">  
                                             </div>
                                             <div class="col-md-3">
                                                 <b>( Middle name ) </b><input type="text" id="fun_cmname" class="form-control">  
                                             </div>
                                             <div class="col-md-3">
                                                 <b>Relationship to member</b><input type="text" id="fun_rel" class="form-control">  
                                             </div>
                                            <div class="col-md-3">
                                               <b>SS Number</b><input type="text" id="fun_cssno" class="form-control">  
                                             </div>
                                             <div class="col-md-3">
                                               <b>Date of Birth</b><input type="date" id="fun_cbd" class="form-control">  
                                             </div>
                                             <div class="col-md-3">
                                               <b>Gender</b><br>
                                               <select id="fun_cgen" class="form-control">
                                                  <option>Male</option>
                                                  <option>Female</option>
                                               </select>
                                             </div>
                                             <div class="col-md-3">
                                               <b>Mobile Number</b><input type="text" id="fun_mobno" class="form-control"> 
                                             </div>
                                        <div class="modal-footer" style="border:0px solid">
                                             <div class="col-md-12">
                                              <div class="btn-group">
                                                <button id="fun_clr" type="button" class="btn btn-danger">Clear</button>
                                                <button id="fun_sub" type="button" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                        </div>
                                  </div>                                  
                            </div>
                           </div>

                        </div>
                        <div class="fade modal" id="dissability">
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
                                           <b>SS Number</b><input type="text" id="dis_ssno" class="form-control" disabled="disabled" value="<?php echo $_SESSION['crn']?>">
                                       </div>
                                       <div class="col-md-3">
                                           <b>Name ( Last name ) </b><input type="text" id="dis_lname" class="form-control" disabled="disabled" value="<?php echo $_SESSION['lastname']?>">
                                       </div>
                                       <div class="col-md-3">
                                           <b>( First name ) </b><input type="text" id="dis_fname" class="form-control" disabled="disabled" value="<?php echo $_SESSION['firstname']?>">
                                       </div>
                                       <div class="col-md-3">
                                           <b>Name (Middle name ) </b><input type="text" id="dis_mname" class="form-control" disabled="disabled" value="<?php echo $_SESSION['middlename']?>">
                                       </div>
                                       
                                       <div class="col-md-3">
                                           <b>Address(House lot/Blk)</b><input type="text" id="dis_add" class="form-control">
                                       </div>
                                       <div class="col-md-3">
                                           <b>Name ( Street/name ) </b><input type="text" id="dis_st" class="form-control">
                                       </div>
                                       <div class="col-md-3">
                                           <b>(Barangay/District/Locality)</b><input type="text" id="dis_brgy" class="form-control">
                                       </div>
                                       <div class="col-md-3">
                                           <b>(City/Province)</b><input type="text" id="dis_cty" class="form-control">
                                       </div>
                                       <div class="col-md-3">
                                           <b>Contact number</b><input type="text" id="dis_con" class="form-control">
                                       </div> 
                                       <div class="col-md-3">
                                           <b>Gender</b><br>
                                           <select id="dis_gen" class="form-control">
                                             <option>Male</option>
                                             <option>Female</option>
                                           </select>  
                                       </div>
                                       <div class="col-md-3">
                                           <b>Type of claim</b><br>
                                           <select id="dis_claim" class="form-control">
                                             <option>SS Claim</option>
                                             <option>EC Claim</option>
                                           </select>  
                                       </div>
                                       <div class="col-md-3">
                                           <b>TIN</b><input type="text" id="dis_tin" class="form-control">
                                       </div> 
                                  </div>
                                  <div class="modal-footer" style="border:0 ">
                                        <div class="col-md-12">
                                              <div class="btn-group">
                                                <button id="dis_clr" type="button" class="btn btn-danger">Clear</button>
                                                <button id="dis_sub" type="button" class="btn btn-success">Submit</button>
                                            </div>
                                  </div>
                               </div>
                           </div>
                          </div> 
                        </div>
                        <div class="fade modal" id="retirement">
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
                                        <b>SS Number</b><input type="text" id="ret_ssno" class="form-control" disabled="disabled" value="<?php echo $_SESSION['crn']?>">
                                      </div>
                                      <div class="col-md-3">
                                        <b>Name ( Last name ) </b><input type="text" id="ret_lname" class="form-control" disabled="disabled" value="<?php echo $_SESSION['lastname']?>">
                                      </div>
                                      <div class="col-md-3">
                                        <b>( First name )</b><input type="text" id="ret_fname" class="form-control" disabled="disabled" value="<?php echo $_SESSION['firstname']?>">
                                      </div>
                                      <div class="col-md-3">
                                        <b>( Middle name )</b><input type="text" id="ret_mname" class="form-control" disabled="disabled" value="<?php echo $_SESSION['middlename']?>">
                                      </div>
                                       
                                      <div class="col-md-3">
                                        <b>Address</b><input type="text" id="ret_add" class="form-control">
                                      </div> 
                                      
                                      <div class="col-md-3">
                                        <b>Date of Birth</b><input type="date" id="ret_bd" class="form-control">
                                      </div> 

                                      <div class="col-md-3">
                                        <b>Place of Birth</b><input type="text" id="ret_place" class="form-control">
                                      </div>

                                      <div class="col-md-3">
                                        <b>Gender</b><br>
                                        <select id="ret_gen" class="form-control">
                                          <option>Male</option>
                                          <option>Female</option>
                                        </select>
                                      </div>

                                      <div class="col-md-3">
                                        <b>Telephone Number</b><input type="text" id="ret_telno" class="form-control">
                                      </div>
                                      <div class="col-md-3">
                                        <b>Mobile Number</b><input type="text" id="ret_mobno" class="form-control">
                                      </div>                                      
                                 </div>
                                 <div class="modal-footer" style="border:0">
                                     <div class="col-md-12">
                                              <div class="btn-group">
                                                <button id="ret_clr" type="button" class="btn btn-danger">Clear</button>
                                                <button id="ret_sub" type="button" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                 </div>
                              </div>
                          </div>
                         </div>
                        </div>

                             
        </div>
   
      </div>

<script>
$(document).ready(function(){
//ididisable ang mga loan button kapag may schedule na
   // var scheds = $("#sched").val();
   // if(scheds.length>0)
   // {
   //    $("button").attr("disabled" , "disabled");      
   // }
  $("#info-panel").hide();
  $("#loan-panel").hide();
  $("#mem-panel").hide();
  $("#ben-panel").hide();
  $("#loan-history").hide();
  $("#contribution").hide();
  
  $("#info").click(function(){
        $(this).addClass("text text-primary");
        $("#loans").removeClass("text text-primary");
        $("#history").removeClass("text text-primary");
         $("#check").removeClass("text text-primary");

        $("#loan-panel").slideUp();
        $("#info-panel").slideDown();
        $("#loan-history").slideUp();
        $("#contribution").slideUp();
  });   
  $("#loans").click(function(){
      $(this).addClass("text text-primary");
      $("#info").removeClass("text text-primary");
      $("#history").removeClass("text text-primary");
       $("#check").removeClass("text text-primary");

      $("#info-panel").slideUp();
      $("#loan-panel").slideDown();  
      $("#loan-history").slideUp();
      $("#contribution").slideUp();
  });
   
  $("#history").click(function(){
     $(this).addClass("text text-primary");
     $("#info").removeClass("text text-primary");
     $("#loans").removeClass("text text-primary");
     $("#check").removeClass("text text-primary");

      $("#info-panel").slideUp();
       $("#loan-history").slideDown();
      $("#loan-panel").slideUp();  
      $("#contribution").slideUp();
     
  });
   $("#check").click(function(){
     $(this).addClass("text text-primary");
     $("#info").removeClass("text text-primary");
     $("#loans").removeClass("text text-primary");
     $("#history").removeClass("text text-primary");

       $("#info-panel").slideUp();
      $("#contribution").slideDown();
       $("#loan-history").slideUp();
      $("#loan-panel").slideUp();  
     
   });

  $("#mem-loan").click(function(){
            $("#ben-panel").slideUp(); 
            $("#mem-panel").slideDown();
            
  });

  $("#ben-loan").click(function(){
            $("#mem-panel").slideUp();
            $("#ben-panel").slideDown();
           
  });

  $("#dir_ssnum").keypress(function(e){
        if(e.keyCode<47 || e.keyCode >57)
        {
          e.preventDefault();
        }
        var ssnum = $("#dir_ssnum").val();
        if(ssnum.length >=10)
        {
          e.preventDefault();
        }
  });
$("#dir_cssnum").keypress(function(e){
        if(e.keyCode<47 || e.keyCode >57)
        {
          e.preventDefault();
        }
        var ssnum = $("#dir_cssnum").val();
        if(ssnum.length >=10)
        {
          e.preventDefault();
        }
  });
$("#fun_ssno").keypress(function(e){
        if(e.keyCode<47 || e.keyCode >57)
        {
          e.preventDefault();
        }
        var ssnum = $("#fun_ssno").val();
        if(ssnum.length >=10)
        {
          e.preventDefault();
        }
  });
$("#educ_ssno").keypress(function(e){
        if(e.keyCode<47 || e.keyCode >57)
        {
          e.preventDefault();
        }
        var ssnum = $("#educ_ssno").val();
        if(ssnum.length >=10)
        {
          e.preventDefault();
        }
  });

$("#hou_ssno").keypress(function(e){
        if(e.keyCode<47 || e.keyCode >57)
        {
          e.preventDefault();
        }
        var ssnum = $("#hou_ssno").val();
        if(ssnum.length >=10)
        {
          e.preventDefault();
        }
  });

$("#dis_ssno").keypress(function(e){
        if(e.keyCode<47 || e.keyCode >57)
        {
          e.preventDefault();
        } 
        var ssnum = $("#dis_ssno").val();
        if(ssnum.length >=10)
        {
          e.preventDefault();
        }
  });

$("#mat_ssno").keypress(function(e){
        if(e.keyCode<47 || e.keyCode >57)
        {
          e.preventDefault();
        }
        var ssnum = $("#mat_ssno").val();
        if(ssnum.length >=10)
        {
          e.preventDefault();
        }
  });

$("#sck_ssno").keypress(function(e){
        if(e.keyCode<47 || e.keyCode >57)
        {
          e.preventDefault();
        }
        var ssnum = $("#sck_ssno").val();
        if(ssnum.length >=10)
        {
          e.preventDefault();
        }
  });
$("#educ_con").keypress(function(e){
        if(e.keyCode<47 || e.keyCode >57)
        {
          e.preventDefault();
        }
        var con = $("#educ_con").val();
        if(con.length >=11)
        {
          e.preventDefault();
        }
  });


$("#mat_con").keypress(function(e){
        if(e.keyCode<47 || e.keyCode >57)
        {
          e.preventDefault();
        }
        var con = $("#mat_con").val();
        if(con.length >=11)
        {
          e.preventDefault();
        }
  });

$("#hou_con").keypress(function(e){
        if(e.keyCode<47 || e.keyCode >57)
        {
          e.preventDefault();
        }
        var con = $("#hou_con").val();
        if(con.length >=11)
        {
          e.preventDefault();
        }
  });

$("#sck_mobno").keypress(function(e){
    if(e.keyCode<47 || e.keyCode > 57)
    {
      e.preventDefault();
    }
    var mob = $("#sck_mobno").val();
    if(mob.length >=11)
    {
      e.preventDefault(); 
    }
});

$("#fun_con").keypress(function(e){
    if(e.keyCode<47 || e.keyCode > 57)
    {
      e.preventDefault();
    }
    var con = $("#fun_con").val();
    if(con.length >=11)
    {
      e.preventDefault(); 
    }
});

$("#fun_mobno").keypress(function(e){
    if(e.keyCode<47 || e.keyCode > 57)
    {
      e.preventDefault();
    }
    var con = $("#fun_mobno").val();
    if(con.length >=11)
    {
      e.preventDefault(); 
    }
});


$("#dis_con").keypress(function(e){
    if(e.keyCode<47 || e.keyCode > 57)
    {
      e.preventDefault();
    }
    var con = $("#dis_con").val();
    if(con.length >=11)
    {
      e.preventDefault(); 
    }
});

$("#sck_telno").keypress(function(e){
        if(e.keyCode<47 || e.keyCode >57)
        {
          e.preventDefault();
        }
        var con = $("#sck_telno").val();
        if(con.length >=7)
        {
          e.preventDefault();
        }
  });

  $("#fun_ssno").keypress(function(e){
        if(e.keyCode<47 || e.keyCode >57)
        {
          e.preventDefault();
        }
        var ssnum = $("#fun_ssno").val();
        if(ssnum.length >=10)
        {
          e.preventDefault();
        }
  });

  $("#fun_cssno").keypress(function(e){
        if(e.keyCode<47 || e.keyCode >57)
        {
          e.preventDefault();
        }
        var ssnum = $("#fun_cssno").val();
        if(ssnum.length >=10)
        {
          e.preventDefault();
        }
  });

$("#ret_ssno").keypress(function(e){
        if(e.keyCode<47 || e.keyCode >57)
        {
          e.preventDefault();
        }
        var ssnum = $("#ret_ssno").val();
        if(ssnum.length >=10)
        {
          e.preventDefault();
        }
  });


$("#ret_mobno").keypress(function(e){
    if(e.keyCode<47 || e.keyCode > 57)
    {
      e.preventDefault();
    }
    var con = $("#ret_mobno").val();
    if(con.length >=11)
    {
      e.preventDefault(); 
    }
});

$("#ret_telno").keypress(function(e){
        if(e.keyCode<47 || e.keyCode >57)
        {
          e.preventDefault();
        }
        var con = $("#ret_telno").val();
        if(con.length >=7)
        {
          e.preventDefault();
        }
  });

$("#educ_refno,#educ_tax,#hou_refno,#hou_tax,#mat_ref,#mat_tax,#mat_bnkno,#sck_ref,#sck_tax,#sck_bnkaccno,#fun_ref,#dis_tin").keypress(function(e){
        if(e.keyCode<47 || e.keyCode >57)
        {
          e.preventDefault();
        }
        
  });

$("#dir_clname,#dir_cfname,#dir_cmname,#dir_rel,#dir_cty,#dir_place,#dir_mname,#dir_fname,#dir_lname,#educ_lname,#educ_fname,#educ_mname,#educ_st,#educ_cty,#educ_blname,#educ_bfname,#educ_bmname,#educ_school,#hou_lname,#hou_fname,#hou_mname,#hou_st,#hou_cty,#mat_lname,#mat_fname,#mat_mname,#mat_st,#mat_cty,#mat_bnkacc,#sck_lname,#sck_fname,#sck_mname,#sck_st,#sck_cty,#sck_bnkacc,#fun_lname,#fun_fname,#fun_mname,#fun_cty,#fun_death,#fun_pinterment,#fun_clname,#fun_cfname,#fun_cmname,#dis_lname,#dis_fname,#dis_mname,#dis_st,#dis_cty,#ret_lname,#ret_fname,#ret_mname,#ret_place").keypress(function(e){
     if(e.keyCode!=32 &&(e.keyCode < 65 || e.keyCode > 92)&&(e.keyCode < 97 || e.keyCode > 122))
       {
          e.preventDefault();
       }   
});

$("#dir_ccon").keypress(function(e){
        if(e.keyCode<47 || e.keyCode >57)
        {
          e.preventDefault();
        }
        var ccon = $("#dir_ccon").val();
        if(ccon.length >=11)
        {
          e.preventDefault();
        }
  });

  $("#update").click(function(){
       var crn        = $("#crn").val();
       var firstname  = $("#fname").val();
       var middlename = $("#mname").val();
       var lastname   = $("#lname").val();
       var birthday   = $("#bd").val();
       var email      = $("#em").val();
       var ID         = $("#ID").val();
       var dataString = "&crn="+crn+"&fname="+firstname+"&mname="+middlename+"&lname="+lastname+"&bd="+birthday+"&em="+email+"&id="+ID;       
       $.ajax({
           url:"RequestChange.php",
           type:"POST",
           data:dataString,
           success: function(data)
           {
                alert(data);
           } 
       });
       
  });
$("#dir_sub").click(function(){
  //for member
   var ssno   = $("#dir_ssnum").val();
   var lname  = $("#dir_lname").val();
   var fname  = $("#dir_fname").val();
   var mname  = $("#dir_mname").val();
   var bd     = $("#dir_bd").val();
   var death  = $("#dir_death").val();
   var place  = $("#dir_place").val();
   var cty    = $("#dir_cty").val();
   var claim  = $("#dir_claim").val();
   var status = $("#dir_status").val();

   //for claimant
   var cssnum = $("#dir_cssnum").val();
   var clname = $("#dir_clname").val();
   var cfname = $("#dir_cfname").val();
   var cmname = $("#dir_cmname").val();
   var cadd   = $("#dir_cadd").val();
   var cbd    = $("#dir_cbd").val();
   var cgen   = $("#cgender").val();
   var rel    = $("#dir_rel").val();
   var ccon   = $("#dir_ccon").val(); 

   var dataString = "ssno="+ssno+"&lname="+lname+"&fname="+fname+"&mname="+mname+"&bd="+bd+"&death="+death+"&place="+place+"&cty="+cty+"&claim="+claim+"&status="+status+"&cssnum="+cssnum+"&clname="+clname+"&cfname="+cfname+"&cmname="+cmname+"&cadd="+cadd+"&cbd="+cbd+"&cgen="+cgen+"&rel="+rel+"&ccon="+ccon; 

  if(ssno.length!=0 && lname.length!=0 && fname.length!=0 && mname.length!=0 && bd.length!=0 && death.length!=0 && place.length!=0 && cty.length!=0 && claim.length!=0 && status.length!=0 && cssnum.length!=0 && clname.length!=0 && cfname.length!=0 && cmname.length!=0 && cadd.length!=0 && cbd.length!=0 && cgen.length!=0 && rel.length!=0 && ccon.length!=0)
  {
      $.ajax({
       url:"deathbenifitrequest.php",
       type:"post",
       data:dataString,
       success:function(data)
       {
        alert(data);
       }
   });   
  }
  else
  {
    alert("please fillup all required field");
  }
});

$("#educ_sub").click(function(){
    var ssno   = $("#educ_ssno").val();
    var refno  = $("#educ_refno").val();
    var bd     = $("#educ_bd").val();
    var tax    = $("#educ_tax").val();
    var lname  = $("#educ_lname").val();
    var fname  = $("#educ_fname").val();
    var mname  = $("#educ_mname").val();
    var con    = $("#educ_con").val();
    var add    = $("#educ_add").val();
    var street = $("#educ_st").val();
    var brgy   = $("#educ_brgy").val();
    var cty    = $("#educ_cty").val();
    var em     = $("#educ_em").val();
    var gender = $("#educ_gen").val();
    var status = $("#educ_status").val();
    var blname = $("#educ_blname").val();
    var bfname = $("#educ_bfname").val();
    var bmname = $("#educ_bmname").val();
    var rel    = $("#educ_rel").val();
    var school = $("#educ_school").val();
    var sadd   = $("#educ_sadd").val();
    var rep    = $("#educ_rep").val();
    var amount = $("#educ_amount").val();
    var dataString = "ssno="+ssno+"&refno="+refno+"&bd="+bd+"&tax="+tax+"&lname="+lname+"&fname="+fname+"&mname="+mname+"&con="+con+"&add="+add+"&street="+street+"&brgy="+brgy+"&cty="+cty+"&em="+em+"&gender="+gender+"&status="+status+"&blname="+blname+"&bfname="+bfname+"&bmname="+bmname+"&rel="+rel+"&school="+school+"&sadd="+sadd+"&rep="+rep+"&amount="+amount;
 
    if(ssno.length!=0 && bd.length!=0 && lname.length!=0 && fname.length!=0 && mname.length!=0 && con.length!=0 && add.length!=0 && street.length!=0 && brgy.length!=0 && cty.length!=0 && em.length!=0 && gender.length!=0 && status.length!=0 && blname.length!=0 && bfname.length!=0 && bmname.length!=0 && rel.length!=0 && school.length!=0 && sadd.length!=0 && rep.length!=0 && amount.length!=0)
    {
          $.ajax({
              url:" educationalassistanceloanrequest.php",
              type:"POST",
              data:dataString,
              success:function(data)
              {
                alert(data);
              }
         });
      
    }
    else
    {
           alert("please fillup required field");
    }
});

$("#hou_sub").click(function(){
  var ssno  = $("#hou_ssno").val();
  var refno = $("#hou_refno").val();
  var bd    = $("#hou_bd").val();
  var tax   = $("#hou_tax").val();
  var lname = $("#hou_lname").val();
  var fname = $("#hou_fname").val();
  var mname = $("#hou_mname").val();
  var con   = $("#hou_con").val();
  var add   = $("#hou_add").val();
  var st    = $("#hou_st").val();
  var brgy  = $("#hou_brgy").val();
  var cty   = $("#hou_cty").val();
  var em    = $("#hou_em").val();
  var gen   = $("#hou_gen").val();
  var status= $("#hou_status").val();
  var rep   = $("#hou_rep").val();
  var amount = $("#hou_amount").val();
  var dataString = "ssno="+ssno+"&refno="+refno+"&bd="+bd+"&tax="+tax+"&lname="+lname+"&fname="+fname+"&mname="+mname+"&con="+con+"&add="+add+"&st="+st+"&brgy="+brgy+"&cty="+cty+"&em="+em+"&gen="+gen+"&status="+status+"&rep="+rep+"&amount="+amount;
  if(ssno.length!=0 && refno.length!=0 && bd.length!=0 && tax.length!=0 && lname.length!=0 && fname.length!=0 && mname.length!=0 && con.length!=0 && add.length!=0 && st.length!=0 && brgy.length!=0 && cty.length!=0 && em.length!=0 && gen.length!=0 && status.length!=0 && rep.length!=0)
  {
         $.ajax({
          url:"directhousingloanrequest.php",
          type:"POST",
          data:dataString,
          success:function(data){
            alert(data);
          }
       });
  }
  else
  {
          alert("please fillup required field");
  }
 
});


$("#mat_sub").click(function(){
     var ssno  = $("#mat_ssno").val();
     var ref   = $("#mat_ref").val();
     var bd    = $("#mat_bd").val();
     var tax   = $("#mat_tax").val();
     var lname = $("#mat_lname").val();
     var fname = $("#mat_fname").val();
     var mname = $("#mat_mname").val();
     var con   = $("#mat_con").val();
     var add   = $("#mat_add").val();
     var st    = $("#mat_st").val();
     var brgy  = $("#mat_brgy").val();
     var cty   = $("#mat_cty").val();
     var leave = $("#mat_leave").val();
     var del   = $("#mat_del").val();
     var dia   = $("#mat-dia").val();
     var bname = $("#mat_bnkname").val();
     var badd  = $("#mat_bnkadd").val();
     var bacc  = $("#mat_bnkacc").val();
     var bno   = $("#mat_bnkno").val();
     var dataString = "ssno="+ssno+"&ref="+ref+"&bd="+bd+"&tax="+tax+"&lname="+lname+"&fname="+fname+"&mname="+mname+"&con="+con+"&add="+add+"&st="+st+"&brgy="+brgy+"&cty="+cty+"&leave="+leave+"&del="+del+"&dia="+dia+"&bname="+bname+"&badd="+badd+"&bacc="+bacc+"&bno="+bno;
       if(ssno.length!=0 && ref.length!=0 && bd.length!=0 && tax.length!=0 && lname.length!=0 && fname.length!=0 && mname.length!=0 && con.length!=0 && add.length!=0 && st.length!=0 && brgy.length!=0 && cty.length!=0 && leave.length!=0 && del.length!=0 && dia.length!=0 && bname.length!=0 && badd.length!=0 && bacc.length!=0 && bno.length!=0)
       {
         $.ajax({
            url:"maternitybenifitrequest.php",
            type:"POST",
            data:dataString,
            success:function(data){
                 alert(data);
            }
        }); 
       }   
       else
       {
               alert("please fillup required field");
       }
});

$("#sck_sub").click(function(){
   var ssno      = $("#sck_ssno").val();
   var ref       = $("#sck_ref").val();
   var bd        = $("#sck_bd").val();
   var tax       = $("#sck_tax").val();
   var lname     = $("#sck_lname").val();
   var fname     = $("#sck_fname").val();
   var mname     = $("#sck_mname").val();
   var status    = $("#sck_status").val();
   var add       = $("#sck_add").val();
   var st        = $("#sck_st").val();
   var brgy      = $("#sck_brgy").val();
   var cty       = $("#sck_cty").val();
   var gen       = $("#sck_gen").val();
   var telno     = $("#sck_telno").val();
   var mobno     = $("#sck_mobno").val();
   var em        = $("#sck_em").val();
   var bentype   = $("#sck_bentype").val();
   var contiment = $("#sck_plccon").val(); 
   var bname     = $("#sck_bnkname").val();
   var branchadd = $("#sck_branchadd").val();
   var bacc      = $("#sck_bnkacc").val();
   var accno     = $("#sck_bnkaccno").val();
   var dataString = "ssno="+ssno+"&ref="+ref+"&bd="+bd+"&tax="+tax+"&lname="+lname+"&fname="+fname+"&mname="+mname+"&status="+status+"&add="+add+"&st="+st+"&brgy="+brgy+"&cty="+cty+"&gen="+gen+"&telno="+telno+"&mobno="+mobno+"&em="+em+"&bentype="+bentype+"&contiment="+contiment+"&bname="+bname+"&branchadd="+branchadd+"&bacc="+bacc+"&accno="+accno;
   if(ssno.length!=0 && ref.length!=0 && bd.length!=0 && tax.length!=0 && lname.length!=0 && fname.length!=0 && mname.length!=0 && status.length!=0 && add.length!=0 && st.length!=0 && brgy.length!=0 && cty.length!=0 && gen.length!=0 && telno.length!=0 && mobno.length!=0 && em.length!=0 && bentype.length!=0 && contiment.length!=0 && bname.length!=0 && branchadd.length!=0 && bacc.length!=0 && accno.length!=0 )
   {
    $.ajax({
         url:"sicknessbenifitrequest.php",
         type:"POST",
         data: dataString,
         success:function(data)
         {
            alert(data);
         }
   });
   }
   else
       {
               alert("please fillup required field");
       }
});

$("#fun_sub").click(function(){
        var ssno      = $("#fun_ssno").val();
        var ref       = $("#fun_ref").val();
        var bd        = $("#fun_bd").val();
        var gen       = $("#fun_gen").val();
        var lname     = $("#fun_lname").val();
        var fname     = $("#fun_fname").val();
        var mname     = $("#fun_mname").val();
        var con       = $("#fun_con").val();
        var add       = $("#fun_add").val();
        var brgy      = $("#fun_brgy").val();
        var cty       = $("#fun_cty").val();
        var status    = $("#fun_status").val();
        var death     = $("#fun_death").val();
        var inter     = $("#fun_interment").val();
        var pinter    = $("#fun_pinterment").val();
        var clname    = $("#fun_clname").val();
        var cfname    = $("#fun_cfname").val();
        var cmname    = $("#fun_cmname").val();
        var rel       = $("#fun_rel").val();
        var cssno     = $("#fun_cssno").val();
        var cbd       = $("#fun_cbd").val();
        var cgen      = $("#fun_cgen").val();
        var mobno     = $("#fun_mobno").val();
        var dataString = "ssno="+ssno+"&ref="+ref+"&bd="+bd+"&gen="+gen+"&lname="+lname+"&fname="+fname+"&mname="+mname+"&con="+con+"&add="+add+"&brgy="+brgy+"&cty="+cty+"&status="+status+"&death="+death+"&inter="+inter+"&pinter="+pinter+"&clname="+clname+"&cfname="+cfname+"&cmname="+cmname+"&rel="+rel+"&cssno="+cssno+"&cbd="+cbd+"&cgen="+cgen+"&mobno="+mobno;
      if(ssno.length!=0 && ref.length!=0 && bd.length !=0 && gen.length!=0 && lname.length!=0 && fname.length!=0 && mname.length!=0 && con.length!=0 && add.length!=0 && brgy.length!=0 && cty.length!=0 && status.length!=0 && death.length!=0 && inter.length!=0 && pinter.length!=0 && clname.length!=0 && cfname.length!=0 && cmname.length!=0 && rel.length!=0 && cssno.length!=0 && cbd.length!=0 && cgen.length!=0 && mobno.length!=0)
      {
          $.ajax({
             url:"funeralbenifitreq.php",
             type:"POST",
             data:dataString,
             success:function(data)
              {
                alert(data);
              }
        });
      }
      else
       {
               alert("please fillup required field");
       }
});

$("#fun_clr").click(function(){
        var ref        = $("#fun_ref").val("");
        var gen        = $("#fun_gen").val("Male");
        var con        = $("#fun_con").val("");
        var add        = $("#fun_add").val("");
        var brgy       = $("#fun_brgy").val("");
        var cty        = $("#fun_cty").val("");
        var status     = $("#fun_status").val("Single");
        var death      = $("#fun_death").val("");
        var inter      = $("#fun_interment").val("");
        var pinter     = $("#fun_pinterment").val("");
        var clname     = $("#fun_clname").val("");
        var cfname     = $("#fun_cfname").val("");
        var cmname     = $("#fun_cmname").val("");
        var rel        = $("#fun_rel").val("");
         var cssno     = $("#fun_cssno").val("");
        var cbd        = $("#fun_cbd").val("");
        var cgen       = $("#fun_cgen").val("Male");
        var mobno      = $("#fun_mobno").val("");
      
});

$("#sck_clr").click(function(){
   var ref  = $("#sck_ref").val("");
   var tax  = $("#sck_tax").val("");
   var status= $("#sck_status").val("Single");
   var add   = $("#sck_add").val("");
   var st    = $("#sck_st").val("");
   var brgy  = $("#sck_brgy").val("");
   var cty   = $("#sck_cty").val("");
   var gen   = $("#sck_gen").val("Male");
   var telno = $("#sck_telno").val("");
   var mobno = $("#sck_mobno").val("");
   var bentype = $("#sck_bentype").val("SS");
   var contiment = $("#sck_plccon").val("Home"); 
   var bname     = $("#sck_bnkname").val("");
   var branchadd = $("#sck_branchadd").val("");
   var bacc      = $("#sck_bnkacc").val("");
   var accno     = $("#sck_bnkaccno").val("");

});

$("#mat_clr").click(function(){
     var ref   = $("#mat_ref").val("");
     var tax   = $("#mat_tax").val("");
     var con   = $("#mat_con").val("");
     var add   = $("#mat_add").val("");
     var st    = $("#mat_st").val("");
     var brgy  = $("#mat_brgy").val("");
     var cty   = $("#mat_cty").val("");
     var leave = $("#mat_leave").val("");
     var del   = $("#mat_del").val("");
     var dia   = $("#mat-dia").val("Normal");
     var bname = $("#mat_bnkname").val("");
     var badd  = $("#mat_bnkadd").val("");
     var bacc  = $("#mat_bnkacc").val("");
     var bno   = $("#mat_bnkno").val("");
   });

$("#educ_clr").click(function(){
    var refno = $("#educ_refno").val("");
    var tax   = $("#educ_tax").val("");
    var con   = $("#educ_con").val("");
    var add   = $("#educ_add").val("");
    var street= $("#educ_st").val("");
    var brgy  = $("#educ_brgy").val("");
    var cty   = $("#educ_cty").val("");
    var gender= $("#educ_gen").val("Male");
    var status= $("#educ_status").val("Single");
    var blaname= $("#educ_blname").val("");
    var bfname = $("#educ_bfname").val("");
    var bmname = $("#educ_bmname").val("");
    var rel    = $("#educ_rel").val("Legal Spouse");
    var school = $("#educ_school").val("");
    var sadd   = $("#educ_sadd").val("");
    var rep    = $("#educ_rep").val("1");
});

$("#hou_clr").click(function(){
   $("#hou_refno").val("");
   $("#hou_tax").val("");
   $("#hou_con").val("");
   $("#hou_add").val("");
   $("#hou_st").val("");
   $("#hou_brgy").val("");
   $("#hou_cty").val("");
   $("#hou_gen").val("Male");
   $("#hou_status").val("Single");
   $("#hou_rep").val("5");
   $("#hou_amount").val("");
});

$("#sal_ssno").keypress(function(e){
   if(e.keyCode!=8 && (e.keyCode<47 || e.keyCode >57))
   {
        e.preventDefault();
   }
   var ssno = $("#sal_ssno").val();
   if(ssno.length>=10)
   {
       e.preventDefault();
   }
});

$("#dir_clr").click(function(){
   var death = $("#dir_death").val("");
   var place = $("#dir_place").val("");
   var cty   = $("#dir_cty").val("");
   var claim = $("#dir_claim").val("Social Security");
   var status = $("#dir_status").val("Single");

   //for claimant
   var cssnum = $("#dir_cssnum").val("");
   var clname = $("#dir_clname").val("");
   var cfname = $("#dir_cfname").val("");
   var cmname = $("#dir_cmname").val("");
   var cadd   = $("#dir_cadd").val("");
   var cbd    = $("#dir_cbd").val("");
   var cgen   = $("#cgender").val("Male");
   var rel    = $("#dir_rel").val("");
   var ccon   = $("#dir_ccon").val(""); 
});
$("#dis_sub").click(function(){
   var ssno = $("#dis_ssno").val();
   var lname= $("#dis_lname").val();
   var fname= $("#dis_fname").val();
   var mname= $("#dis_mname").val();
   var add  = $("#dis_add").val();
   var st   = $("#dis_st").val();
   var brgy = $("#dis_brgy").val();
   var cty  = $("#dis_cty").val();
   var con  = $("#dis_con").val();
   var gen  = $("#dis_gen").val();
   var claim = $("#dis_claim").val();
   var tin   = $("#dis_tin").val();
   var dataString = "ssno="+ssno+"&lname="+lname+"&fname="+fname+"&mname="+mname+"&add="+add+"&st="+st+"&brgy="+brgy+"&cty="+cty+"&con="+con+"&gen="+gen+"&claim="+claim+"&tin="+tin;
   if(ssno.length!=0 && lname.length!=0 && fname.length!=0 && mname.length!=0 && add.length!=0 && st.length!=0 && brgy.length!=0 && cty.length!=0 && con.length!=0 && gen.length!=0 && claim.length!=0 && tin.length!=0)
   {
    $.ajax({
      url:"dissabilityrbenifitrequest.php",
      type:"POST",
      data:dataString,
      success:function(data)
      {
        alert(data);
      }

   });
   } 
else
       {
               alert("please fillup required field");
       }
});

$("#dis_clr").click(function(){
   var add  = $("#dis_add").val("");
   var st   = $("#dis_st").val("");
   var brgy = $("#dis_brgy").val("");
   var cty  = $("#dis_cty").val("");
   var con  = $("#dis_con").val("");
   var gen  = $("#dis_gen").val("Male");
   var claim = $("#dis_claim").val("SS Claim");
   var tin   = $("#dis_tin").val("");
   
});

$("#ret_sub").click(function(){
   var ssno = $("#ret_ssno").val();
   var lname = $("#ret_lname").val();
   var fname = $("#ret_fname").val();
   var mname = $("#ret_mname").val();
   var add   = $("#ret_add").val();
   var bd    = $("#ret_bd").val();
   var place = $("#ret_place").val();
   var gen   = $("#ret_gen").val();
   var telno = $("#ret_telno").val();
   var mobno = $("#ret_mobno").val();
   var dataString = "ssno="+ssno+"&lname="+lname+"&fname="+fname+"&mname="+mname+"&add="+add+"&bd="+bd+"&place="+place+"&gen="+gen+"&telno="+telno+"&mobno="+mobno;
   $.ajax({
      url:"retirementbenifitrequest.php",
      type:"POST",
      data:dataString,
      success:function(data)
      {
        alert(data);
      } 
   });
});

$("#ret_clr").click(function(){
   $("#ret_add").val("");
   $("#ret_bd").val("");
   $("#ret_place").val("");
   $("#ret_gen").val("Male");
   $("#ret_telno").val("");
   $("#ret_mobno").val("");
});


});
</script>
</html> 