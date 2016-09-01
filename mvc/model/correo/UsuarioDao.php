<?php


require_once dirname(__dir__ ) . '../../util/DbConnection.php';
require_once ('Usuario.php');
require_once ('IUsuarioDao.php');




class UsuarioDao implements IUsuarioDao
{

    private $conn = null;

    public function __construct()
    {
        $this->conn = DbConnection::connect();
    }

    public function getAll()
    {
        $result = array();
        $sql = "SELECT * 
				FROM personas";
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            foreach ($stmt->fetchAll(PDO::FETCH_OBJ) as $row) {
                $newUser = new Usuario($row->correoe, $row->nombres, $row->documentoidentidad);
                $result[] = $newUser;
            }
            DbConnection::disconnect();
        }
        catch (PDOException $e) {
            echo "Revisa el siguiente error :" . $e->getMessage();
            DbConnection::disconnect();
        }
        return $result;
    }


    //This method allows you insert a record of user object in database

    public function insertUser(Usuario $usua)
    {
        $salida = 0; //marcador para el resultado de la acción
        $query = "INSERT INTO personas (documentoidentidad, nombres, apellidos, correoe, password, idrol, fechacreacion,estadopersona)
				VALUES(?,?,?,?,?,1,now(),1)";
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1, $usua->getIdUsuario(), PDO::PARAM_INT);
            $stmt->bindParam(2, $usua->getNombreUsuario(), PDO::PARAM_STR);
            $stmt->bindParam(3, $usua->getApUsuario(), PDO::PARAM_INT);
            $stmt->bindParam(4, $usua->getcorreo(), PDO::PARAM_STR);
            $stmt->bindParam(5, $usua->getPassword(), PDO::PARAM_STR);
            $stmt->execute();
            if ($stmt->rowCount() != 0) {
                $salida = 'Registro guardado exitosamente';
            } else {
                $salida = 'No se pudo guardar el registro. Consulte al administrador';
            }
            DbConnection::disconnect();
        }
        catch (PDOException $e) {
            echo " Revisa el siguiente error :" . $e->getMessage();
            DbConnection::disconnect();

        }
        return $salida;

    }


}
