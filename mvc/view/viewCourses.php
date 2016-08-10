<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view curses</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/menuA.css">
	<link rel="icon" href="img/LogoUniversidades.ico">
	<link rel="stylesheet" href="js/sweetalert.css">
	
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/sweetalert.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="js/deletecourse.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	
	<script src="js/menuA.js"></script>
	<script src="js/filtro.js"></script>

	<?php 
	 include'../model/CustomerDAO.php';
	$course = new CustomerDAO();
	include '../model/CourseDTO.php';
	$allcourse = $course->readCourse();
	//var_dump ($allcourse);


	 ?>

	 <script>
	 	$().ready(function(){
	 		$('#homes li:nth-child(2)').addClass('active');
	 		$('#_menu li:nth-child(2)').addClass('active');
	 	});
	 </script>
</head>
<body>
<?php include 'includes/menu.php' ?>
<div class="container despega">
<?php include 'includes/tablas.php' ?>
	<div class="col-md-9">
		
<table class="table table-responsive table-bordered table-hover table-condensed table-list-search">
<thead>
	
<tr>
	
<th>Number Courses</th>
<th>Name Courses</th>
<th>Description</th>
<th>Date Creation</th>
<th>Delete</th>




</a>


</tr>

</thead>

	<tbody>
	<?php
	 foreach ($allcourse as $courses ){
	 	$idcurso = $courses->get('idcurso');
		
	echo'
		<tr id="fila-'.$idcurso.'">
		<td>'.$idcurso.'</td>
		<td>'.$courses->get('nombrecurso') .'</td>
		<td>'.$courses->get('descripcion').'</td>
		<td>'.$courses->get('fechacreacion').'</td>
		<td> <button type="button" class="btn btn-danger esto" id="'.$idcurso.'" onclick="eliminar('.$idcurso.')">Delete</button></td>
		</tr>
		';
	 }
	 	?>

	</tbody>
</table>
	</div>
	
</div>

</body>


</html>