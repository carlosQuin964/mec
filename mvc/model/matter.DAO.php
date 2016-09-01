<?php
require_once 'MatterDTO.php';
require_once '../model/config.php';
class matterDAO{
	private $sql="";
	private $mensaje="";
	private $conect="";

public function __construct(){
	$this->conect=Database::connect();
}

public function readMatter(){
	$this->sql="SELECT idmaterias, materia, descripcion, estadomateria 
	 FROM materias ";
	 try {
	 	$query=$this->conect->prepare($this->sql);
	 	if ($query->execute()) {
	 		$arrayExit = $query->fetchALL(PDO::FETCH_ASSOC);
	 		$allMatter=array();
	 		foreach ($arrayExit as $matter ) {
	 			$matters= new matterDTO();
	 			$matters->set("idmaterias", $matter['idmaterias']);
	 			$matters->set("materia", $matter['materia']);
	 			$matters->set("descripcion", $matter['descripcion']);
	 			$matters->set("estadomateria", $matter['estadomateria']);
	 			$allMatter[]=$matters;
	 		}
	 	}else{
	 		$this->$mensaje="error en sql";
	 	}
	 	
	 } catch (PDOException $e) {
	 	$this->$mensaje="error in conect".$e->getMessage();
	 	
	 }
	 return $allMatter;

}

public function createMatter(matterDTO $new){
	$this->sql="INSERT INTO materias(materia, descripcion, estadomateria)VALUES(?,?,1)";
	try {
		$query=$this->conect->prepare($this->sql);
		$query->bindParam(1, $new->get("materia"));
		$query->bindParam(2, $new->get('descripcion'));
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


public function deleteSubject($idmaterias){
		$this->sql="DELETE FROM materias WHERE idmaterias =?";
		try {
			$query = $this->conexion->prepare($this->sql);
			$query->bindParam(1, $materias);


			if ($query->execute()) {
			
				$this->messagee="very good";
			}else{
				$this->messagee="error in the consulte";
					}	
		} catch (PDOException $e) {
			$this->messagee="error".$e->getMessage();
		}
		return $messagee;
	}


}



 ?>