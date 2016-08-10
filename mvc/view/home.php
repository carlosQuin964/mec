<!DOCTYPE html>
<html lang="en">
<?php 

require_once'../model/Login.php';
//require'../model/connectionLogin.php';
session_start();

if (isset($_SESSION['nombres'])){

?>

	<head>
		<meta charset="utf-8">
	    <title>Menu</title>
       <!-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/menuA.css">
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen"> 
        <link rel="stylesheet" href="css/style.css" media="screen">
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="js/menuA.js"></script> -->
        <link rel="icon" href="img/LogoUniversidades.ico">
        <link rel="stylesheet" type="text/css" href="css/styleteacher.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/menuA.css">
        <link rel="stylesheet" type="text/css" href="css/hover-effects.css">

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menuA.js"></script>
<style>.baj{margin-top: 58px; margin-left: 40px; }.sub{margin-top: -130px;}</style>
    
   <script>
   	$().ready(function(){
   		$('#home li:nth-child(1)').addClass('active');
   		$('#homes li:nth-child(1)').addClass('active');
   		
   	});

   </script>

    </head>
<?php include 'includes/menu.php' ?>

    <body class="">
        
    <div class="">


<div class="alert alert-success baj">Bienvenido <?php echo $_SESSION['nombres']  ?>.</div>
      <div class="container sub">
        <!-- Effect-1 -->
        <br><br><br><br><br><br>
        <ul>
            <li class="error">
                <div class="port-1 effect-1 mover">
                    <div class="image-box">
                        <img src="img/crear.jpg" alt="Image-1">
                    </div>
                    <div class="text-desc">
                        <h3>Create</h3>
                        <p>Create new courses.</p>
                        <a href="createCourse.php" class="btn">Enter</a>
                    </div>
                </div>
            </li>
            <li class="error">
                <div class="port-1 effect-1 mover">
                    <div class="image-box">
                        <img src="img/desactivar.jpg" alt="Image-1">
                    </div>
                    <div class="text-desc">
                        <h3>view</h3>
                        <p>view courses.</p>
                        <a href="viewCourses.php" class="btn">Enter</a>
                    </div>
                </div>
            </li>
        </ul>
        
        <div class="full-length">
            <div class="container">
                <ul>
                    <li class="error">
                        <div class="port-1 effect-1 mover">
                            <div class="image-box">
                                <img src="img/visualizar.jpg" alt="Image-1">
                            </div>
                            <div class="text-desc">
                                <h3>Display Results</h3>
                                <p>View the results of the students.</p>
                                <a href="#" class="btn">Enter</a>
                            </div>
                        </div>
                    </li>
                    <li class="error">
                        <div class="port-1 effect-1 mover">
                            <div class="image-box">
                                <img src="img/modificar.jpg" alt="Image-1">
                            </div>
                            <div class="text-desc">
                                <h3>Modify</h3>
                                <p>Modify your personal data.</p>
                                <a href="#" class="btn">Enter</a>

                            </div>
                        </div>
                    </li>
                </ul>              
            <div>
         </div>
         <!-- Effect- End -->

        <script src="https://code.jquery.com/jquery.js"></script>   
        <script src="mvc/view/js/plugins.js"></script>
        <script src="mvc/view/js/beetle.js"></script>

       


    </body>
    <script type="text/javascript">
    function htmlbodyHeightUpdate(){
        var height3 = $( window ).height()
        var height1 = $('.nav').height()+50
        height2 = $('.main').height()
        if(height2 > height3){
            $('html').height(Math.max(height1,height3,height2)+10);
            $('body').height(Math.max(height1,height3,height2)+10);
        }
        else
        {
            $('html').height(Math.max(height1,height3,height2));
            $('body').height(Math.max(height1,height3,height2));
        }
        
    }
    $(document).ready(function () {
        htmlbodyHeightUpdate()
        $( window ).resize(function() {
            htmlbodyHeightUpdate()
        });
        $( window ).scroll(function() {
            height2 = $('.main').height()
            htmlbodyHeightUpdate()
        });
    });
</script>

</html>
<?php
}else{

header("Location: ./../../login.php");

}
?>