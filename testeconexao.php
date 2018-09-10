<?php

	require_once 'ContatoDAO.php';

	$contatodao = new ContatoDAO();

	/*
	echo '<pre>';
	print_r($contatodao->listarTodosContatos());
	echo '</pre>';
	*/

	var_dump($contatodao->listarTodosContatos());

	$contatodao->listarContatoID(2);



	$contatodao = null;