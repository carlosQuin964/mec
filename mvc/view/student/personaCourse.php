<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="js/sweetalert.css">
	<link rel="stylesheet" href="css/menuA.css">
	<link rel="stylesheet" href="css/inscri.css">
	
	<script src="js/jquery-1.12.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/sweetalert.min.js"></script>
	<script src="js/perCourse.js"></script>
</head>
<style>.otro{margin-right: -150px;}</style>
<body>
<?php include 'includes/Emenu.php' ?>
<div class="container otro">
          
 <?php 
 include '../../model/Login.php';
 $name=$_GET['name'];
 $inf=$_GET['inf'];
 $id=$_GET['id'];
echo '
         
  <div class="row db-padding-btm db-attached">          
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                  <div class="db-wrapper">
                <div class="db-pricing-eleven db-bk-color-six">
                    <div class="price">
                        <sup>$</sup>599
                                <small>'.$name.'</small>
                    </div>
                    <div class="type">
                        '.$name.'
                    </div>
                    <ul>

                        <li><i class="glyphicon glyphicon-print"></i> '.$inf.' </li>
                        <li><i class="glyphicon glyphicon-time"></i>150+ Projects </li>
                        
                    </ul>
 <form >
 	 <input type="hidden" name="documentoidentidad" id="documentoidentidad" value="'.$_SESSION['documentoidentidad'].'" class="form-control" >
 	<input type="hidden" name="idcurso" value="'.$id.'" id="idcurso">
 	<input type="hidden" value="ok" name="perCourse" >
	<button type="submit" class="btn db-button-color-square btn-lg" >register Course</button>
 </form>         
                    <div class="pricing-footer">
                    </div>
                </div>
                      </div>
            </div>
        </div>
        
    </div>
         ';

 ?> 
                        
</body>
</html>