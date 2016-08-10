<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>listCustomer</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<?php 
	include '../model/CustomerDAO.php';
	$customer = new CustomerDAO();
	include '../model/CustomerDTO.php';
	
	$customerregister =  $customer->readcustomer();
	//var_dump ($customerregister);

	?>
</head>
<body>



<div class="container">
	

	<table class="table table-hover">
		<thead>
			<tr>
				<th>documento</th>
				<th>nombre</th>
				<th>apellido</th>
				<th>correo</th>
				
				<th>idRol</th>
				<th>fechacreacion</th>
				<th>estadopersona</th>
				
			</tr>
		</thead>
		<tbody>


			<?php 
			foreach ($customerregister as $customers) {
				$documentoidentidad = $customers->get('documentoidentidad');
				echo '  
					<tr>
						<td>'.$documentoidentidad.'</td>
						<td>'.$customers->get('nombres').'</td>
						<td>'.$customers->get('apellidos').'</td>
						<td>'.$customers->get('correoe').'</td>
						
						<td>'.$customers->get('idRol').'</td>
						<td>'.$customers->get('fechacreacion').'</td>
						<td>'.$customers->get('estadopersona').'</td>
						
					</tr>

				';
			}

			 ?>
		</tbody>
	</table>

</div> <!-- cierre container -->

</body>
</html>