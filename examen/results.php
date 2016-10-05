
<!DOCTYPE HTML>
<html lang="en-US">

    <head>
	    <meta charset="UTF-8">
	    <title>Results</title>
        <link rel="stylesheet" href="css/estilos.css">
       <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
        <link  rel="icon" href="img/LogoUniversidades.ico">
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/menuA.css">
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    </head>

    <body>

        <?php include 'includes/menu.php'; ?><br/><br/><br/><br/><br/>

        <div class="wrap">
        	<h1>Results</h1><br/><br/>
        	<form action="" method="post">
        	    <?php
                    @$mat=$_POST['matricula'];
                    @$apll=$_POST['apellido'];
                    @$nom=$_POST['nombre'];

                    if(isset($_POST['btnTer'])){
                        $r1=$_POST['optR1'];
                        $r2=$_POST['optR2'];
                        $r3=$_POST['optR3'];
                        $r4=$_POST['optR4'];
                        $r5=$_POST['optR5'];
           
                        $calif=($r1+$r2+$r3+$r4+$r5)*10;
                        printf("<h4>Hello $nom $apll, with registration $mat</h4><br/>");
                        printf("<h4>We inform you that your score on this test was: $calif</h4><br/>");
                        printf("<h4>Successes</h4>");
                    }
                ?>
                   
                <a href="index.php" class="volver">← Home</a>
	        </form>
	    </div>
    </body>
</html>