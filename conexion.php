<?php
	class  Db{
		private static $conexion=NULL;
		private function __construct (){}

		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion= new PDO('mysql:dbname=tienda;host=localhost','root','',$pdo_options);
			return self::$conexion;
			/*mysql:dbname=id12543716_datos_personales;host=localhost','id12543716_root','olabase'*//* datos de host*/
			/*'mysql:dbname=tienda;host=localhost','root',''*//* datos de local*/
		}		
	} 
?>