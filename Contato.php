<?php

	class Contato{

		private $id;
		private $nome;
		private $idade;

		public function setId($id){
			$this->id = $id;
		}

		public function getId(){
			return $this->id;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setIdade($idade){
			$this->idade = $idade;
		}

		public function getIdade(){
			return $this->idade;
		}

	}