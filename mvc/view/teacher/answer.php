<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Answerd</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/menuA.css">
	
	<link rel="stylesheet" href="js/sweetalert.css">
	<script src="js/jquery-1.12.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/sweetalert.min.js"></script>
	<script src="js/answerd.js"></script>
</head>
<?php $id=$_GET['id']; ?>
<body>
	<?php include 'includes/menu.php';?>
	<div class="container despega">
	<form>
		
	<div class="col-lg-6">
        
    <div class="input-group">
      <span class="input-group-addon">
        <input type="radio" name="respuest"  >
      </span>
      <input type="text" name="respuesta" class="form-control">


    </div>
   <?php echo'  <input type="hidden" value="'.$id.'" name="idenunciado">'; ?>

  </div>
  <input type="hidden" name="CreateAnswerd" value="ok">
<button type="submit" class="btn btn-warning pull-right">Create Answerd</button>

	</form>
</div>
</div>
</body>
</html>