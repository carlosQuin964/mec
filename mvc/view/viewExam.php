<?php 

require_once'../model/Login.php';
//require'../model/connectionLogin.php';
session_start();

if (isset($_SESSION['nombres'])){

    ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/menuA.css">
	<link rel="stylesheet" href="js/sweetalert.css">

	<script src="js/jquery-1.12.1.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

	<script src="js/bootstrap.js"></script>
	<script src="js/filtro.js"></script>
	<script src="js/deleteExam.js"></script>
	<script src="js/sweetalert.min.js"></script>

	<?php 
	include '../model/ExamDAO.php';
	include '../model/ExamDTO.php';
	$exam= new ExamDAO();
	$allexam = $exam->readExam();
	//var_dump($allexam);

	?>
</head>
<script>
	$().ready(function(){
		$('#homes li:nth-child(3)').addClass('active');
		$('#_menu li:nth-child(4)').addClass('active');
	});

</script>
<body>
<?php include 'includes/menu.php'; ?>

<div class="container despega">
	
<?php include 'includes/tablas.php'; ?>
	<table class="table table-hover table-bordered table-responsive table-condensed table-list-search"> 
		<thead>
			<tr class="active">

				<th>Number Exam</th>
				<th>Name Exam</th>
				<th>Description</th>
				<th>Date Start</th>
				<th>Date Final</th>
				<th>Delete</th>

			</thead>
		</tr>
		<tbody>
			<?php 
			foreach ($allexam as $exame ) {
				$idexamen=$exame->get("idexamen");
				$name=$exame->get("nombreexamen");
				$Description=$exame->get("descripcion");
				$fecha=$exame->get("fechainicio");
				$fechaf=$exame->get("fechafinal");

				echo '<tr class="info" id="fila-'.$idexamen.'">

				<td>'.$idexamen.'</td>
				<td>'.$name.'</td>
				<td>'.$Description.'</td>
				<td>'.$fecha.'</td>
				<td>'.$fechaf.'</td>
				<td><button class="btn btn-info" id="'.$idexamen.'" onclick="eliminar('.$idexamen.')" >Delete</button></td>


			</tr>';

		}

		?>

	</tbody>


	


</table>


</div> <!--cierre container -->
</body>
</html>
<?php
        }else{

            header("Location: ./../../login.php");

        }
        ?>