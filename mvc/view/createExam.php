<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exame</title>
   <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/menuA.css">
<script src="js/jquery-1.12.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
 
  <script>
    $().ready(function(){
      $('#homes li:nth-child(3)').addClass('active');
      $('#_menu li:nth-child(3)').addClass('active');
    });
  </script>
</head>

<body>
<?php include 'includes/menu.php'; ?>
<div class="container despega">
<form action="../Controller/ControllerExam.php" method="POST">
<div class="form group col-md-6">
  <label for="nombreexamen">exam name</label>
  <input type="text" name="nombreexamen" id="nombreexamen" class="form-control">
</div>  
<div class="form group col-md-6">
  <label for="descripcion">description</label>
  <input type="text" name="descripcion" id="descripcion" class="form-control">
</div>  
<div class="form-group col-md-6">
<label for="fechainicio">start date</label>
 <input type="text" name="fechainicio" id="datepicker" class="form-control">
</div>
<div class="form-group col-md-6">
<label for="fechafinal">final date</label>
 <input type="text" name="fechafinal" id="datepickeri" class="form-control">
</div>
<input type="hidden" name="addExam" value="ok" id="">
<button type="submit" class="btn btn-warning pull-right">Create Exam</button>


</form>


  
</div>

 
 
 
</body>
</html>