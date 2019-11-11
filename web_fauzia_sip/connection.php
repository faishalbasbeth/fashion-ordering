<?php 
	class DB{
		private static $instance = NULL;

		private function __construct(){}

		private function __clone() {}

		public static function getInstance(){
		session_start();
			if (!isset(self::$instance)) {
				$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
				self::$instance = new PDO('mysql:host=localhost;dbname=w_fauzia','root','',$pdo_options);
			}
			return self::$instance;
		}
	}
 ?>