<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<title>Club Deportivo La Venta</title>
	</head>
	<body>
		<?php
			
			require 'conexion.php';
    
			$sql= "Select * from clubDeportivo";
		
			// Ejecuto la sentencia y guardo el resultado
			$resultado= $mysqli->query($sql);
		
				$id=$_GET['id'];
				$nombre=$_GET['nombre'];
				$telefono=$_GET['telefono'];
				$fecha=$_GET['fecha-nac'];
				$categoria=$_GET['set'];