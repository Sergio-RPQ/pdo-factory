<?php

	define ('DEBUG', true);


	//CONFIG PARA BANCO EM SQLITE
	define('DB_DRIVER_SQLITE', 'sqlite');
	define('DB_HOSTNAME', 'C:\servidorphp\pdo_factory\bd');
	define('DB_DATABASE', '\agenda.s3db');
	define('DB_USER', '');
	define('DB_PASSWD', '');

	//CONFIG PARA BANCO EM MYSQL
	define('DB_DRIVER_MYSQL', 'mysql');



	//CONFIG PARA BANCO EM POSTGRESQL
	define('DB_DRIVER_POSTGRESQL', 'pgsql');


	//CONFIG PARA BANCO EM MS SQL SERVER
	define('DB_DRIVER_MSSQLSERVER', 'mssql');


	//CONFIG PARA BANCO EM ORACLE
	define('DB_DRIVER_ORACLE', 'oci');

	//DEFINE O DRIVER UTILIZAÇÃO NA CONFIGURAÇÃO ATUAL
	define('DB_DRIVER', DB_DRIVER_SQLITE);