<?php
App::import('Vendor', 'FPDF/fpdf');
App::import('Vendor', 'FPDF/fpdi');
//App::import('Vendor', 'FPDF/fpdf_tpl');
 $fullPathToFile = WWW_ROOT."pdf/do.pdf"; 
$img = WWW_ROOT."img/logo.png";
// initiate FPDI
$pdf = new FPDI();
// get the page count


$pageCount = $pdf->setSourceFile($fullPathToFile);
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
		$pdf->Image($img,10,6,30);
		$pdf->Write(10, 'A complete document imported with FPDI');
		$pdf->Text(40,120,"Sample Text over overlay");

	}
    

    // use the imported page
    $pdf->useTemplate($templateId);

   
}

// Output the new PDF
//$pdf->Output();
$pdf->Output("sampleUpdated.pdf", 'D');


