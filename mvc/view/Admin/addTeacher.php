<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create Teacher</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/menuA.css">
	<link rel="stylesheet" href="js/sweetalert.css">


	<script src="js/jquery-1.12.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/sweetalert.min.js"></script>
	<script src="js/addTeacher.js"></script>
</head>
<style>.despega{margin-top: 120px;}</style>
<script>
	$().ready(function(){
		$('#_menu li:nth-child(2)').addClass('active');
	});
</script>
<body>
<?php require_once 'includes/Amenu.php'; ?>
<form>
<div class="container despega">
	
<div class="form-group">
	<label for="documentoidentidad">Document</label>
	<input type="number" name="documentoidentidad" id="documentoidentidad"  class="form-control" required="required">
</div>

<div class="form-group">
	<label for="nombres">name</label>
	<input type="text" name="nombres" id="nombres" class="form-control" required="required">
</div>

<div class="form-group">
	<label for="apellidos">Last name</label>
	<input type="text" name="apellidos" id="apellidos" class="form-control" required="required">
</div>

<div class="form-group">
	<label for="correoe">E-mail</label>
	<input type="E-mail" name="correoe" id="correoe" class="form-control" required="required">
</div>
<div class="form-group">
	<label for="password">password</label>
	<input type="password" name="password" id="password" class="form-control" required="required">
</div>
<input type="hidden" name="addTeacher" value="ok" >
<button type="submit" class="btn btn-success">Create Teacher</button>

</form>
</div>
	
</body>
</html>