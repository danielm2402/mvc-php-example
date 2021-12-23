<?php
	class Connect {
		public static function connectto(){
			$conexion = new mysqli("localhost", "root", "productsdb", "products");
			return $conexion;
			
		}
	}
