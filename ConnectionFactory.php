<?php

	require_once 'config.php';
	
	class ConnectionFactory{
		public static $connection;

		public static function getConnection(){
			if(!isset(self::$connection)){
				try{
					switch(DB_DRIVER){
						case 'mysql':
        					self::$connection = new PDO(DB_DRIVER.':host='.DB_HOSTNAME.';port='.DB_PORT.';dbname='.DB_DATABASE, DB_USER, DB_PASSWD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_EMULATE_PREPARES => false));
							self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            				self::$connection->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
            				self::$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        					break;
					    case 'sqlite':
					        self::$connection = new PDO(DB_DRIVER.":".DB_HOSTNAME.DB_DATABASE) 
											or die("Erro ao abrir a base");
							self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							self::$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
					        break;
					    case 'pgsql':
					    	self::$connection = null;
					    	break;
					    case 'mssql':
					    	self::$connection = null;
					    	break;	
					    default:
					       self::$connection = null;
					}
					/*
					if(DB_DRIVER == 'mysql'){
						self::$connection = new PDO(DB_DRIVER.':host='.DB_HOSTNAME.';dbname='.DB_DATABASE, DB_USER, DB_PASSWD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", 
											 PDO::ATTR_EMULATE_PREPARES => false));

						self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            			self::$connection->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
            			self::$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
					}
					else if(DB_DRIVER == 'sqlite'){
						self::$connection = new PDO(DB_DRIVER.":".DB_HOSTNAME.DB_DATABASE) 
											or die("Erro ao abrir a base");
						self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						self::$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);					
					}
					else if(DB_DRIVER == 'pgsql'){
						//self::$connection = new PDO(DB_DRIVER.":");
						//$dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";
					}
					*/	
				}
				catch(PDOException $e){
					echo $e->getMessage();
				}
			}
			return self::$connection;
		}

		public static function getDisconnect(){
			self::$connection = null;
		}

	}