<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Built</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="js/sweetalert.css">
	<link rel="stylesheet" href="css/menuA.css">
	
	<script src="js/jquery-1.12.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/sweetalert.min.js"></script>
	<script src="js/exCourse.js"></script>
</head>
<?php 
	 include'../../model/ExamDAO.php';
	$exam = new ExamDAO();
	include '../../model/ExamDTO.php';
	$allExam = $exam->readExam();
	//var_dump ($allExam);

	 include'../../model/CustomerDAO.php';
	$course = new CustomerDAO();
	include '../../model/CourseDTO.php';
	$allcourse = $course->readCourse();
	//var_dump ($allcourse);


	 ?>
<body>
<?php include'includes/menu.php'; ?>
<div class="container despega">

<form> 
<div class="form-group">	
<label for="infoSelect">Select Exam</label>
<select class="form-control" id="infoSelect" name="idexamen"> 
<?php
foreach ($allExam as $Exam ){
	$idexamen = $Exam->get('idexamen');
	$enunciado = $Exam->get('nombreexamen');
   echo '<option name="idexamen" values="'.$idexamen.'">'.$idexamen.'</option>';
}
?>
</select>
</div>

<div class="form-group">	
<label for="infoSelect">Select Course</label>
<select class="form-control" id="infoSelect" name="idcurso"> 
<?php
foreach ($allcourse as $courses ){
	$idcourses = $courses->get('idcurso');
	$name = $courses->get('nombrecurso');
   echo '$name <option name="idexamen" values="'.$idcourses.'">'.$idcourses.'</option>';
}
?>
</select>
</div>


<input type="hidden" name="CreateBuilExamCour" value="ok">
	<button type="submit" class="btn btn-success pull-right ">Create Course</button>

</form>
  </div>

	
</body>
</html>
<script type="text/javascript">
$(document).ready(function() {
  
  $(".selLabel").click(function () {
    $('.dropdown').toggleClass('active');
  });
  
  $(".dropdown-list li").click(function() {
    $('.selLabel').text($(this).text());
    $('.dropdown').removeClass('active');
    $('.selected-item p span').text($('.selLabel').text());
  });
  
});
</script>