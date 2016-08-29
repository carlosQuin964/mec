<?php
class MatterDTO{
public $idMaterias=0; 
public $materia="";
public $descripcion=""; 
public $estadoMateria=""; 

public function set($campo,$valor){
	$this->$campo=$valor;
}
public function get($campo){
	return $this->$campo;
}

}



 ?>