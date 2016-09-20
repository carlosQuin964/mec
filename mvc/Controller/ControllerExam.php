<?php
include '../model/ExamDAO.php';
include '../model/ExamDTO.php';

$ExamDAO = new ExamDAO;
$message="";
if (isset($_POST['addExam']) && $_POST['addExam']!=null) {
	$newExam = new ExamDTO();	
	$newExam->set("nombreexamen", $_POST["nombreexamen"]);
	$newExam->set("descripcion", $_POST["descripcion"]);
	$newExam->set("fechainicio", $_POST["fechainicio"]);
	$newExam->set("fechafinal", $_POST["fechafinal"]);
	
	$message=$ExamDAO->addExam($newExam);
	var_dump($message).die();
}

if (isset($_POST['deleteExam']) && $_POST['deleteExam']!=null) {
	$idexamen = $_POST['idexamen'];
	$message=$ExamDAO->deleteExam($idexamen);
	
	

}


 ?>