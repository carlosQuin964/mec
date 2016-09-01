<?php 
require_once '../model/config.php';
class ExamDAO{

private $mensaje="";
private $sql="";
private $conect="";

public function __construct(){
	$this->conect=Database::connect();
}

public function addExam(ExamDTO	$add){
$this->sql="INSERT INTO examenes( nombreexamen, descripcion, fechainicio, fechafinal, estadocurso) VALUES(?,?,?,?,1)";
try {
	$query= $this->conect->prepare($this->sql);
	$query->bindParam(1, $add->get("nombreexamen"));
	$query->bindParam(2, $add->get("descripcion"));
	$query->bindParam(3, $add->get("fechainicio"));
	$query->bindParam(4, $add->get("fechafinal"));
	if ($query->execute()) {
		$this->mensaje='ok';

	}else{
		$this->mensaje='error create Exam';
	}


} catch (PDOException $e) {
	$this->mensaje="error en la conecion".$e->getMessage();
}
return $this->mensaje;
}
public function readExam(){
	$this->sql="SELECT idexamen, nombreexamen, descripcion, fechainicio, fechafinal, estadocurso FROM examenes";
	try {
		$query=$this->conect->prepare($this->sql);
		if ($query->execute()) {
		$arrayExit = $query->fetchALL(PDO::FETCH_ASSOC);
		$allExam=array();
		foreach ($arrayExit as $exame ) {
		$exam= new ExamDTO();
		$exam->set("idexamen", $exame["idexamen"]);
		$exam->set("nombreexamen", $exame["nombreexamen"]);
		$exam->set("descripcion", $exame["descripcion"]);
		$exam->set("fechainicio", $exame["fechainicio"]);
		$exam->set("fechafinal", $exame["fechafinal"]);
		$allExam[]=$exam;
		}
		}else{
			$this->mensaje="erro in  sql";

		}
	} catch (PDOException $e) {
		$this->mensaje="error in connect".$e->getMessage();
		
	}
	return $allExam;
}

public function deleteExam($idexamen){
		$this->sql="DELETE FROM examenes WHERE idexamen =?";
		try {
			$query = $this->conexion->prepare($this->sql);
			$query->bindParam(1, $examenes);


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