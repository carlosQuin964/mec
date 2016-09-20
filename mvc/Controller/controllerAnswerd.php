<?php
include '../model/answerdDAO.php';
include '../model/answerdDTO.php';

$answerdDAO = new answerdDAO;
$message="";
if (isset($_POST['CreateAnswerd']) && $_POST['CreateAnswerd']!=null) {
	$newAnswerd = new answerdDTO();
	
	$newAnswerd->set("respuesta", $_POST["respuesta"]);
	$newAnswerd->set("idenunciado", $_POST["idenunciado"]);

	
	$message=$answerdDAO->CreateAnswerd($newAnswerd);
	
	//header("location:../view/home.php?registro=".$message);

//header("Location:../view/teacher/home.php?registro=".$mensaje);


}




 ?>