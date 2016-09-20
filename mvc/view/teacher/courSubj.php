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
	<script src="js/courSubj.js"></script>
	
</head>
<?php 
	 include'../../model/matter.DAO.php';
	$subjec = new matterDAO();
	
	$allSubject = $subjec->readMatter();
	//var_dump ($allQuestion);

	 ?>
<body>
<?php $id=$_GET['id']; ?>
</body>
<?php include'includes/menu.php'; ?>
<div class="container despega">

<form> 
<?php echo'  <input type="hidden" value="'.$id.'" name="idcursomaterias">'; ?>
<div class="form-group">	
<label for="infoSelect">Select Subjects</label>
<select class="form-control" id="infoSelect" name="idmaterias"> 
<?php
foreach ($allSubject as $Exam ){
	$idmaterias = $Exam->get('idmaterias');
	$materia = $Exam->get('materia');
   echo '<option name="idmaterias" values="'.$idmaterias.'">'.$idmaterias.'</option>';
}
?>
</select>
</div>

<input type="hidden" name="CreateBuilCourSubj" value="ok">
	<button type="submit" class="btn btn-success pull-right ">Add Question</button>

</form>
  </div>


</html>