<!DOCTYPE html>
<html >
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
		<title>Review</title>
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

        <?php include 'includes/menu.php'; ?>

        <br/><br/><br/><div class="wrap">
            <h1>Question</h1>
            <ul class="votacion index">
                <form action="results.php" method="post"/>
                    <p> Registration: </p><input type="number" class="form-control" name="matricula" size="11" required maxlength="10"/><br/>
                    <p> Last name: </p><input type="text" class="form-control" name="apellido" size="25" required maxlength="60"/><br/>
                    <p> Name: </p><input type="text" class="form-control" name="nombre" size="25" required maxlength="60"/><br/><br/><br/>

                    <h4>Select the correct answer</h4><br/>

                    <p>1. In PHP all variables begin with the symbol?</p>
                    <!--esta es una respuesta es opcion incorrecta -->
                    <input type="radio" name="optR1" value="0"/> 
                    a) ! <br/>
                    <!--respuesta correcta-->
                    <input type="radio" name="optR1" value="0"/>
                    b) # <br/>
                    <!--incorrecta -->
                    <input type="radio" name="optR1" value="1"/>
                    c) $  <br/><br/><br/>
                    
                    <p>2. What is the correct way to include a file in PHP?</p>
                    <!--esta es una respuesta es opcion incorrecta -->
                    <input type="radio" name="optR2" value="0"/> 
                    a) include "fichero"; <br/>
                    <!--respuesta correcta-->
                    <input type="radio" name="optR2" value="0"/>
                    b) include("fichero");  <br/>
                    <!--incorrecta -->
                    <input type="radio" name="optR2" value="1"/>
                    c) require "fichero"; <br/><br/><br/>

                    <p>3. In PHP, which library is needed to treat images?</p>
                    <!--esta es una respuesta es opcion incorrecta -->
                    <input type="radio" name="optR3" value="1"/> 
                    a) GD <br/>
                    <!--respuesta correcta-->
                    <input type="radio" name="optR3" value="0"/>
                    b) ZIP <br/>
                    <!--incorrecta -->
                    <input type="radio" name="optR3" value="0"/>
                    c) PNG <br/><br/><br/>

                    <p>4. In PHP, which method of access to a database is not an abstract layer?</p>
                    <!--esta es una respuesta es opcion incorrecta -->
                    <input type="radio" name="optR4" value="0"/> 
                    a) ADOdb <br/>
                    <!--respuesta correcta-->
                    <input type="radio" name="optR4" value="1"/>
                    b) mysql <br/>
                    <!--incorrecta -->
                    <input type="radio" name="optR4" value="0"/>
                    c) PDO <br/><br/><br/>

                    <p>5. What is PHP?</p>
                    <!--esta es una respuesta es opcion incorrecta -->
                    <input type="radio" name="optR5" value="1"/> 
                    a) PHP: Hypertext Preprocessor <br/>
                    <!--respuesta correcta-->
                    <input type="radio" name="optR5" value="0"/>
                    b) Private Home Page<br/>
                    <!--incorrecta -->
                    <input type="radio" name="optR5" value="0"/>
                    c) Personal Hypertext Processor <br/><br/><br/>

                    <input type="submit" name="btnTer" value="terminar"/>
                </form>

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
                    printf("Hello $nom $apll, with registration $mat<br/>");
                    printf("We inform you that your score on this test was: $calif<br/>");
                    printf("Successes");
                }
                ?>
            </ul>
        </div>
    </body>
</html>