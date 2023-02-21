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
