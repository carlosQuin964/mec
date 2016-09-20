<?php 
include '../model/CustomerDAO.php';
include '../model/CustomerDTO.php';


$CustomerDAO = new CustomerDAO;
$message="";
if (isset($_POST['registrarCliente']) && $_POST['registrarCliente']!=null ) {
	$newCustomer  = new CustomerDTO();
	$newCustomer->set("documentoidentidad", $_POST["documentoidentidad"]);
	$newCustomer->set("nombres", $_POST["nombres"]);
	$newCustomer->set("apellidos", $_POST["apellidos"]);
	$newCustomer->set("correoe", $_POST["correoe"]);
	$newCustomer->set("password", $_POST["password"]);


	$message=$CustomerDAO->registrarCliente($newCustomer); 
	
	header("Location:../view/teacher/home.php?registro=".$mensaje);
	}




?>