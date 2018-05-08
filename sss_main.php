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
    background-color:yellow;
  
}
/*animation*/
@-webkit-keyframes image{
     0%{transform:scale(0,2);} 
}
img
{
  -webkit-animation:image 2s;
}
/*media query para maging responsive yung layout ng page*/
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
}
ul[id="collapse-menu"] > li :hover
  {
   background-color:#015784; 
  }  
ul[id="collapse-menu"] > li
{
  background-color:#016194;
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
         		<li class="active"><a href="sss_main.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
         		<li><a href="sss_loan.php" ><span>&#8369;</span> Loans</a>
         			</li>
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
		    	       <li class="dropdown" id="MySSS-dropdown">       
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
                <div class="modal-header" style="background-color:#016194">
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
  <br>	
  <div class="row">
   	<div class="col-md-12">
      	<img src="image/banner.jpg " class="center-block img-responsive"/>  
  	 </div>                               
  </div>       
</div>
<div class="container">
    <div class="row">
	    <div class="col-md-2 col-sm-3"><br><img src="image/Doing_Business.png" class="center-block img-responsive"/></div> 
      <div class="col-md-2 col-sm-3"><br><br><img src="image/pbr_ext.png" class="center-block img-responsive"/></div> 
      <div class="col-md-2 col-sm-3"><br><img src="image/philgeps_ext.png" class="center-block img-responsive"/></div> 
      <div class="col-md-2 col-sm-3"><br><br><img src="image/2016_RulesofProcedure.gif" class="center-block img-responsive"/></div> 
      <div class="col-md-2 col-sm-3"><br><img src="image/whistleblowing_icon.png" class="center-block img-responsive"/></div>
      <div class="col-md-2 col-sm-3"><br><br><img src="image/usapangsss-icon.gif" class="center-block img-responsive"/></div>  
    </div>
    <div class="row">
      <div class="col-md-12">
         <img src="image/footer.png" class="img-responsive">
      </div>
    </div>
</div>		
 <script>

//  	$('#loginModal').modal({
//     backdrop: 'static',
//     keyboard: false  
     
// });
  
  //login without refreshing 
  $(document).ready(function(){
     $("#collapse-menu").hide();
  
     $("#toggle-button").click(function(){
             $("#collapse-menu").slideToggle();
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
            //dropdown hover
                 $("#loan-dropdown").hover(function(){
                       $("#loan-choices").slideToggle();
                 });
                 $("#Benifits-dropdown").hover(function(){
                       $("#Benifits-choices").slideToggle();
                 });
                 $("#MySSS-dropdown").hover(function(){
                       $("#MySSS-choices").slideToggle();
                 });
                  $("#membership-dropdown").hover(function(){
                       $("#membership-choices").slideToggle();
                 });
                 //clear input from modal
                 $("#close").click(function(){
                         $("#username").val("");
                         $("#password").val("");
                         $("#response").html("");
                         $("#usertype").val("Admin");
                 });
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