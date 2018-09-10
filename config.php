<?php
	/* CONFIGURAÇÕES GERAIS 
		Author: Sergio Ricardo
		Data: 10/09/2018
	*/
	//On Off debug mode	
	define ('DEBUG', true);

	//CONFIG PARA BANCO EM SQLITE
	define('DB_DRIVER_SQLITE', 'sqlite');
	define('DB_HOSTNAME_SQLITE', 'C:\servidorphp\pdo_factory\bd');
	define('DB_DATABASE_SQLITE', '\agenda.s3db');
	define('DB_PORT_SQLITE', '');
	define('DB_USER_SQLITE', '');
	define('DB_PASSWD_SQLITE', '');

	//CONFIG PARA BANCO EM MYSQL
	define('DB_DRIVER_MYSQL', 'mysql');
	define('DB_HOST_MYSQL', '127.0.0.1');
	define('DB_PORT_MYSQL', '3306');
	define('DB_DATABASE_MYSQL', 'agenda');
	define('DB_USER_MYSQL', 'root');
	define('DB_PASSWD_MYSQL', 'srp,123');

	//CONFIG PARA BANCO EM POSTGRESQL
	define('DB_DRIVER_POSTGRESQL', 'pgsql');
	define('DB_HOSTNAME_POSTGRESQL', '127.0.0.1');
	define('DB_PORT_POSTGRESQL', '5432');
	define('DB_DATABASE_POSTGRESQL', 'agenda');
	define('DB_USER_POSTGRESQL', 'postgres');
	define('DB_PASSWD_POSTGRESQL', 'srp,123');

	//CONFIG PARA BANCO EM MS SQL SERVER
	define('DB_DRIVER_MSSQLSERVER', 'mssql');
	define('DB_HOSTNAME_MSSQLSERVER', '127.0.0.1');
	define('DB_PORT_MSSQLSERVER', '');
	define('DB_DATABASE_MSSQLSERVER', 'agenda');
	define('DB_USER_MSSQLSERVER', '');
	define('DB_PASSWD_MSSQLSERVER', '');


	//CONFIG PARA BANCO EM ORACLE
	define('DB_DRIVER_ORACLE', 'oci');

	//DEFINE A CONFIGURAÇÃO ATUAL
	define('DB_DRIVER', 	DB_DRIVER_SQLITE);
	define('DB_HOSTNAME', 	DB_HOSTNAME_SQLITE);
	define('DB_PORT', 		DB_PORT_SQLITE);
	define('DB_DATABASE', 	DB_DATABASE_SQLITE);
	define('DB_USER', 		DB_USER_SQLITE);
	define('DB_PASSWD', 	DB_PASSWD_SQLITE);