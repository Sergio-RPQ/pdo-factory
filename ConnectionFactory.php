<?php

	require_once 'config.php';
	
	class ConnectionFactory{
		public static $connection;

		public static function getConnection(){
			if(!isset(self::$connection)){
				try{
					if(DB_DRIVER == 'mysql'){
						self::$connection = new PDO(DB_DRIVER.':host='.DB_HOSTNAME.';dbname='.DB_DATABASE, DB_USER, DB_PASSWD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", 
											 PDO::ATTR_EMULATE_PREPARES => false
											));
						self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            			self::$connection->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
					}	
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