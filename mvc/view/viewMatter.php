<?php 
require_once'../model/MatterDTO.php';
require_once'../model/matter.DAO.php';
$matter= new MatterDAO();
$allMatter=$matter->readMatter();



 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view Matters</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/menuA.css">
	<link rel="stylesheet" href="js/sweetalert.css">
	
	<script src="js/jquery-1.12.1.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="js/filtro.js"></script>
	<script src="js/deleteSubject.js"></script>
	<script src="js/sweetalert.min.js"></script>
</head>
<script>
	$().ready(function(){
		$('#homes li:nth-child(4)').addClass('active');
		
		$('#_menu li:nth-child(6)').addClass('active');


	});

</script>
<body>
<?php include 'includes/menu.php'; ?>
<div class="container">
	
<div class="despega">
	
<?php include 'includes/tablas.php';?>
<table class="table table-bordered table-hover table-responsive table-list-search  ">
	<thead>
		<tr>
			<th>Number subject</th>
			<th>subject</th>
			<th>Description</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach ($allMatter as $matte ) {
		$idMaterias=$matte->get("idmaterias");
		$materia=$matte->get("materia");
		$descripcion=$matte->get("descripcion");
		echo '   
		<tr id="fila-'.$idMaterias.'">
			<td>'.$idMaterias.'</td>
			<td>'.$materia.'</td>
			<td>'.$descripcion.'</td>
			
			<td><button type="button" class="btn btn-danger" id="'.$idMaterias.'" onclick="eliminar('.$idMaterias.')">Delete</button></td>
			
		</tr>';
	}


	 ?>
	</tbody>


</table>

</div>
</div> <!-- cierre container-->
	
</body>
</html>