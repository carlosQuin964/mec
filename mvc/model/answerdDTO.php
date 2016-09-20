<?php
class answerdDTO{
  public $idrespuesta;
  public $respuesta;
  public $valorrespuesta;
  public $estadopregunta;
  public $idenunciado;
  

public function set ($fields, $value){
$this->$fields = $value;
}
public function get ($fields){
return $this->$fields;
}

}


 ?>