

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
    $pdf->Cell(-204,30,"DEATH CLAIM APPLICATION",0,0,"C");
    $pdf->Cell(204,45,"ACKNOWLEDGEMENT STUB",0,0,"C");
    $pdf->SetFont("Arial","B",11);
    $pdf->Cell(-180,100,"SS NUMBER",0,0,"R");
    $pdf->SetFont("Arial","",11);
    $pdf->Cell(-5,115,"{$ssnums}",0,0,"R");
    $pdf->SetFont("Arial","B",11);
    $pdf->Cell(65,100,"NAME OF MEMBER",0,0,"R");
    $pdf->Cell(23,100,"(Surname)",0,0,"R");
    $pdf->SetFont("Arial","",11);
    $pdf->Cell(-3,110,"{$lnames}",0,0,"R");
    $pdf->SetFont("Arial","B",11);
    $pdf->Cell(40,100,"(First name)",0,0,"R");
    $pdf->SetFont("Arial","",11);
    $pdf->Cell(-9,110,"{$fnames}",0,0,"R");
    $pdf->SetFont("Arial","B",11);
    $pdf->Cell(48,100,"(Middle name)",0,0,"R");
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
<form method="post" action="Benefit_Funeral.php"><br>
<p style="text-align:center; margin-top:10px; font-family:Arial; font-size:18px">Republic of the Philippines</p>
<p style="text-align:center; margin-top:-10px; font-family:Arial; font-size:20px; font-weight:bold">SOCIAL SECURITY SYSTEM</p>
<p style="text-align:center; margin-top:-12px; font-family:Arial; font-size:25px; font-weight:bold">FUNERAL CLAIM APPLICATION</p>
<p style="margin-left:70px; margin-top:65px">A. DECEASED MEMBER'S INFORMATION</p><hr style="width:1198px; margin-left:70px">
    
       <p style="margin-left:70px">SS Number<br><input type="text" name="ssnum" style="width:300px"></p>
       <p style="margin-left:370px; margin-top:-55px">Common reference number ( if any )<br><input type="text" name="" style="width:300px"></p>
        <p style="margin-left:670px; margin-top:-57px">Date of birth<br><input type="date" name="" style="width:300px"></p>
        <p style="margin-left:975px; margin-top:-65px">Gender : </p>
        <p style="margin-left:975px; margin-top:-5px"><input type="checkbox" name=""> Female</p>
        <p style="margin-left:1075px; margin-top:-35px"><input type="checkbox" name=""> Male</p>

        <p style="margin-left:70px; margin-top:-5px">Name ( Last name ) <br><input type="text" name="lname" style="width:300px"></p>
        <p style="margin-left:370px; margin-top:-55px">( First name ) <br><input type="text" name="fname" style="width:300px"></p>
       <p style="margin-left:670px; margin-top:-55px">( Middle name ) <br><input type="text" name="mname" style="width:300px"></p>
       <p style="margin-left:970px; margin-top:-55px">Contact Number <br><input type="text" name="" style="width:300px"></p>

       <p style="margin-left:70px; margin-top:-6px">Address ( House Lot/Blk no/Street name ) <br><input type="text" name="" style="width:300px"></p>
       <p style="margin-left:370px; margin-top:-55px">( Barangay/District/Locality ) <br><input type="text" name="" style="width:300px"></p>
       <p style="margin-left:670px; margin-top:-55px">( City/Province ) <br><input type="text" name="" style="width:300px"><br>
       <p style="margin-left:975px; margin-top:-55px">Civil Status : </p>
       <p style="margin-left:975px; margin-top:-15px"><input type="checkbox" name=""> Single</p>
       <p style="margin-left:1050px; margin-top:-35px"><input type="checkbox" name=""> Married</p>
       <p style="margin-left:1135px; margin-top:-35px"><input type="checkbox" name=""> Widow/Widower</p>

       <p style="margin-left:70px; margin-top:-5px">Date of birth <br><input type="date" name="" style="width:300px"></p>
       <p style="margin-left:370px; margin-top:-55px">Place of Death <br><input type="text" name="" style="width:300px"></p>
       <p style="margin-left:670px; margin-top:-56px">Date of Interment <br><input type="date" name="" style="width:300px"></p>
       <p style="margin-left:970px; margin-top:-55px">Place of Interment <br><input type="text" name="" style="width:300px"></p>

       <hr style="width:1198px; margin-left:70px">
        
        <p style="margin-left:70px; margin-top:20px">B. CLAIMANT'S INFORMATION</p>
         <hr style="width:1198px; margin-left:70px">

        <p style="margin-left:70px; margin-top:25px">Name ( Last name ) <br><input type="text" name="" style="width:300px"></p>
        <p style="margin-left:370px; margin-top:-55px">( First name ) <br><input type="text" name="" style="width:300px"></p>
       <p style="margin-left:670px; margin-top:-55px">( Middle name ) <br><input type="text" name="" style="width:300px"></p>
       <p style="margin-left:970px; margin-top:-55px">Relationship to member <br><input type="text" name="" style="width:300px"></p>

       <p style="margin-left:70px; margin-left:70px">SS Number<br><input type="text" name="" style="width:300px"></p>
       <p style="margin-left:370px; margin-top:-55px">Common reference number ( if any )<br><input type="text" name="" style="width:300px"></p>
        <p style="margin-left:670px; margin-top:-57px">Date of birth<br><input type="date" name="" style="width:300px"></p>
        <p style="margin-left:980px; margin-top:-65px">Gender : </p>
        <p style="margin-left:975px; margin-top:-5px"><input type="checkbox" name=""> Female</p>
        <p style="margin-left:1075px; margin-top:-35px"><input type="checkbox" name=""> Male</p>

        <p style="margin-left:70px; margin-top:15px">Address<br><input type="text" name="" style="width:300px"></p>
        <p style="margin-left:370px; margin-top:-55px">Telephone number<br><input type="text" name="" style="width:300px"></p>
        <p style="margin-left:670px; margin-top:-55px">Mobile number<br><input type="text" name="" style="width:300px"></p>
        <p style="margin-left:970px; margin-top:-55px">E-mail Address<br><input type="text" name="" style="width:300px"></p>
        <hr style="width:1198px; margin-left:70px">

       
       <p style="margin-left:70px; margin-top:-570px"><input type="submit" name="sub"></p>
       
</form>
