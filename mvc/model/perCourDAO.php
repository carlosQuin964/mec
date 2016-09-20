
<?php
	require_once 'config.php';
class perCourDAO{
	private $sql="";	
	private $conexion =null;	
	private $messagee="";



	 function __construct(){		
		$this->conexion=Database::connect();	
	}
	

	public function perCourse(perCourDTO $newBuild){
		$this->sql="INSERT INTO percurso(documentoidentidad, idcurso) VALUES(?,?)";
		try {
			$query = $this->conexion->prepare($this->sql);
			
			$query->bindParam(1, $newBuild->get("documentoidentidad"));
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