<?php

require_once 'mvc/model/Login.php';
//accedemos al método singleton que es quién crea la instancia
//de nuestra clase y así podemos acceder sin necesidad de 
//crear nuevas instancias, lo que ahorra consumo de recursos 

$nuevoSingleton = Login::singletonLogin();

if (isset($_POST['nick'])) {
    $nick = $_POST['nick'];
    $password = $_POST['password'];
    //accedemos al método usuarios y los mostramos
    
    $usuario = $nuevoSingleton->validarUsuario($nick, $password);


    if ($usuario == TRUE) {
       
       header('location:mvc\view/home.php'); 
       
        
    }  else {
        echo '<script> alert("Username or password incorrect");</script>';    
        echo '<script>window.location="login.php"; </script>';    
    }
}

