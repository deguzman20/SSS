<!DOCTYPE html>
<html>
<head>
<title>Social Security System</title>
</head>
<link rel="icon" href="image/SSS-Abroad.jpg">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<style type="text/css">
::-webkit-scrollbar {
    width: 12px;
}
 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    border-radius: 10px;
}
 
::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}

#mem,
#bus,
#hou{
	position:relative;
}
#notification-box{
  border:2px solid #0f4b7d;
  color:#1a2226;
  font-weight:bolder;
  font-size:25px;
}
@media (min-width:768px) and (max-width:1410px)
{
  #notification-box
  {
    position:relative;
    top:-40px;
  }
} 
#notification,
#loan,
#mysss,
#logout-btn,
#mem,
#bus,
#hou,
#mysss_emp,
#mysss_mem,
#contribution,
#request
{
  cursor: pointer;
}
#contribution,
#mat,
#sick,
#deaths,
#funeral,
#disa,
#reti,
#mem_req,
#bus_req,
#hou_req,
#sick_req,
#death_req,
#fun_req,
#dis_req,
#ret_req,
#educ,
#mysss_hou,
#dashboard
{
  cursor:pointer;
}
#DisplayTime{
  position:absolute;
  left:270px;
  font-size:25px;
  font-style:italic;
  color:black;
  font-weight:bold;
}
#icon-time
{
  font-size:30px;
  position:relative;
  left:7px;
}
tr[id="record"]:nth-child(odd)
{
  background-color:silver;
}
#loans-slider
{
  background-color:#1a2226;
  position:relative;
  left:-15px;
  width:115%;
}
#mysss-slider
{
 background-color:#1a2226;
  position:relative;
  left:-15px;
  width:115%; 
}
#loansreq-slider
{
 background-color:#1a2226;
  position:relative;
  left:-15px;
  width:115%;  
}
#mem,#hou,#bus{
  position:relative;
  left:5px;
}
#mysss_emp,#mysss_mem,#mysss_hou
{
  position:relative;
  left:37px;
}
.active
{
  background-color: #337ab7;
}
.notification-color
{
  background-color:red;
}
</style>

