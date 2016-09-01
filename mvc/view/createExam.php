<?php 

require_once'../model/Login.php';
//require'../model/connectionLogin.php';
session_start();

if (isset($_SESSION['nombres'])){

    ?>



<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exame</title>
   <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
   <link rel="stylesheet" href="js/sweetalert.css" />

   <link  rel="icon" href="img/LogoUniversidades.ico">
   <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/menuA.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="js/createExam.js"></script>
<script src="js/sweetalert.min.js"></script>

<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
 <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
 

 
</head>
<script>
$(function () {
$.datepicker.setDefaults($.datepicker.regional["es"]);
$("#datepicker").datepicker({
firstDay: 1,
onSelect: function (date) {
swal("you have chosen "+date, "these safe's choose this date?");
},
});
});
</script>
<script>
$(function () {
$.datepicker.setDefaults($.datepicker.regional["es"]);
$("#datepickeri").datepicker({
firstDay: 1,
onSelect: function (date) {
swal("you have chosen "+date, "these safe's choose this date?");
},
});
});
</script>
<body>
<?php include 'includes/menu.php'; ?>
<div class="container despega">
<form >
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

<?php
        }else{

            header("Location: ./../../login.php");

        }
        ?>