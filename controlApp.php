<?php
require_once('crudApp.php');
require_once('tramite.php');
 
$crud= new CrudTramite();
$tramite= new Tramite();
 
	// si el elemento insertar no viene nulo llama al crud e inserta un tramite
	if (isset($_POST['insertar'])) {
		$tramite->setDe($_POST['de']);
		$tramite->setAsunto($_POST['asunto']);
		$tramite->setFecha($_POST['fecha']);
        $tramite->setDocumento($_POST['documento']);
        $tramite->setEntregado($_POST['entregado']);
        $tramite->setF_entregado($_POST['f_entregado']);
        $tramite->setDelegado($_POST['delegado']);
        $tramite->setF_delegado($_POST['f_delegado']);
        $tramite->setFinalizado($_POST['finalizado']);
        $tramite->setObservacion($_POST['observacion']);
		//llama a la función insertar definida en el crud
		$crud->insertar($tramite);
        header('Location: Appadmin.php');
        
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el tramite
	}elseif(isset($_POST['actualizar'])){
		$tramite->setId($_POST['id']);
		$tramite->setDe($_POST['de']);
		$tramite->setAsunto($_POST['asunto']);
		$tramite->setFecha($_POST['fecha']);
        $tramite->setDocumento($_POST['documento']);
        $tramite->setEntregado($_POST['entregado']);
        $tramite->setF_entregado($_POST['f_entregado']);
        $tramite->setDelegado($_POST['delegado']);
        $tramite->setF_delegado($_POST['f_delegado']);
        $tramite->setFinalizado($_POST['finalizado']);
        $tramite->setObservacion($_POST['observacion']);
		$crud->actualizar($tramite);
        header("location:Appadmin.php");
        
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
        header('Location: Appupdate.php');
	
    }elseif($_GET['accion']=='b'){
        $crud->buscar($_GET['id']);
        header('Location: Appresult.php');
    }   
/*// si la variable accion enviada por GET es == 'e' llama al crud y elimina un tramite
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: Appadmin.php');*/
?>