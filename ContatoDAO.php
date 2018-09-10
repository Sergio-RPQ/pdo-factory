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
			$sql 	= "SELECT * FROM contatos;";
			$rs 	= $this->conexao->query($sql);
			return $rs->fetchAll();
		}

		public function listarContatoID($id){
			//$sql		= "SELECT * FROM contatos WHERE id=?";
			$sql		= "SELECT id, nome, idade FROM contatos WHERE id = ?";
			$consulta 	= $this->conexao->prepare($sql);
			$consulta->bindParam(1, $id, PDO::PARAM_INT);
			$resultado = $consulta->execute();
			$arrayRetorno = [];

			if($resultado){
				$contador = 0;
				while($reg = $consulta->fetch(PDO::FETCH_OBJ)){/*Recuperar array utilize PDO::FETCH_ASSOC*/
					$arrayRetorno['ID']		= $reg->id;
					$arrayRetorno['NOME']  	= $reg->nome;
					$arrayRetorno['IDADE'] 	= $reg->idade;
					$contador++;
				}
			}
			return $arrayRetorno;
			//$consulta->bindParam(1, $id);
			//$consulta->bindParam(':id', $id, PDO::PARAM_INT);
			//$consulta->bindValue(':id', $id, PDO::PARAM_INT);
			//VALORES PARA BINDPARAM			
		    //PDO::PARAM_BOOL
		    //PDO::PARAM_NULL
		    //PDO::PARAM_INT
		    //PDO::PARAM_STR (esse é o valor padrão)
		    //PDO::PARAM_LOB
			//$resultado = $consulta->execute();
			
			//while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
			//	echo $linha['nome'].'<br>';
			//}

		}

		public function listarContatoCodigo(){

		}

		public function inserirContato($contato){
			$sql = "INSERT INTO contatos(nome, idade) VALUES(:nome, :idade)";
			$inserir = $this->conexao->prepare($sql);
			$inserir->bindParam(':nome', $contato->getNome(), PDO::PARAM_STR);
			$inserir->bindParam(':idade', $contato->getIdade(), PDO::PARAM_INT);
			$resultado = $inserir->execute();

			if($resultado)
				return 'USUÁRIO FOI INSERIDO NA BASE.';
			else
				return 'NAO FOI POSSÍVEL INSERIR O USUARIO NA BASE.';
		}

		public function atualizarContato($id, $contato){
			$sql 	= "UPDATE contatos SET nome=:nome, idade=:idade WHERE id=:id";
			$update = $this->conexao->prepare($sql);
			$update->bindParam(':nome', $contato->getNome(), PDO::PARAM_STR);
			$update->bindParam(':idade', $contato->getIdade(), PDO::PARAM_INT);
			$update->bindParam(':id', $id, PDO::PARAM_INT);
			$resultado = $update->execute();

			if($resultado)
				return 'Usuário atualizado';
			else
				return 'Não atualizado';
		}

		public function deletarContato($id){

			$sql = "DELETE FROM contatos WHERE id=:id";
			$delete = $this->conexao->prepare($sql);
			$delete->bindParam(':id', $id, PDO::PARAM_INT);
			$resultado = $delete->execute();

			if($resultado)
				return 'Usuário deletado!';
			else
				return 'Nao foi possível deletar o usuário.';
		}




	}