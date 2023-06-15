<?php
	class Tramite{
		private $id;
		private $de;
		private $asunto;
        private $fecha;
        private $documento;
        private $entregado;
        private $f_entregado;
        private $delegado;
        private $f_delegado;
        private $finalizado;
        private $observacion;
        
		function __construct(){}
 		public function getDe(){
		return $this->de;
		}
		public function setDe($de){
			$this->de = $de;
		}
		public function getAsunto(){
			return $this->asunto;
		}
		public function setAsunto($asunto){
			$this->asunto = $asunto;
		}
        public function getFecha(){
        return $this->fecha;
		}
		public function setFecha($fecha){
			$this->fecha = $fecha;
		}
        public function getDocumento(){
			return $this->documento;
		}
		public function setDocumento($documento){
			$this->documento = $documento;
		}
        public function getEntregado(){
			return $this->entregado;
		}
		public function setEntregado($entregado){
			$this->entregado = $entregado;
		}
        public function getF_entregado(){
			return $this->f_entregado;
		}
		public function setF_entregado($f_entregado){
			$this->f_entregado = $f_entregado;
		}
        public function getDelegado(){
			return $this->delegado;
		}
		public function setDelegado($delegado){
			$this->delegado = $delegado;
		}
        public function getF_delegado(){
			return $this->f_delegado;
		}
		public function setF_delegado($f_delegado){
			$this->f_delegado = $f_delegado;
		}
        public function getFinalizado(){
			return $this->finalizado;
		}
		public function setFinalizado($finalizado){
			$this->finalizado = $finalizado;
		}
        public function getObservacion(){
			return $this->observacion;
		}
		public function setObservacion($observacion){
			$this->observacion = $observacion;
		}
        public function getId(){
		return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}
	}
?>