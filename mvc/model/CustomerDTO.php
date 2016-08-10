
<?php
class CustomerDTO{
  public $documentoIdentidad;
  public $nombres;
  public $apellidos;
  public $correoe;
  public $password;
  public $idRol;
  public $fechaCreacion;
  public $estadoPersona;

public function set ($fields, $value){
   $this->$fields = $value;
  }



 public function get($fields){
  return $this->$fields;
 }
}


/*

  function __construct($documentoIdentidad,$nombres,$correoe,$password,$idRol,$fechaCreacion,$estadopublic){
    $this->nombres = $nombres;
    $this->apellidos=$apellidos;
    $this->correoe=$correoe;
    $this->password=$password;
    $this->idRol=$idRol;
    $this->fechaCreacion=$fechaCreacion;
    $this->estadoPersona=$estadoPersona;
  }

function getDocumentoIdentidad(){
  return $this->$documentoIdentidad;
}

function getNombres(){
  return $this->nombres;
}

function getCorreoe(){
 return $this->correoe;
}
function getPasswor(){
  return$this->password;
}

function getIdRol(){
 return $this->idRol;
}
function getFechaCreacion(){
 return $this->fechaCreacion;
}

function getEstadoPersona(){
 return $this->estadoPersona;
}


function setDocumentoIdentidad($documentoIdentidad){
  $this->documentoIdentidad=$documentoIdentidad;
}

function setNombre($nombres){
  $this->nombres=$nombres;
}

function setApellidos($apellidos){
  $this->apellidos=$apellidos;
}

function setCorreoe($correoe){
  $this->correoe=$correoe;
}

function setPassword($password){
  $this->password=$password;
}



function setIdRol($idRol){
  $this->idRol=$idRol;
}

function setFechaCreacion($fechaCreacion){
  $this->fechaCreacion=$fechaCreacion;
}

function setEstadoPersona($estadoPersona){
  $this->estadoPersona=$estadoPersona;
}
*/
?>













