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
#mem,#hou,#bus{
  text-align:center;
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
  #sm-nav
  {
    display:none;
  }
  #mem,#hou,#bus{
  text-align:center;
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
#hou,#mem,#bus
{
  border:1px solid #337ab7;
}
#hou:hover
{
  color:#337ab7;
  background-color:white;
  border:1px solid #337ab7;
  -webkit-transition:0.5s ease-out;
  -o-transition: 0.5s ease-out;
  -moz-transition: 0.5s ease-out;
}
#mem:hover
{
  color:#337ab7;
  background-color:white;
  border:1px solid #337ab7;
  -webkit-transition:0.5s ease-out;
  -o-transition: 0.5s ease-out;
  -moz-transition: 0.5s ease-out;
}
#bus:hover
{
  color:#337ab7;
  background-color:white;
  border:1px solid #337ab7;
  -webkit-transition:0.5s ease-out;
  -o-transition: 0.5s ease-out;
  -moz-transition: 0.5s ease-out;
}
#mem,#bus,#hou
{
  cursor:pointer;
}
@keyframes modalAnimation{
   0% {
      transform:translate(1000px,0px);
      }
  30% {
      transform:rotate(20deg);
     }
  50% {
      transform:rotate(-45deg);
     }
  90% {
      transform:rotate(45deg);
     }
}
#salaryloan,#busdev,#busfix,#orgmem,#dirhou,#assumpt
{
  -webkit-animation:modalAnimation 2s;
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
            <li class="active"><a href="sss_loan.php"><span>&#8369;</span> Loans</a>
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
                </li>                 <li class="dropdown" id="MySSS-dropdown">
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
<div class="row">
           <div class="col-md-12 col-sm-12 col-lg-12 col-xm-12">
             <ul class="nav nav-justified">
              <li id="mem" class="bg bg-primary"><span class="glyphicon glyphicon-user" style="font-size:20px"></span> <b>Member Loans</b></li>
              <li id="bus" class="bg bg-primary"><span class="glyphicon glyphicon-briefcase" style="font-size:20px"></span> <b>Business Loans</b></li>
              <li id="hou" class="bg bg-primary"><span class="glyphicon glyphicon-home" style="font-size:20px"></span> <b>Housing Loans</b></li>
            </ul>
          </div>
</div>
<div class="row">
    <div class="col-md-12">
        <img src="image/loans_header.gif" class="center-block img-responsive"/>
     </div>
</div>
<!-- member loan -->
  <div class="container" id="member-panel" >
       <div class="row">
          <div class="col-md-12">
          <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#salaryloan">Salary Loan</button>
       </div>
                  <div class="modal fade" id="salaryloan">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header bg-primary">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title"><b><span class="glyphicon glyphicon-user"></span> Salary Loan</b></h4>
                        </div>
                       <div class="container"> 
                           <div class="btn-group">
                              <button type="button" id="salary-overview" class="btn-primary btn-lg">OVERVIEW</button>
                              <button type="button" id="salary-eligibility" class="btn-primary btn-lg">ELIGIBILITY REQUIREMENTS</button>
                              <button type="button" id="salary-apply" class="btn-primary btn-lg">HOW TO APPLY</button>
                              <button type="button" id="salary-details" class="btn-primary btn-lg">LOAN DETAILS</button>
                           </div>
                       </div>    
                        <div class="modal-body">

                           <div id="salary-container">
                              <h2>OVERVIEW</h2><br>The Direct Housing Loan Facility for Overseas Filipino Workers (OFW) is designed to support the Government's shelter program, which aims to provide socialized and low-cost housing to overseas Filipino contract workers.An OFW is a private sector worker who is:Currently deployed with a contract processed through the POEA or authenticated by the Embassy abroadWith employment contracts which are awaiting renewal/deployment; however, release of loan shall be made upon renewal/employmentA Filipino national but who is now a citizen or immigrant of a foreign countries but is interested in buying a housing unit for his family who is still in the countryA long-term resident overseas Filipinos who wish to avail of housing packages either for themselves when they retire or when they visit the Philippines and/or for their extended families
                           </div>

                        </div>
                      </div>

                    </div>
                  </div>
        </div>
     </div>
  </div>
<!-- business loan -->
  <div class="container" id="business-panel">
      <div class="row">
         <div class="col-md-6">
              <button type="button" class="btn-primary btn-block" data-toggle="modal" data-target="#busdev">Business Development Loan Facility</button>
          </div>
          <div class="col-md-6">
            <button type="button" class="btn-primary btn-block" data-toggle="modal" data-target="#busfix">Fixed-Term Credit Facility</button>
          </div>
          
      </div>
          <div class="modal fade" id="busdev">
              <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                        <div class="modal-header bg-primary">
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                             <h4 class="modal-title"><b><span class="glyphicon glyphicon-briefcase"></span> Business Development Loan Facility</b></h4>

                        </div>
                        <div class="container">
                          <div class="btn-group">
                                <button type="button" id="busdev-overview" class="btn-primary btn-lg">OVERVIEW</button>
                                <button type="button" id="busdev-eligibility" class="btn-primary btn-lg">ELIGIBILITY REQUIREMENTS</button>
                               <button type="button" id="busdev-apply" class="btn-primary btn-lg">HOW TO APPLY</button>
                                <button type="button" id="busdev-details" class="btn-primary btn-lg">LOAN DETAILS</button>
                           </div>
                         </div>  
                        <div class="modal-body">
                            <div id="busdev-container"><h2>OVERVIEW</h2>The Business Development Loan Facility is a lending facility of the Social Security System (SSS) designed to contribute to the nation's economic growth and development by providing financial assistance to the business sector for the purpose of increasing productivity and enhancing potential earnings through expansion, diversification and other business development projects.<br><br>It also aims to support the government's program of invigorating economic activity and providing more employment opportunities.</div>
                        </div>
                  </div>
              </div>
          </div>
        <div class="modal fade" id="busfix">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                 <div class="modal-header bg-primary">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                             <h4 class="modal-title"><b><span class="glyphicon glyphicon-briefcase"></span>  Fixed-Term Credit Facility</b></h4>
                 </div>
                  <div class="container">
                     <div class="btn-group">
                              <button type="button" id="busfix-overview" class="btn-primary btn-lg">OVERVIEW</button>
                              <button type="button" id="busfix-eligibility" class="btn-primary btn-lg">ELIGIBILITY REQUIREMENTS</button>
                              <button type="button" id="busfix-apply" class="btn-primary btn-lg">HOW TO APPLY</button>
                              <button type="button" id="busfix-details" class="btn-primary btn-lg">LOAN DETAILS</button>
                           </div>
                  </div>
                 <div class="modal-body">
                        <div id="busfix-container"><h2>OVERVIEW</h2><br>The Fixed-Term Credit Facility is a lending facility of the Social Security System (SSS) designed to provide sustainable fixed-term credit facility to SSS accredited participating financial institutions (PFIs) for re-lending to eligible private enterprises in order to improve and hasten their operations for a more globally competitive market.<br>It also aims to enhance the facilitation and flow of credit for business sector to support the organization and expansion as well as rehabilitation of business operation.</div>
                 </div>
              </div>
            </div>
        </div>

      </div>
  </div>
<!-- housing loan -->
  <div class="container" id="house-panel">
       <div class="row">
          <div class="col-md-4">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#orgmem">Direct Housing Loan Facility for Workers' Organization Members
            </button>
           </div>
          <div class="col-md-4">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#dirhou">Direct Housing Loan Facility for OFWs
            </button>            
          </div>
          <div class="col-md-4">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#assumpt">Assumption of Mortgage
            </button>            
          </div>
      </div>

        <div class="modal fade" id="orgmem">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                 <div class="modal-header bg-primary">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                             <h4 class="modal-title"><b><span class="glyphicon glyphicon-home"></span> Direct Housing Loan Facility for Workers' Organization Members</b></h4>
                 </div>
                  <div class="container">
                     <div class="btn-group">
                              <button type="button" id="orgmem-overview" class="btn-primary btn-lg">OVERVIEW</button>
                              <button type="button" id="orgmem-eligibility" class="btn-primary btn-lg">ELIGIBILITY REQUIREMENTS</button>
                              <button type="button" id="orgmem-apply" class="btn-primary btn-lg">HOW TO APPLY</button>
                              <button type="button" id="orgmem-details" class="btn-primary btn-lg">LOAN DETAILS</button>
                           </div>
                  </div>
                 <div class="modal-body">
                        <div id="orgmem-container"><h2>OVERVIEW</h2>The Direct Housing Loan Facility for Workers' Organization Members (WOMs) aims to provide socialized and low-cost housing to workers who are bonafide members of duly registered and accredited workers' organizations.<br><br>WOMs refer to any association of workers in the private sector duly registered with the DOLE, the Securities and Exchange Commission, or the Cooperative Development Authority. It shall include any trade union center, federation, national union, local/chapter or independent union as defined in Book V of the Labor Code.</div>
                 </div>
              </div>
            </div>
        </div>
        
       <div class="modal fade" id="dirhou">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                 <div class="modal-header bg-primary">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                             <h4 class="modal-title"><b><span class="glyphicon glyphicon-home"></span> Direct Housing Loan Facility for OFWs</b></h4>
                 </div>
                  <div class="container">
                     <div class="btn-group">
                              <button type="button" id="dirhou-overview" class="btn-primary btn-lg">OVERVIEW</button>
                              <button type="button" id="dirhou-eligibility" class="btn-primary btn-lg">ELIGIBILITY REQUIREMENTS</button>
                              <button type="button" id="dirhou-apply" class="btn-primary btn-lg">HOW TO APPLY</button>
                              <button type="button" id="dirhou-details" class="btn-primary btn-lg">LOAN DETAILS</button>
                           </div>
                  </div>
                 <div class="modal-body">
                        <div id="dirhou-container"><h2>OVERVIEW</h2>The Direct Housing Loan Facility for Overseas Filipino Workers (OFW) is designed to support the Government's shelter program, which aims to provide socialized and low-cost housing to overseas Filipino contract workers.<br><br>An OFW is a private sector worker who is:<br>Currently deployed with a contract processed through the POEA or authenticated by the Embassy abroadWith employment contracts which are awaiting renewal/deployment; however, release of loan shall be made upon renewal/employment<br>A Filipino national but who is now a citizen or immigrant of a foreign countries but is interested in buying a housing unit for his family who is still in the country A long-term resident overseas Filipinos who wish to avail of housing packages either for themselves when they retire or when they visit the Philippines and/or for their extended families</div>
                 </div>
              </div>
            </div>
        </div>
     
      <div class="modal fade" id="assumpt">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                 <div class="modal-header bg-primary">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                             <h4 class="modal-title"><b><span class="glyphicon glyphicon-home"></span> Assumptiion Mortage</b></h4>
                 </div>
                  <div class="container">
                     <div class="btn-group">
                              <button type="button" id="assumpt-overview" class="btn-primary btn-lg">OVERVIEW</button>
                              <button type="button" id="assumpt-eligibility" class="btn-primary btn-lg">ELIGIBILITY REQUIREMENTS</button>
                              <button type="button" id="assumpt-apply" class="btn-primary btn-lg">HOW TO APPLY</button>
                              <button type="button" id="assumpt-details" class="btn-primary btn-lg">LOAN DETAILS</button>
                           </div>
                  </div>
                 <div class="modal-body">
                        <div id="assumpt-container"><h2>OVERVIEW</h2>The Social Development Loan Facility is a lending facility of the Social Security System (SSS) designed to provide long-term loan assistance for the development of facilities and establishments of institutions that provides quality education or other academic training programs and affordable medical or health care related services to the general population and to SSS members and their dependents.<br><br>It also aims to support the program of the national government to attain a better distribution of educational and hospital facilities throughout the country that will be more responsive to the needs of the particular localities and their inhabitants.</div>
                 </div>
              </div>
            </div>
        </div> 


  </div>

 <script>
//    $('#loginModal').modal({
//     backdrop: 'static',
//     keyboard: false

// });


  $(document).ready(function(){
    $("#collapse-menu").hide();
    $("#salaryloan").hide();
    $("#bus-panel").hide();
       $("#business-panel").hide();
       $("#salaryloan-panel").hide();
         $("#house-panel").hide();

    $("#mem").click(function(){
         $("#business-panel").slideUp();
         $("#member-panel").slideDown();
         $("#house-panel").slideUp();
        
    });
    $("#bus").click(function(){
          $("#member-panel").slideUp();
          $("#business-panel").slideDown();
          $("#house-panel").slideUp();
        
    });
    $("#hou").click(function(){
          $("#business-panel").slideUp();
          $("#house-panel").slideDown();
          $("#member-panel").slideUp();
    });  
    $("#salary-overview").click(function(){
         $("#salary-container").html("<h2>OVERVIEW</h2><br>The Direct Housing Loan Facility for Overseas Filipino Workers (OFW) is designed to support the Government's shelter program, which aims to provide socialized and low-cost housing to overseas Filipino contract workers.An OFW is a private sector worker who is:Currently deployed with a contract processed through the POEA or authenticated by the Embassy abroadWith employment contracts which are awaiting renewal/deployment; however, release of loan shall be made upon renewal/employmentA Filipino national but who is now a citizen or immigrant of a foreign countries but is interested in buying a housing unit for his family who is still in the countryA long-term resident overseas Filipinos who wish to avail of housing packages either for themselves when they retire or when they visit the Philippines and/or for their extended families");
    });
    $("#salary-eligibility").click(function(){
         $("#salary-container").html("<h2>ELIGIBILITY REQUIREMENTS</h2><p><b>a.</b> Eligible Borrowers</p><p>OFW member is qualified to borrow if he meets the following eligibility requirements:</p><br><b>1.</b> Member is a certified Overseas Filipino Worker;<br><b>2.</b> Member is a voluntary OFW member of SSS;<br><b>3.</b> Member has at least 36 months contribution and 24 continuous contributions in the period prior to application<br><b>4.</b> Member is not more than 60 years old at the time of application and must be insurable. Members age 60 years at time of application will have a maximum loan term of 5 years<br><b>5.</b> Member was not previously granted an SSS housing loan<br><b>6.</b> Member has not been granted final SSS benefits<br><b>7.</b> Borrower and spouse is updated in the payment of their other SSS loan(s), if anyThe spouses of an existing borrower may still qualify for an SSS housing loan if the loan of the existing borrower was obtained prior to the date of marriage   and the loan is not delinquent.<br><br><b>b. Loan PurposesThe allowable purposes for a loan are as follows:</b><br><br><b>1.</b> Construction of a new house or dwelling unit on a lot owned by the applicant free from lien/encumbrances;<br><b>2.</b> Purchase of a lot and construction thereon of a new house or dwelling unit; and<br><b>3.</b> Purchase of an existing residential unit which may be a house and lot, a condominium unit or a townhouse.");
    });
    $("#salary-apply").click(function(){
       $("#salary-container").html("<h2>HOW TO APPLY</h2>The member may file the application at the nearest SSS cluster branch or at the Housing and Business Loans Department, 5/F, SSS Bldg., East Avenue, Diliman, Quezon City.<br><br>The following documents should be submitted upon filing of application:<br><br><b>a. Original copy of the following:</b><br><br><b>1.</b> Mortgagor's Application for Housing Loan with 1” x 1” ID pictures of Principal Applicant and Spouse<br><b>2.</b> Certificate of Loan Eligibility (CLE) – (P100 Service Fee)<br><b>3.</b> Certification from POEA/DOLE/OWWA/ SSS Foreign Representative Office or Philippine Embassy/Consular Office<br><b>4.</b> Deed of Sale or Contract to Sell with statement of latest balance for purchase of lot or house and lot<br><b>5.</b> Appraisal Report from Home Guaranty Corporation accredited appraisal companies<br><b>6.</b> Certificate of Acceptance and Occupancy duly signed by the borrower if house is 100% complete at the time of loan filing<br><b>7.</b> Duly notarized Special Power of Attorney (if filing is through a representative)");
    });
    $("#salary-details").click(function(){
        $("#salary-container").html("<h2>LOAN DETAILS</h2><b>a. Loanable Amount</b><br>The maximum loanable amount is P2,000,000.00. The loan amount granted shall be the lowest amount based on the following factors:<br><b>1.</b> Appraised value of collateral of at least 70% but not to exceed 90%<br><b>2.</b> Borrower's capacity to pay<br><b>3.</b> Actual need of the borrower based on the contract to sell/scope of work and bill of materials evaluated by the SSS");
    });

    $("#busdev-overview").click(function(){
        $("#busdev-container").html("<h2>OVERVIEW</h2>The Business Development Loan Facility is a lending facility of the Social Security System (SSS) designed to contribute to the nation's economic growth and development by providing financial assistance to the business sector for the purpose of increasing productivity and enhancing potential earnings through expansion, diversification and other business development projects.<br><br>It also aims to support the government's program of invigorating economic activity and providing more employment opportunities.");
    });

    $("#busdev-eligibility").click(function(){
        $("#busdev-container").html("<h2>ELIGIBILITY REQUIREMENTS</h2><br>The eligible borrowers shall be new or existing private industries and enterprises including registered Barangay Micro Business Enterprises (BMBEs) with the following qualifications:<br><b>1.</b> Single proprietorship, Partnership or Corporation, as least 60% Filipino owned, including cooperatives and non-governmental organizations;<br><b>2.</b> Engaged in any business activities allowed/registered under the Philippine laws such as but not limited to the following:<br><b>a.</b> Agri-Business - contract growing, aquaculture<br><b>b.</b> Food Processing - rice mill, oil  mill, feed mill, meat processing, etc.;<br><b>c.</b> Manufacturing - garment, ceramics, textile, furniture, construction materials<br><b>d.</b> Commercial Production - particularly of food and basic consumer items and products for export<br><b>e.</b> Service-Oriented Enterprises - transportation, warehousing, utilities, communications, etc.<br><b>f.</b> Tourism Related Projects - hotel, resort, theme park, etc.<br><b>g.</b> Real Estate Development Projects - industrial estate development<br><b>h.</b> Sustainable Energy Projects - construction of green building, waste management system, sewerage treatment plant, etc.<br><b>i.</b> Extractive Industries - mining, quarrying, dredging, oil and gas extraction projects<br><b>j.</b> Forest Development Projects - plantation, reforestation, regeneration and other forest related projects<br><B>k.</b> Trading Business<br><b>l.</b> Leasing/Lending Business ");
    });

    $("#busdev-apply").click(function(){
         $("#busdev-container").html("<h2>HOW TO APPLY</h2><br>SSS member-employers may avail of the loan facility through the SSS accredited participating financial institutions (PFIs) which will on-lend the fund to eligible borrowers for financing.<br><br>The loan application shall be filed with any of the following SSS' accredited participating financial institutions (PFIs):<br><b>1.</b> BDO Unibank, Inc.<br>6/F Equitable PCI Bank Tower 1, Makati City<br>Contact Person: <br>Ms. Vivian D. de Chavez - Senior Manager      <br>Tel. Nos. 878-4567; 878-4570 (fax)<br><br><b>2.</b> Development Bank of the Philippines<br>Sen Gil Puyat Ave., Makati City<br>Contact Persons: <br>Mr. Jose Pepito A. Yusingbo - Manager and Officer-in-Charge,SME Unit<br>Ms. Leonore L. Tianco<br>Tel. Nos. 812-9932; 818-9511 loc. 2305");
       });

     $("#busdev-details").click(function(){
        $("#busdev-container").html("<h2>LOAN DETAILS</h2><br>The maximum loanable amount shall be the lowest of the following, provided the borrower's debt-equity ratio after financing shall not exceed 3:1 and that its total loan with the SSS shall not be more than five percent (5%) of the SSS Investment Reserve fund (IRF):<br><br>Amount of loan being applied;<br>Actual need of the borrower (total project cost)<br>Loan value of the assigned collateral or securities; or<br>Maximum of P500.0 million per borrower.<br><h3>INTEREST RATE</h3>The interest rate of the loan may be variable or fixed based on the prevailing SSS pass-on rate to PFI plus PFI's spread.  The prevailing interest rates shall be reviewed monthly.");
     });
    $("#busfix-overview").click(function(){
        $("#busfix-container").html("<h2>OVERVIEW</h2><br>The Fixed-Term Credit Facility is a lending facility of the Social Security System (SSS) designed to provide sustainable fixed-term credit facility to SSS accredited participating financial institutions (PFIs) for re-lending to eligible private enterprises in order to improve and hasten their operations for a more globally competitive market.<br>It also aims to enhance the facilitation and flow of credit for business sector to support the organization and expansion as well as rehabilitation of business operation.");
    });

    $("#busfix-eligibility").click(function(){
        $("#busfix-container").html("<h2>ELIGIBILITY REQUIRMENTS</h2><br><b>A. Eligible Borrowers</b><br><br>The eligible borrowers/end-user must be an SSS member-employer in good standing.<br>The borrower is also subject to other criteria and policies which the Social Security Commission may impose from time to time.<br><br><b>B.</b> Loan PurposesThe loan may be used for any purposes provided approved by the PFI.");
    }); 
     
    $("#busfix-apply").click(function(){
        $("#busfix-container").html("<h2>HOW TO APPLY</h2><br>The PFI shall submit a letter of intent to avail of the loan together with the Term Sheet.");
    }); 

    $("#busfix-details").click(function(){
        $("#busfix-container").html("<h2>LOAN DETAILS</h2><br><b>LOANABLE AMOUNT</b><br>The loanable amount is the sub-limit of omnibus credit line (OCL) but should not exceed 80% of approved OCL of PFIs (net of availments).<br><br><b>INTEREST RATE</b><br>The interest rate of the loan shall be the prevailing fixed rate.<br><br><b>TERM OF THE LOAN</b><br>The loan shall be payable quarterly, semi-annually or annually and shall have a minimum term of five (5) years up to fifteen (15) years inclusive of a maximum five (5) years grace period on principal payment.<br><br>Loan with a term of more than fifteen (15) years up to twenty-five (25) may be allowed for special projects."); 
    });

    $("#orgmem-overview").click(function(){
        $("#orgmem-container").html("<h2>OVERVIEW</h2>The Direct Housing Loan Facility for Workers' Organization Members (WOMs) aims to provide socialized and low-cost housing to workers who are bonafide members of duly registered and accredited workers' organizations.<br><br>WOMs refer to any association of workers in the private sector duly registered with the DOLE, the Securities and Exchange Commission, or the Cooperative Development Authority. It shall include any trade union center, federation, national union, local/chapter or independent union as defined in Book V of the Labor Code.");
    });

    $("#orgmem-eligibility").click(function(){
       $("#orgmem-container").html("<h2>ELIGIBILITY REQUIREMENT</h2><b>a. Eligible Borrowers</b><br>An applicant is qualified to apply for an SSS housing loan if he meets the following eligibility requirements:<br><b>1.</b> Member is a bonafide member of a registered workers' organization in the private sector;<br><b>2.</b> Member must be a member of the SSS;<br><b>3.</b> Member has at least 36 months premium contribution and 24 continuous contributions in a period prior to application<br><b>4.</b> Member not more than 60 years old at the time of application and must be insurable. Members age 60 years at time of application will have a maximum loan term of 5 years<br><b>5.</b> Member was not previously granted an SSS housing loan<br><b>6.</b> Member has not been granted final SSS benefits<br><b>7.</b> Member and spouse is updated in the payment of their other SSS loan(s), if anyThe spouse of an existing borrower may still qualify for an SSS housing loan if the loan of the existing borrower was obtained prior to the date of marriage  and the loan is not delinquent.");
    });

    $("#orgmem-apply").click(function(){
       $("#orgmem-container").html("<h2>HOW TO APPLY</h2>The member may file the application at the nearest SSS cluster branch or at the Housing and Business Loans Department, 5/F, SSS Bldg., East Avenue, Diliman, Quezon City.<br><br>The following documents should be submitted upon filing of application:<br><br><b>a. Original copy of the following:</b><br><br><b>1.</b> Mortgagor's Application for Housing Loan with 1” x 1” ID pictures of Principal Applicant and Spouse<br><b>2.</b> Certificate of Loan Eligibility – (P100 Service Fee)<br><b>3.</b> Certification of Membership from the workers' organization<br><b>4.</b> Employer's Certification<br><b>5.</b> Latest two (2) months pay slip duly certified by the employer.<br><b>6.</b> Deed of Sale or Contract to Sell with Statement of latest balance (for purchase of lot or house and lot).<br><b>7.</b> Confirmation of Completion and Appraisal from Home Guaranty Corporation accredited appraisal companies<br><b>8.</b> Certificate of Acceptance and Occupancy duly signed by the borrower if house is 100% complete at the time of the loan filing");
    });

    $("#orgmem-details").click(function(){
      $("#orgmem-container").html("<h2>LOAN DETAILS</h2><b>a. Loanable Amount</b><br><br>The maximum loanable amount is P2,000,000.00. The loan amount granted is the lowest amount based on the following factors:<br><b>1.</b> Appraised value of collateral of at least 70% but not to exceed 90%.<br><b>2.</b> Borrower's capacity to pay<br><b>3.</b> Actual need of the borrower based on the contract to sell/scope of work and bill of materials evaluated by the SSS<br><br><b>b.</b> Term of the LoanThe loan is payable in multiples of five (5) years up to a maximum of thirty (30) years.<br>However, the loan term shall be subject to the following:<br><br><b>1.</b> The principal borrower's age shall not exceed 65 years old at the time of loan maturity; and<br><b>2.</b> The loan term shall not exceed the economic life of the building as determined by the SSS appraiser.");   
    });
     
    $("#dirhou-overview").click(function(){
       $("#dirhou-container").html("<h2>OVERVIEW</h2>The Direct Housing Loan Facility for Overseas Filipino Workers (OFW) is designed to support the Government's shelter program, which aims to provide socialized and low-cost housing to overseas Filipino contract workers.<br><br>An OFW is a private sector worker who is:<br>Currently deployed with a contract processed through the POEA or authenticated by the Embassy abroadWith employment contracts which are awaiting renewal/deployment; however, release of loan shall be made upon renewal/employment<br>A Filipino national but who is now a citizen or immigrant of a foreign countries but is interested in buying a housing unit for his family who is still in the country A long-term resident overseas Filipinos who wish to avail of housing packages either for themselves when they retire or when they visit the Philippines and/or for their extended families");
    });
    
    $("#dirhou-eligibility").click(function(){
       $("#dirhou-container").html("<h2>ELIGIBILITY REQUIREMENTS</h2><b>a.</b> Eligible BorrowersOFW member is qualified to borrow if he meets the following eligibility requirements:<br><b>1.</b> Member is a certified Overseas Filipino Worker;<br><b>2.</b> Member is a voluntary OFW member of SSS;<br><b>3.</b> Member has at least 36 months contribution and 24 continuous contributions in the period prior to application<br><b>4.</b> Member is not more than 60 years old at the time of application and must be insurable. Members age 60 years at time of application will have a maximum loan term of 5 years<br><b>5.</b> Member was not previously granted an SSS housing loan<br><b>6.</b> Member has not been granted final SSS benefits<br><b>7.</b> Borrower and spouse is updated in the payment of their other SSS loan(s), if anyThe spouses of an existing borrower may still qualify for an SSS housing loan if the loan of the existing borrower was obtained prior to the date of marriage   and the loan is not delinquent.<br><br><b>b.</b> Loan Purposes<br>The allowable purposes for a loan are as follows:<br><b>1.</b> Construction of a new house or dwelling unit on a lot owned by the applicant free from lien/encumbrances;<br><b>2.</b> Purchase of a lot and construction thereon of a new house or dwelling unit; and<br><b>3.</b> Purchase of an existing residential unit which may be a house and lot, a condominium unit or a townhouse.");
    });

    $("#dirhou-apply").click(function(){
       $("#dirhou-container").html("<h2>HOW TO APPLY</h2>The member may file the application at the nearest SSS cluster branch or at the Housing and Business Loans Department, 5/F, SSS Bldg., East Avenue, Diliman, Quezon City.<br>The following documents should be submitted upon filing of application:<br><b>a.</b> Original copy of the following:<br><b>1.</b> Mortgagor's Application for Housing Loan with 1” x 1” ID pictures of Principal Applicant and Spouse<br><b>2.</b> Certificate of Loan Eligibility (CLE) – (P100 Service Fee)<br><b>3.</b> Certification from POEA/DOLE/OWWA/ SSS Foreign Representative Office or Philippine Embassy/Consular Office<br><b>4.</b> Deed of Sale or Contract to Sell with statement of latest balance for purchase of lot or house and lot<br><b>5.</b> Appraisal Report from Home Guaranty Corporation accredited appraisal companies<br><b>6.</b> Certificate of Acceptance and Occupancy duly signed by the borrower if house is 100% complete at the time of loan filing<br><b>7.</b> Duly notarized Special Power of Attorney (if filing is through a representative)");
    });  
      
    $("#dirhou-details").click(function(){
      $("#dirhou-container").html("<h2>LOAN DETAILS</h2><b>a.</b> Loanable Amount<br>The maximum loanable amount is P2,000,000.00. The loan amount granted shall be the lowest amount based on the following factors:<br><br><b>1.</b>  Appraised value of collateral of at least 70% but not to exceed 90%.<br><b>2.</b> Borrower's capacity to pay<br><b>3.</b> Actual need of the borrower based on the contract to sell/scope of work and bill of materials evaluated by the SSS.<table class='table table-bordered'><tr class='bg-primary'><td>Housing Loan</td><td>Type Amount of Loan</td></tr><tr><td>Socialized Housing Loan</td><td>Up to P450,000.00</td></tr><tr><td>Low-cost Housing Loan</td><td>Over P450,000 up to P1,000,000<br>Over P1,000,000 up to 1,500,000<br>Over P1,500,000 up to P2,000,000</td></tr></table><br><b>c.</b> Interest Rate <br><b>1.</b> Up to P450,000.00 - 8% p.a.<br><b>2.</b> Over P450,000.00 up to P1,000,000.00 - 9% p.a.<br><b>3.</b> Over P1,000,000.00 up to P1,500,000.00 - 10% p.a.<br><b>4.</b> Over P1,500,000.00 up to P2,000,000.00 - 11% p.a. "); 
    });
     
    $("#assumpt-overview").click(function(){
       $("#assumpt-container").html("<h2>OVERVIEW</h2>The Social Development Loan Facility is a lending facility of the Social Security System (SSS) designed to provide long-term loan assistance for the development of facilities and establishments of institutions that provides quality education or other academic training programs and affordable medical or health care related services to the general population and to SSS members and their dependents.<br><br>It also aims to support the program of the national government to attain a better distribution of educational and hospital facilities throughout the country that will be more responsive to the needs of the particular localities and their inhabitants."); 
    }); 

    $("#assumpt-eligibility").click(function(){
       $("#assumpt-container").html("<h2>ELIGIBILITY REQUIREMENTS</h2><b>A.</b> Eligible Borrowers<br><b>1.</b> New or existing private medical institutions licensed by the Department of Health (DOH) either as primary, secondary and tertiary hospital including institutions for the aged or infirmed individuals.<br><b>2.</b> New or existing private educational institutions, i.e. toddler/day care learning center, preparatory/elementary/secondary schools, collegiate/university level, school for special educations (SPED) as well as vocational and technical institutes which are duly licensed by the Department of Education (DepEd), Technical Education and Skills Development Authority (TESDA), Commission on Higher Education (CHED) and Department of Social Welfare and Development (DSWD).<br><b>3.</b> At least 60% Filipino-owned corporation/partnership/single entity.<br><b>4.</b> Have proven track record of profitability for existing enterprises; provided that if the company incurred losses in any year during the past three (3) years, the average income of past two (2) or three (3) years should be positive.  The three (3) year track record of profitability may be waived for enterprises which started operations during the last five (5) years.  In any case, the borrower should be able to justify projection of viable operations with debt-equity ratio not exceeding 3:1 after financing; and<br><b>5.</b> Must be an SSS member-employer in good standing.<br><b>6.</b> The borrower is also subject to other criteria and policies which the Social Security Commission may impose from time to time.");
    });
     
    $("#assumpt-apply").click(function(){
      $("#assumpt-container").html("<h2>HOW TO APPLY</h2>SSS member-employers may avail of the loan facility through the SSS accredited participating financial institutions (PFIs) which will on-lend the fund to eligible borrowers for financing.<br><br>The loan application shall be filed with any of the following SSS' accredited participating financial institutions (PFIs):<br><br>1.BDO Unibank, Inc.<br>6/F Equitable PCI Bank Tower 1, Makati City<br>Contact Person: <br>Ms. Vivian D. de Chavez - Senior Manager<br>Tel. Nos. 878-4567; 878-4570 (fax)<br><br>2.Development Bank of the Philippines<br>Sen Gil Puyat Ave., Makati City<br>Contact Persons: <br>Mr. Jose Pepito A. Yusingbo - Manager and Officer-in-Charge,SME Unit<br>Ms. Leonore L. Tianco<br>Tel. Nos. 812-9932; 818-9511 loc. 2305"); 
    });
     
    $("#assumpt-details").click(function(){
     $("#assumpt-container").html("<h2>LOAN DETAILS</h2><b>LOANABLE AMOUNT</b><br>The maximum loanable amount shall be the lowest of the following, provided the borrower's debt-equity ratio after financing shall not exceed 3:1 and that its total loan with the SSS shall not be more than five percent (5%) of the SSS Investment Reserve fund (IRF):<br><br>Amount of loan being applied;Actual need of the borrower (total project cost)Loan value of the assigned collateral or securities; or Maximum of P500.00 million per borrower.<br><br><b>INTEREST RATE</b><br>The interest rate of the loan may be variable or fixed based on the prevailing SSS pass-on rate to PFI plus PFI's spread.  The prevailing interest rates shall be reviewed monthly.");  
    });

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
                 //clear input data
                 $("#close").click(function(){
                         $("#username").val("");
                         $("#password").val("");
                         $("#response").html("");
                         $("#usertype").val("Admin");
                 });
               //    $("[data-toggle='modal']").tooltip({
               //          placement: "left",
               //          title: "<span class='glyphicon glyphicon-user'></span> login",
               //          animation:true,
               //          html:true,
               // });
  });
  </script>

</body>
</html>
