

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
    $pdf->Cell(-204,30,"MATERNITY BENEFIT APPLICATION",0,0,"C");
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
    $pdf->Cell(-9,110,"{$mnames}",0,0,"R");
    $pdf->SetFont("Arial","B",11);
    $pdf->Cell(-145,160,"RECEIVED BY:",0,0,"R");
    $pdf->Cell(34,200,"Signature over printed name",0,0,"R");
    $pdf->Cell(40,200,"Date",0,0,"R");
    $pdf->Cell(69,200,"Receiving Branch",0,0,"R");
    $pdf->output();
}
?>
<form method="post" action="Benefit_Maternity.php"><br>
<div class="container">
<p style="text-align:center; margin-top:10px; font-family:Arial; font-size:18px">Republic of the Philippines</p>
<p style="text-align:center; margin-top:-10px; font-family:Arial; font-size:20px; font-weight:bold">SOCIAL SECURITY SYSTEM</p>
<p style="text-align:center; margin-top:-12px; font-family:Arial; font-size:25px; font-weight:bold">MATERNITY BENEFIT APPLICATION</p>
<p style="margin-left:70px; margin-top:65px">A. PERSONAL DATA</p><hr style="width:1198px; margin-left:70px">
    
       <p style="margin-left:70px">SS Number<br><input type="text" name="ssnum" style="width:300px"></p>
       <p style="margin-left:370px; margin-top:-55px">Common reference number ( if any )<br><input type="text" name="ssnum" style="width:300px"></p>
       <p style="margin-left:670px; margin-top:-55px">Date of birth<br><input type="date" name="ssnum" style="width:300px"></p>
       <p style="margin-left:970px; margin-top:-55px">Tax identification number ( if any )<br><input type="text" name="ssnum" style="width:300px"></p>
       
       <p style="margin-left:70px; margin-top:-5px">Name ( Last name ) <br><input type="text" name="lname" style="width:300px"></p>
       <p style="margin-left:370px; margin-top:-55px">( First name ) <br><input type="text" name="fname" style="width:300px"></p>
       <p style="margin-left:670px; margin-top:-55px">( Middle name ) <br><input type="text" name="mname" style="width:300px"></p>
       <p style="margin-left:970px; margin-top:-55px">Contact number <br><input type="text" name="" style="width:300px"></p>
       

       <p style="margin-left:70px; margin-top:-5px">Address (House Lot/Blk no. )<br><input type="text" name="" style="width:300px"></p>
       <p style="margin-left:370px; margin-top:-56px">( Street/Name )<br><input type="date" name="" style="width:300px"></p>
       <p style="margin-left:670px; margin-top:-56px">( Barangay/District/Locality )<br><input type="date" name="" style="width:300px"></p>
       <p style="margin-left:970px; margin-top:-56px">( City/Province)<br><input type="date" name="" style="width:300px"></p>

        <p style="margin-left:70px; margin-top:-10px">Start of maternity leave <br><input type="date " name="" style="width:300px"></p>
        <p style="margin-left:370px; margin-top:-55px">Date of delivery/Miscarriage/procedure <br><input type="date " name="" style="width:300px"></p>
         <p style="margin-left:670px; margin-top:-60px">Diagnosis</p>
        <p style="margin-left:675px; margin-top:-9px"><input type="checkbox" name=""> Normal</p>
        <p style="margin-left:750px; margin-top:-35px"><input type="checkbox" name=""> Caesarean</p>
        <p style="margin-left:840px; margin-top:-35px"><input type="checkbox" name=""> Miscarriage</p>
        <p style="margin-left:940px; margin-top:-35px"><input type="checkbox" name=""> Ectopic (Operated)</p>
        <p style="margin-left:1085px; margin-top:-35px"><input type="checkbox" name=""> Ectopic (Unoperated)</p>

       <hr style="width:1198px; margin-left:70px">
         <p style="margin-left:70px; margin-top:20px">B. MEMBER'S ENROLLMENT IN THE PAYMENT THRU THE BANK (  if not yet enrolled )</p>
         <hr style="width:1198px; margin-left:70px">

     
       <p style="margin-left:70px; margin-top:15px">Bank name and branch<br><input type="text" name="" style="width:1200px"></p>
       <p style="margin-left:70px; margin-top:-5px">Bank branch address<br><input type="text" name="" style="width:1200px"></p>
       <p style="margin-left:70px; margin-top:-5px">Bank account name<br><input type="text" name="" style="width:1200px"></p>
       <p style="margin-left:70px; margin-top:-5px">Bank account number<br><input type="text" name="" style="width:300px"></p>
       <p style="margin-left:375px; margin-top:-39px"><input type="checkbox" name=""> Savings/Current</p>
        <p style="margin-left:530px; margin-top:-35px"><input type="checkbox" name=""> UMID Atm account</p>
        <p style="margin-left:710px; margin-top:-35px"><input type="checkbox" name=""> Cash Card</p>
        <hr style="width:1198px; margin-left:70px">
        
        <p style="margin-left:70px; margin-top:-600px"><input type="submit" name="sub"></p>
       
</form>
