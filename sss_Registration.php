<!DOCTYPE html>
<head>
<title>Social Security System</title>
</head>
<link rel="icon" href="image/SSS-Abroad.jpg">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<style type="text/css" rel="stylesheet">

@media (min-width:200px) and (max-width:767px)
{
  ul[id="navs"]

  {
    display:none;
  }
  div ul[id="collapse-menu"]
  {
    display:inline-block;
  }
#emp_id,
#dat_cov,
#add_ln1,
#add_ln2,
#ctypro,
#pos_cd,
#lnum,  
#mnum,
#pref,
#con_pref,
#com_email,
#concom_email{
    position:absolute;
    left:250px;
    float: left;
  }
  #crn_no,
  #fname,
  #mname,
  #lname,
  #bd,
  #em,
  #con_em
  {
   position:absolute;
   left:250px;
  }
  #emp_ids,
  #dat_covs,
  #hr_em,
  #con_hrem,
  #prefe,
  #con_prefe,
  #lnd_no,
  #mobno
  {
    position:absolute;
    left:250px;
  }
  ul[id="collapse-menu"] > li :hover
  {
   background-color:#015784; 
  }  
ul[id="collapse-menu"] > li
{
  background-color:#016194;
} 
    
}
@media (min-width:768px) and (max-width:991px)
{
#emp_id,
#dat_cov,
#add_ln1,
#add_ln2,
#ctypro,
#pos_cd,
#lnum,
#mnum,
#pref,
#con_pref,
#com_email,
#concom_email{
    position:absolute;
    left:250px;
   }
#crn_no,
  #fname,
  #mname,
  #lname,
  #bd,
  #em,
  #con_em
  {
   position:absolute;
   left:250px;
  }
  #emp_ids,
  #dat_covs,
  #hr_em,
  #con_hrem,
  #prefe,
  #con_prefe,
  #lnd_no,
  #mobno
  {
    position:absolute;
    left:250px;
  }
}
@media (min-width:768px) and (max-width:1440px)
{
 div ul[id="collapse-menu"] >li
  {
    display:none;
  }
  ul[id="navs"]
  {
    display:block;
  } 
  button[id="toggle-button"]
  {
    display:none;
  }
  button[id="btnlogins"]
  {
    display:none;
  }
  #sm-nav{
    display:none;
  }
  #crn_no,
  #fname,
  #mname,
  #lname,
  #bd,
  #em,
  #con_em
  {
   position:absolute;
   left:250px;
  }
  #emp_ids,
  #dat_covs,
  #hr_em,
  #con_hrem,
  #prefe,
  #con_prefe,
  #lnd_no,
  #mobno
  {
    position:absolute;
    left:250px;
  }
 }

