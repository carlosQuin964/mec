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
	<title>Home</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="icon" href="img/LogoUniversidades.ico">
	<link rel="stylesheet" href="css/menuA.css">
	<link rel="stylesheet" href="css/homeOver.css">
	<script src="js/jquery-1.12.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'includes/Emenu.php'; ?>
<div class="container despega">
	<div class="main">
    	<div class="box">
			<img src="img/cursos.jpg" />
				<div class="overlay">
				</div>
			<a class="more" href="seeCourse.php">see courses</a>
			
			
		</div>
		
		<div class="box">
			<img src="img/homero.jpg" />
				<div class="overlay">
				</div>
			<a href="#" class="btn" data-toggle="modal" data-target="#myModal">Personal Data</a>
		</div>

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog mod" role="document">
    <div class="modal-content">
<div class="modal-header">
 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">Modal title</h4>
</div>
<div class="modal-body">
  <form action="../../Controller/EcontrollerUp.php" method="POST">
    <div class="form-group">

 <input type="hidden" name="documentoIdentidad" id="documentoidentidad" value="<?php echo $_SESSION['documentoidentidad']?>" class="form-control" >
    </div>
    <div class="form-group">
  <label for="nombres">Nombre</label>
    <input type="text" name="nombres" id="nombres" value="<?php echo $_SESSION['nombres']?>" class="form-control" >
      </div>
      <div class="form-group">
   <label for="apellidos">Apellidos</label>
 <input type="text" name="apellidos" id="apellidos" class="form-control" value="<?php echo $_SESSION['apellidos']?>"  >
     </div>
     <div class="form-group">
   <label for="correoe">correo</label>
 <input type="text" name="correoe" id="correoe" class="form-control" value="<?php echo $_SESSION['correoe']?>" >
        </div>
    <div class="form-group">
 <label for="password">Contraseña</label>
 <input type="password" name="password" id="password" class="form-control" value="<?php echo $_SESSION['password']?>" >
</div>
    <div class="form-group">

 <input type="hidden" name="idRol" id="idrol" class="form-control" value="<?php echo $_SESSION['idrol']?>" >
     </div>
     <div class="form-group">

   <input type="hidden" name="fechaCreacion" id="fechacreacion" class="form-control" value="<?php echo $_SESSION['fechacreacion']?>" >
         </div>
    <div class="form-group">

<input type="hidden" name="estadoPersona" id="estadopersona" class="form-control" value="<?php echo $_SESSION['estadopersona']?>" >
    </div>
    </div>
 <div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 <input type="hidden" name="updateCustomer" value="ok" id="">
    <button type="submit" class="btn btn-primary">Save changes</button>
     </form>
                                </div>
                            </div>
                        </div>
                    </div>
                
		
		<div class="box">
			<img src="img/hqdefault.jpg" />
				<div class="overlay">
				</div>
			<a href="#" class="btn" data-toggle="modal" data-target="#myModal">see available Exam</a>
		</div>
		
		<div class="box">
			<img src="img/lectura.jpg" />
				<div class="overlay">
				</div>
			<a href="#">see available subjects</a>
		</div>
		
		<div class="box">
			<img src="img/sadhomer.jpg" />
				<div class="overlay">
				</div>
			<a href="#">You exam lost</a>
		</div>
		
		<div class="box">
			<img src="img/hqdefault (1).jpg" />
				<div class="overlay">
				</div>
			<a href="lagout.php">Sign off</a>
		</div>
	</div>
</div>



	
</body>
</html>
    <?php
        }else{

            header("Location: ../../../login.php");

        }
        ?>