<body>	
  <div class="container-fluid">
	     <div class="row">
			   	<div class="col-md-2 col-sm-2">
            <img src="image/SSS-Abroad.jpg" class="img-responsive center-block" style="height:72px">
				  </div>
				  <div class="col-md-10 col-sm-10" style="background-color:#0f4b7d;height:70px">
            <font style="color:white;font-style:italic;font-size:20px">Social Security System Admin Panel</font>
            <br>
            <span class="pull-right" style="color:white;margin:7px" name="logout-btn" id="logout-btn">Logout</span>
              
            </span>
            <span class="pull-right" style="color:white">
              <?php
                session_start();
                  echo '&nbsp;&nbsp;&nbsp;Hi <b>'.$_SESSION['username'].'</b>';
                
                          echo '<script>
                          $("#logout-btn").click(function(){
                              window.location.href="sss_main.php";
                          });
                            
                          </script>';
                          //logout
                           // session_destroy();
               ?>
             </span>
            <span class=" glyphicon glyphicon-globe pull-right" style="color:white;margin:7px;" id="notification" data-toggle="tooltip">
            <sup class="label label-pills label-danger" id="notification_count" style="position:relative;left:-19px;top:-12px">
               <?php
                // $conn= mysqli_connect("localhost","root","","sss");
                // $query  = "SELECT * FROM employer_registration";
                // $query1 = "SELECT * FROM member_registration";
                // $query2 = "SELECT * FROM household_registration"; 

                // $run_query = mysqli_query($conn,$query);
                // $run_query1 = mysqli_query($conn,$query1); 
                // $run_query2 = mysqli_query($conn,$query2); 

                // $count = mysqli_num_rows($run_query);
                // $count1 = mysqli_num_rows($run_query1);
                // $count2 = mysqli_num_rows($run_query2);
                // echo $count+$count1+$count2;
               ?>
            </sup>
            </span> 
          </div>

		  </div>
      <div class="row">
	         <div class="col-md-2 col-sm-2" style="background-color:#1a2226">
	    		    <h5><font color="white" id="dashboard"><span class="glyphicon glyphicon-dashboard"  ></span> DashBoard</font></h5>
	    	  	</div>
             <span class="glyphicon glyphicon-time" id="icon-time"></span> <span id="DisplayTime"></span> 	
          </div>
      <div class="row">
            <div class="col-md-2 col-sm-2" style="background-color:#222d32;height:591px">
                <h4 style="color:white" id="loan">&#8369;&nbsp; Loans/Benifits</h4>
                <div id="loans-slider" style="position:relative;">
                	 <font color="white" id="hou"><span class="glyphicon glyphicon-user"></span> <b>Direct Housing Loan</b></font><br>
                   <font color="white" id="educ"><span class="glyphicon glyphicon-pencil"></span> <b>Educational Assistance Loan </b></font>
                   <br>
                   <font color="white" id="mat">&nbsp;<span class="glyphicon glyphicon-user"></span> <b>Maternity Benifit </b></font>
                   <br>
                   <font color="white" id="sick">&nbsp;<span class="glyphicon glyphicon-heart"></span> <b>Sickness Benifit </b></font>
                   <br>
                   <font color="white" id="deaths">&nbsp;<span class="glyphicon glyphicon-inbox"></span> <b>Death Benifit </b></font>
                   <br>
                   <font color="white" id="funeral">&nbsp;<span class="glyphicon glyphicon-plus"></span> <b>Funeral Benifit </b></font>
                   <br>
                   <font color="white" id="disa">&nbsp;<span class="glyphicon glyphicon-wrench"></span> <b>Disability Benifit </b></font>
                  <br>
                   <font color="white" id="reti">&nbsp;<span class="glyphicon glyphicon-user"></span> <b>Retirement Benifit </b></font>
                  
                </div>

                <h4 style="color:white" id="mysss"><span class="glyphicon glyphicon-th-list"></span> my.SSS Record</h4>
                <div id="mysss-slider" style="position:relative">
                    <font color="white" id="mysss_emp"><span class="glyphicon glyphicon-briefcase"></span> <b>Employer ID Record</b></font>
                    <br>
                    <font color="white" id="mysss_mem"><span class="glyphicon glyphicon-user"></span> <b>Member ID Record</b></font>
                    <br>
                    <font color="white" id="mysss_hou">
                       <span class="glyphicon glyphicon-home"></span>    <b>Household ID Record</b>
                    </font>
                </div>

                <h5 style="color:white" id="request"><span class="glyphicon glyphicon-bell"></span>&nbsp; Loans/Benifits Request</h5>
                <div id="loansreq-slider" style="position:relative;">
                   <font color="white" id="mem_req"><span class="glyphicon glyphicon-home"></span> <b>Direct Housing Loan</b></font><br>
                   <font color="white" id="bus_req"><span class="glyphicon glyphicon-pencil"></span> <b>Educational Assistance Loan </b></font><br>
                   <font color="white" id="hou_req"><span class="glyphicon glyphicon-user"></span> <b>Maternity Benifit</b></font><br>
                   <font color="white" id="sick_req"><span class="glyphicon glyphicon-heart"></span> <b>Sickness Benifit</b></font><br>
                   <font color="white" id="death_req"><span class="glyphicon glyphicon-inbox"></span> <b>Death Benifit</b></font>
                   <br>
                   <font color="white" id="fun_req"><span class="glyphicon glyphicon-plus"></span> <b>Funeral Benifit</b></font>
                   <br>
                   <font color="white" id="dis_req"><span class="glyphicon glyphicon-wrench"></span> <b>Disablity Benifit</b></font>
                   <br>
                   <font color="white" id="ret_req"><span class="glyphicon glyphicon-cloud"></span> <b>Retirement Benifit</b></font> 
                </div>

                 <h4 style="color:white" id="contribution"><span class="glyphicon glyphicon-list"></span> List of Contribution</h4>
            </div>
            <!-- employer registration -->
            <div class="col-md-8" id="employer_record">
            <h1>Online Employer User ID Registration Record</h1>
            <hr>
                         <input type="text" id="search_employer" class="pull-right">
            <span class="glyphicon glyphicon-search" style="position:relative;left:670px;font-size:20px"></span>  
             <br>
              <table class="col-md-8 table table-responsive table-condensed" style="position:relative;left:10px">
                  <tr class="bg bg-primary">
                    <td style="width:7%"><b>ID</b></td>
                     <td style="width:12.5%;position:relative;left:-10px"><b>Date Coverage</b></td>
                     <td style="width:22%;position:relative;left:20px"><b>Address Line 1</b></td>
                     <td style="width:22% ;position:relative;left:20px"><b>Address Line 2</b></td>
                     <td style="width:12.5%"><b>City/Province</b></td>
                     <td style="width:16.5%"><b>Preferred User ID</b></td>
                     <td></td>
                  </tr>
              </table>
              <table class="col-md-8 table table-condensed table-responsive " id="result_employer" style="position:relative;top:-17px;left:10px">               
              </table>
            </div>
            <div class="col-md-8" id="member_record">
                   <h1>Online Member User ID  Registration Record</h1>
                   <hr>
                  <input type="text" class="pull-right" id="search_member">
                  <span class="glyphicon glyphicon-search" style="position:relative;left:670px;font-size:20px"></span>
                  <br><br>
                   <table class="col-md-8 table-responsive table-condensed" style="position:relative;left:10px;width:80%"">
                     <tr class="bg bg-primary">
                       <td style="position:relative;left:5px"><b>ID</b></td>
                       <td style="position:relative;left:5px"><b>CRN SSNumber</b></td>
                       <td style="position:relative;left:-50px"><b>First Name</b></td>
                       <td style="position:relative;left:-70px"><b>Middle Name</b></td>
                       <td style="position:relative;left:-90px"><b>Last Name</b></td>
                       <td style="position:relative;left:-90px"><b>Birthday</b></td>
                   </tr>
                   </table>          
                  <table class="col-md-8 table table-responsive  table-condensed" id="result_member" style="position:relative;top:0px;left:10px;width:80%">               
              </table>
                
            </div>
            <div class="col-md-8" id="household_record">
                   <h1>Online Household Registration ID Record</h1>
                   <hr>
                   <input type="text" class="pull-right" id="search_house">
                   <span class="glyphicon glyphicon-search" style="position:relative;left:670px;font-size:20px"></span>
                   <br>
                   <table class="col-md-8 table-responsive table-condensed" style="position:relative;left:10px;width:100%">
                     <tr class="bg bg-primary">
                        <td><b>ID</b></td>
                        <td><b>Date Coverage</b></td>
                        <td style="position:relative;left:-40px"><b>Landline No</b></td>
                        <td style="position:relative;left:-60px"><b>Mobile No</b></td>
                        <td style="position:relative;left:-60px"><b>Preferred User ID</b></td>
                        <td style="position:relative;left:-100px"><b>HR Email Address</b></td>
                     </tr>
                  </table>
                   <table class="col-md-8 table table-responsive  table-condensed " id="result_household" style="position:relative;top:0px;left:10px">    

                  </table> 
                   
           </div> 
            <div class="col-md-8" id="member_request">
                <h1>DIRECT HOUSING LOAN REQUEST</h1>
                  
                 <div class="col-md-12" id="dir_record">
                     
                 </div>
                 
           </div>

           <div class="col-md-8" id="business_request">
                <h1>EDUCATIONAL ASSISTANCE REQUEST</h1> 

                <div class="col-md-12" id="educ_record">

                </div>
           </div>

           <div class="col-md-8" id="house_request">
                <h1>MATERNITY BENIFIT REQUEST</h1> 

                <div class="col-md-12" id="mat_record">
                  
                </div>
           </div>

           <div class="col-md-8" id="sickness_record">
                <h1>SICKNESS BENIFIT REQUEST</h1> 
                <div class="col-md-12" id="sick_record">
                  
                </div>
           </div>
           <div class="col-md-8" id="death_record">
                <h1>DEATH BENIFIT REQUEST</h1> 
                <div class="col-md-12" id="deaths_record">
                  
                </div>
           </div>
            <div class="col-md-8" id="funeral_record">
                <h1>FUNERAL BENIFIT REQUEST</h1> 
                <div class="col-md-12" id="funerals_record">
                  
                </div>
           </div>
            <div class="col-md-8" id="dis_record">
                <h1>DISABILITY BENIFIT REQUEST</h1> 
                <div class="col-md-12" id="diss_record">
                  
                </div>
           </div>
           <div class="col-md-8" id="ret_record">
                <h1>RETIREMENT BENIFIT REQUEST</h1> 
                <div class="col-md-12" id="rets_record">
                  
                </div>
           </div>
           <div class="col-md-8" id="dir_rec">
                <h1>DIRECT HOUSING LOAN RECORD</h1>
                  
                 <div class="col-md-12" id="dir_recs">
                     
                 </div>
                 
           </div>
           <div class="col-md-8" id="ed_rec">
                <h1>EDUCATIONAL ASSISTANCE LOAN RECORD</h1>
                  
                 <div class="col-md-12" id="ed_recs">
                     
                 </div>
                 
           </div>
           <div class="col-md-8" id="mat_rec">
                <h1>MATERNITY BENIFIT RECORD</h1>
                  
                 <div class="col-md-12" id="mat_recs">
                     
                 </div>
                 
           </div>
            <div class="col-md-8" id="sick_rec">
                <h1>SICKNESS BENIFIT RECORD</h1>
                  
                 <div class="col-md-12" id="sick_recs">
                     
                 </div>
                 
           </div>
           <div class="col-md-8" id="death_rec">
                <h1>DEATH BENIFIT RECORD</h1>
                  
                 <div class="col-md-12" id="death_recs">
                     
                 </div>
                 
           </div>
           <div class="col-md-8" id="funeral_rec">
                <h1>FUNERAL BENIFIT RECORD</h1>
                  
                 <div class="col-md-12" id="funeral_recs">
                      
                 </div>
                 
           </div>
           <div class="col-md-8" id="disa_rec">
                <h1>DISABILITY BENIFIT RECORD</h1>
                  
                 <div class="col-md-12" id="disa_recs">
                      
                 </div>
                 
           </div>
           <div class="col-md-8" id="reti_rec">
                <h1>RETIREMENT BENIFIT RECORD</h1>
                  
                 <div class="col-md-12" id="reti_recs">
                      
                 </div>
                 
           </div>
            <div class="col-md-8" id="dashboard_panel">
                <h1>DASHBOARD</h1>
                  <div class="row">
                     <div class="col-md-2" style="background-color:green;left:50px;color:white;box-shadow:10px 10px 1px silver">
                        <h6 class="text-center">Direct Housing Loan Request</h6>
                        <hr>
                        <font size="10px"><span class="glyphicon glyphicon-home"></span></font>
                        <center><font size="15px" id="dir_count" style="position:absolute;top:70px"></font></center>

                     </div>

                     <div class="col-md-2" style="background-color:orange;left:100px;color:white;box-shadow:10px 10px 1px silver">
                        <h6 class="text-center">Educational Assistance  Request</h6>
                        <hr>
                        <font size="10px"><span class="glyphicon glyphicon-pencil"></span></font>
                        <center><font size="15px" id="educ_count" style="position:absolute;top:70px"></font></center>
                     </div>
                     <div class="col-md-2" style="background-color:purple;left:150px;color:white;box-shadow:10px 10px 1px silver">
                        <h6 class="text-center">Maternity Benifit Request</h6>
                        <hr>
                        <font size="10px"><span class="glyphicon glyphicon-user"></span></font>
                        <center><font size="15px" id="mat_count" style="position:absolute;top:70px"></font></center>
                     </div>
                     <div class="col-md-2" style="background-color:red;left:200px;color:white;box-shadow:10px 10px 1px silver">
                        <h6 class="text-center">Sickness Benifit Request</h6>
                        <hr>
                        <font size="10px"><span class="glyphicon glyphicon-heart"></span></font>
                        <center><font size="15px" id="sick_count" style="position:absolute;top:70px"></font></center>
                     </div>

                    
                  </div>
                <div class="row">
                <br>
                    <div class="col-md-2" style="background-color:cyan;left:50px;color:white;box-shadow:10px 10px 1px silver">
                        <h6 class="text-center">Death Benifit<br> Request</h6>
                        <hr>
                        <font size="10px"><span class="glyphicon glyphicon-inbox"></span></font>
                        <center><font size="15px" id="death_count" style="position:absolute;top:70px"></font></center>
                     </div>
                     <div class="col-md-2" style="background-color:gold;left:100px;color:white;box-shadow:10px 10px 1px silver">
                        <h6 class="text-center">Funeral<br> Request</h6>
                        <hr>
                        <font size="10px"><span class="glyphicon glyphicon-plus"></span></font>
                        <center><font size="15px" id="funeral_count" style="position:absolute;top:70px"></font></center>
                     </div>
                     <div class="col-md-2" style="background-color:#46f907;left:150px;color:white;box-shadow:10px 10px 1px silver">
                        <h6 class="text-center">Disability<br> Request</h6>
                        <hr>
                        <font size="10px"><span class="glyphicon glyphicon-wrench"></span></font>
                        <center><font size="15px" id="disa_count" style="position:absolute;top:70px"></font></center>
                     </div>
                     <div class="col-md-2" style="background-color:#f604af;left:200px;color:white;box-shadow:10px 10px 1px silver">
                        <h6 class="text-center">Retirement<br> Request</h6>
                        <hr>
                        <font size="10px"><span class="glyphicon glyphicon-cloud"></span></font>
                        <center><font size="15px" id="ret_count" style="position:absolute;top:70px"></font></center>
                     </div>
                </div>
                 
           </div>

           <div class="col-md-8" id="contri_rec">
                <h1>LIST OF CONTRIBUTION</h1>
            <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#contributions"><span class="glyphicon glyphicon-plus"></span></button>
                    <div class="fade modal" id="contributions">
                      <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" data-dismiss="modal" class="close">&times;</button>
                                 <input type="text" placeholder="Search SS Number" id="member">
                                 <button type="button" class="btn-primary" id="search">Search</button>
                              </div>
                              <div class="modal-body" id="search_result">
                                           
                              </div>
                              <div class="modal-footer">

                              </div>
                          </div>
                      </div>
                    </div>

                 <div class="col-md-12" id="contri_recs">
                    
                 </div>
                 
           </div>
             
            <div class="col-md-2 pull-right" id="notification-box" style="height:200px;z-index:1000;"><span class="glyphicon glyphicon-globe"></span> Request
            <hr>
            </div>
             
           
    
