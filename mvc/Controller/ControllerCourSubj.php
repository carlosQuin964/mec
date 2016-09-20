<?php
include '../model/courSubjDAO.php';
include '../model/courSubjDTO.php';

$courSubjDAO = new courSubjDAO;
$message="";
if (isset($_POST['CreateBuilCourSubj']) && $_POST['CreateBuilCourSubj']!=null) {
	$courSubj = new courSubjDTO();
	
	$courSubj->set("idcursomaterias", $_POST["idcursomaterias"]);
	$courSubj->set("idmaterias", $_POST["idmaterias"]);

	$message=$courSubjDAO->CreateBuilCourSubj($courSubj);
	
	
	//header("location:../view/home.php?registro=".$message);

//header("Location:../view/teacher/home.php?registro=".$mensaje);


}




 ?>