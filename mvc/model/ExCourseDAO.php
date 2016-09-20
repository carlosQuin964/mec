<?php
	require_once 'config.php';
class ExCourseDAO{
	private $sql="";	
	private $conexion =null;	
	private $messagee="";



	 function __construct(){		
		$this->conexion=Database::connect();	
	}
	

	public function CreateBuilExamCour(ExCourseDTO $newBuild){
		$this->sql="INSERT INTO excurso(idexamen, idcurso) VALUES(?,?)";
		try {
			$query = $this->conexion->prepare($this->sql);
			
			$query->bindParam(1, $newBuild->get("idexamen"));
			$query->bindParam(2, $newBuild->get("idcurso"));
			

			if ($query->execute()) {
			$this->messagee = 'ok';
			}else{
				$this->messagee = 'bad';
			}
		} catch (PDOException $e) {
			$this->messagee='error in connect crear'.$e->getMessage();
		}
		return $this->messagee;
	}

}

?>