</body>
<script>
	 $(document).ready(function(){
   $("#dashboard").addClass("active");
  //load data
  //-----------------------
      loadData();
      loadData1();
      loadData2();
      directhouseLoad();
      loadCountNotification();
      educRecord();
      marternityLoad();
      sicknessLoad();
      deathLoad();
      funeralLoad();
      disabilityLoad();
      retirementLoad();
      directhousingRecordLoad();
      educationalRecord();
      maternityRecord();
      sickenessRecord();
      deathRecord();
      funeralRecord();
      disabilityRecord();
      retirementRecord();
      dirCount();
      educCount();
      maternityCount();
      sickenessCount();
      deathCount();
      funeralCount();
      disabilityCount();
      retirementCount();
      contributionlist();

  //----------------------    
   $("#notification_count").addClass("notification-color");
  //tooltiip for notification
   $('[data-toggle="tooltip"]').tooltip({
          placement: "bottom",
          title: "<span class='glyphicon glyphicon-globe'></span> <font>Request</font>",
          animation:true,
          delay:100,
          html:true
    });
//animation
      $("#member_request").hide();
      $("#business_request").hide();
      $("#house_request").hide();
      $("#loansreq-slider").hide();
      $("#household_record").hide();
      $("#member_record").hide();
      $("#employer_record").hide();
      $("#household_record").hide();
      $("#mysss-slider").hide();
      $("#notification-box").hide();
      $("#notification-content").hide();
      $("#loans-slider").hide();
      $("#house_record").hide();
      $("#sickness_record").hide();
      $("#death_record").hide();
      $("#funeral_record").hide();
      $("#dis_record").hide();
      $("#ret_record").hide();
      $("#dir_rec").hide();
      $("#ed_rec").hide();
      $("#mat_rec").hide();
      $("#sick_rec").hide();
      $("#death_rec").hide();
      $("#funeral_rec").hide();
      $("#disa_rec").hide();
      $("#reti_rec").hide();
      $("#contri_rec").hide();
	    $("#loan").click(function(){
      $("#loans-slider").slideToggle();
 
      });
     

    //events 
    $("#notification").click(function(){
       $("#notification-box").slideToggle();
    });
  
    $("#mysss").click(function(){
        $("#mysss-slider").slideToggle();          
         
         $(this).addClass("active");
         $("#loan").removeClass("active");
         $("#request").removeClass("active");
         $("#dashboard").removeClass("active");
         $("#contribution").removeClass("active"); 

         $("#loans-slider").hide();
          $("#mysss-slider").fadeIn();
         $("#loansreq-slider").hide();
         $("#dashboard_panel").hide();
         $("#contri_rec").hide(); 
         });
    
    $("#loan").click(function(){
        $("#loan-slider").slideToggle();          
         

         $(this).addClass("active");
         $("#mysss").removeClass("active");
         $("#request").removeClass("active");
         $("#dashboard").removeClass("active");
         $("#contribution").removeClass("active");

         $("#mysss-slider").hide(); 
         $("#loans-slider").fadeIn();
         $("#loansreq-slider").hide(); 
         $("#dashboard_panel").hide();
         $("#contri_rec").hide();
         });

    $("#request").click(function(){
        $("#loansreq-slider").slideToggle();
          
           $("#mysss-slider").hide();
          $("#loansreq-slider").fadeIn();         
          $("#loans-slider").hide();
          $("#dashboard_panel").hide();
          $("#contri_rec").hide(); 

         $(this).addClass("active");
         $("#loan").removeClass("active");
         $("#mysss").removeClass("active");
         $("#dashboard").removeClass("active");
         $("#contribution").removeClass("active");
          
    });

    $("#dashboard").click(function(){
      $(this).addClass("active");
      $("#loan").removeClass("active");
         $("#mysss").removeClass("active"); 
         $("#request").removeClass("active");
         $("#contribution").removeClass("active");

          $("#mysss-slider").hide();
          $("#loansreq-slider").hide();         
          $("#loans-slider").hide();
          $("#dashboard_panel").slideDown();
          $("#contri_rec").hide();
    });
     
    $("#contribution").click(function(){
       $(this).addClass("active");
       $("#loan").removeClass("active");
         $("#mysss").removeClass("active"); 
         $("#request").removeClass("active");
         $("#dashboard").removeClass("active");

          $("#mysss-slider").hide();
          $("#loansreq-slider").hide();         
          $("#loans-slider").hide();
          $("#dashboard_panel").hide();
         

       $("#ed_rec").hide();
        $("#dir_rec").hide();      
        $("#ret_record").hide();
        $("#funeral_record").hide();
        $("#business_request").hide();      
        $("#member_request").hide();
        $("#employer_record").hide();
        $("#member_record").hide();
        $("#business_request").hide();
        $("#sickness_record").hide();
        $("#house_request").hide(); 
        $("#household_record").hide();
        $("#death_record").hide();
        $("#dis_record").hide();
        $("#mat_rec").hide();
        $("#sick_rec").hide();
        $("#death_rec").hide();
        $("#funeral_rec").hide();
        $("#disa_rec").hide();
        $("#reti_rec").hide(); 
        $("#dashboard_panel").hide(); 
        $("#contri_rec").slideDown();
    });
     
   $("#mysss_emp").click(function(){
       //class
         $("#mysss_emp").addClass("active");
         $("#mysss_mem").removeClass("active");
         $("#mysss_hou").removeClass("active");
       
         $("#mem_req").removeClass("active");
         $("#bus_req").removeClass("active");         
         $("#hou_req").removeClass("active");  
         $("#sick_req").removeClass("active");
         $("#death_req").removeClass("active");
         $("#fun_req").removeClass("active");
         $("#dis_req").removeClass("active");
         $("#ret_req").removeClass("active"); 
         
         $("#hou").removeClass("active");
         $("#educ").removeClass("active");
         $("#mat").removeClass("active");
         $("#sick").removeClass("active");
         $("#deaths").removeClass("active");
         $("#funeral").removeClass("active");
         $("#disa").removeClass("active");
         $("#reti").removeClass("active");
         $("#dashboard").removeClass("active");
         $("#contribution").removeClass("active");

        $("#member_record").hide();
        $("#employer_record").slideDown();
        $("#household_record").hide();
        $("#business_request").hide();
        $("#member_request").hide();
        $("#house_request").hide(); 
        $("#sickness_record").hide();
        $("#death_record").hide();
        $("#dis_record").hide();
        $("#dir_rec").hide();
        $("#ret_record").hide();
        $("#ed_rec").hide();
        $("#mat_rec").hide();
        $("#sick_rec").hide();
        $("#death_rec").hide();
        $("#funeral_rec").hide();
        $("#disa_rec").hide();
        $("#reti_rec").hide();
        $("#dashboard_panel").hide();
        $("#contri_rec").hide(); 
        //reload function
         loadData();
      loadData1();
      loadData2();
      directhouseLoad();
      loadCountNotification();
      educRecord();
      marternityLoad();
      sicknessLoad();
      deathLoad();
      funeralLoad();
      disabilityLoad();
      retirementLoad();
      directhousingRecordLoad();
      educationalRecord();
      maternityRecord();
      sickenessRecord();
      deathRecord();
      funeralRecord();
      disabilityRecord();
      retirementRecord();
      dirCount();
      educCount();
      maternityCount();
      sickenessCount();
      deathCount();
      funeralCount();
      disabilityCount();
      retirementCount();
      contributionlist();
   });

   $("#mysss_mem").click(function(){
          //class
         $("#mysss_emp").removeClass("active");
         $("#mysss_mem").addClass("active");
         $("#mysss_hou").removeClass("active");
       
         $("#mem_req").removeClass("active");
         $("#bus_req").removeClass("active");         
         $("#hou_req").removeClass("active");  
         $("#sick_req").removeClass("active");
         $("#death_req").removeClass("active");
         $("#fun_req").removeClass("active");
         $("#dis_req").removeClass("active");
         $("#ret_req").removeClass("active"); 
         
         $("#hou").removeClass("active");
         $("#educ").removeClass("active");
         $("#mat").removeClass("active");
         $("#sick").removeClass("active");
         $("#deaths").removeClass("active");
         $("#funeral").removeClass("active");
         $("#disa").removeClass("active");
         $("#reti").removeClass("active");
         $("#dashboard").removeClass("active");
         $("#contribution").removeClass("active");

          $("#employer_record").hide();
          $("#member_record").slideDown();
          $("#household_record").hide();
          $("#business_request").hide();
          $("#member_request").hide();
          $("#house_request").hide();
          $("#sickness_record").hide();
          $("#death_record").hide();
          $("#dis_record").hide();
          $("#ret_record").hide();
          $("#dir_rec").hide();
          $("#ed_rec").hide();
          $("#mat_rec").hide();
          $("#sick_rec").hide();
          $("#death_rec").hide();
          $("#funeral_rec").hide();
          $("#disa_rec").hide();
          $("#reti_rec").hide();
          $("#dashboard_panel").hide();
          $("#contri_rec").hide();
           //reload function
      loadData();
      loadData1();
      loadData2();
      directhouseLoad();
      loadCountNotification();
      educRecord();
      marternityLoad();
      sicknessLoad();
      deathLoad();
      funeralLoad();
      disabilityLoad();
      retirementLoad();
      directhousingRecordLoad();
      educationalRecord();
      maternityRecord();
      sickenessRecord();
      deathRecord();
      funeralRecord();
      disabilityRecord();
      retirementRecord();
      dirCount();
      educCount();
      maternityCount();
      sickenessCount();
      deathCount();
      funeralCount();
      disabilityCount();
      retirementCount();
      contributionlist();
   });

   $("#mysss_hou").click(function(){
         //class
         $("#mysss_emp").removeClass("active");
         $("#mysss_mem").removeClass("active");
         $("#mysss_hou").addClass("active");
       
         $("#mem_req").removeClass("active");
         $("#bus_req").removeClass("active");         
         $("#hou_req").removeClass("active");  
         $("#sick_req").removeClass("active");
         $("#death_req").removeClass("active");
         $("#fun_req").removeClass("active");
         $("#dis_req").removeClass("active");
         $("#ret_req").removeClass("active"); 
         
         $("#hou").removeClass("active");
         $("#educ").removeClass("active");
         $("#mat").removeClass("active");
         $("#sick").removeClass("active");
         $("#deaths").removeClass("active");
         $("#funeral").removeClass("active");
         $("#disa").removeClass("active");
         $("#reti").removeClass("active");
         $("#dashboard").removeClass("active");
         $("#contribution").removeClass("active");

          $("#employer_record").hide();
          $("#household_record").slideDown();
          $("#member_record").hide();
          $("#business_request").hide();
          $("#member_request").hide();
          $("#house_request").hide();
          $("#death_record").hide();
          $("#sickness_record").hide();
          $("#dis_record").hide();
          $("#dir_rec").hide();            
          $("#ret_record").hide();
           $("#ed_rec").hide();
          $("#mat_rec").hide();
          $("#sick_rec").hide();
          $("#death_rec").hide();
          $("#funeral_rec").hide();
          $("#disa_rec").hide();
          $("#reti_rec").hide();
          $("#dashboard_panel").hide();
          $("#contri_rec").hide();
      
       //reload function
      loadData();
      loadData1();
      loadData2();
      directhouseLoad();
      loadCountNotification();
      educRecord();
      marternityLoad();
      sicknessLoad();
      deathLoad();
      funeralLoad();
      disabilityLoad();
      retirementLoad();
      directhousingRecordLoad();
      educationalRecord();
      maternityRecord();
      sickenessRecord();
      deathRecord();
      funeralRecord();
      disabilityRecord();
      retirementRecord();
      dirCount();
      educCount();
      maternityCount();
      sickenessCount();
      deathCount();
      funeralCount();
      disabilityCount();
      retirementCount();
      contributionlist();
   });
   
   $("#mem_req").click(function(){
       //class
         $("#mysss_emp").removeClass("active");
         $("#mysss_mem").removeClass("active");
         $("#mysss_hou").removeClass("active");
       
         $("#mem_req").addClass("active");
         $("#bus_req").removeClass("active");         
         $("#hou_req").removeClass("active");  
         $("#sick_req").removeClass("active");
         $("#death_req").removeClass("active");
         $("#fun_req").removeClass("active");
         $("#dis_req").removeClass("active");
         $("#ret_req").removeClass("active"); 
         
         $("#hou").removeClass("active");
         $("#educ").removeClass("active");
         $("#mat").removeClass("active");
         $("#sick").removeClass("active");
         $("#deaths").removeClass("active");
         $("#funeral").removeClass("active");
         $("#disa").removeClass("active");
         $("#reti").removeClass("active");
         $("#dashboard").removeClass("active");
         $("#contribution").removeClass("active");

          $("#ret_record").hide();
          $("#funeral_record").hide();
          $("#business_request").hide();
          $("#member_request").slideDown();
          $("#house_request").hide();
          $("#employer_record").hide();
          $("#member_record").hide();
          $("#household_record").hide();
          $("#sickness_record").hide();
          $("#death_record").hide();
          $("#dis_record").hide();
          $("#dir_rec").hide();
          $("#ed_rec").hide();
          $("#mat_rec").hide();
          $("#sick_rec").hide();
          $("#death_rec").hide(); 
          $("#funeral_rec").hide();
          $("#disa_rec").hide();
          $("#reti_rec").hide();
          $("#dashboard_panel").hide();
          $("#contri_rec").hide();
           //reload function
       loadData();
      loadData1();
      loadData2();
      directhouseLoad();
      loadCountNotification();
      educRecord();
      marternityLoad();
      sicknessLoad();
      deathLoad();
      funeralLoad();
      disabilityLoad();
      retirementLoad();
      directhousingRecordLoad();
      educationalRecord();
      maternityRecord();
      sickenessRecord();
      deathRecord();
      funeralRecord();
      disabilityRecord();
      retirementRecord();
      dirCount();
      educCount();
      maternityCount();
      sickenessCount();
      deathCount();
      funeralCount();
      disabilityCount();
      retirementCount();
      contributionlist();
   });
  
  $("#bus_req").click(function(){
        //class
         $("#mysss_emp").removeClass("active");
         $("#mysss_mem").removeClass("active");
         $("#mysss_hou").removeClass("active");
       
         $("#mem_req").removeClass("active");
         $("#bus_req").addClass("active");         
         $("#hou_req").removeClass("active");  
         $("#sick_req").removeClass("active");
         $("#death_req").removeClass("active");
         $("#fun_req").removeClass("active");
         $("#dis_req").removeClass("active");
         $("#ret_req").removeClass("active"); 
         
         $("#hou").removeClass("active");
         $("#educ").removeClass("active");
         $("#mat").removeClass("active");
         $("#sick").removeClass("active");
         $("#deaths").removeClass("active");
         $("#funeral").removeClass("active");
         $("#disa").removeClass("active");
         $("#reti").removeClass("active");
         $("#dashboard").removeClass("active");
         $("#contribution").removeClass("active"); 

        $("#ret_record").hide();
       $("#funeral_record").hide();
       $("#member_request").hide();
       $("#business_request").slideDown();
       $("#house_request").hide();
       $("#employer_record").hide();
        $("#member_record").hide();
        $("#household_record").hide();
        $("#sickness_record").hide();
        $("#death_record").hide();
        $("#dis_record").hide();
        $("#dir_rec").hide();
         $("#ed_rec").hide();
         $("#mat_rec").hide();
         $("#sick_rec").hide();
         $("#death_rec").hide(); 
         $("#funeral_rec").hide();
         $("#disa_rec").hide();
         $("#reti_rec").hide();
         $("#dashboard_panel").hide();
         $("#contri_rec").hide();
       //reload function
       loadData();
      loadData1();
      loadData2();
      directhouseLoad();
      loadCountNotification();
      educRecord();
      marternityLoad();
      sicknessLoad();
      deathLoad();
      funeralLoad();
      disabilityLoad();
      retirementLoad();
      directhousingRecordLoad();
      educationalRecord();
      maternityRecord();
      sickenessRecord();
      deathRecord();
      funeralRecord();
      disabilityRecord();
      retirementRecord();
      dirCount();
      educCount();
      maternityCount();
      sickenessCount();
      deathCount();
      funeralCount();
      disabilityCount();
      retirementCount();
      contributionlist();
      }); 
  
        $("#hou_req").click(function(){
         //class
         $("#mysss_emp").addClass("active");
         $("#mysss_mem").removeClass("active");
         $("#mysss_hou").removeClass("active");
       
         $("#mem_req").removeClass("active");
         $("#bus_req").removeClass("active");         
         $("#hou_req").addClass("active");  
         $("#sick_req").removeClass("active");
         $("#death_req").removeClass("active");
         $("#fun_req").removeClass("active");
         $("#dis_req").removeClass("active");
         $("#ret_req").removeClass("active"); 
         
         $("#hou").removeClass("active");
         $("#educ").removeClass("active");
         $("#mat").removeClass("active");
         $("#sick").removeClass("active");
         $("#deaths").removeClass("active");
         $("#funeral").removeClass("active");
         $("#disa").removeClass("active");
         $("#reti").removeClass("active");
        $("#dashboard").removeClass("active");
        $("#contribution").removeClass("active");

        $("#ret_record").hide();
        $("#funeral_record").hide();
        $("#business_request").hide();
        $("#house_request").slideDown();
        $("#member_request").hide();
        $("#employer_record").hide();
        $("#member_record").hide();
        $("#household_record").hide();
        $("#sickness_record").hide();
        $("#death_record").hide();
        $("#dis_record").hide();
        $("#dir_rec").hide();
        $("#ed_rec").hide();
        $("#mat_rec").hide();
        $("#sick_rec").hide();
        $("#death_rec").hide();
        $("#funeral_rec").hide();
        $("#disa_rec").hide();
        $("#reti_rec").hide();
        $("#dashboard_panel").hide();
        $("#contri_rec").hide();
         //reload function
       loadData();
      loadData1();
      loadData2();
      directhouseLoad();
      loadCountNotification();
      educRecord();
      marternityLoad();
      sicknessLoad();
      deathLoad();
      funeralLoad();
      disabilityLoad();
      retirementLoad();
      directhousingRecordLoad();
      educationalRecord();
      maternityRecord();
      sickenessRecord();
      deathRecord();
      funeralRecord();
      disabilityRecord();
      retirementRecord();
      dirCount();
      educCount();
      maternityCount();
      sickenessCount();
      deathCount();
      funeralCount();
      disabilityCount();
      retirementCount();
      contributionlist();
  });

   $("#sick_req").click(function(){
         //class
         $("#mysss_emp").removeClass("active");
         $("#mysss_mem").removeClass("active");
         $("#mysss_hou").removeClass("active");
       
         $("#mem_req").removeClass("active");
         $("#bus_req").removeClass("active");         
         $("#hou_req").removeClass("active");  
         $("#sick_req").addClass("active");
         $("#death_req").removeClass("active");
         $("#fun_req").removeClass("active");
         $("#dis_req").removeClass("active");
         $("#ret_req").removeClass("active"); 
         
         $("#hou").removeClass("active");
         $("#educ").removeClass("active");
         $("#mat").removeClass("active");
         $("#sick").removeClass("active");
         $("#deaths").removeClass("active");
         $("#funeral").removeClass("active");
         $("#disa").removeClass("active");
         $("#reti").removeClass("active");
         $("#dashboard").removeClass("active"); 
         $("#contribution").removeClass("active"); 

        $("#ret_record").hide();
        $("#funeral_record").hide();
        $("#business_request").hide();      
        $("#member_request").hide();
        $("#employer_record").hide();
        $("#member_record").hide();
        $("#business_request").hide();
        $("#sickness_record").slideDown();
        $("#house_request").hide(); 
        $("#household_record").hide();
        $("#death_record").hide();
        $("#dis_record").hide();
        $("#dir_rec").hide();
        $("#ed_rec").hide();
        $("#mat_rec").hide();
        $("#sick_rec").hide();
        $("#death_rec").hide();
        $("#funeral_rec").hide();
        $("#disa_rec").hide();
        $("#reti_rec").hide();
        $("#dashboard_panel").hide();
        $("#contri_rec").hide();
         //reload function
       loadData();
      loadData1();
      loadData2();
      directhouseLoad();
      loadCountNotification();
      educRecord();
      marternityLoad();
      sicknessLoad();
      deathLoad();
      funeralLoad();
      disabilityLoad();
      retirementLoad();
      directhousingRecordLoad();
      educationalRecord();
      maternityRecord();
      sickenessRecord();
      deathRecord();
      funeralRecord();
      disabilityRecord();
      retirementRecord();
      dirCount();
      educCount();
      maternityCount();
      sickenessCount();
      deathCount();
      funeralCount();
      disabilityCount();
      retirementCount();
      contributionlist();
   });

   $("#death_req").click(function(){
         //class
         $("#mysss_emp").removeClass("active");
         $("#mysss_mem").removeClass("active");
         $("#mysss_hou").removeClass("active");
       
         $("#mem_req").removeClass("active");
         $("#bus_req").removeClass("active");         
         $("#hou_req").removeClass("active");  
         $("#sick_req").removeClass("active");
         $("#death_req").addClass("active");
         $("#fun_req").removeClass("active");
         $("#dis_req").removeClass("active");
         $("#ret_req").removeClass("active"); 
         
         $("#hou").removeClass("active");
         $("#educ").removeClass("active");
         $("#mat").removeClass("active");
         $("#sick").removeClass("active");
         $("#deaths").removeClass("active");
         $("#funeral").removeClass("active");
         $("#disa").removeClass("active");
         $("#reti").removeClass("active");
         $("#dashboard").removeClass("active");
         $("#contribution").removeClass("active");

        $("#ret_record").hide();
        $("#funeral_record").hide();
        $("#death_record").slideDown();             
        $("#member_request").hide();
        $("#employer_record").hide();
        $("#member_record").hide();
        $("#business_request").hide();
        $("#sickness_record").hide();
        $("#house_request").hide(); 
        $("#household_record").hide();
        $("#dis_record").hide();
        $("#dir_rec").hide();
        $("#ed_rec").hide();
        $("#mat_rec").hide();
        $("#sick_rec").hide();
        $("#death_rec").hide();
        $("#funeral_rec").hide();
        $("#disa_rec").hide();
        $("#reti_rec").hide();
        $("#dashboard_panel").hide();
        $("#contri_rec").hide();
         //reload function
       loadData();
      loadData1();
      loadData2();
      directhouseLoad();
      loadCountNotification();
      educRecord();
      marternityLoad();
      sicknessLoad();
      deathLoad();
      funeralLoad();
      disabilityLoad();
      retirementLoad();
      directhousingRecordLoad();
      educationalRecord();
      maternityRecord();
      sickenessRecord();
      deathRecord();
      funeralRecord();
      disabilityRecord();
      retirementRecord();
      dirCount();
      educCount();
      maternityCount();
      sickenessCount();
      deathCount();
      funeralCount();
      disabilityCount();
      retirementCount();
      contributionlist();
   });
   $("#fun_req").click(function(){
         //class
         $("#mysss_emp").removeClass("active");
         $("#mysss_mem").removeClass("active");
         $("#mysss_hou").removeClass("active");
       
         $("#mem_req").removeClass("active");
         $("#bus_req").removeClass("active");         
         $("#hou_req").removeClass("active");  
         $("#sick_req").removeClass("active");
         $("#death_req").removeClass("active");
         $("#fun_req").addClass("active");
         $("#dis_req").removeClass("active");
         $("#ret_req").removeClass("active"); 
         
         $("#hou").removeClass("active");
         $("#educ").removeClass("active");
         $("#mat").removeClass("active");
         $("#sick").removeClass("active");
         $("#deaths").removeClass("active");
         $("#funeral").removeClass("active");
         $("#disa").removeClass("active");
         $("#reti").removeClass("active"); 
         $("#dashboard").removeClass("active"); 
         $("#contribution").removeClass("active"); 

        $("#ret_record").hide(); 
        $("#funeral_record").slideDown();
        $("#death_record").hide();             
        $("#member_request").hide();
        $("#employer_record").hide();
        $("#member_record").hide();
        $("#business_request").hide();
        $("#sickness_record").hide();
        $("#house_request").hide(); 
        $("#household_record").hide();
        $("#dis_record").hide();
        $("#dir_rec").hide();
         $("#ed_rec").hide();
         $("#mat_rec").hide();
         $("#sick_rec").hide();
         $("#death_rec").hide();
         $("#funeral_rec").hide();
         $("#disa_rec").hide();
         $("#reti_rec").hide();
         $("#dashboard_panel").hide();
         $("#contri_rec").hide();
          //reload function
       loadData();
      loadData1();
      loadData2();
      directhouseLoad();
      loadCountNotification();
      educRecord();
      marternityLoad();
      sicknessLoad();
      deathLoad();
      funeralLoad();
      disabilityLoad();
      retirementLoad();
      directhousingRecordLoad();
      educationalRecord();
      maternityRecord();
      sickenessRecord();
      deathRecord();
      funeralRecord();
      disabilityRecord();
      retirementRecord();
      dirCount();
      educCount();
      maternityCount();
      sickenessCount();
      deathCount();
      funeralCount();
      disabilityCount();
      retirementCount();
      contributionlist();
   });

   $("#dis_req").click(function(){
        //class
         $("#mysss_emp").removeClass("active");
         $("#mysss_mem").removeClass("active");
         $("#mysss_hou").removeClass("active");
       
         $("#mem_req").removeClass("active");
         $("#bus_req").removeClass("active");         
         $("#hou_req").removeClass("active");  
         $("#sick_req").removeClass("active");
         $("#death_req").removeClass("active");
         $("#fun_req").removeClass("active");
         $("#dis_req").addClass("active");
         $("#ret_req").removeClass("active"); 
         
         $("#hou").removeClass("active");
         $("#educ").removeClass("active");
         $("#mat").removeClass("active");
         $("#sick").removeClass("active");
         $("#deaths").removeClass("active");
         $("#funeral").removeClass("active");
         $("#disa").removeClass("active");
         $("#reti").removeClass("active");
         $("#dashboard").removeClass("active");
         $("#contribution").removeClass("active");

        $("#ret_record").hide();
        $("#dis_record").slideDown();
        $("#funeral_record").hide();
        $("#death_record").hide();             
        $("#member_request").hide();
        $("#employer_record").hide();
        $("#member_record").hide();
        $("#business_request").hide();
        $("#sickness_record").hide();
        $("#house_request").hide(); 
        $("#household_record").hide();
        $("#dir_rec").hide();
        $("#ed_rec").hide();
        $("#mat_rec").hide();
        $("#sick_rec").hide();
        $("#death_rec").hide();
        $("#funeral_rec").hide();
        $("#disa_rec").hide();
        $("#reti_rec").hide();
        $("#dashboard_panel").hide();
        $("#contri_rec").hide();
         //reload function
       loadData();
      loadData1();
      loadData2();
      directhouseLoad();
      loadCountNotification();
      educRecord();
      marternityLoad();
      sicknessLoad();
      deathLoad();
      funeralLoad();
      disabilityLoad();
      retirementLoad();
      directhousingRecordLoad();
      educationalRecord();
      maternityRecord();
      sickenessRecord();
      deathRecord();
      funeralRecord();
      disabilityRecord();
      retirementRecord();
      dirCount();
      educCount();
      maternityCount();
      sickenessCount();
      deathCount();
      funeralCount();
      disabilityCount();
      retirementCount();
      contributionlist();
   });
   $("#ret_req").click(function(){
       //class
         $("#mysss_emp").removeClass("active");
         $("#mysss_mem").removeClass("active");
         $("#mysss_hou").removeClass("active");
       
         $("#mem_req").removeClass("active");
         $("#bus_req").removeClass("active");         
         $("#hou_req").removeClass("active");  
         $("#sick_req").removeClass("active");
         $("#death_req").removeClass("active");
         $("#fun_req").removeClass("active");
         $("#dis_req").removeClass("active");
         $("#ret_req").addClass("active"); 
         
         $("#hou").removeClass("active");
         $("#educ").removeClass("active");
         $("#mat").removeClass("active");
         $("#sick").removeClass("active");
         $("#deaths").removeClass("active");
         $("#funeral").removeClass("active");
         $("#disa").removeClass("active");
         $("#reti").removeClass("active");
         $("#dashboard").removeClass("active"); 
         $("#contribution").removeClass("active");

        $("#ret_record").slideDown();    
        $("#dis_record").hide();
        $("#funeral_record").hide();
        $("#death_record").hide();             
        $("#member_request").hide();
        $("#employer_record").hide();
        $("#member_record").hide();
        $("#business_request").hide();
        $("#sickness_record").hide();
        $("#house_request").hide(); 
        $("#household_record").hide();
        $("#dir_rec").hide();
         $("#ed_rec").hide();
        $("#mat_rec").hide();
        $("#sick_rec").hide();
        $("#death_rec").hide();
        $("#funeral_rec").hide();
        $("#disa_rec").hide();
        $("#reti_rec").hide();
        $("#dashboard_panel").hide();
        $("#contri_rec").hide();
         //reload function
       loadData();
      loadData1();
      loadData2();
      directhouseLoad();
      loadCountNotification();
      educRecord();
      marternityLoad();
      sicknessLoad();
      deathLoad();
      funeralLoad();
      disabilityLoad();
      retirementLoad();
      directhousingRecordLoad();
      educationalRecord();
      maternityRecord();
      sickenessRecord();
      deathRecord();
      funeralRecord();
      disabilityRecord();
      retirementRecord();
      dirCount();
      educCount();
      maternityCount();
      sickenessCount();
      deathCount();
      funeralCount();
      disabilityCount();
      retirementCount();
      contributionlist();
   });

   $("#hou").click(function(){
        //class
         $("#mysss_emp").removeClass("active");
         $("#mysss_mem").removeClass("active");
         $("#mysss_hou").removeClass("active");
       
         $("#mem_req").removeClass("active");
         $("#bus_req").removeClass("active");         
         $("#hou_req").removeClass("active");  
         $("#sick_req").removeClass("active");
         $("#death_req").removeClass("active");
         $("#fun_req").removeClass("active");
         $("#dis_req").removeClass("active");
         $("#ret_req").removeClass("active"); 
         
         $("#hou").addClass("active");
         $("#educ").removeClass("active");
         $("#mat").removeClass("active");
         $("#sick").removeClass("active");
         $("#deaths").removeClass("active");
         $("#funeral").removeClass("active");
         $("#disa").removeClass("active");
         $("#reti").removeClass("active");
         $("#dashboard").removeClass("active");
         $("#contribution").removeClass("active");

      $("#dir_rec").slideDown();
      $("#ret_record").hide();
      $("#funeral_record").hide();
      $("#business_request").hide();
      
        $("#member_request").hide();
        $("#employer_record").hide();
        $("#member_record").hide();
        $("#business_request").hide();
        $("#sickness_record").hide();
        $("#house_request").hide(); 
        $("#household_record").hide();
        $("#death_record").hide();
        $("#dis_record").hide();
        $("#ed_rec").hide();
        $("#mat_rec").hide();
        $("#sick_rec").hide();
        $("#death_rec").hide();
        $("#funeral_rec").hide();
        $("#disa_rec").hide();
        $("#reti_rec").hide();
        $("#dashboard_panel").hide();
        $("#contri_rec").hide();
         //reload function
      loadData();
      loadData1();
      loadData2();
      directhouseLoad();
      loadCountNotification();
      educRecord();
      marternityLoad();
      sicknessLoad();
      deathLoad();
      funeralLoad();
      disabilityLoad();
      retirementLoad();
      directhousingRecordLoad();
      educationalRecord();
      maternityRecord();
      sickenessRecord();
      deathRecord();
      funeralRecord();
      disabilityRecord();
      retirementRecord();
      dirCount();
      educCount();
      maternityCount();
      sickenessCount();
      deathCount();
      funeralCount();
      disabilityCount();
      retirementCount();
      contributionlist();
   });
    
   $("#educ").click(function(){
        //class
         $("#mysss_emp").removeClass("active");
         $("#mysss_mem").removeClass("active");
         $("#mysss_hou").removeClass("active");
       
         $("#mem_req").removeClass("active");
         $("#bus_req").removeClass("active");         
         $("#hou_req").removeClass("active");  
         $("#sick_req").removeClass("active");
         $("#death_req").removeClass("active");
         $("#fun_req").removeClass("active");
         $("#dis_req").removeClass("active");
         $("#ret_req").removeClass("active"); 
         
         $("#hou").removeClass("active");
         $("#educ").addClass("active");
         $("#mat").removeClass("active");
         $("#sick").removeClass("active");
         $("#deaths").removeClass("active");
         $("#funeral").removeClass("active");
         $("#disa").removeClass("active");
         $("#reti").removeClass("active");
         $("#dashboard").removeClass("active");
         $("#contribution").removeClass("active");

        $("#ed_rec").slideDown();
        $("#dir_rec").hide();      
        $("#ret_record").hide();
        $("#funeral_record").hide();
        $("#business_request").hide();      
        $("#member_request").hide();
        $("#employer_record").hide();
        $("#member_record").hide();
        $("#business_request").hide();
        $("#sickness_record").hide();
        $("#house_request").hide(); 
        $("#household_record").hide();
        $("#death_record").hide();
        $("#dis_record").hide();
        $("#mat_rec").hide();
        $("#sick_rec").hide();
        $("#death_rec").hide();  
        $("#funeral_rec").hide();
        $("#disa_rec").hide();
        $("#reti_rec").hide();
        $("#dashboard_panel").hide();
        $("#contri_rec").hide();
         //reload function
       loadData();
      loadData1();
      loadData2();
      directhouseLoad();
      loadCountNotification();
      educRecord();
      marternityLoad();
      sicknessLoad();
      deathLoad();
      funeralLoad();
      disabilityLoad();
      retirementLoad();
      directhousingRecordLoad();
      educationalRecord();
      maternityRecord();
      sickenessRecord();
      deathRecord();
      funeralRecord();
      disabilityRecord();
      retirementRecord();
      dirCount();
      educCount();
      maternityCount();
      sickenessCount();
      deathCount();
      funeralCount();
      disabilityCount();
      retirementCount();
      contributionlist();
   });
    
   $("#mat").click(function(){
        //class
         $("#mysss_emp").removeClass("active");
         $("#mysss_mem").removeClass("active");
         $("#mysss_hou").removeClass("active");
       
         $("#mem_req").removeClass("active");
         $("#bus_req").removeClass("active");         
         $("#hou_req").removeClass("active");  
         $("#sick_req").removeClass("active");
         $("#death_req").removeClass("active");
         $("#fun_req").removeClass("active");
         $("#dis_req").removeClass("active");
         $("#ret_req").removeClass("active"); 
         
         $("#hou").removeClass("active");
         $("#educ").removeClass("active");
         $("#mat").addClass("active");
         $("#sick").removeClass("active");
         $("#deaths").removeClass("active");
         $("#funeral").removeClass("active");
         $("#disa").removeClass("active");
         $("#reti").removeClass("active");
         $("#dashboard").removeClass("active");
         $("#contribution").removeClass("active"); 

        $("#ed_rec").hide();
        $("#dir_rec").hide();      
        $("#ret_record").hide();
        $("#funeral_record").hide();
        $("#business_request").hide();      
        $("#member_request").hide();
        $("#employer_record").hide();
        $("#member_record").hide();
        $("#business_request").hide();
        $("#sickness_record").hide();
        $("#house_request").hide(); 
        $("#household_record").hide();
        $("#death_record").hide();
        $("#dis_record").hide();
        $("#mat_rec").slideDown();
        $("#sick_rec").hide();  
        $("#death_rec").hide();  
        $("#funeral_rec").hide();
        $("#disa_rec").hide();
        $("#reti_rec").hide();
        $("#dashboard_panel").hide();
        $("#contri_rec").hide();
         //reload function
       loadData();
      loadData1();
      loadData2();
      directhouseLoad();
      loadCountNotification();
      educRecord();
      marternityLoad();
      sicknessLoad();
      deathLoad();
      funeralLoad();
      disabilityLoad();
      retirementLoad();
      directhousingRecordLoad();
      educationalRecord();
      maternityRecord();
      sickenessRecord();
      deathRecord();
      funeralRecord();
      disabilityRecord();
      retirementRecord();
      dirCount();
      educCount();
      maternityCount();
      sickenessCount();
      deathCount();
      funeralCount();
      disabilityCount();
      retirementCount();
      contributionlist();
   }); 
   $("#sick").click(function(){
        //class
         $("#mysss_emp").removeClass("active");
         $("#mysss_mem").removeClass("active");
         $("#mysss_hou").removeClass("active");
       
         $("#mem_req").removeClass("active");
         $("#bus_req").removeClass("active");         
         $("#hou_req").removeClass("active");  
         $("#sick_req").removeClass("active");
         $("#death_req").removeClass("active");
         $("#fun_req").removeClass("active");
         $("#dis_req").removeClass("active");
         $("#ret_req").removeClass("active"); 
         
         $("#hou").removeClass("active");
         $("#educ").removeClass("active");
         $("#mat").removeClass("active");
         $("#sick").addClass("active");
         $("#deaths").removeClass("active");
         $("#funeral").removeClass("active");
         $("#disa").removeClass("active");
         $("#reti").removeClass("active");
         $("#dashboard").removeClass("active");
         $("#contribution").removeClass("active");

        $("#ed_rec").hide();
        $("#dir_rec").hide();      
        $("#ret_record").hide();
        $("#funeral_record").hide();
        $("#business_request").hide();      
        $("#member_request").hide();
        $("#employer_record").hide();
        $("#member_record").hide();
        $("#business_request").hide();
        $("#sickness_record").hide();
        $("#house_request").hide(); 
        $("#household_record").hide();
        $("#death_record").hide();
        $("#dis_record").hide();
        $("#mat_rec").hide();
        $("#sick_rec").slideDown();
        $("#death_rec").hide();
        $("#funeral_rec").hide();
        $("#disa_rec").hide(); 
        $("#reti_rec").hide(); 
        $("#dashboard_panel").hide();
        $("#contri_rec").hide();
      //reload function
       loadData();
      loadData1();
      loadData2();
      directhouseLoad();
      loadCountNotification();
      educRecord();
      marternityLoad();
      sicknessLoad();
      deathLoad();
      funeralLoad();
      disabilityLoad();
      retirementLoad();
      directhousingRecordLoad();
      educationalRecord();
      maternityRecord();
      sickenessRecord();
      deathRecord();
      funeralRecord();
      disabilityRecord();
      retirementRecord();
      dirCount();
      educCount();
      maternityCount();
      sickenessCount();
      deathCount();
      funeralCount();
      disabilityCount();
      retirementCount();
      contributionlist();

   });

   $("#deaths").click(function(){
       //class
         $("#mysss_emp").removeClass("active");
         $("#mysss_mem").removeClass("active");
         $("#mysss_hou").removeClass("active");
       
         $("#mem_req").removeClass("active");
         $("#bus_req").removeClass("active");         
         $("#hou_req").removeClass("active");  
         $("#sick_req").removeClass("active");
         $("#death_req").removeClass("active");
         $("#fun_req").removeClass("active");
         $("#dis_req").removeClass("active");
         $("#ret_req").removeClass("active"); 
         
         $("#hou").removeClass("active");
         $("#educ").removeClass("active");
         $("#mat").removeClass("active");
         $("#sick").removeClass("active");
         $("#deaths").addClass("active");
         $("#funeral").removeClass("active");
         $("#disa").removeClass("active");
         $("#reti").removeClass("active");
         $("#dashboard").removeClass("active");
         $("#contribution").removeClass("active");

        $("#ed_rec").hide();
        $("#dir_rec").hide();      
        $("#ret_record").hide();
        $("#funeral_record").hide();
        $("#business_request").hide();      
        $("#member_request").hide();
        $("#employer_record").hide();
        $("#member_record").hide();
        $("#business_request").hide();
        $("#sickness_record").hide();
        $("#house_request").hide(); 
        $("#household_record").hide();
        $("#death_record").hide();
        $("#dis_record").hide();
        $("#mat_rec").hide();
        $("#sick_rec").hide();
        $("#death_rec").slideDown();
        $("#funeral_rec").hide();
        $("#disa_rec").hide();
        $("#reti_rec").hide();
        $("#dashboard_panel").hide(); 
        $("#contri_rec").hide();
      //reload function
       loadData();
      loadData1();
      loadData2();
      directhouseLoad();
      loadCountNotification();
      educRecord();
      marternityLoad();
      sicknessLoad();
      deathLoad();
      funeralLoad();
      disabilityLoad();
      retirementLoad();
      directhousingRecordLoad();
      educationalRecord();
      maternityRecord();
      sickenessRecord();
      deathRecord();
      funeralRecord();
      disabilityRecord();
      retirementRecord();
      dirCount();
      educCount();
      maternityCount();
      sickenessCount();
      deathCount();
      funeralCount();
      disabilityCount();
      retirementCount();
      contributionlist();
   });
   $("#funeral").click(function(){
         //class
         $("#mysss_emp").removeClass("active");
         $("#mysss_mem").removeClass("active");
         $("#mysss_hou").removeClass("active");
       
         $("#mem_req").removeClass("active");
         $("#bus_req").removeClass("active");         
         $("#hou_req").removeClass("active");  
         $("#sick_req").removeClass("active");
         $("#death_req").removeClass("active");
         $("#fun_req").removeClass("active");
         $("#dis_req").removeClass("active");
         $("#ret_req").removeClass("active"); 
         
         $("#hou").removeClass("active");
         $("#educ").removeClass("active");
         $("#mat").removeClass("active");
         $("#sick").removeClass("active");
         $("#deaths").removeClass("active");
         $("#funeral").addClass("active");
         $("#disa").removeClass("active");
         $("#reti").removeClass("active");
         $("#dashboard").removeClass("active");
         $("#contribution").removeClass("active");

        $("#ed_rec").hide();
        $("#dir_rec").hide();      
        $("#ret_record").hide();
        $("#funeral_record").hide();
        $("#business_request").hide();      
        $("#member_request").hide();
        $("#employer_record").hide();
        $("#member_record").hide();
        $("#business_request").hide();
        $("#sickness_record").hide();
        $("#house_request").hide(); 
        $("#household_record").hide();
        $("#death_record").hide();
        $("#dis_record").hide();
        $("#mat_rec").hide();
        $("#sick_rec").hide();
        $("#death_rec").hide();
        $("#funeral_rec").slideDown();
        $("#disa_rec").hide();
        $("#reti_rec").hide();
        $("#dashboard_panel").hide();
        $("#contri_rec").hide();
       //reload function
       loadData();
      loadData1();
      loadData2();
      directhouseLoad();
      loadCountNotification();
      educRecord();
      marternityLoad();
      sicknessLoad();
      deathLoad();
      funeralLoad();
      disabilityLoad();
      retirementLoad();
      directhousingRecordLoad();
      educationalRecord();
      maternityRecord();
      sickenessRecord();
      deathRecord();
      funeralRecord();
      disabilityRecord();
      retirementRecord();
      dirCount();
      educCount();
      maternityCount();
      sickenessCount();
      deathCount();
      funeralCount();
      disabilityCount();
      retirementCount(); 
      contributionlist();
   });
   $("#disa").click(function(){
         //class
         $("#mysss_emp").removeClass("active");
         $("#mysss_mem").removeClass("active");
         $("#mysss_hou").removeClass("active");
       
         $("#mem_req").removeClass("active");
         $("#bus_req").removeClass("active");         
         $("#hou_req").removeClass("active");  
         $("#sick_req").removeClass("active");
         $("#death_req").removeClass("active");
         $("#fun_req").removeClass("active");
         $("#dis_req").removeClass("active");
         $("#ret_req").removeClass("active"); 
         
         $("#hou").removeClass("active");
         $("#educ").removeClass("active");
         $("#mat").removeClass("active");
         $("#sick").removeClass("active");
         $("#deaths").removeClass("active");
         $("#funeral").removeClass("active");
         $("#disa").addClass("active");
         $("#reti").removeClass("active");
         $("#dashboard").removeClass("active");
         $("#contribution").removeClass("active");

        $("#ed_rec").hide();
        $("#dir_rec").hide();      
        $("#ret_record").hide();
        $("#funeral_record").hide();
        $("#business_request").hide();      
        $("#member_request").hide();
        $("#employer_record").hide();
        $("#member_record").hide();
        $("#business_request").hide();
        $("#sickness_record").hide();
        $("#house_request").hide(); 
        $("#household_record").hide();
        $("#death_record").hide();
        $("#dis_record").hide();
        $("#mat_rec").hide();
        $("#sick_rec").hide();
        $("#death_rec").hide();
        $("#funeral_rec").hide();
        $("#disa_rec").slideDown();
        $("#reti_rec").hide();
        $("#dashboard_panel").hide();
        $("#contri_rec").hide();
      //reload function
       loadData();
      loadData1();
      loadData2();
      directhouseLoad();
      loadCountNotification();
      educRecord();
      marternityLoad();
      sicknessLoad();
      deathLoad();
      funeralLoad();
      disabilityLoad();
      retirementLoad();
      directhousingRecordLoad();
      educationalRecord();
      maternityRecord();
      sickenessRecord();
      deathRecord();
      funeralRecord();
      disabilityRecord();
      retirementRecord();
      dirCount();
      educCount();
      maternityCount();
      sickenessCount();
      deathCount();
      funeralCount();
      disabilityCount();
      retirementCount();
      contributionlist();
   });
   $("#reti").click(function(){
         //class
         $("#mysss_emp").removeClass("active");
         $("#mysss_mem").removeClass("active");
         $("#mysss_hou").removeClass("active");
       
         $("#mem_req").removeClass("active");
         $("#bus_req").removeClass("active");         
         $("#hou_req").removeClass("active");  
         $("#sick_req").removeClass("active");
         $("#death_req").removeClass("active");
         $("#fun_req").removeClass("active");
         $("#dis_req").removeClass("active");
         $("#ret_req").removeClass("active"); 
         
         $("#hou").removeClass("active");
         $("#educ").removeClass("active");
         $("#mat").removeClass("active");
         $("#sick").removeClass("active");
         $("#deaths").removeClass("active");
         $("#funeral").removeClass("active");
         $("#disa").removeClass("active");
         $("#reti").addClass("active");
         $("#dashboard").removeClass("active");
         $("#contribution").removeClass("active");

        $("#ed_rec").hide();
        $("#dir_rec").hide();      
        $("#ret_record").hide();
        $("#funeral_record").hide();
        $("#business_request").hide();      
        $("#member_request").hide();
        $("#employer_record").hide();
        $("#member_record").hide();
        $("#business_request").hide();
        $("#sickness_record").hide();
        $("#house_request").hide(); 
        $("#household_record").hide();
        $("#death_record").hide();
        $("#dis_record").hide();
        $("#mat_rec").hide();
        $("#sick_rec").hide();
        $("#death_rec").hide();
        $("#funeral_rec").hide();
        $("#disa_rec").hide();
        $("#reti_rec").slideDown(); 
        $("#dashboard_panel").hide();
        $("#contri_rec").hide();
         //reload function
       loadData();
      loadData1();
      loadData2();
      directhouseLoad();
      loadCountNotification();
      educRecord();
      marternityLoad();
      sicknessLoad();
      deathLoad();
      funeralLoad();
      disabilityLoad();
      retirementLoad();
      directhousingRecordLoad();
      educationalRecord();
      maternityRecord();
      sickenessRecord();
      deathRecord();
      funeralRecord();
      disabilityRecord();
      retirementRecord();
      dirCount();
      educCount();
      maternityCount();
      sickenessCount();
      deathCount();
      funeralCount();
      disabilityCount();
      retirementCount();
      contributionlist();
   });
    $("#dashboard").click(function(){
       $("#mysss_emp").removeClass("active");
         $("#mysss_mem").removeClass("active");
         $("#mysss_hou").removeClass("active");
       
         $("#mem_req").removeClass("active");
         $("#bus_req").removeClass("active");         
         $("#hou_req").removeClass("active");  
         $("#sick_req").removeClass("active");
         $("#death_req").removeClass("active");
         $("#fun_req").removeClass("active");
         $("#dis_req").removeClass("active");
         $("#ret_req").removeClass("active"); 
         
         $("#hou").removeClass("active");
         $("#educ").removeClass("active");
         $("#mat").removeClass("active");
         $("#sick").removeClass("active");
         $("#deaths").removeClass("active");
         $("#funeral").removeClass("active");
         $("#disa").removeClass("active");
         $("#reti").removeClass("active");
         $(this).addClass("active"); 
         $("#contribution").removeClass("active");        
       
       $("#ed_rec").hide();
        $("#dir_rec").hide();      
        $("#ret_record").hide();
        $("#funeral_record").hide();
        $("#business_request").hide();      
        $("#member_request").hide();
        $("#employer_record").hide();
        $("#member_record").hide();
        $("#business_request").hide();
        $("#sickness_record").hide();
        $("#house_request").hide(); 
        $("#household_record").hide();
        $("#death_record").hide();
        $("#dis_record").hide();
        $("#mat_rec").hide();
        $("#sick_rec").hide();
        $("#death_rec").hide();
        $("#funeral_rec").hide();
        $("#disa_rec").hide();
        $("#reti_rec").hide(); 
        $("#dashboard_panel").slideDown(); 
        $("#contri_rec").hide();
         //reload function
       loadData();
      loadData1();
      loadData2();
      directhouseLoad();
      loadCountNotification();
      educRecord();
      marternityLoad();
      sicknessLoad();
      deathLoad();
      funeralLoad();
      disabilityLoad();
      retirementLoad();
      directhousingRecordLoad();
      educationalRecord();
      maternityRecord();
      sickenessRecord();
      deathRecord();
      funeralRecord();
      disabilityRecord();
      retirementRecord();
      dirCount();
      educCount();
      maternityCount();
      sickenessCount();
      deathCount();
      funeralCount();
      disabilityCount();
      retirementCount();
      contributionlist();

      }); 
   // $("#notification_count").on("click",function(){
   //      $(this).removeClass("notification-color");
   //      var values = $("#notification_count").html();
   //      // var datatring ="value="+values;    
   //      //       $.ajax({
   //      //       type: "POST",
   //      //       url: "Notification.php",
   //      //       data: datatring,
   //      //       success:function(data)
   //      //       {
   //      //          $("#notification_count").html(data);
               
   //      //       } 
   //      //   });

   //      });

   $("#notification-box").load("NotificationContent.php");    

   $("#notification").click(function(){
        $("#notification_count").removeClass("notification-color");               
   });

    //ififilter ang record by searching value from textbox
    $("#search_employer").on("input",function(){
            var search_employer = $("#search_employer").val();
            if(search_employer.length>0)
            {     
                 $.get("search_employer.php",
                  {"search_employer":search_employer},
                  function(data){
                       $("#result_employer").html(data);
                      
                 });
                
            }
            else if(search_employer.length==0)
            {
                loadData();
            
            }
    });

     $("#search_member").on("input",function(){
           var search_member = $("#search_member").val();
           if(search_member.length>0)
           {
                   $.get("search_member.php",
                  {"search_member":search_member},
                  function(data)
                  {
                      $("#result_member").html(data);
                  });
             
           }
           else if(search_member.length==0)
           {
               loadData1();
           }
     });

     $("#search_house").on("input",function(){
         var search_house = $("#search_house").val();
         if(search_house.length>0)
         {
                 $.get("search_household.php",
                  {"search_household":search_house},
                  function(data){
                      $("#result_household").html(data);  
                 });
         }
         else if(search_house.length==0)
         {
                loadData2();
         }
     });

  //letter lang ang tatanggapin ng textbox
    $("#search_employer").keypress(function (e) {
    if(e.keyCode != 8 &&  e.keyCode!=32 &&(e.keyCode < 65 || e.keyCode > 90) && (e.keyCode < 97 || e.keyCode >122))
            {   
              e.preventDefault();
            }
         });

   });

   $("#search_member").keypress(function(e){
    if(e.keyCode != 8 &&  e.keyCode!=32 &&(e.keyCode < 65 || e.keyCode > 90) && (e.keyCode < 97 || e.keyCode >122))
            {   
              e.preventDefault();
            }
   });

 $("#search_house").keypress(function(e){
    if(e.keyCode != 8 &&  e.keyCode!=32 &&(e.keyCode < 65 || e.keyCode > 90) && (e.keyCode < 97 || e.keyCode >122))
            {   
              e.preventDefault();
            }
   });
