<?php
				
			//Establezco conexion
			require 'conexion.php';
			$id=$_GET['id'];
			$sql= "Select * from clubDeportivo where id='$id'";
		
			// Ejecuto la sentencia y guardo el resultado
			$resultado= $mysqli->query($sql);
			while($fila = $resultado->fetch_assoc()){
			$nombre=$fila['nombre'];
			$telefono=$fila['telefono'];
			$fecha=$fila['fecha_nacimiento'];
			$categoria=$fila['categoria'];
			}
			
	
	
?>
<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<title>Club Deportivo La Venta</title>
		<style>
			/* .form-control{
				width:850px ;
			} */
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h1>Socios</h1>
			</div>
			
			<div class="row">
				<div class="col-md-8">
					<!-- Completar atributos de form -->
					<form action="editar2.php" method="get" name="registro" autocomplete="off">
						<div class="form-group">
							<label for="nombre">Nombre: </label>
							<input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $nombre ?>">
							
						</div>
						
						<div class="form-group">
						<label for="telefono">Teléfono: </label>
							<input type="text" id="telefono" name="telefono" class="form-control" maxlength="9" value="<?php echo $telefono ?>">
							
						</div>
						
						<div class="form-group">
							<label for="fecha-nac">Fecha de nacimiento: </label>
							<input type="date" id="fecha-nac" name="fecha-nac" class="form-control" value="<?php echo $fecha ?>">
							
					
						</div>
						
						<div class="form-group">
						<label for="set">Categoría: </label>
							<select name="set" id="set" class="form-control" value=" <?php echo $categoria ?>">
								<option value="AMATEUR">AMATEUR</option>
								<option value="PROFESIONAL">PROFESIONAL</option>
							</select>
						
							
						</div>
						
						<div class="form-group">
						<label>
							<input type="submit" value="Editar" class='btn btn-primary'>
						<label>
							<input type="hidden" name="id" value="<?php echo $id ?>">
						</div>
					</form>
				</div>
			</div>
		</div>