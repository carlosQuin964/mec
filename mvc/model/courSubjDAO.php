<?php
	require_once 'config.php';
class courSubjDAO{
	private $sql="";	
	private $conexion =null;	
	private $messagee="";



	 function __construct(){		
		$this->conexion=Database::connect();	
	}
	

	public function CreateBuilCourSubj(courSubjDTO $newBuild){
		$this->sql="INSERT INTO cursomateria(idcursomaterias, idmaterias) VALUES(?,?)";
		try {
			$query = $this->conexion->prepare($this->sql);
			
			$query->bindParam(1, $newBuild->get("idcursomaterias"));
			$query->bindParam(2, $newBuild->get("idmaterias"));
			

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