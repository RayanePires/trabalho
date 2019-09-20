<?php
	require_once 'Pessoa.php';
	
	class Professor extends Pessoa{
		private $ra;
		private $cpf;
		private $siape;
		
		public function setRa($ra){
			$this->ra = $ra;
		}
		
		public function getRa(){
			return $this->ra;
		}
		public function setCpf($cpf){
			$this->cpf = $cpf;
		}
		
		public function getCpf(){
			return $this->cpf;
		}
		public function setSiape($siape){
			$this->siape = $siape;
		}
		
		public function getSiape(){
			return $this->siape;
		}

		
		
	}
?>