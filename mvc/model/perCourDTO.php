
<?php 
class perCourDTO{
  public $documentoidentidad;
  public $idcurso;
 

public function set ($fields, $value){
$this->$fields = $value;
}
public function get ($fields){
return $this->$fields;
}


}


 ?>