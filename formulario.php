<?php

	$servidor = "localhost";
	$usuario = "alex";
	$clave = "Desertpunk1.2.9";
	$baseDeDatos = "universidad";

	$enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);


	if(isset($_POST['nombre'], $_POST['ciudad'], $_POST['genero'], $_POST['observaciones'])){

		$nombre= $_POST['nombre'];
		$ciudad= $_POST['ciudad'];
		$genero= $_POST['genero'];
		$observaciones= $_POST['observaciones'];

		$insertarDatos = "INSERT INTO estudiantes VALUES('$nombre','$ciudad','$genero','$observaciones')";

		$ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);
	}; 
 
?>
