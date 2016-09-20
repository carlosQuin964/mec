<?php
require_once '../../teacher/fpdf181/fpdf.php';
require_once '../../../model/CustomerDAO.php';
require_once '../../../model/CustomerDTO.php';
$listUser = new CustomerDAO();

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'U', 10);
$pdf->Cell(50,20,'                                                                   Report of all the User');


$listUsers = $listUser->readcustomer();
foreach ($listUsers as $fila) {
	$documentoidentidad = $fila->get('documentoidentidad');
	$nombres = $fila->get('nombres');
	$apellidos = $fila->get('apellidos');
	
	$correoe = $fila->get('correoe');
	$fechacreacion = $fila->get('fechacreacion');
	

   $pdf->Ln();
   $pdf->Cell(25, 10, utf8_decode($documentoidentidad));
   $pdf->Cell(50, 10, utf8_decode($nombres));
   $pdf->Cell(50, 10, utf8_decode($apellidos));
   $pdf->Cell(50, 10, utf8_decode($correoe));
   $pdf->Cell(60, 10, utf8_decode(trim($fechacreacion)));
   
}
$pdf->Image('../img/LogoUniversidades.gif',10,8,33,'gif'); 
$pdf->Output('D')
?>