$("#member").keypress(function(e){
    if(e.keyCode < 47 || e.keyCode > 57)
            {   
              e.preventDefault();
            }
       var search_ssno = $("#member").val();
       if(search_ssno.length==10)
       {
          e.preventDefault();
       }       
   });

$("#search").on("click",function(){
    var inputs = $("#member").val();
    var dataString = "data="+inputs;
    $.ajax({
        url:"membersearch.php",
        type:"GET",
        data:dataString,
        success:function(data)
        {
          $("#search_result").html(data);
        } 
    });  
   

});

 //function para sa pagloload ng data
  function loadData()
  {  
    $("#result_employer").load("emptysearch_employer.php");

  }

  function loadData1()
  {
    $("#result_member").load("emptysearch_member.php");
  }

  function loadData2()
  {
    $("#result_household").load("emptysearch_house.php");
  }
  
  function loadCountNotification()
  {
  //count notification
  $("#notification_count").load("NotificationCount.php");
  }
  function directhouseLoad()
  {

   $("#dir_record").load("directhousingloanrequest1.php");

  }
  function directhouseRecord()
  {
    $("#dir_records").load();
  }
  function educRecord()
  {
    $("#educ_record").load("educationalassistance.php");
  }
  function marternityLoad()
  {
    $("#mat_record").load("maternitybenifitrequest1.php");
  }
  function sicknessLoad()
  {
    $("#sick_record").load("sicknessbenifitrequest1.php");
  } 
  function deathLoad()
  {
    $("#deaths_record").load("deathbenifit1.php");
  } 
  function funeralLoad()
  {
    $("#funerals_record").load("funeralbenifit1.php");
  }
  function disabilityLoad()
  {
    $("#diss_record").load("disabilitybenifit1.php");
  }
  function retirementLoad()
  {
    $("#rets_record").load("retirementbenifit1.php");
  }
  function directhousingRecordLoad()
  {
    $("#dir_recs").load("directrecord.php");
  }
  function educationalRecord()
  {
    $("#ed_recs").load("educationalrecord.php");
  }
  function maternityRecord()
  {
    $("#mat_recs").load("maternityrecord.php");
  }
  function sickenessRecord()
  {
    $("#sick_recs").load("sicknessrecord.php");
  }
  function deathRecord()
  {
    $("#death_recs").load("deathrecord.php");
  }
  function funeralRecord()
  {
    $("#funeral_recs").load("funeralrecord.php");
  }
  function disabilityRecord()
  {
    $("#disa_recs").load("disabilityrecord.php");
  }
  function retirementRecord()
  {
    $("#reti_recs").load("retirementrecord.php");
  }
  function dirCount()
  {
    $("#dir_count").load("directcount.php");
  }
  function educCount()
  {
    $("#educ_count").load("educcount.php");
  }
  function maternityCount()
  {
    $("#mat_count").load("maternitycount.php");
  }
  function sickenessCount()
  {
    $("#sick_count").load("sicknesscount.php");
  }
  function deathCount()
  {
    $("#death_count").load("deathcount.php");
  }
  function funeralCount()
  {
    $("#funeral_count").load("funeralcount.php");
  }
  function disabilityCount()
  {
    $("#disa_count").load("disabilitycount.php");
  }
  function retirementCount()
  {
    $("#ret_count").load("retirementcount.php");
  }
  function contributionlist()
  {
    $("#contri_recs").load("listofcontribution.php");
  }
    function updateData(str)
          {  
    
             var dat  = $("#dat-"+str).val();
             var add1 = $("#ad1-"+str).val();
             var add2 = $("#ad2-"+str).val();
             var cty  = $("#cty-"+str).val();
             var pos  = $("#pos-"+str).val();
             var lnd  = $("#lnd-"+str).val();
             var mob  = $("#mobno-"+str).val();
             var pref = $("#pref-"+str).val();
             var conem = $("#comem-"+str).val();
             var dataString = "dat="+dat+"&add1="+add1+"&add2="+add2+"&cty="+cty+"&pos="+pos+"&lnd="+lnd+"&mob="+mob+"&pref="+pref+"&conem="+conem; 
                $.ajax({
                      type: "POST",
                      url: "Update_EmployerRegistration.php",
                      data: dataString,
                      success: function(data)
                      {
                          alert(data);
                          loadData(); 
                              
                      }
                 });
           
        }
  
