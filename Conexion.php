<?php 
	
	class Conexion{

		static public function conectar(){

			$link = new PDO("mysql:host=localhost;dbname=sigied","root","");

			$link -> exec("SET NAMES utf8");

			return $link;

		}

	}


 ?>