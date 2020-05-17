<?php
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>
	</head>
	
	<body>
		<div class="container">
			
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=vehiculos&a=actualizar" autocomplete="off">
				
				<input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>" />
				
				<div class="form-group">
					<label for="placa">Placa</label>
					<input type="text" class="form-control" id="placa" name="placa" value="<?php echo $data["vehiculos"]["placa"]?>" />
				</div>
				
				<div class="form-group">
					<label for="marca">Marca</label>
					<input type="text" class="form-control" id="marca" name="marca" value="<?php echo $data["vehiculos"]["marca"]?>" />
				</div>
				
				<div class="form-group">
					<label for="modelo">Modelo</label>
					<input type="text" class="form-control" id="modelo" name="modelo" value="<?php echo $data["vehiculos"]["modelo"]?>" />
				</div>
				
				<div class="form-group">
					<label for="anio">Año</label>
					<input type="text" class="form-control" id="anio" name="anio" value="<?php echo $data["vehiculos"]["anio"]?>" />
				</div>
				
				<div class="form-group">
					<label for="color">Color</label>
					<input type="text" class="form-control" id="color" name="color" value="<?php echo $data["vehiculos"]["color"]?>" />
				</div>
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</body>
	</html>		