<?php
require_once('fpdf.php');
require_once('fpdi.php');
require_once('fpdf_tpl.php');

// Original file with multiple pages 
$fullPathToFile = "do.pdf";
/*
class PDF extends FPDI {

    var $_tplIdx;

    function Header() {

        global $fullPathToFile;

        if (is_null($this->_tplIdx)) {

            // THIS IS WHERE YOU GET THE NUMBER OF PAGES
            $this->numPages = $this->setSourceFile($fullPathToFile);
            $this->_tplIdx = $this->importPage(2,'/MediaBox');

        }
        $this->useTemplate($this->_tplIdx, 0, 0,200);

    }

    function Footer() {}

}

// initiate PDF
$pdf = new PDF();

// add a page
$pdf->AddPage();


// The new content
$pdf->SetFont("helvetica", "B", 25);
$pdf->SetTextColor(255, 0, 0);
$pdf->Text(40,120,"Sample Text over overlay");

// THIS PUTS THE REMAINDER OF THE PAGES IN
if($pdf->numPages>1) {
    for($i=2;$i<=$pdf->numPages;$i++) {
        //$pdf->endPage();
        $pdf->_tplIdx = $pdf->importPage($i);
        $pdf->AddPage();
    }
}

//show the PDF in page
//$pdf->Output();

// or Output the file as forced download
$pdf->Output("sampleUpdated.pdf", 'D');
*/


// initiate FPDI
$pdf = new FPDI();

// get the page count
$pageCount = $pdf->setSourceFile('do.pdf');
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
    
    if($pageNo==4)
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
