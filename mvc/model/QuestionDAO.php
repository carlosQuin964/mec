<?php
require_once 'questionDTO.php';
require_once '../model/config.php';
class QuestionDAO{
	private $sql="";
	private $mensaje="";
	private $conect="";

public function __construct(){
	$this->conect=Database::connect();
}



public function addQuestion(questionDTO $new){
	$this->sql="INSERT INTO enunciado(enunciado, estadoenunciado)VALUES(?,1)";
	try {
		$query=$this->conect->prepare($this->sql);
		$query->bindParam(1, $new->get("enunciado"));
		
		if ($query->execute()) {
			$this->mensaje="ok";
		}else{
			$this->$mensaje="error in query";
		}
		
	} catch (PDOException $e) {
		$this->$mensaje="error in conect".$e->getMessage();
	}
	return $this->mensaje;

}





}



 ?>