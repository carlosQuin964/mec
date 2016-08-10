<?php
class CourseDTO{
  public $idcurso;
  public $nombrecurso;
  public $descripcion;
  public $fechacreacion;
  public $estadocurso;

public function set ($fields, $value){
$this->$fields = $value;
}
public function get ($fields){
return $this->$fields;
}

}


 ?>