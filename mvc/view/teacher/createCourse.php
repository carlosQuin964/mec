<!DOCTYPE html>
<html lang="en">
<head>
<?php 

require_once'../../model/Login.php';
//require'../model/connectionLogin.php';
session_start();

if (isset($_SESSION['nombres'])){

    ?>
	<meta charset="UTF-8">
	<title>CreateCourse</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="icon" href="img/LogoUniversidades.ico">
	<link rel="stylesheet" href="css/menuA.css">
	<link rel="stylesheet" href="js/sweetalert.css">
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/sweetalert.min.js"></script>
    <script src="js/crear.js"></script>
	<style>.baj{margin-top: 69px; margin-left: 40px; }.sub{margin-top: -130px;}</style>
	<script>
		$().ready(function(){
			$('#_menu li:nth-child(1)').addClass('active');
			$('#homes li:nth-child(2)').addClass('active');
		});
	</script>

	
</head>
<body>
<?php include 'includes/menu.php' ?>
<div class="container despega">

	
<form>

	
	<div class="form-group col-md-6">
		<label for="nombrecurso">Name Course</label>
		<input type="text" name="nombrecurso" id="nombrecurso" class="form-control" required="" maxlength="45">
	</div>
	<div class="form-group col-md-6">
		<label for="descripcion">Description</label>
		
		<textarea cols="30" rows="2" name="descripcion" id="descripcion" class="form-control" required="" maxlength="200"></textarea>
	</div>
	<input type="hidden" name="CreateCourse" value="ok">
	<button type="submit" class="btn btn-success pull-right ">Create Course</button>

</form>



</div> <!-- Cierra container -->
	
</body>
</html>

<?php
        }else{

            header("Location: ./../../login.php");

        }
        ?>