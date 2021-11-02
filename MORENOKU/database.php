<?php
	/**
	 * Esta es la coneccion a la base de datos que a su ves es una clase, el nombre de la clase debe tener el mismo que el del archivo
	 * 	function conect02(){
			$con1 = mysqli_connect("HOST", "USUARIO", "CONTRASEÑA");
			mysqli_select_db($con1, "BASE DE DATOS");
			return($con1);
		}
	 */
	class database 
	{
		function conectar(){
			$conn = mysqli_connect('localhost', 'root', '');
			mysqli_select_db($conn, 'intento');
			return $conn;
		}
	}