</style>
<body>
<div class="container-fluid">
   <div class="row">
    <div class="col-md-2 col-sm-2 col-xm-12">
     <a href="sss_main.php"><img src="image/SSS-Abroad.jpg" class="img-responsive"></a>
    </div>
      <div class="col-md-10 col-sm-12 col-xm-12 bg bg-primary" id="sm-nav">
          <button type="button" class="btn btn-primary pull-left btn-group-item" id="btnlogins" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in" style="font-size:20px"></span> Login</button>
          <button class="pull-right btn btn-primary" id="toggle-button"><span class="glyphicon glyphicon-align-justify" style="font-size:20px"></span></button>
          <br><br>        
      </div>
       <ul id="collapse-menu" class="nav nav-stacked nav-justified">
             <li class="bg bg-primary"><a href="sss_main.php"><font color="white"><span class="glyphicon glyphicon-home"></span> Home</font></a></li>
             <li class="bg bg-primary"><a href="sss_loan.php"><font color="white"><span class="glyphicon glyphicon-usd"></span> Loans</font></a></li>    
             <li class="bg bg-primary"><a href="#"><font color="white"><span class="glyphicon glyphicon-heart"></span> Benifits</font></a></li>
             <li class="bg bg-primary"><a href="#"><font color="white"><span class="glyphicon glyphicon-star-empty"></span> My.SSS</font></a></li>
             <li class="bg bg-primary"><a href="#"><font color="white"><span class="glyphicon glyphicon-user"></span> Membership</font></a></li>
          </ul>
      <div class="col-md-10 col-sm-12 col-xm-12">
       <br>
      <ul class="nav nav-tabs" id="navs">
            <li><a href="sss_main.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
              <li><a href="sss_loan.php" ><span>&#8369;</span> Loans</a></li>
                 <li class="dropdown" id="Benifits-dropdown">       
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-heart"></span> Benifits
                   <span class="glyphicon glyphicon-chevron-down"></span></a>
                   <ul class="dropdown-menu" id="Benifits-choices">
                      <li><a href="sickness_pdf.php"><span class="glyphicon glyphicon-heart"></span>  Sickness</a></li>
                      <li><a href="maternity_pdf.php"><span class="glyphicon glyphicon-user"></span> Maternity</a></li>
                        <li><a href="retirement_pdf.php"><span class="glyphicon glyphicon-briefcase"></span> Retirement</a></li>
                        <li><a href="disability_pdf.php"><span class="glyphicon glyphicon-plus"></span> Disability</a></li>
                        <li><a href="death_pdf.php"><span class="glyphicon glyphicon-inbox"></span> Death</a></li>
                        <li><a href="funeral_pdf.php"><span class="glyphicon glyphicon-heart-empty"></span> Funeral</a></li>

                  </ul>
                </li>
                 <li class="dropdown active" id="MySSS-dropdown">       
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-star-empty"></span> My.SSS
                   <span class="glyphicon glyphicon-chevron-down"></span></a>
                   <ul class="dropdown-menu" id="MySSS-choices">
                      <li><a href="sss_Registration.php"><span class="glyphicon glyphicon-plus"></span> Registration</a></li>
                     <li><a href="E-paymentService.php"><span class="glyphicon glyphicon-credit-card"></span> E-Payment Service</a></li>
                     <li><a href="About_mySSS.php"><span class="glyphicon glyphicon-info-sign"></span> About MySSS</a></li>
                  </ul>
                </li>
               <li class="dropdown" id="membership-dropdown">       
                    <a href="sss_benifits.php" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Membership
                   <span class="glyphicon glyphicon-chevron-down"></span></a>
                   <ul class="dropdown-menu" id="membership-choices">
                      <li><a href="scheduleofcontribution.php"><span class="glyphicon glyphicon-calendar"></span> Schedule of Contribution</a></li>
                     
                  </ul>
               </li>
                  <button type="button" class="btn btn-primary pull-right" id="btnlogin" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</button>
        </ul>     
    </div>  
