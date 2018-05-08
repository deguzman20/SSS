<?php
require('fpdf/fpdf.php');
$pdf = new FPDF();
    $pdf->AddPage();
    $pdf->Image("image/retirement_pdf.png",10,10,190,250);  
    $pdf->output(); 
?>