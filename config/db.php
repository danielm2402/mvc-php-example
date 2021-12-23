<?php
	class Connect {
		public static function connectto(){
			$conexion = new mysqli("localhost", "root", "", "example_bd");
			return $conexion;
			
		}
	}
