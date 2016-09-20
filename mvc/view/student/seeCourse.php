<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>see Course</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/see.css">
	<link rel="stylesheet" href="css/menuA.css">
	<script src="js/jquery-1.12.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/see.js"></script>
</head>
<script>
	$().ready(function(){
		$('#_menu li:nth-child(2)').addClass('active');
	});

</script>
<style>.despega{margin-top: 120px; margin-right: -200px;}</style>
<?php
 include '../../model/CustomerDAO.php'; 
 include '../../model/CourseDTO.php'; 

$CustomerDAO = new CustomerDAO();

$allCourse = $CustomerDAO->readCourse();
//var_dump($allCourse).die();

?>

<body>
<?php include 'includes/Emenu.php'; ?>	

<?php foreach ($allCourse as  $Course) {
	$id = $Course->get('idcurso');
	$name= $Course->get('nombrecurso');
	$description = $Course->get('descripcion');
	echo'
<div class="container despega">
<div class="row ">
        <div class="col-sm-3">
            <div class="card">
                <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                <div class="avatar">
                    <img src="" alt="" />
                </div>
                <div class="content">
                    <p>'.$name.' <br>
                       '.$description.'</p>
                    <p>
                    <p> Number course'.$id.' <br>
                    <a href="personaCourse.php?id='.$id.'&name='.$name.'&inf='.$description.'"><button class="btn btn-default"id="'.$id.'">register Course</button></a></p>
                </div>
            </div>
    </div>
</div>


<img class="src-image"  src="img/lectura.jpg"/>
        </div>
</div>
	
';} ?>
       
      


	
</body>
</html>