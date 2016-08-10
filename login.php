<?php require 'mvc/model/config.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    
    <title>Mec</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="mvc/view/css/estilosUniversidad.css">
    <link rel="stylesheet" href="mvc/view/css/bootstrap.css">
    <link rel="icon" href="mvc/view/img/LogoUniversidades.ico">
    
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="mvc/view/js/bootstrap.min.js"></script>
</head>
<script>
    $().ready(function(){
        $('.nav li:nth-child(3)').addClass('active')
    });

</script>
<body>
<?php
        require_once  'mvc/Controller/ControllerLogin.php';
        require_once 'mvc/model/connectionLogin.php';
//        if (isset($_POST['textfield'])) {
//            echo ACABAELNOMBRE DE LA FUNCIOOOOOn();
//            return;
//        }
        ?>
    <?php include 'mvc/view/includes/navexit.php' ?>

<div class="container">

    <div class="row">
        <div class="col-md-4">

        </div>
    </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-education"></span> Login</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="post">
                            <div class="form-group">
                                <label for="nick" class="col-sm-3 control-label">
                                    document</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="nick" placeholder="document" name="nick" required maxlength="60">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-3 control-label">
                                        Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <div class="checkbox">
                                            remember me  ...  
                                                <label> 

                                                   <input type="checkbox"/> 
                                                    
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group last">
                                        <div class="col-sm-offset-3 col-sm-9">
                                        
                                        <button type="submit" value="Ingresar" class="btn btn-success">Log in</button>
               
                                                <button type="reset" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-erase"></span>
                                                    Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="panel-footer">
                                        Not Registred? <a href="registration.php">Register here</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script type="text/javascript">

                        </script>
                    </body>
                    </html>
