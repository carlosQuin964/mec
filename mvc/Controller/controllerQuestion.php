<?php
require_once '../model/questionDTO.php';
require_once '../model/QuestionDAO.php';
$QuestionDAO = new QuestionDAO;
$mensaje="";
if (isset($_POST['addQuestion']) && $_POST['addQuestion']!=null) {
	$newQuestion= new questionDTO();
	$newQuestion->set("enunciado", $_POST['enunciado']);
	

	$mensaje=$QuestionDAO->addQuestion($newQuestion);
	
	header("Location:../view/home.php?registro=".$mensaje);
}






 ?>