</div>
<div class="row">
      <div class="col-md-12">
         <div class="modal fade modal" id="loginModal" tabindex="-1">
           <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header" style="background-color:#016194;">
                     <button class="close" data-dismiss="modal" style="color:white" id="close">&times;</button>
                     <h2 class="modal-title"><font color="white">Login</font></h2> 
                     <span class="glyphicon glyphicon-lock pull-right" style="font-size:50px;color:white"></span>
                     <p  id="response"  ></p>
                </div>
                <div class="modal-body">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="username" type="text" class="form-control"  placeholder="Username">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control"  placeholder="Password">
                            <br>
                            <select class="form-control" id="usertype">
                              <option>Admin</option>
                              <option>Member</option>
                            </select>
                </div>

                    <div class="modal-footer">
                           <button class="btn btn-success btn-block" id="login" name="login"><span class="glyphicon glyphicon-log-in"></span> Login</button>
                    </div>
                </div>
              </div>
           </div>
         </div>
     </div>
 


    <div class="container">
        <div class="row">
           <div class="col-md-12">
             <ul class="nav nav-justified">
              <li class="bg bg-success" id="employer_registration"><center>Employer Registration</center></li>
              <li class="bg bg-warning" id="member_registration"><center>Member Registration</center></li>
              <li class="bg bg-danger " id="household_registration"><center>Household Employer Registration</center></li>
            </ul>
          </div>
         </div>
      <div class="row">
         <div class="col-md-12 col-xm-12" id="employer-panel" >
            <h1>Online Employer User ID Registration</h1>
            <hr>
            <h4>Employer Information</h4>
              
              <div class="col-md-3 col-sm-12 col-xm-12">
                <br> <p>Date Coverage: <input type="date" id="dat_cov"></p>
              </div> 
              <div class="col-md-3 col-sm-12 col-xm-12">
                 <p>Address Line 1: <input type="text" id="add_ln1" style="width:230px"></p>
              </div>
              <div class="col-md-3 col-sm-12 col-xm-12">
                 <p>Address Line 2: <input type="text" id="add_ln2" style="width:230px"></p>
              </div>
              <div class="col-md-3 col-sm-12 col-xm-12">
                 <p>City/Province: <input type="text" id="ctypro" ></p>
              </div> 
              <div class="col-md-3 col-sm-12 col-xm-12">
                 <p>Postal Code: <input type="text" id="pos_cd"></p>
              </div> 
              <div class="col-md-3 col-sm-12 col-xm-12">
                 <p>Landline Number: <input type="text" id="lnum" style="width:230px"></p>
              </div>
               <div class="col-md-3 col-sm-12 col-xm-12">
                 <p>Mobile Number: <input type="text" id="mnum" style="width:230px"></p>
              </div>
              <div class="col-md-3 col-sm-12 col-xm-12">
                 <p>Preferred User ID:<input type="text" id="pref"></p>
              </div>
              <div class="col-md-3 col-sm-12 col-xm-12">
                 <p>Confirm Preferred User ID:<input type="text" id="con_pref">&nbsp;<span id="conpref_validation"></span></p>
              </div>
              <div class="col-md-3 col-sm-12 col-xm-12">
                 <p>Company Email Address: <input type="text" id="com_email" style="width:230px"></p>
              </div>
               <div class="col-md-3 col-sm-12 col-xm-12">
                 <p>Confirm Company Email Address:<input type="text" id="concom_email" style="width:230px">&nbsp;<span id="concom_validation"></span></p>
                
                 </div>
              <br>
 
                <div class="btn-group pull-right">
                  <br><br>
                  <button class="btn btn-danger btn-lg " id="btn_clr"><span class="glyphicon glyphicon-remove"></span> Clear</button>
                  <button class="btn btn-success btn-lg " id="btn_empreg"><span class="glyphicon glyphicon-ok"></span> Submit</button> 
                  <div id="responses"></div>
                 
                </div>

             </div>
      </div>
      <div class="row">
         <div class="col-md-12 col-xm-12" id="member-panel">
          <h1>Online Member User ID Registration</h1>
          <hr>
              <div class="col-md-12 col-sm-12 col-xm-12">
              <?php
               $ssno = rand(1111111111,9999999999);
              ?>
                 <p>CRN / SS Number:<input type="text" id="crn_no" value="<?php echo $ssno?>" disabled="disabled"></p> 
              </div> 
              <div class="col-md-12 col-sm-12 col-xm-12">
                 <p>First Name: <input type="text" id="fname"></p>
              </div>
              <div class="col-md-12 col-sm-12 col-xm-12">
                 <p>Middle Name: <input type="text" id="mname"></p>
              </div>
              <div class="col-md-12 col-sm-12 col-xm-12">
                 <p>Last Name: <input type="text" id="lname"></p>
              </div>
              <div class="col-md-12 col-sm-12 col-xm-12">
                 <p>Date of Birth: <input type="date" id="bd"></p>
              </div>
              <br>
              <div class="col-md-12 col-sm-12 col-xm-12">
                 <p>Email Address: <input type="text" id="em" style="width:230px"></p>
              </div>
              <div class="col-md-6 col-sm-12 col-xm-12">
                 <p>Confirm Email Address: <input type="text" id="con_em" style="width:230px"></p><span id="conem_validation" style="left:250px;position:absolute"></span>
              </div>
              <br>

                <div class="btn-group pull-right">
                  <br><br>
                  <button class="btn btn-danger btn-lg " id="btn_clr1"><span class="glyphicon glyphicon-remove"></span> Clear</button>
                  <button class="btn btn-success btn-lg " id="btn_mempreg"><span class="glyphicon glyphicon-ok"></span> Submit</button> 
                   <div id="mem-responses"></div>
                </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 col-xm-12" id="household-panel">
          <h1>Online Household Employer ID Registration</h1>
          <hr>
              <div class="col-md-12 col-sm-12 col-xm-12">
                 <p>Date Coverage:<input type="date" id="dat_covs"></p> 
              </div> 
              <div class="col-md-12 col-sm-12 col-xm-12">
                 <p>Landline Number:<input type="text" id="lnd_no"></p> 
              </div>
              <div class="col-md-12 col-sm-12 col-xm-12">
                 <p>Mobile Number:<input type="text" id="mobno"></p> 
              </div>
              <div class="col-md-12 col-sm-12 col-xm-12">
                 <p>HR Email Address:<input type="text" id="hr_em" style="width:250px"></p> 
              </div> 
              <div class="col-md-12 col-sm-12 col-xm-12">
                 <p>Confirm HR Email Address:<input type="text" id="con_hrem" style="width:250px"></p>
                  <span id="hrem_validation" style="position:absolute;left:250px"></span>
                   <br>
              </div> 
              <div class="col-md-12 col-sm-12 col-xm-12">
                 <p>Preferred User ID:<input type="text" id="prefe"></p> 
              </div> 
              <div class="col-md-12 col-sm-12 col-xm-12">
                 <p>Confirm Preferred User ID:<input type="text" id="con_prefe"><br>
                 </p><span id="conprefe_validation" style="left:250px;position:absolute"></span> 
              </div> 
              <br>

                <div class="btn-group pull-right">
                  <br><br>
                  <button class="btn btn-danger btn-lg " id="btn_clr2"><span class="glyphicon glyphicon-remove"></span> Clear</button>
                  <button class="btn btn-success btn-lg " id="btn_housereg"><span class="glyphicon glyphicon-ok"></span> Submit</button>
                  <span id="response1"></span> 
                </div>       
         </div>
      </div>
   </div>

 <script>
