<?php
include '../model/CustomerDAO.php';
include '../model/CourseDTO.php';

$CustomerDAO = new CustomerDAO;
$message="";
if (isset($_POST['CreateCourse']) && $_POST['CreateCourse']!=null) {
	$newCourse = new CourseDTO();
	
	$newCourse->set("nombrecurso", $_POST["nombrecurso"]);
	$newCourse->set("descripcion", $_POST["descripcion"]);

	$message=$CustomerDAO->CreateCourse($newCourse);
	
	//header("location:../view/home.php?registro=".$message);

header("Location:../view/home.php?registro=".$mensaje);


}

if (isset($_POST['deleteCourse']) && $_POST['deleteCourse']!=null) {
	$idcurso = $_POST['idcurso'];
	$message=$CustomerDAO->deleteCourse($idcurso);
	header("location:../view/viewCourses.php?accion=".$message);
	

}


 ?>