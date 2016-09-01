<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
            <div class="row">
                <h3>PHP CRUD WITH POSTGRESQL</h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Id Usuario</th>
                      <th>Nombre Usuario</th>                  
					   <th>Correo electrónico</th>    
                    </tr>
                  </thead>
                  <tbody>
                                   
                   <?php
            require_once ('../model/correo/UsuarioDao.php');  
			
			 require_once ('../Controller/PHPMailer/class.phpmailer.php'); 
			 include_once ('../util/Correo.php'); 

            //echo 'LLamado al Dao <br> ';
            $udao = new UsuarioDao();
            $salida = $udao->getAll();
            
            foreach ($salida as $obj) {
                echo '<tr>';
                echo '<td>' . $obj->getIdUsuario() . '</td>';
                echo '<td>' . $obj->getNombreUsuario() . '</td>';
				 echo '<td>' . $obj->getCorreoElectronico() . '</td>';
                echo '</tr>';

            }
            
			
			?>
			
		
			
			<?
	
                  
                  
                  </tbody>
            </table>
				Enviar correos
					<?php
		 $salida2 = $udao->getAll();
        foreach ($salida2 as $obj) {
			echo "enviar al correo : ".$obj->getCorreoElectronico();
			echo '<br>';
          echo  "salida ". $email = new Correo($obj->getCorreoElectronico(), $obj->getNombreUsuario(), $obj->getIdUsuario());
			echo '<br>';
        }
        ?>
            <?
            DbConnection::disconnect();
            ?>
			
        </div>
    </div> <!-- /container -->
  </body>
</html>