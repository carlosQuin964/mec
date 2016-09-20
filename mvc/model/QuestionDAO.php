<?php
require_once 'questionDTO.php';
require_once 'config.php';
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

public function readQuestion(){
	$this->sql="SELECT idenunciado, enunciado, estadoenunciado FROM enunciado ";
	 try {
	 	$query=$this->conect->prepare($this->sql);
	 	if ($query->execute()) {
	 		$arrayExit = $query->fetchALL(PDO::FETCH_ASSOC);
	 		$allQuestion=array();
	 		foreach ($arrayExit as $Questio ) {
	 			$Question= new questionDTO();
	 			$Question->set("idenunciado", $Questio['idenunciado']);
	 			$Question->set("enunciado", $Questio['enunciado']);
	 			$Question->set("estadoenunciado", $Questio['estadoenunciado']);
	 			
	 			$allQuestion[]=$Question;
	 		}
	 	}else{
	 		$this->$mensaje="error en sql";
	 	}
	 	
	 } catch (PDOException $e) {
	 	$this->$mensaje="error in conect".$e->getMessage();
	 	
	 }
	 return $allQuestion;

}





}



 ?>