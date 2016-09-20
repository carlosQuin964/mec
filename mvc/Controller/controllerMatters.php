<?php
require_once '../model/MatterDTO.php';
require_once '../model/matter.DAO.php';
$matterDAO = new matterDAO;
$mensaje="";
if (isset($_POST['createMatter']) && $_POST['createMatter']!=null) {
	$newMatter= new MatterDTO();
	$newMatter->set("materia", $_POST['materia']);
	$newMatter->set("descripcion", $_POST['descripcion']);

	$mensaje=$matterDAO->createMatter($newMatter);
	
	
	//header("Location:../view/home.php?registro=".$mensaje);
}

if (isset($_POST['deleteSubject']) && $_POST['deleteSubject']!=null) {
	$idmaterias = $_POST['idmaterias'];
	$mensaje=$matterDAO->deleteSubject($idmaterias);
	header("location:../view/teacher/viewCourses.php?accion=".$mensaje);
	

}




 ?>