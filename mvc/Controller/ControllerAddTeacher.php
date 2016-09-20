<?php 
include '../model/CustomerDAO.php';
include '../model/CustomerDTO.php';


$CustomerDAO = new CustomerDAO;
$message="";
if (isset($_POST['addTeacher']) && $_POST['addTeacher']!=null ) {
	$newCustomer  = new CustomerDTO();
	$newCustomer->set("documentoidentidad", $_POST["documentoidentidad"]);
	$newCustomer->set("nombres", $_POST["nombres"]);
	$newCustomer->set("apellidos", $_POST["apellidos"]);
	$newCustomer->set("correoe", $_POST["correoe"]);
	$newCustomer->set("password", $_POST["password"]);

	$message=$CustomerDAO->addTeacher($newCustomer); 
	var_dump($message).die();
	
	header("Location:../view/teacher/home.php?registro=".$mensaje);
	}




?>