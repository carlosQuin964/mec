<?php 
require_once'../../model/Login.php';
//require'../model/connectionLogin.php';
session_start();

if (isset($_SESSION['nombres'])){

    ?>

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
	<script src="js/deleteExam.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	
	<script src="js/menuA.js"></script>
	<script src="js/filtro.js"></script>


	<?php 
	 include'../../model/ExamDAO.php';
	$exam = new ExamDAO();
	include '../../model/ExamDTO.php';
	$allExam = $exam->readExam();
	//var_dump ($allExam);


	 ?>

	 <script>
	 	$().ready(function(){
	 		$('#homes li:nth-child(3)').addClass('active');
	 		$('#_menu li:nth-child(4)').addClass('active');
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
	
<th>Number examen</th>
<th>Name examen</th>
<th>descripcion</th>
<th>fechainicio</th>
<th>fechafinal</th>
<th>Accion</th>
<th>Add</th>





</a>

</thead>


</tr>

	<tbody>
	<?php
	 foreach ($allExam as $Exam ){
	 	$idexamen = $Exam->get('idexamen');
		
	echo'
		<tr id="fila-'.$idexamen.'">
		<td>'.$idexamen.'</td>
		<td>'.$Exam->get('nombreexamen') .'</	td>
		<td>'.$Exam->get('descripcion').'</td>
		<td>'.$Exam->get('fechainicio').'</td>
		<td>'.$Exam->get('fechafinal').'</td>
		<td> <button type="button" class="btn btn-danger esto" id="'.$idexamen.'" onclick="eliminar('.$idexamen.')">Delete</button></td>
		<td>
		<a href="ExamQues.php?id='.$idexamen.'"><button class="btn btn-info"id="'.$idexamen.'">Add Question</button></a>
		</td>
		</tr>
		';
	 }
	 	?>

	</tbody>
</table>
<a href="pruebaPDF.php"><button class="btn btn-warning btn-lg col-md-12">All Exam</button></a>
	</div>
	
</div>

</body>


</html>
<?php
        }else{

            header("Location: ./../../login.php");

        }
        ?>