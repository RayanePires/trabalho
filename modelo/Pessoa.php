<?php
	abstract class Pessoa{
		private $nome;
		private $idade;
		
		public function Pessoa(){
			echo "<p>classe pessoa construida</p>";
		}
		
		public function setNome($no){
			$this->nome = $no;
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		public function setIdade($ida){
			$this->idade = $ida;
		}
		
		public function getIdade(){
			return $this->idade;
		}
	}
?>