<?php

/**
 * @author raranda3
 * @copyright 2016
 */


 require_once dirname(__dir__ ) . '../model/correo/UsuarioDao.php'; 
 
class controller{
	
	private $udao;
	
	public function __construct(){
		$this->udao= new UsuarioDao();
		require_once dirname(__dir__ ).'../view/registrar.php'; 
		
	}
    
	    public function redirect($location) {
        header('Location: '.$location);
    }
	
	    public function handleRequest() {
        $option = isset($_POST['btnCreate'])?$_POST['btnCreate']:NULL;
        try {
            if ( !$option || $option == 'create' ) {
				echo 'vamos a qui';
				   $name = '';
				   $idUser = '';
				 $name       = isset($_POST['name']) ?   $_POST['name']  :xxx;
				 $$idUser      = isset($_POST['iduser'])?   $_POST['iduser'] :100;
				 $nuevoUsuario = new Usuario($idUser, $name);				   
                $this->udao->insertUser($nuevoUsuario);
				$this->redirect('../../login.php'); 
				return;
            } else{
                $this->showError("Page not found", "Page for operation ".$option." was not found!");
            }
        } catch ( Exception $e ) {
            // some unknown Exception got through here, use application error page to display it
            $this->showError("Application error", $e->getMessage());
        }
		
		echo 'vamos a qui';
    }
	
	
}

?>