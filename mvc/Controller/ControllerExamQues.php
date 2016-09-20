<?php
include '../model/ExQuesDAO.php';
include '../model/ExQuesDTO.php';

$ExQuesDAO = new ExQuesDAO;
$message="";
if (isset($_POST['CreateBuilExamQues']) && $_POST['CreateBuilExamQues']!=null) {
	$newCourse = new ExQuesDTO();
	
	$newCourse->set("idenunciado", $_POST["idenunciado"]);
	$newCourse->set("idexamen", $_POST["idexamen"]);

	$message=$ExQuesDAO->CreateBuilExamQues($newCourse);
	var_dump($message).die();
	
	//header("location:../view/home.php?registro=".$message);

//header("Location:../view/teacher/home.php?registro=".$mensaje);


}




 ?>