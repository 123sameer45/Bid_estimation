<?php
// Include the TCPDF library
require_once('../erp/tcpdf/tcpdf.php');

// Create a new PDF instance
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Set PDF meta data
$pdf->SetCreator('Your Name');
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('PDF Example');
$pdf->SetSubject('Generating PDF from PHP');
$pdf->SetKeywords('PDF, PHP');

// Add a page
$pdf->AddPage();

// Set font
$pdf->SetFont('times', '', 12);

// Set form data (replace this with your data)
$first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
$last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';

// Include the entire content of test2.html.php
ob_start();
include('../erp/test2.html.php');
$html = ob_get_clean();

// Add content to the PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Save the PDF as a file
$pdf->Output('example.pdf', 'I');
?>
