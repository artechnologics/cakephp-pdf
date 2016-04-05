<?php
require_once('fpdf.php');
require_once('fpdi.php');
require_once('fpdf_tpl.php');

// Original file with multiple pages 
$fullPathToFile = "doc.pdf";


// initiate FPDI
$pdf = new FPDI();

// get the page count
$pageCount = $pdf->setSourceFile('doc.pdf');
// iterate through all pages
for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
    // import a page
       $templateId = $pdf->importPage($pageNo);
    // get the size of the imported page
    $size = $pdf->getTemplateSize($templateId);

    

    // create a page (landscape or portrait depending on the imported page size)
    if ($size['w'] > $size['h']) {
        $pdf->AddPage('L', array($size['w'], $size['h']));
    } else {
        $pdf->AddPage('P', array($size['w'], $size['h']));
    }
    
    if($pageNo==1)
    {
		$pdf->SetFont('Helvetica');
		$pdf->SetXY(5, 5);
		$pdf->SetFont("helvetica", "B", 25);
		$pdf->SetTextColor(255, 0, 0);
		$pdf->Image('logo.png',10,6,30);
		$pdf->Write(10, 'A complete document imported with FPDI');
		$pdf->Text(40,120,"Sample Text over overlay");

	}
    

    // use the imported page
    $pdf->useTemplate($templateId);

   
}

// Output the new PDF
$pdf->Output();



 ?>
