<?php
	require_once 'config.php';
class answerdDAO{
	private $sql="";	
	private $conexion =null;	
	private $messagee="";



	 function __construct(){		
		$this->conexion=Database::connect();	
	}
	

	public function CreateAnswerd(answerdDTO $newAnswer){
		$this->sql="INSERT INTO respuestas(respuesta,
		valorrespuesta, estadopregunta, idenunciado) VALUES(?,1,1,?)";
		try {
			$query = $this->conexion->prepare($this->sql);
			
			$query->bindParam(1, $newAnswer->get("respuesta"));
			$query->bindParam(2, $newAnswer->get("idenunciado"));
			

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