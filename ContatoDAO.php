<?php
	
	require_once 'ConnectionFactory.php';

	class ContatoDAO{

		private $conexao = null;

		public function __construct(){
			$this->conexao = ConnectionFactory::getConnection();
		}

		public function __destruct(){
			$this->conexao = null;
			ConnectionFactory::getDisconnect();
		}

		public function listarTodosContatos(){
			$sql 	= "SELECT * FROM contatos";
			$rs 	= $this->conexao->query($sql);
			return $rs->fetchAll();
		}

		public function listarContatoID($id){
			//$sql		= "SELECT * FROM contatos WHERE id=?";
			$sql		= "SELECT * FROM contatos WHERE id=:id";
			$consulta 	= $this->conexao->prepare($sql);
			//$consulta->bindParam(1, $id);
			//$consulta->bindParam(':id', $id, PDO::PARAM_INT);
			$consulta->bindValue(':id', $id, PDO::PARAM_INT);
			//VALORES PARA BINDPARAM			
		    //PDO::PARAM_BOOL
		    //PDO::PARAM_NULL
		    //PDO::PARAM_INT
		    //PDO::PARAM_STR (esse é o valor padrão)
		    //PDO::PARAM_LOB
			$resultado = $consulta->execute();
			
			while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
				echo $linha['nome'].'<br>';
			}

		}

		public function listarContatoCodigo(){

		}

		public function inserirContato(){

		}

		public function atualizarContato(){

		}

		public function deletarContato(){

		}




	}