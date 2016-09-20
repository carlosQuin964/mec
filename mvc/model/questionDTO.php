<?php

class questionDTO{
  public $idenunciado=0; 
  public $enunciado=""; 
  public $estadoenunciado="";

public function set($campo,$valor){
	$this->$campo=$valor;
}
public function get($campo){
	return $this->$campo;
}

	

}




 ?>