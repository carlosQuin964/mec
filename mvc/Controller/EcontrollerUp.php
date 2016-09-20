<?php
include '../model/CustomerDAO.php';
include '../model/CustomerDTO.php';

$CustomerU= new CustomerDAO;
$mensaje="";
if (isset($_POST['updateCustomer'])&& $_POST['updateCustomer']!=null) {
	$newUpdate=new CustomerDTO();
	$newUpdate->set("documentoIdentidad", $_POST['documentoIdentidad']);
	$newUpdate->set("nombres" , $_POST['nombres']);
	$newUpdate->set("apellidos" , $_POST['apellidos']);
	$newUpdate->set("correoe" , $_POST['correoe']);
	$newUpdate->set("password" , $_POST['password']);
	$newUpdate->set("idRol" , $_POST['idRol']);
	$newUpdate->set("fechaCreacion" , $_POST['fechaCreacion']);
	$newUpdate->set("estadoPersona", $_POST['estadoPersona']);
	$mensaje=$CustomerU->updateCustomer($newUpdate);
	
	if ($mensaje=="ok") {
		echo "<script> alert('update oK');</script>";
		echo "<script> window.location='../view/student/Ehome.php'</script>";
	}
	

}




 ?>




