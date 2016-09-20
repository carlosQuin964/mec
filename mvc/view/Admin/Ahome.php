
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
	<title>Admin</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/menuA.css">
	<link rel="stylesheet" href="css/homeOver.css">
	<script src="js/jquery-1.12.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'includes/Amenu.php' ?>
<div class="container despega">
	<div class="main">
    	<div class="box">
			<img src="img/loginascustomer_profile.jpg" />
				<div class="overlay">
				</div>
			<a class="more" href="listcustomer.php">see all the users</a>
			
			
		</div>
		<div class="box">
			<img src="img/descarga.jpeg" />
				<div class="overlay">
				</div>
			<a class="more" href="addTeacher.php">Create Teacher</a>
			
			
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