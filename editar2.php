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
                try{
					// $sql= "update base set nombre = '$nombre', correo = '$email', fecha = '$fecha', premium = '$premium' where id = '$id'";
					$sql = "update clubDeportivo set nombre= '$nombre', telefono= '$telefono', fecha_nacimiento= '$fecha', categoria= '$categoria' where id like '$id'";
					$resultado= $mysqli->query($sql);
					?>
			<br>
			<p class="alert alert-primary" role="alert">REGISTRO MODIFICADO</p> 
			<br>
		<?php
				}catch(Exception $e){
					echo '<p class="alert alert-danger" role="alert">ERROR</p> ';
				}
		?>
	
			
				<a href="index.php" class='btn btn-primary'>Regresar</a>
			<?php
			
		?>
	</body>
</html>