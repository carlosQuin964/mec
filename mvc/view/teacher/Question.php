<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Question</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/menuA.css">
	<link rel="stylesheet" href="js/sweetalert.css">
	<link rel="icon" href="img/LogoUniversidades.ico">

	<script src="js/jquery-1.12.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/sweetalert.min.js"></script>
	<script src="js/CreateQuestion.js"></script>
	<script src="js/filtro.js"></script>
</head>
<?php 
	 include'../../model/QuestionDAO.php';
	$question = new QuestionDAO();
	
	$allQuestion = $question->readQuestion();
	//var_dump ($allExam);


	 ?>
<body>
<script>
		$().ready(function(){
			$('#_menu li:nth-child(7)').addClass('active');
			
		});
	</script>
<?php include 'includes/menu.php'; ?>
<div class="container despega">
	<form >
		<div class="form-group">
			<label for="enunciado">Enunciado</label>
			<input type="text" name="enunciado" id="enunciado" class="form-control" required="">
		</div>
		<input type="hidden" name="addQuestion" value="ok">
		<button type="submit" class="btn btn-warning pull-right">Create Question</button>
	</form>
<div class="despega">
	

<?php include 'includes/tablas.php' ?>
	<div class="col-md-9">
		
<table class="table table-responsive table-bordered table-hover table-condensed  table-list-search">
<thead>
	
<tr>
	
<th>Number question</th>
<th>question</th>
<th>action</th>


</a>


</tr>

</thead>

	<tbody>
	<?php
	 foreach ($allQuestion as $Quest ){
	 	$idenunciado = $Quest->get('idenunciado');
		
	echo'
		<tr id="fila-'.$idenunciado.'">
		<td>'.$idenunciado.'</td>
		<td>'.$Quest->get('enunciado') .'</td>
		<td>

		<a href="answer.php?id='.$idenunciado.'"><button class="btn btn-info"id="'.$idenunciado.'">Add To Exam</button></a>
		<button class="btn btn-warning">modify</button>
		<button class="btn btn-danger">Delete</button>

		 </td>
		
		
		</tr>
		';
	 }
	 	?>



	</tbody>
</table>
	</div>
</div>

</div>
	
</body>
</html>