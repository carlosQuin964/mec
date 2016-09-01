<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Question</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/menuA.css">
	<link rel="stylesheet" href="js/sweetalert.css">

	<script src="js/jquery-1.12.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/sweetalert.min.js"></script>
	<script src="js/CreateQuestion.js"></script>
</head>
<body>
<?php include 'includes/menu.php'; ?>
<div class="container despega">
	<form >
		<div class="form-group">
			<label for="enunciado">Enunciado</label>
			<input type="text" name="enunciado" id="enunciado" class="form-control">
		</div>
		<input type="hidden" name="addQuestion" value="ok">
		<button type="submit" class="btn btn-warning pull-right">Create Question</button>
	</form>
</div>
	
</body>
</html>