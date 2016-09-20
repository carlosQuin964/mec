<?php

require_once 'config.php';


class CustomerDAO{
	private $sql="";
	private $outputMessage="";
	private $outputMessageCourse="";
	private $conexion =null;
	private $othermessage="";
	private $messagee="";



	 function __construct(){		
		$this->conexion=Database::connect();	
	}
	
	public function readcustomer(){
		$this->sql="SELECT * FROM personas";
		try {
			$query = $this->conexion->prepare($this->sql);
			if($query->execute()){

			// fetch all convertir las consultas en un arreglo 
			// ftech_Assoc estructura en clave - valor
				$arrayExit = $query->fetchALL(PDO::FETCH_ASSOC);
		// CONVERCION DE DATOS PLANOS A UN OBJeto
				$allCustomer= array();
				foreach ($arrayExit as $customer) {
					$user = new CustomerDTO();
					$user->set("documentoidentidad", $customer["documentoidentidad"]);
					$user->set("nombres", $customer["nombres"]);
					$user->set("apellidos", $customer["apellidos"]);
					$user->set("correoe", $customer["correoe"]);
					$user->set("password", $customer["password"]);
					$user->set("idRol", $customer["idrol"]);
					$user->set("fechacreacion", $customer["fechacreacion"]);
					$user->set("estadopersona", $customer["estadopersona"]);
					
					$allCustomer[]=$user;
				}				
			}else{
				$this->outputMessage='Error in the sql expression';
			}
		} catch (PDOException $e) {
			$this->outputMessage= "error in the connection : " .$e->getMessage();
		}
		return $allCustomer;
	}

	public function registrarCliente(CustomerDTO $newCustomer){
		$this->sql="INSERT INTO personas(documentoidentidad, nombres, apellidos, correoe, password, idrol, fechacreacion, estadopersona ) VALUES(?,?,?,?,?,1,now(),1)";
		try {
			$query = $this->conexion->prepare($this->sql);
			$query->bindParam(1, $newCustomer->get("documentoidentidad"));
			$query->bindParam(2, $newCustomer->get("nombres"));
			$query->bindParam(3, $newCustomer->get("apellidos"));
			$query->bindParam(4, $newCustomer->get("correoe"));
			$query->bindParam(5, $newCustomer->get("password"));
					
			
			if ($query->execute()) {
				$this->outputMessage = 'ok';
			}else{
				$this->outputMessage = 'error en registro';
			}
		} catch (PDOException $e) {
			$this->outputMessage='error en conexion'.$e->getMessage();
		}
		return $this->outputMessage;
	}

	public function addTeacher(CustomerDTO $newCustomer){
		$this->sql="INSERT INTO personas(documentoidentidad, nombres, apellidos, correoe, password, idrol, fechacreacion, estadopersona ) VALUES(?,?,?,?,?,2,now(),1)";
		try {
			$query = $this->conexion->prepare($this->sql);
			$query->bindParam(1, $newCustomer->get("documentoidentidad"));
			$query->bindParam(2, $newCustomer->get("nombres"));
			$query->bindParam(3, $newCustomer->get("apellidos"));
			$query->bindParam(4, $newCustomer->get("correoe"));
			$query->bindParam(5, $newCustomer->get("password"));
					
			
			if ($query->execute()) {
				$this->outputMessage = 'ok';
			}else{
				$this->outputMessage = 'error en registro';
			}
		} catch (PDOException $e) {
			$this->outputMessage='error en conexion'.$e->getMessage();
		}
		return $this->outputMessage;
	}

	public function CreateCourse(CourseDTO $newCourse){
		$this->sql="INSERT INTO cursos(nombrecurso, descripcion, fechacreacion, estadocurso ) VALUES(?,?,now(),1)";
		try {
			$query = $this->conexion->prepare($this->sql);
			
			$query->bindParam(1, $newCourse->get("nombrecurso"));
			$query->bindParam(2, $newCourse->get("descripcion"));
			

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


	public function readCourse(){
		
		$this->sql="SELECT * FROM cursos";
		try {
			$query= $this->conexion->prepare($this->sql);
			if ($query->execute()) {
				$arrayE = $query->fetchALL(PDO::FETCH_ASSOC);
				$allCourse= array();
				foreach ($arrayE as $course) {
					$costu = new CourseDTO();
					$costu->set("idcurso", $course["idcurso"]);
					$costu->set("nombrecurso", $course["nombrecurso"]);
					$costu->set("descripcion", $course["descripcion"]);
					$costu->set("fechacreacion", $course["fechacreacion"]);
					$costu->set("estadocurso", $course["estadocurso"]);
					$allCourse[]=$costu;
					
				}

			}else{
				$this->$othermessage="error in consulte of view course";
			}
		} catch (PDOException $e) {
			$this->$othermessage="error : ".$e->getMessage();
			
		}
		return $allCourse;
	}

	public function deleteCourse($idcurso){
		$this->sql="DELETE FROM cursos WHERE idcurso =?";
		try {
			$query = $this->conexion->prepare($this->sql);
			$query->bindParam(1, $idcurso);


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

	public function updateCustomer(CustomerDTO $newCustomer){
		$id=$_POST['documentoIdentidad'];
		$this->sql="UPDATE personas SET documentoidentidad=?, nombres=?, apellidos=?, correoe=?, password=?, idrol=?, fechacreacion=?, estadopersona=?
		WHERE documentoidentidad=$id";
		try {
			$query = $this->conexion->prepare($this->sql);
			$query->bindParam(1, $newCustomer->get("documentoIdentidad"));
			$query->bindParam(2, $newCustomer->get("nombres"));
			$query->bindParam(3, $newCustomer->get("apellidos"));
			$query->bindParam(4, $newCustomer->get("correoe"));
			$query->bindParam(5, $newCustomer->get("password"));
			$query->bindParam(6, $newCustomer->get("idRol"));
			$query->bindParam(7, $newCustomer->get("fechaCreacion"));
			$query->bindParam(8,$newCustomer->get("estadoPersona"));

					
			
			if ($query->execute()) {
				$this->outputMessage = 'ok';
			}else{
				$this->outputMessage = 'error en registro';
			}
		} catch (PDOException $e) {
			$this->outputMessage='error en conexion'.$e->getMessage();
		}
		return $this->outputMessage;
	}
}

?>