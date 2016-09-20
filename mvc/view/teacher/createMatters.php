<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create Matters</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/menuA.css">
	<link rel="icon" href="img/LogoUniversidades.ico">
	<link rel="stylesheet" href="js/sweetalert.css">
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/prueba.js"></script> 
	<script src="js/sweetalert.min.js"></script>
</head>
<script>
	$().ready(function(){
		$('#_menu li:nth-child(5)').addClass('active');
		$('#home li:nth-child(4)').addClass('active');
	});
</script>
<body>
<?php include 'includes/menu.php'; ?>
<div class="container despega">
	<form>
		<div class="form-group">
			<label for="materia">Name subject</label>
			<input type="text" name="materia" id="materia" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label for="descripcion">description subject</label>
			
			<textarea type="text" name="descripcion" id="descripcion"  class="form-control" cols="30" rows="3"></textarea>
		</div>
		<input type="hidden" name="createMatter" value="ok" id="">
		<button type="submit" class="btn btn-info">Create Matter</button>
	</form>
</div>
	
</body>
</html>