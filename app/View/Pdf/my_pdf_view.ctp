<?php
 
App::import('Vendor','xtcpdf');
 
//$pdf = new XTCPDF('L', PDF_UNIT, 'A4', true, 'UTF-8', false);
$pdf = new XTCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// set default header data
$header_title = "Artechnologics Header";
$pdf->setHtmlHeader($header_title);


$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', 'BI', 12);


$pdf->SetCreator(PDF_CREATOR);

$pdf->SetAuthor('artechnologics');
$pdf->SetTitle('sample');
$pdf->SetSubject('sample');
$pdf->SetKeywords('sample');

 
$pdf->AddPage();
 
$html = '</pre>
<h1>hello world</h1>
<pre>';
 
foreach ( $business as $row ){
    $html .= ''.$row['Businesses']['title'].'<br/>';
}
 
$pdf->writeHTML($html, true, false, true, false, '');
 
$pdf->lastPage();
 
echo $pdf->Output(WEBROOT_DIR  . DS . 'test.pdf', 'D'); 
//echo $pdf->Output(APP . 'files/pdf' . DS . 'test.pdf', 'F');
