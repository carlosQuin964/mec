<?php 
class ExamDTO{
  public $idexamen;
  public $nombreexamen;
  public $descripcion;
  public $fechainicio;
  public $fechafinal;
  public $estadocurso;

public function set ($fields, $value){
$this->$fields = $value;
}
public function get ($fields){
return $this->$fields;
}


}


 ?>