<?php 
// Load autoloader (using Composer)
require __DIR__ . '/vendor/autoload.php';
 
$pdf = new TCPDF();                 // create TCPDF object with default constructor args
/*TCPDF adds a line to the top and bottom by default. Let's turn those off*/
$pdf->setPrintHeader(false);  
$pdf->setPrintFooter(false);
 
$pdf->AddPage();    

// First name
$pdf->Cell(35, 5, 'First name:');
$pdf->TextField('firstname', 50, 5);
$pdf->Ln(6);
 
// Last Name
$pdf->Cell(35, 5, 'Last name:');
$pdf->TextField('lastname', 50, 5);
$pdf->Ln(6);

// Vehicle
$pdf->Cell(35, 5, 'Vehicle:');
$pdf->RadioButton('vehicle', 5, array(), array(), 'Water');
$pdf->Cell(35, 5, 'Toyota');
$pdf->Ln(6);
$pdf->Cell(35, 5, '');
$pdf->RadioButton('vehicle', 5, array(), array(), 'Beer');
$pdf->Cell(35, 5, 'Ford');
$pdf->Ln(6);
$pdf->Cell(35, 5, '');
$pdf->RadioButton('vehicle', 5, array(), array(), 'Wine');
$pdf->Cell(35, 5, 'Kia');

$pdf->Output('out.pdf');    // send the file inline to the browser (default).

?>