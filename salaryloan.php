<?php

require('fpdf/fpdf.php');
  	$pdf = new FPDF();
    $pdf->AddPage();
    $pdf->Image("image/SSS-Abroad.jpg",10,10,35,20);  
    $pdf->SetFont("Arial","B",15);
    $pdf->Cell(0,15,"SOCIAL SECURITY SYSTEM",0,0,"C");
    $pdf->SetFont("Arial","B",20);
    $pdf->Cell(-190,40,"APPLICATION FOR SALARY LOAN",0,0,"C");
   
    $pdf->output();

?>