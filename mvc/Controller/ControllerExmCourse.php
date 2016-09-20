<?php
include '../model/ExCourseDAO.php';
include '../model/ExCourseDTO.php';

$ExCourseDAO = new ExCourseDAO;
$message="";
if (isset($_POST['CreateBuilExamCour']) && $_POST['CreateBuilExamCour']!=null) {
	$newCourse = new ExCourseDTO();
	
	$newCourse->set("idexamen", $_POST["idexamen"]);
	$newCourse->set("idcurso", $_POST["idcurso"]);


	$message=$ExCourseDAO->CreateBuilExamCour($newCourse);
	
	//header("location:../view/home.php?registro=".$message);

//header("Location:../view/teacher/home.php?registro=".$mensaje);


}




 ?>