//  	$('#loginModal').modal({
//     backdrop: 'static',
//     keyboard: false   
// });
$(document).ready(function(){
    //clear all data from employer registration  
   $("#btn_clr").click(function(){
      $("#emp_id").val("");
      $("#dat_cov").val("");
      $("#add_ln1").val("");
      $("#add_ln2").val("");
      $("#ctypro").val("");
      $("#pos_cd").val("");
      $("#lnum").val("");
      $("#mnum").val(""); 
      $("#pref").val("");
      $("#con_pref").val("");
      $("#com_email").val("");
      $("#concom_email").val("");
      $("#concom_validation").html("");
      $("#conpref_validation").html("");
      $("#responses").html("");
   });

     //clear all data from member registration
     $("#btn_clr1").click(function(){
            $("#bd").val("");
            $("#em").val("");
            $("#fname").val("");
            $("#mname").val("");
            $("#lname").val(""); 
            $("#con_em").val("");
            $("#conem_validation").html("");  
            $("#mem-responses").html("");
     });

      $("#btn_clr2").click(function(){
            $("#emp_ids").val(""); 
            $("#dat_covs").val("");
            $("#hr_em").val("");
            $("#con_hrem").val("");
            $("#prefe").val("");
            $("#con_prefe").val("");
            $("#lnd_no").val("");
            $("#mobno").val("");
            $("#conprefe_validation").html("");
            $("#response1").html("");
      });

   //validation 
  $("#con_hrem").keyup(function(){
         var hrem       =   $("#hr_em").val();
         var con_hrem   =   $("#con_hrem").val();
         if(hrem!=con_hrem)
         {
              $("#hrem_validation").html("<p class='text-danger'>Not Match</p>");
         }
         else if(hrem==con_hrem)
         {
              $("#hrem_validation").html("<p class='text-success'>Match</p>");
         }
          if(con_hrem.length==0)
          {
              $("#hrem_validation").html("");
          }

  });

  $("#concom_email").keyup(function(){
     var com_email = $("#com_email").val();
     var concom_email = $("#concom_email").val();
       //validation for company email
         
          if(com_email!=concom_email)
          {
            $("#concom_validation").html("<p class='text-danger'>Not Match</p>");
          }
          else if(concom_email==concom_email)
          {
            $("#concom_validation").html("<p class='text-success'>Match</p>");
          }
        
              if(concom_email.length==0)
            {
               $("#concom_validation").html("");
            }
      
  });

  $("#con_prefe").keyup(function(){
     var prefe = $("#prefe").val();
     var con_prefe = $("#con_prefe").val();
       //validation for company email
         
          if(prefe!=con_prefe)
          {
            $("#conprefe_validation").html("<p class='text-danger'>Not Match</p>");
          }
          else if(prefe==con_prefe)
          {
            $("#conprefe_validation").html("<p class='text-success'>Match</p>");
          }
        
              if(con_prefe.length==0)
            {
               $("#conprefe_validation").html("");
            }
      
  });

  //validate all object in online member  user id registration save to database
   $("#btn_empreg").click(function(){
     var dat_cov      =   $("#dat_cov").val();
     var add_ln1      =   $("#add_ln1").val();
     var add_ln2      =   $("#add_ln2").val();
     var ctypro       =   $("#ctypro").val();
     var pos_cd       =   $("#pos_cd").val();
     var lnum         =   $("#lnum").val();
     var mnum         =   $("#mnum").val();
     var pref         =   $("#pref").val();
     var con_pref     =   $("#con_pref").val();
     var com_email    =   $("#com_email").val();
     var concom_email =   $("#concom_email").val();
     var dataStrings  =  "dat_cov="+dat_cov+"&add_ln1="+add_ln1+"&add_ln2="+add_ln2+"&ctypro="+ctypro+"&pos_cd="+pos_cd+"&lnum="+lnum+"&mnum="+mnum+"&pref="+pref+"&com_email="+com_email;
    
       if(dat_cov.length==0 || add_ln1.length==0 || add_ln2.length==0 || ctypro.length==0 || pos_cd.length==0 || lnum.length==0 || mnum.length==0 || pref.length==0 || con_pref.length==0 || com_email.length==0 || concom_email.length==0)
          {
                $("#responses").html("<div class='alert alert-warning'><span class='glyphicon glyphicon-warning-sign'></span> Please fillup required field</div>");

          }
       else{

            if(pref==con_pref && com_email==concom_email)
           {
                 $.ajax({
                     type: "POST",
                     url: "Save_EmployerRegistration.php",
                     data: dataStrings,
                     success: function(data){
                          $("#responses").html(data);
                     }
                 }); 
           }
            else 
          {
              alert("not same all");
          }
     }
   });

  //validate all object in Online Member User ID Registration and save to database
  $("#btn_mempreg").click(function(){
         var crn      =  $("#crn_no").val();
         var fname    =  $("#fname").val();
         var mname    =  $("#mname").val();
         var lname    =  $("#lname").val();
         var bd       =  $("#bd").val();
         var em       =  $("#em").val();
         var con_em   =  $("#con_em").val();
         var mem_dataString="crn="+crn+"&fname="+fname+"&mname="+mname+"&lname="+lname+"&bd="+bd+"&em="+em;
          if(crn.length==0 || fname.length==0 || mname.length==0 || lname.length==0 || bd.length==0 || em.length==0 || con_em.length==0)
          {
               $("#mem-responses").html("<div class='alert alert-warning'><span class='glyphicon glyphicon-warning-sign'></span> Please fillup required field</div>");            
          }  
          else
          {
               if(em==con_em)
               {
                   $.ajax({
                      type: "POST",
                      url : "Save_MemberRegistration.php",
                      data: mem_dataString,
                      success: function(data){
                            $("#mem-responses").html(data);
                      }
                   });
               }

          }
  });

  //validate all object in Online Household Employer ID Registration
  $("#btn_housereg").click(function(){
           var dat_Covs    =     $("#dat_covs").val();
           var hr_Emp      =     $("#hr_em").val();
           var con_Hrem    =     $("#con_hrem").val();
           var prefer      =     $("#prefe").val();
           var con_Prefer  =     $("#con_prefe").val();
           var landlines   =     $("#lnd_no").val();
           var mobNo       =     $("#mobno").val();
           var dataString ="dat_covs="+dat_Covs+"&hr_emp="+hr_Emp+"&prefer="+prefer+"&landlines="+landlines+"&mobno="+mobNo;
          if(dat_Covs.length==0 || hr_Emp.length==0 || con_Hrem.length==0 || prefer.length==0 || con_Prefer.length==0 || landlines.length==0 || mobNo.length==0)
                {
                       $("#response1").html("<div class='alert alert-warning'><span class='glyphicon glyphicon-warning-sign'></span> Please fillup required field</div>");

                }
          else
          {
                if(hr_Emp==con_Hrem && prefer==con_Prefer)
                {
                  $.ajax({
                       type: "POST",
                       url: "Save_HouseRegistration.php",
                       data: dataString,
                       success: function(data)
                       {
                             $("#response1").html(data);
                       }
                  });
                }
          }

  });

  //validate all object in Online Household Employer ID Registration and save to database
  $("#btn_housereg").click(function(){
          $("#emp_ids").val(); 
            $("#dat_covs").val();
            $("#hr_em").val();
            $("#con_empid").val();
            $("#prefe").val();
            $("#con_prefe").val();
            $("#lnd_no").val();
            $("#mobno").val();
  });

  //validation for preferred user ID
  $("#con_pref").keyup(function(){
      var pref = $("#pref").val();
      var con_pref = $("#con_pref").val();
          if(pref!=con_pref)
          {
             $("#conpref_validation").html("<p class='text-danger'>Not Match</p>");
          }
          else if(pref==con_pref)
          {
             $("#conpref_validation").html("<p class='text-success'>Match</p>"); 
          }
             if(con_pref.length==0)
             {
               $("#conpref_validation").html("");
             }
  });

  //validation for member email address
  $("#con_em").keyup(function(){
       var em = $("#em").val();
       var con_em = $("#con_em").val();
       if(em!=con_em)
       {
          $("#conem_validation").html("<p class='text-danger'>Not Match</p>");
       }
       else if(em==con_em)
       {
          $("#conem_validation").html("<p class='text-success'>Match</p>");
       }
        if(con_em.length==0)
        {
          $("#conem_validation").html("");
        }
  });

  //strict in accept character in textbox
  $("#pos_cd").keypress(function(e){
      var pos_cd = $("#pos_cd").val();
      
        if (e.keyCode != 8 && e.keyCode != 0 && (e.keyCode < 48 || e.keyCode > 57)) {
                e.preventDefault();
            }  
            if(pos_cd.length==4)
            {
                e.preventDefault();
            } 
    
  });

  $("#lnum").keypress(function(e){
      var num = $("#lnum").val();
      
        if (e.keyCode != 8 && e.keyCode != 0 && (e.keyCode < 48 || e.keyCode > 57)) {
                e.preventDefault();
            }  
            if(num.length==7)
            {
                e.preventDefault();
            } 
    
  });

  $("#mnum").keypress(function(e){
      var num = $("#mnum").val();
      
        if (e.keyCode != 8 && e.keyCode != 0 && (e.keyCode < 48 || e.keyCode > 57)) {
                e.preventDefault();
            }  
            if(num.length==11)
            {
                e.preventDefault();
            } 
    
  });

  $("#crn_no").keypress(function(e){
      var num = $("#crn_no").val();
      
        if (e.keyCode != 8 && e.keyCode != 0 && (e.keyCode < 48 || e.keyCode > 57)) {
                e.preventDefault();
            }  
            if(num.length==10)
            {
                e.preventDefault();
            } 
    
  });

$("#ctypro").keypress(function(e){
       if(e.keyCode != 8 &&  e.keyCode!=32 &&(e.keyCode < 65 || e.keyCode > 90) && (e.keyCode < 97 || e.keyCode >122))
            {   
              e.preventDefault();
            }
         });

$("#fname").keypress(function(e){
       if(e.keyCode != 8 &&  e.keyCode!=32 &&(e.keyCode < 65 || e.keyCode > 90) && (e.keyCode < 97 || e.keyCode >122))
            {   
              e.preventDefault();
            }
         });

$("#mname").keypress(function(e){
       if(e.keyCode != 8 &&  e.keyCode!=32 &&(e.keyCode < 65 || e.keyCode > 90) && (e.keyCode < 97 || e.keyCode >122))
            {   
              e.preventDefault();
            }
         });

$("#lname").keypress(function(e){
       if(e.keyCode != 8 &&  e.keyCode!=32 &&(e.keyCode < 65 || e.keyCode > 90) && (e.keyCode < 97 || e.keyCode >122))
            {   
              e.preventDefault();
            }
         });

 $("#lnd_no").keypress(function(e){
      var num = $("#lnd_no").val();
      
        if (e.keyCode != 8 && e.keyCode != 0 && (e.keyCode < 48 || e.keyCode > 57)) {
                e.preventDefault();
            }  
            if(num.length==7)
            {
                e.preventDefault();
            }     
      });

  $("#mobno").keypress(function(e){
      var num = $("#mobno").val();
      
        if (e.keyCode != 8 && e.keyCode != 0 && (e.keyCode < 48 || e.keyCode > 57)) {
                e.preventDefault();
            }  
            if(num.length==11)
            {
                e.preventDefault();
            }    
    });

  //animation
    $("#collapse-menu").hide();
    $("#login-panel").hide();
    $("#employer-panel").show();
    $("#member-panel").hide();
    $("#household-panel").hide();
    $("#btnlogin").click(function(){
    $("#login-panel").slideToggle(400);
    });
  
  $("#employer_registration").click(function(){
        $("#employer-panel").slideToggle();
        $("#member-panel").hide();
        $("#household-panel").hide();
      });
  
  $("#member_registration").click(function(){
        $("#employer-panel").hide();
        $("#member-panel").slideToggle();
        $("#household-panel").hide();
      });
  
  $("#household_registration").click(function(){
        $("#employer-panel").hide();
        $("#member-panel").hide();
        $("#household-panel").slideToggle();
      });

  $("#login").click(function(){
            var user = $("#username").val();
            var pass = $("#password").val();
            var usertype= $("#usertype").val();
            var dataString = "user="+user+"&pass="+pass+"&usertype="+usertype;
            var valid=true;   
                     
                    if(user.length==0 || pass.length==0)
                      {
                          valid=false;
                          $("#response").html("<div class='text-danger'><b>Empty Username and Password Field</b></div>");  
                      }
                     else
                        {
                         $("#response").html("");  
                        }

                  if(valid==true)                  
                {
                  $.ajax({
                       type: "POST",
                        url: "login_codes.php",
                       data:  dataString,
                       success: function(data)
                        {     
                           $("#response").html(data);
                        }                         
                    });

                }
                else
                {
                  return false;
                }
              
            }); 

      $("#logins").click(function(){
            var user = $("#username").val();
            var pass = $("#password").val();
            var usertype= $("#usertype").val();
            var dataString = "user="+user+"&pass="+pass+"&usertype="+usertype;
            var valid=true;   
                     
                    if(user.length==0 || pass.length==0)
                      {
                          valid=false;
                          $("#response").html("<div class='text-danger'><b>Empty Username or Password Field</b></div>");  
                      }
                     else
                        {
                         $("#response").html("");  
                        }
                    
                  if(valid==true)                  
                {
                  $.ajax({
                       type: "POST",
                        url: "login_codes.php",
                       data:  dataString,
                       success: function(data)
                        {     
                           $("#response").html(data);
                        }                         
                    });

                }
                else
                {
                  return false;
                }
              
            });
        $("#toggle-button").click(function(){
             $("#collapse-menu").slideToggle();
             
        });

        //dropdown hover
                  $("#loan-dropdown").hover(function(){
                       $("#loan-choices").slideToggle();
                 });

                  $("#MySSS-dropdown").hover(function(){
                       $("#MySSS-choices").slideToggle();
                 });

                  $("#membership-dropdown").hover(function(){
                       $("#membership-choices").slideToggle();
                 });

                  $("#Benifits-dropdown").hover(function(){
                       $("#Benifits-choices").slideToggle();
                 });

                 //clear input from modal
                 $("#close").click(function(){
                         $("#username").val("");
                         $("#password").val("");
                         $("#response").html("");
                         $("#usertype").val("Admin")
                 });
                 
                 //tooltip para sa login button
                  $("[data-toggle='modal']").tooltip({
                        placement: "left",
                        title: "<span class='glyphicon glyphicon-user'></span> login",
                        animation:true,
                        html:true,
               });
   });

 </script>

</body>  
  </html>