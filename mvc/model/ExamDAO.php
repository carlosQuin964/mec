<?php
	require_once 'config.php';
	//require_once 'ExamDTO.php';
class ExamDAO{
	private $sql="";
	private $outputMessage="";
	private $outputMessageCourse="";
	private $conexion =null;
	private $othermessage="";
	private $messagee="";



	 function __construct(){		
		$this->conexion=Database::connect();	
	}
	
	public function readExam(){
		$this->sql="SELECT * FROM examenes";
		try {
			$query = $this->conexion->prepare($this->sql);
			if($query->execute()){
				$arrayExit = $query->fetchALL(PDO::FETCH_ASSOC);	
				$allCustomer= array();
				foreach ($arrayExit as $Exam) {
					$Exame = new ExamDTO();
					$Exame->set("idexamen", $Exam["idexamen"]);
				$Exame->set("nombreexamen", $Exam["nombreexamen"]);
					$Exame->set("descripcion", $Exam["descripcion"]);
					$Exame->set("fechainicio", $Exam["fechainicio"]);
					$Exame->set("fechafinal", $Exam["fechafinal"]);
					$Exame->set("estadocurso", $Exam["estadocurso"]);
										
					$allExam[]=$Exame;
				}				
			}else{
				$this->outputMessage='Error in the sql expression';
			}
		} catch (PDOException $e) {
			$this->outputMessage= "error in the connection : " .$e->getMessage();
		}
		return $allExam;
	}

	

	public function addExam(ExamDTO $newExam){
		$this->sql="INSERT INTO examenes(nombreexamen, descripcion, fechainicio, fechafinal, estadocurso ) VALUES(?,?,?,?,1)";
		try {
			$query = $this->conexion->prepare($this->sql);
			
			$query->bindParam(1, $newExam->get("nombreexamen"));
			$query->bindParam(2, $newExam->get("descripcion"));
			$query->bindParam(3, $newExam->get("fechainicio"));
			$query->bindParam(4, $newExam->get("fechafinal"));
			

			if ($query->execute()) {
			$this->outputMessageCourse = 'ok';
			}else{
				$this->outputMessageCourse = 'bad';
			}
		} catch (PDOException $e) {
			$this->outputMessageCourse='error in connect crear'.$e->getMessage();
		}
		return $this->outputMessageCourse;
	}


	

	public function deleteExam($idexamen){
		$this->sql="DELETE FROM examenes WHERE idexamen =?";
		try {
			$query = $this->conexion->prepare($this->sql);
			$query->bindParam(1, $idexamen);


			if ($query->execute()) {
			
				$this->messagee="ok";
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