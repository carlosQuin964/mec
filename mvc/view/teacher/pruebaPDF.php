<?php
require_once 'fpdf181/fpdf.php';
require_once '../../model/ExamDAO.php';
require_once '../../model/ExamDTO.php';
$listarExamene = new ExamDAO();

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'U', 10);
$pdf->Cell(50,20,'                                                                   Report of all the Exam');


$listarExamen = $listarExamene->readExam();
foreach ($listarExamen as $fila) {
	$idexamen = $fila->get('idexamen');
	$name = $fila->get('nombreexamen');
	$dateI = $fila->get('fechainicio');
	$dateF = $fila->get('fechafinal');

   $pdf->Ln();
   $pdf->Cell(25, 10, utf8_decode($idexamen));
   $pdf->Cell(50, 10, utf8_decode($name));
   $pdf->Cell(60, 10, utf8_decode(trim($dateI) . '---- ' . $dateF));
   
}
$pdf->Image('img/LogoUniversidades.gif',10,8,33,'gif'); 
$pdf->Output('D')
?>