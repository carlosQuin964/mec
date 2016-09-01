

<?php 
require_once '../model/ExamDAO.php';
require_once '../model/ExamDTO.php';
$ExamDAO= new ExamDAO;
$mensaje="";
if (isset($_POST['addExam']) && $_POST['addExam']!=null) {
	$newExam= new ExamDTO();
	$newExam->set("nombreexamen", $_POST['nombreexamen']);
	$newExam->set("descripcion", $_POST['descripcion']);
	$newExam->set("fechainicio", $_POST['fechainicio']);
	$newExam->set("fechafinal", $_POST['fechafinal']);

	$mensaje=$ExamDAO->addExam($newExam);
	

	header("Location:../view/home.php?registro=".$mensaje);
}

if (isset($_POST['deleteExam']) && $_POST['deleteExam']!=null) {
	$idcurso = $_POST['idexamen'];
	$message=$ExamDAO->deleteExam($idexamen);
	header("location:../view/viewCourses.php?accion=".$message);
	

}



 ?>