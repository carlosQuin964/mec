<?php
	require_once 'config.php';
class ExQuesDAO{
	private $sql="";	
	private $conexion =null;	
	private $messagee="";



	 function __construct(){		
		$this->conexion=Database::connect();	
	}
	

	public function CreateBuilExamQues(ExQuesDTO $newBuild){
		$this->sql="INSERT INTO examenpregunta(idenunciado, idexamen) VALUES(?,?)";
		try {
			$query = $this->conexion->prepare($this->sql);
			
			$query->bindParam(1, $newBuild->get("idenunciado"));
			$query->bindParam(2, $newBuild->get("idexamen"));
			

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