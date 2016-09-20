<?php
require_once '../fpdf181/fpdf.php';
require_once '../../../model/matter.DAO.php';
require_once '../../../model/MatterDTO.php';
$listSubject = new matterDAO();

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'U', 10);
$pdf->Cell(50,20,'                                                                   Report of all the Course');


$listSubjects = $listSubject->readMatter();
foreach ($listSubjects as $fila) {
	$idmaterias = $fila->get('idmaterias');
	$materia = $fila->get('materia');
	$descripcion = $fila->get('descripcion');
	

   $pdf->Ln();
   $pdf->Cell(25, 10, utf8_decode($idmaterias));
   $pdf->Cell(50, 10, utf8_decode($materia));
   $pdf->Cell(60, 10, utf8_decode(trim($descripcion)));
   
}
$pdf->Image('../img/LogoUniversidades.gif',10,8,33,'gif'); 
$pdf->Output('D')
?>