function updateData1(str)
          {  
             var ID     = $("#id-"+str).val();
             var crn    = $("#crn-"+str).val();
             var fname  = $("#fname-"+str).val();
             var mname  = $("#mname-"+str).val();
             var lname  = $("#lname-"+str).val();
             var bd     = $("#bd-"+str).val();
             var em     = $("#em-"+str).val();
             var dataString = "id="+ID+"&crn="+crn+"&fname="+fname+"&mname="+mname+"&lname="+lname+"&bd="+bd+"&em="+em;
                  
                $.ajax({
                      type: "POST",
                      url: "Update_MemberRegistration.php",
                      data: dataString,
                      success: function(data)
                      {
                          alert(data);
                          loadData1();
                              
                      }
                });
          
        }

function updateData2(str)
      {
            var id    = $("#id-"+str).val();
            var dats  = $("#dats-"+str).val();
            var lnd   = $("#lnds-"+str).val();
            var mobno = $("#mob-"+str).val();
            var prefs = $("#prefs-"+str).val();
            var hrem  = $("#hrem-"+str).val();
            var dataString = "id="+id+"&dats="+dats+"&lnd="+lnd+"&mobno="+mobno+"&prefs="+prefs+"&hrem="+hrem;
               $.ajax({
                   type: "POST",
                    url: "Update_HouseholdRegistration.php",
                    data: dataString,
                    success: function(data)
                    {
                      alert(data);
                      loadData2();
                    }
               });
    }
</script>
<!-- time -->
<script type="text/javascript">
   
  function renderTime()
    {
  var date = new Date();
  var h = date.getHours();
  var m = date.getMinutes();
  var s = date.getSeconds();  
  var session; 
    var time = document.getElementById("DisplayTime");
     if(h>12)
     {
         
        session = "PM";
     }  
     else
     {
      session = "AM";
     }
     time.textContent= h + " : " + m + " : " +s + " " +session; 

  setTimeout('renderTime()',1000);
 }
 renderTime();
 
</script>

</html> 