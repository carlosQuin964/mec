<?php
require_once '../fpdf181/fpdf.php';
require_once '../../../model/CustomerDAO.php';
require_once '../../../model/CourseDTO.php';
$listCourse = new CustomerDAO();

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'U', 10);
$pdf->Cell(50,20,'                                                                   Report of all the Course');


$listCourses = $listCourse->readCourse();
foreach ($listCourses as $fila) {
	$idcurso = $fila->get('idcurso');
	$nombrecurso = $fila->get('nombrecurso');
	$fechacreacion = $fila->get('fechacreacion');
	

   $pdf->Ln();
   $pdf->Cell(25, 10, utf8_decode($idcurso));
   $pdf->Cell(50, 10, utf8_decode($nombrecurso));
   $pdf->Cell(60, 10, utf8_decode(trim($fechacreacion)));
   
}
$pdf->Image('../img/LogoUniversidades.gif',10,8,33,'gif'); 
$pdf->Output('D')
?>