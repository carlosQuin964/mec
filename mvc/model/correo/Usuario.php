<?php

class Usuario
{

    private $idUsuario;
    private $nombreUsuario;
	private $correoElectronico;

    public function __construct($email, $name, $id)
    {
        $this->idUsuario = $id;
        $this->nombreUsuario = $name;
		$this->correoElectronico=$email;
    }


    public function setIdUsuario($id)
    {
        $this->idUsuario = $id;
    }

    public function setNombreUsuario($username)
    {
        $this->nombreUsuario = $username;
    }

    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }
	
	public function getCorreoElectronico()
    {
        return $this->correoElectronico;
    }
	
}

?>