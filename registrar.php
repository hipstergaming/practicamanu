<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<title>Club Deportivo La Venta</title>
		<style>
		</style>
	</head>
    <body>
		<div class="container">
			<div class="row">
				<h1>Socios</h1>
			</div>
			
			<div class="row">
				<div class="col-md-8">
					<form action="registrar2.php" method="get" id="registro" name="registro" autocomplete="off">
						<div class="form-group">
							<label for="nombre">Nombre: </label>
							<input type="text" id="nombre" name="nombre" class="form-control">
						</div>
						<div class="form-group">
						<label for="telefono">Teléfono: </label>
							<input type="text" id="telefono" name="telefono" maxlength="9" class="form-control">
						</div>
						<div class="form-group">
							<label for="fecha-nac">Fecha de nacimiento: </label>
							<input type="date" id="fecha-nac" name="fecha-nac" class="form-control">
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
							<input type="submit" value="Registrar" class='btn btn-primary'>
						<label>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
	</body>
</html>				