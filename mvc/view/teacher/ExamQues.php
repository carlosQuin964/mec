<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>bult</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/menuA.css">
	<link rel="stylesheet" href="js/sweetalert.css">
	<script src="js/jquery-1.12.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/sweetalert.min.js"></script>
	<script src="js/exQues.js"></script>
</head>
<?php 
	 include'../../model/QuestionDAO.php';
	$exam = new QuestionDAO();
	
	$allQuestion = $exam->readQuestion();
	//var_dump ($allQuestion);

	 ?>
<body>
<?php $id=$_GET['id']; ?>
</body>
<?php include'includes/menu.php'; ?>
<div class="container despega">

<form> 
<div class="form-group">	
<label for="infoSelect">Select Questions</label>
<select class="form-control" id="infoSelect" name="idenunciado"> 
<?php
foreach ($allQuestion as $Exam ){
	$idenunciado = $Exam->get('idenunciado');
	$enunciado = $Exam->get('enunciado');
   echo '<option name="idenunciado" values="'.$idenunciado.'">'.$idenunciado.'</option>';
}
?>
</select>
</div>
<?php echo'  <input type="hidden" value="'.$id.'" name="idexamen">'; ?>

<input type="hidden" name="CreateBuilExamQues" value="ok">
	<button type="submit" class="btn btn-success pull-right ">Add Question</button>

</form>
  </div>


</html>