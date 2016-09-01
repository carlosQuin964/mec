<?php

require_once dirname(__dir__) . '../model/connectionLogin.php';
session_start();

class Login {

    private static $instancia;
    private $dbh;

    private function __construct() {

        $this->dbh = DbConnection::singletonConexion();
    }

    public static function singletonLogin() {

        if (!isset(self::$instancia)) {

            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        }

        return self::$instancia;
    }

    public function validarUsuario($nick, $password) {

        try {

            $sql = "SELECT * from personas WHERE documentoidentidad = ? AND password = ?";
            $query = $this->dbh->prepare($sql);
            $query->bindParam(1, $nick);
            $query->bindParam(2, $password);
            
            $query->execute();
            $this->dbh = null;

//si existe el usuario
            if ($query->rowCount() == 1) {

                $fila = $query->fetch();
                $_SESSION['nombres'] = $fila['nombres'];
                $_SESSION['documentoidentidad'] = $fila['documentoidentidad'];
                $_SESSION['apellidos'] = $fila['apellidos'];
                $_SESSION['correoe'] = $fila['correoe'];
                $_SESSION['password'] = $fila['password'];
                $_SESSION['idrol'] = $fila['idrol'];
                $_SESSION['fechacreacion'] = $fila['fechacreacion'];
                $_SESSION['estadopersona'] = $fila['estadopersona'];
                
                

                return TRUE;
            }
        } catch (PDOException $e) {

            print "Error!: " . $e->getMessage();
        }
    }

// Evita que el objeto se pueda clonar
    public function __clone() {

        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
    }

}
