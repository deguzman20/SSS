

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
    $pdf->Cell(-204,30,"RETIREMENT CLAIM APPLICATION",0,0,"C");
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
<form method="post" action="Benefit_Retirement.php"><br>
<div class="container">
<p style="text-align:center; margin-top:10px; font-family:Arial; font-size:18px">Republic of the Philippines</p>
<p style="text-align:center; margin-top:-10px; font-family:Arial; font-size:20px; font-weight:bold">SOCIAL SECURITY SYSTEM</p>
<p style="text-align:center; margin-top:-12px; font-family:Arial; font-size:25px; font-weight:bold">RETIREMENT CLAIM APPLICATION</p>
<p style="margin-left:70px; margin-top:65px">MEMBER'S INFORMATION</p><hr style="width:1190px">
    
       <p style="margin-left:70px">SS Number<br><input type="text" name="ssnum" style="width:300px"></p>
       
       <p style="margin-left:370px; margin-top:-55px">Name ( Last name ) <br><input type="text" name="lname" style="width:300px"></p>

       <p style="margin-left:670px; margin-top:-55px">( First name ) <br><input type="text" name="fname" style="width:300px"></p>
       
       <p style="margin-left:970px; margin-top:-55px">( Middle name ) <br><input type="text" name="mname" style="width:300px"></p>

       <p style="margin-left:70px; margin-top:-5px">Address <br><input type="text" name="mname" style="width:300px"></p>
       
       <p style="margin-left:370px; margin-top:-56px">Date of birth<br><input type="date" name="" style="width:300px"></p>
       
       <p style="margin-left:670px; margin-top:-56px">Place of Birth <br><input type="text" name="" style="width:300px"></p>
       
        <p style="margin-left:975px; margin-top:-60px">Gender : </p>
        <p style="margin-left:975px; margin-top:-9px"><input type="checkbox" name=""> Female</p>
        <p style="margin-left:1075px; margin-top:-35px"><input type="checkbox" name=""> Male</p>
       

       <p style="margin-left:70px; margin-top:-5px">Civil Status : </p>
       <p style="margin-left:70px; margin-top:-10px"><input type="checkbox" name=""> Single</p>
       <p style="margin-left:140px; margin-top:-35px"><input type="checkbox" name=""> Married</p>
       <p style="margin-left:230px; margin-top:-35px"><input type="checkbox" name=""> Widow/Widower</p>
      
       <p style="margin-left:370px; margin-top:-55px">Telephone number <br><input type="text" name="mname" style="width:300px"></p>

       <p style="margin-left:670px; margin-top:-55px">Mobile number <br><input type="text" name="mname" style="width:300px"></p>

       <p style="margin-left:970px; margin-top:-55px">TIN <br><input type="text" name="mname" style="width:300px"></p>

       <hr style="width:1197px">

       

        <p style="margin-left:70px; margin-top:20px">EMPOYMENT HISTORY</p><hr style="width:1197px">
      
        <p style="margin-left:70px; margin-top:20px">Name of employer<br><input type="text" name="" style="width:300px"></p>
       
        <p style="margin-left:370px; margin-top:-55px">Address<br><input type="text" name="" style="width:300px"></p>
       
        <p style="margin-left:670px; margin-top:-56px">Period of Employment ( From )<br><input type="date" name="" style="width:300px"></p>
       
        <p style="margin-left:970px; margin-top:-58px">( To )<br><input type="date" name="" style="width:300px"></p>
        <p style="margin-left:70px; margin-top:-18px"><input type="text" name="" style="width:300px"><br>
        <p style="margin-left:370px; margin-top:-37px"><input type="text" name="" style="width:300px"><br>
        <p style="margin-left:670px; margin-top:-38px"><input type="date" name="" style="width:300px"><br>
        <p style="margin-left:970px; margin-top:-40px"><input type="date" name="" style="width:300px"><br>
        <p style="margin-left:70px; margin-top:-18px"><input type="text" name="" style="width:300px"><br>
        <p style="margin-left:370px; margin-top:-37px"><input type="text" name="" style="width:300px"><br>
        <p style="margin-left:670px; margin-top:-38px"><input type="date" name="" style="width:300px"><br>
        <p style="margin-left:970px; margin-top:-40px"><input type="date" name="" style="width:300px"><br>
        <p style="margin-left:70px; margin-top:-18px"><input type="text" name="" style="width:300px"><br>
        <p style="margin-left:370px; margin-top:-37px"><input type="text" name="" style="width:300px"><br>
        <p style="margin-left:670px; margin-top:-38px"><input type="date" name="" style="width:300px"><br>
        <p style="margin-left:970px; margin-top:-40px"><input type="date" name="" style="width:300px"><br><br>
        <hr style="width:1199px">
       

        <p style="margin-left:70px; margin-top:20px">DEPENDENT CHILDREN ( Below 21 yrs old or above 21 but incapacitated )</p><hr style="width:1199px">
        
        <p style="margin-left:70px; margin-top:20px">Name of children<br><input type="text" name="" style="width:300px"></p>
        <p style="margin-left:370px; margin-top:-57px">Date of Birth<br><input type="date" name="" style="width:300px"></p>
        <p style="margin-left:690px; margin-top:-38px"><input type="checkbox" name=""> Legitimate</p>
        <p style="margin-left:820px; margin-top:-35px"><input type="checkbox" name=""> Illegitimate</p>
        <p style="margin-left:970px; margin-top:-50px">Address <br><input type="text" name="" style="width:300px"></p>
        <p style="margin-left:70px; margin-top:-22px"><input type="text" name="" style="width:300px"></p>
        <p style="margin-left:370px; margin-top:-37px"><input type="date" name="" style="width:300px"></p>
        <p style="margin-left:690px; margin-top:-38px"><input type="checkbox" name=""> Legitimate</p>
        <p style="margin-left:820px; margin-top:-35px"><input type="checkbox" name=""> Illegitimate</p>
        <p style="margin-left:970px; margin-top:-35px"><input type="text" name="" style="width:300px"></p>
        <p style="margin-left:70px; margin-top:-22px"><input type="text" name="" style="width:300px"></p>
        <p style="margin-left:370px; margin-top:-37px"><input type="date" name="" style="width:300px"></p>
        <p style="margin-left:690px; margin-top:-38px"><input type="checkbox" name=""> Legitimate</p>
        <p style="margin-left:820px; margin-top:-35px"><input type="checkbox" name=""> Illegitimate</p>
        <p style="margin-left:970px; margin-top:-35px"><input type="text" name="" style="width:300px"></p>
        <p style="margin-left:70px; margin-top:-22px"><input type="text" name="" style="width:300px"></p>
        <p style="margin-left:370px; margin-top:-37px"><input type="date" name="" style="width:300px"></p>
        <p style="margin-left:690px; margin-top:-38px"><input type="checkbox" name=""> Legitimate</p>
        <p style="margin-left:820px; margin-top:-35px"><input type="checkbox" name=""> Illegitimate</p>
        <p style="margin-left:970px; margin-top:-35px"><input type="text" name="" style="width:300px"></p>

        <p style="margin-left:70px; margin-top:-5px">Do you want to receive the first 18 <br> monthly pension in advbance ? </p>
       <p style="margin-left:70px; margin-top:-10px"><input type="checkbox" name=""> Yes</p>
       <p style="margin-left:170px; margin-top:-35px"><input type="checkbox" name=""> No</p>
       
       <p style="margin-left:370px; margin-top:-80px">Are you currently receiving SSS<br> Pension ? </p>
       <p style="margin-left:368px; margin-top:-10px"><input type="checkbox" name=""> Yes</p>
       <p style="margin-left:460px; margin-top:-35px"><input type="checkbox" name=""> No</p>

       <p style="margin-left:675px; margin-top:-80px">If yes, check type of pension</p>
       <p style="margin-left:675px; margin-top:25px"><input type="checkbox" name=""> Dissability</p>
       <p style="margin-left:815px; margin-top:-35px"><input type="checkbox" name=""> Death</p>

       <p style="margin-left:70px; margin-top:5px">IF RECEIVING PENSION UNDER DEATH, INDICATES SS NUMBER AND NAME OF DECEASED MEMBER:</p>
       <p style="margin-left:70px; margin-top:15px">SS Number<br><input type="text" name="ssnum" style="width:300px"></p>
       <p style="margin-left:370px; margin-top:-55px">Name ( Last name ) <br><input type="text" name="lname" style="width:300px"></p>
       <p style="margin-left:670px; margin-top:-55px">( First name ) <br><input type="text" name="fname" style="width:300px"></p>
       <p style="margin-left:970px; margin-top:-55px">( Middle name ) <br><input type="text" name="mname" style="width:300px"></p>

        <hr style="width:1190px">
      
       <p style="margin-left:70px; margin-top:-830px"><input type="submit" name="sub"></p>
       
</form>
