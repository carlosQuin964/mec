<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>registration Mec</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="mvc/view/teacher/css/bootstrap.min.css">
	<link rel="stylesheet" href="mvc/view/teacher/js/sweetalert.css">
	<link rel="stylesheet" href="mvc/view/teacher/css/estilosUniversidad.css">
	<link rel="icon" href="mvc/view/teacher/img/LogoUniversidades.ico">
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="mvc/view/teacher/js/bootstrap.min.js"></script>
	<script src="mvc/view/teacher/js/sweetalert.min.js"></script>
	<script src="mvc/view/teacher/js/createUser.js"></script>
</head>
<script>
	$().ready(function(){
		$('.nav li:nth-child(2)').addClass('active')
	});

</script>
<body>
<?php include 'mvc/view/teacher/includes/navexit.php' ?>

	<div class="container center">
		

		<div class="row ">
			<div class="col-md-4 col-md-offset-7">
				<div class="panel panel-default">
					<div class="panel-heading">
						<span class="glyphicon glyphicon-lock"></span> registration</div>
						<div class="panel-body">
							<form role="form" class="col-md-9 go-right">
								<h4>form to registration to MEC </h4>
								<div class="form-group">
									<input type="number" id="documentoidentidad" name="documentoidentidad" class="form-control" required>
									<label for="documentoidentidad">Document</label>
								</div>
								<div class="form-group">
									<input id="nombres" name="nombres" type="text" class="form-control" required maxlength="30">
									<label for="nombres">Your Name</label>
								</div>
								<div class="form-group">
									<input id="apellidos" name="apellidos" type="text" class="form-control" required maxlength="30">
									<label for="apellidos"> Last Name</label>
								</div>
								
								<div class="form-group">
									<input id="correoe" name="correoe" type="email" class="form-control" required maxlength="60">
									<label for="correoe">E-Mail</label>
								</div>
								<div class="form-group">
									<input id="password" name="password" type="password" class="form-control" required maxlength="40">
									<label for="password">password</label>
								</div>
								<div class="form-group">
									<input id="pass" name="pass" type="password" class="form-control" required maxlength="40">
									<label for="pass">Confirm password</label>
								</div>
								
								<div class="panel-footer">
								<input type="hidden" name="registrarCliente" value="ok" >
								<button type="submit" class="btn btn-success">Registration</button>

								</div>
							</form>



						</div>

					</div>
				</div>
			</div>
			

		</div>
	</div>
	<script type="text/javascript">

	</script>
</body>
</html>
