<?php
	class usuario{
		private $id;
		private $nombres;
		private $apellidos;
		private $telefono;
		private $direccion;
		private $correo;
 
		function __construct(){}
 
		public function getid($id){
		return $this->id;
		}
 
		public function setid($id){
			$this->id = $id;
		}
		public function getnombres($nombres){
		return $this->nombres;
		}
 
		public function setnombres($nombres){
			$this->nombres = $nombres;
		}
 
		public function getapellidos($apellidos){
			return $this->apellidos;
		}
 
		public function setapellidos($apellidos){
			$this->apellidos = $apellidos;
		}
 
		public function gettelefono($telefono){
		return $this->telefono;
		}
 
		public function settelefono($telefono){
			$this->telelfono = $telelfono;
		}
		public function getdireccion($direccion){
			return $this->direccion;
		}
 
		public function setdireccion($direccion){
			$this->direccion = $direccion;
		}
		public function getcorreo($correo){
			return $this->correo;
		}
 
		public function setcorreo($correo){
			$this->correo = $correo;
		}
	}
?>