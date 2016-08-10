<?php 
class ExamDTO{
  public $idexamen =0;
  public $nombreexamen ="";
  public $descripcion ="";
  public $fechainicio ="";
  public $fechafinal ="";
  public $estadocurso ="";

public function set($campo,$valor){
	$this->$campo=$valor;
}

public function get($campo){
	return $this->$campo;
}


}



 ?>