<?php
class ExCourseDTO{
  public $idexamen;
  public $idcurso;
  

public function set ($fields, $value){
$this->$fields = $value;
}
public function get ($fields){
return $this->$fields;
}

}


 ?>