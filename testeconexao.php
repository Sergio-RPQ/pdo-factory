<?php

	require_once 'ContatoDAO.php';
	require_once 'Contato.php';

	$contatodao = new ContatoDAO();

	/*
	echo '<pre>';
	print_r($contatodao->listarTodosContatos());
	echo '</pre>';
	*/

	/*
	echo '<pre>';
	print_r($contatodao->listarTodosContatos());
	echo '</pre>';
	*/
	$arrayContato = $contatodao->listarContatoID(40);
	echo '<pre>';
	print_r($arrayContato);
	echo '</pre>';

	$contato = new Contato();
	$contato->setId($arrayContato['ID']);
	$contato->setNome($arrayContato['NOME']);
	$contato->setIdade($arrayContato['IDADE']);
	

	$contato->setIdade(28);

	echo $contatodao->atualizarContato($contato->getId(), $contato);
	//print_r($contatodao->inserirContato($contato));

	$arrayContato = $contatodao->listarContatoID(40);
	echo '<pre>';
	print_r($arrayContato);
	echo '</pre>';


	echo 'USUARIO QUE SERA DELETADO:';
	$arrayContato = $contatodao->listarContatoID(43);
	echo '<pre>';
	print_r($arrayContato);
	echo '</pre>';

	echo $contatodao->deletarContato(43);

	/*
	echo '<pre>';
	print_r($contatodao->listarTodosContatos());
	echo '</pre>';
	*/

	$contatodao = null;