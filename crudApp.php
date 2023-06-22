<?php
require_once('conectApp.php');
	class CrudTramite{
        // constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo tramite
		public function insertar($tramite){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO tramite values(NULL,:de,:asunto,:fecha,:documento,:entregado,:f_entregado,:delegado,:f_delegado,:finalizado,:observacion)');
			$insert->bindValue('de',$tramite->getDe());
			$insert->bindValue('asunto',$tramite->getAsunto());
			$insert->bindValue('fecha',$tramite->getFecha());
            $insert->bindValue('documento',$tramite->getDocumento());
            $insert->bindValue('entregado',$tramite->getEntregado());
            $insert->bindValue('f_entregado',$tramite->getF_entregado());
            $insert->bindValue('delegado',$tramite->getDelegado());
            $insert->bindValue('f_delegado',$tramite->getF_delegado());
            $insert->bindValue('finalizado',$tramite->getFinalizado());
            $insert->bindValue('observacion',$tramite->getObservacion());
			$insert->execute();
		}
        
public function buscar($id){
$db=Db::conectar();
$select=$db->prepare('SELECT * FROM tramite WHERE ID=:id');
$select->bindValue('id',$id);
$select->execute();
$tramite=$select->fetch();
$myTramite= new Tramite();
$myTramite->setId($tramite['id']);
$myTramite->setDe($tramite['de']);
$myTramite->setAsunto($tramite['asunto']);
$myTramite->setFecha($tramite['fecha']);
$myTramite->setDocumento($tramite['documento']);
$myTramite->setEntregado($tramite['entregado']);
$myTramite->setF_entregado($tramite['f_entregado']);
$myTramite->setDelegado($tramite['delegado']);
$myTramite->setF_delegado($tramite['f_delegado']);
$myTramite->setFinalizado($tramite['finalizado']);
$myTramite->setObservacion($tramite['observacion']);
return $myTramite;
 
}   
        
		// método para mostrar todos los tramites
		public function mostrar(){
			$db=Db::conectar();
			$listaTramites=[];
			$select=$db->query('SELECT * FROM tramite ORDER BY id DESC');

			foreach($select->fetchAll() as $tramite){
				$myTramite= new Tramite();
				$myTramite->setId($tramite['id']);
                $myTramite->setDe($tramite['de']);
                $myTramite->setAsunto($tramite['asunto']);
                $myTramite->setFecha($tramite['fecha']);
                $myTramite->setDocumento($tramite['documento']);
                $myTramite->setEntregado($tramite['entregado']);
                $myTramite->setF_entregado($tramite['f_entregado']);
                $myTramite->setDelegado($tramite['delegado']);
                $myTramite->setF_delegado($tramite['f_delegado']);
                $myTramite->setFinalizado($tramite['finalizado']);
                $myTramite->setObservacion($tramite['observacion']);
				$listaTramites[]=$myTramite;  
			}
			return $listaTramites;
            
		}
 
        // método para buscar un tramite, recibe como parámetro el id del tramite
		public function obtenerTramite($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM tramite WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$tramite=$select->fetch();
			$myTramite= new Tramite();
			$myTramite->setId($tramite['id']);
            $myTramite->setDe($tramite['de']);
            $myTramite->setAsunto($tramite['asunto']);
            $myTramite->setFecha($tramite['fecha']);
            $myTramite->setDocumento($tramite['documento']);
            $myTramite->setEntregado($tramite['entregado']);
            $myTramite->setF_entregado($tramite['f_entregado']);
            $myTramite->setDelegado($tramite['delegado']);
            $myTramite->setF_delegado($tramite['f_delegado']);
            $myTramite->setFinalizado($tramite['finalizado']);
            $myTramite->setObservacion($tramite['observacion']);
			return $myTramite;
		}
 
		// método para actualizar un tramite, recibe como parámetro el tramite
		public function actualizar($tramite){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE tramite SET de=:de,asunto=:asunto,fecha=:fecha,documento=:documento,entregado=:entregado,f_entregado=:f_entregado,delegado=:delegado,f_delegado=:f_delegado,finalizado=:finalizado,observacion=:observacion WHERE ID=:id');
			$actualizar->bindValue('id',$tramite->getId());
			$actualizar->bindValue('de',$tramite->getDe());
			$actualizar->bindValue('asunto',$tramite->getAsunto());
			$actualizar->bindValue('fecha',$tramite->getFecha());
            $actualizar->bindValue('documento',$tramite->getDocumento());
            $actualizar->bindValue('entregado',$tramite->getEntregado());
            $actualizar->bindValue('f_entregado',$tramite->getF_entregado());
            $actualizar->bindValue('delegado',$tramite->getDelegado());
            $actualizar->bindValue('f_delegado',$tramite->getF_delegado());
            $actualizar->bindValue('finalizado',$tramite->getFinalizado());
            $actualizar->bindValue('observacion',$tramite->getObservacion());
			$actualizar->execute();
		}
        
        // método para eliminar tramite, recibe como parámetro el id del tramite
		/*public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM tramite WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}*/
	}
?>