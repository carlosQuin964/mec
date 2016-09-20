<?php
include '../model/perCourDAO.php';
include '../model/perCourDTO.php';

$perCourDAO = new perCourDAO;
$message="";
if (isset($_POST['perCourse']) && $_POST['perCourse']!=null) {
	$perCourses = new perCourDTO();
	
	$perCourses->set("documentoidentidad", $_POST["documentoidentidad"]);
	$perCourses->set("idcurso", $_POST["idcurso"]);


	$message=$perCourDAO->perCourse($perCourses);
	
	



}