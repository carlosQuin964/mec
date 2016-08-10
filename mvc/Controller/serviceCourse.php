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

	if ($message=='ok') {
		echo '<script>alert("course successfully created");</script>';
		echo '<script>window.location="../view/home.php"; </script>';
		
	}else{
		echo '<script>alert("not create course");</script>';
		echo '<script>window.location="../view/createCourse.php"; </script>';
	}


}

if (isset($_POST['deleteCourse']) && $_POST['deleteCourse']!=null) {
	$idcurso = $_POST['idcurso'];
	$message=$CustomerDAO->deleteCourse($idcurso);
	header("location:../view/viewCourses.php?accion=".$message);
	

}


 ?>