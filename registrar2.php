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
			
			//Establezco conexion
			require 'conexion.php';
			
			$sql= "Select * from clubDeportivo";
		
			// Ejecuto la sentencia y guardo el resultado
			$resultado= $mysqli->query($sql);

			$nombre=$_GET['nombre'];
			$tlf=$_GET['telefono'];
			$fecha=$_GET['fecha-nac'];
			$categoria=$_GET['set'];


			try{
			$sql= "insert into clubDeportivo (nombre,telefono,fecha_nacimiento,categoria) values ('$nombre','$tlf','$fecha','$categoria')";


			//Ejecutamos la sentencia y guardamos resultado
			$resultado= $mysqli->query($sql);
			
			?>
			<br>
			<p class="alert alert-primary" role="alert">REGISTRO AGREGADO</p> 
			<br>
			<?php
			}catch(Exception $e){
				echo '<p class="alert alert-danger" role="alert">ERROR</p> ';
			}
			?>
				<a href="index.php" class='btn btn-primary'>Regresar</a>
			
		

	</body>
</html>