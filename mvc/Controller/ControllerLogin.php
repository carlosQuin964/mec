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


    if ($usuario == TRUE && $_SESSION['idrol']== 2) {
       
       header('location:mvc\view/teacher/home.php'); 
       
        
    }else if ($usuario == TRUE && $_SESSION['idrol']== 1){

        header('location:mvc/view/student/Ehome.php'); 

     }else if ($usuario == TRUE && $_SESSION['idrol']== 3){

        header('location:mvc/view/Admin/Ahome.php'); 

     }else {
        echo '<script> alert("Username or password incorrect");</script>';    
        echo '<script>window.location="login.php"; </script>';    
    }
}

