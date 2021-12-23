<?php
	class Connect {
		public static function connect(){
			$conexion = new mysqli("localhost", "root", "", "example_bd");
			return $conexion;
			
		}
	}
?>