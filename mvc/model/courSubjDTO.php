<?php
class courSubjDTO{
  public $idcursomaterias;
  public $idmaterias;
  

public function set ($fields, $value){
$this->$fields = $value;
}
public function get ($fields){
return $this->$fields;
}

}


 ?>