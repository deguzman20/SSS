

<?php
require('fpdf/fpdf.php');
if(isset($_POST['sub']))
{
  $ssnums =$_POST['ssnum']; 
  $lnames =$_POST['lname']; 
  $fnames =$_POST['fname'];
  $mnames =$_POST['mname']; 
  $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->Image("image/sss.jpg",10,10,30,30);  
    $pdf->SetFont("Arial","B",15);
    $pdf->Cell(205,15,"Social Security System",0,0,"C");
    $pdf->Cell(-204,30,"HOUSE LOAN APPLICATION",0,0,"C");
    $pdf->Cell(204,45,"ACKNOWLEDGEMENT STUB",0,0,"C");
    $pdf->SetFont("Arial","B",11);
    $pdf->Cell(-180,100,"SS NUMBER",0,0,"R");
    $pdf->SetFont("Arial","",11);
    $pdf->Cell(-3,115,"{$ssnums}",0,0,"R");
    $pdf->SetFont("Arial","B",11);
    $pdf->Cell(65,100,"NAME OF MEMBER",0,0,"R");
    $pdf->Cell(23,100,"(Surname)",0,0,"R");
    $pdf->SetFont("Arial","",11);
    $pdf->Cell(-3,110,"{$lnames}",0,0,"R");
    $pdf->SetFont("Arial","B",11);
    $pdf->Cell(40,100,"(First name)",0,0,"R");
    $pdf->SetFont("Arial","",11);
    $pdf->Cell(2,110,"{$fnames}",0,0,"R");
    $pdf->SetFont("Arial","B",11);
    $pdf->Cell(40,100,"(Middle name)",0,0,"R");
    $pdf->SetFont("Arial","",11);
    $pdf->Cell(-12,110,"{$mnames}",0,0,"R");
    $pdf->SetFont("Arial","B",11);
    $pdf->Cell(-145,160,"RECEIVED BY:",0,0,"R");
    $pdf->Cell(34,200,"Signature over printed name",0,0,"R");
    $pdf->Cell(40,200,"Date",0,0,"R");
    $pdf->Cell(69,200,"Receiving Branch",0,0,"R");
    $pdf->output();
}
?>
<form method="post" action="Loan_House.php"><br>
<p style="text-align:center; margin-top:10px; font-family:Arial; font-size:18px">Republic of the Philippines</p>
<p style="text-align:center; margin-top:-10px; font-family:Arial; font-size:20px; font-weight:bold">SOCIAL SECURITY SYSTEM</p>
<p style="text-align:center; margin-top:-12px; font-family:Arial; font-size:25px; font-weight:bold">APPLICATION FOR DIRECT HOUSE<br> REPAIR AND/OR IMPROVEMENT LOAN</p>
<p style="margin-left:70px; margin-top:65px">A. PERSONAL DATA</p><hr style="width:1198px; margin-left:70px">
    
       <p style="margin-left:70px">SS Number<br><input type="text" name="ssnum" style="width:300px"></p>
       <p style="margin-left:370px; margin-top:-55px">Common reference number ( if any )<br><input type="text" name="" style="width:300px"></p>
       <p style="margin-left:670px; margin-top:-55px">Date of birth<br><input type="date" name="" style="width:300px"></p>
       <p style="margin-left:970px; margin-top:-55px">Tax identification number ( if any )<br><input type="text" name="" style="width:300px"></p>
       
       <p style="margin-left:70px; margin-top:-5px">Name ( Last name ) <br><input type="text" name="lname" style="width:300px"></p>
       <p style="margin-left:370px; margin-top:-55px">( First name ) <br><input type="text" name="fname" style="width:300px"></p>
       <p style="margin-left:670px; margin-top:-55px">( Middle name ) <br><input type="text" name="mname" style="width:300px"></p>
       <p style="margin-left:970px; margin-top:-55px">Contact number <br><input type="text" name="" style="width:300px"></p>
       

       <p style="margin-left:70px; margin-top:-5px">Address (House Lot/Blk no. )<br><input type="text" name="" style="width:300px"></p>
       <p style="margin-left:370px; margin-top:-56px">( Street/Name )<br><input type="date" name="" style="width:300px"></p>
       <p style="margin-left:670px; margin-top:-58px">( Barangay/District/Locality )<br><input type="date" name="" style="width:300px"></p>
       <p style="margin-left:970px; margin-top:-58px">( City/Province)<br><input type="date" name="" style="width:300px"></p>

       <p style="margin-left:70px; margin-top:-5px">E-mail Address<br><input type="text" name="" style="width:300px"></p>
       <p style="margin-left:375px; margin-top:-55px">Gender : </p>
        <p style="margin-left:375px; margin-top:-15px"><input type="checkbox" name=""> Female</p>
        <p style="margin-left:500px; margin-top:-35px"><input type="checkbox" name=""> Male</p>
        <p style="margin-left:670px; margin-top:-60px">Civil Status : </p>
       <p style="margin-left:670px; margin-top:-10px"><input type="checkbox" name=""> Single</p>
       <p style="margin-left:780px; margin-top:-35px"><input type="checkbox" name=""> Married</p>
       <p style="margin-left:910px; margin-top:-35px"><input type="checkbox" name=""> Widow/Widower</p>
        <hr style="width:1198px; margin-left:70px">
       
       <p style="margin-left:70px; margin-top:15px">B. PRINCIPAL APPLICANT'S EMPLOYER DATA ( IF LOCALLY EMPLOYED )</p><hr style="width:1198px; margin-left:70px">
       <p style="margin-left:70px">Employer Number<br><input type="text" name="" style="width:300px"></p>
       <p style="margin-left:370px; margin-top:-55px">Tax identification number ( if any )<br><input type="text" name="" style="width:300px"></p>
       <p style="margin-left:675px; margin-top:-55px">Type of employer : </p>
        <p style="margin-left:675px; margin-top:-15px"><input type="checkbox" name=""> Business</p>
      <p style="margin-left:795px; margin-top:-34px"><input type="checkbox" name=""> Household</p>
      <p style="margin-left:970px; margin-top:-55px">Date of birth<br><input type="date" name="" style="width:300px"></p>

      <p style="margin-left:70px; margin-top:-5px">Name ( Last name ) <br><input type="text" name="" style="width:300px"></p>
       <p style="margin-left:370px; margin-top:-55px">( First name ) <br><input type="text" name="" style="width:300px"></p>
       <p style="margin-left:670px; margin-top:-55px">( Middle name ) <br><input type="text" name="" style="width:300px"></p>
       <p style="margin-left:970px; margin-top:-55px">Contact number <br><input type="text" name="" style="width:300px"></p>

       <p style="margin-left:70px; margin-top:-5px">Address (House Lot/Blk no. )<br><input type="text" name="" style="width:300px"></p>
       <p style="margin-left:370px; margin-top:-56px">( Street/Name )<br><input type="date" name="" style="width:300px"></p>
       <p style="margin-left:670px; margin-top:-58px">( Barangay/District/Locality )<br><input type="date" name="" style="width:300px"></p>
       <p style="margin-left:970px; margin-top:-58px">( City/Province)<br><input type="date" name="" style="width:300px"></p>

       <hr style="width:1198px; margin-left:70px">
       <p style="margin-left:70px; margin-top:15px">C. LOAN PARTICULARS</p><hr style="width:1198px; margin-left:70px">
       <p style="margin-left:70px; margin-top:-5px">Amount applied for<br><input type="text" name="" style="width:300px"></p>
        <p style="margin-left:380px; margin-top:-55px">Term ( number of years ) : </p>
        <p style="margin-left:380px; margin-top:-13px"><input type="checkbox" name=""> 5 </p>
        <p style="margin-left:475px; margin-top:-35px"><input type="checkbox" name=""> 10 </p>
        <p style="margin-left:580px; margin-top:-35px"><input type="checkbox" name=""> 15 </p>
        <p style="margin-left:680px; margin-top:-35px"><input type="checkbox" name=""> 20 </p>
        <p style="margin-left:800px; margin-top:-55px">Loan Type : </p>
        <p style="margin-left:795px; margin-top:-13px"><input type="checkbox" name=""> Regular</p>
        <p style="margin-left:945px; margin-top:-35px"><input type="checkbox" name=""> Disaster-Related </p>
        
        <hr style="width:1198px; margin-left:70px">
       <p style="margin-left:70px; margin-top:15px">D. COLLATERAL</p><hr style="width:1198px; margin-left:70px">
       <p style="margin-left:70px; margin-top:15px">A. LAND</p>
       <p style="margin-left:70px; margin-top:-5px">OCT/TCT/CCT NO.<br><input type="text" name="" style="width:300px"></p>
        <p style="margin-left:370px; margin-top:-55px">Location<br><input type="text" name="" style="width:600px"></p>
        <p style="margin-left:970px; margin-top:-55px">Lot Area ( SQ.M. )<br><input type="text" name="" style="width:300px"></p>

        <p style="margin-left:70px; margin-top:15px">B. BUILDING</p>
        <p style="margin-left:70px; margin-top:-5px">Description<br><input type="text" name="" style="width:900px"></p>
        <p style="margin-left:970px; margin-top:-55px">Floor Area ( SQ.M. )<br><input type="text" name="" style="width:300px"></p>

        <p style="margin-left:70px; margin-top:-900px"><input type="submit" name="sub"></p>
       
</form>
