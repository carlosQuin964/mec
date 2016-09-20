<?php
class ExQuesDTO{
  public $idenunciado;
  public $idexamen;
  

public function set ($fields, $value){
$this->$fields = $value;
}
public function get ($fields){
return $this->$fields;
}

}


 ?>