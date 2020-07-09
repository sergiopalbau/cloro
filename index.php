<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Control de cloro</title>
	<link rel="stylesheet" href="css/picnic.min.css">
</head>
<body>
	<div class="flex demo center two">
		<div></div>
		<h1>Control de CLORO INSTALACIONES</h1>
		<div></div>
	</div>
		<div class="flex center two">
			<form action="control.php" method="POST">
				<br>
				<label for="">Depósito</label>
				<select name="deposito" id="deposito" required="">
					<option disabled selected="">Elija un Depósito ... </option>
					<option value="1">Trobajo</option>
					<option value="2">San Andres</option>
					<option value="3">Villabalter</option>
					<option value="4">Pinilla</option>
					<option value="5">Ferral del Bernesga</option>
				</select>
				<br><br>
				<label for="">Operación</label>
				<select name="operacion" id="operacion" required="">
					<option disabled selected="">Elija una Operación...</option>
					<option value="1">Lectura</option>
					<option value="2">Llenado</option>
					<option value="3">Salida</option>
					<option value="4">Entrada</option>
				</select>
				<br><br>
				<label for="">Litros en el bidón</label>
				<input type="number" name="litros" id="litros" min="0" required >
				<br><br>
				<label for="">Garrafas en stock</label>
				<input type="number" id="garrafas" name="garrafas" min="0" required>
				<br><br>
				<label for="">Movimiento garrafas (solo Entrada/Salida)</label>
				<input type="number" id="movimiento" name="movimiento" disabled="" placeholder="Inhabilitado">
				<br><br>

				<button  id="btn" name="btn" value="enviar">Registrar</button>	

			</form>
			
		</div>
		<div class="flex two center">
							
		</div>
		
		<script src="js/jquery-3.5.1.min.js"></script>

		<script src="js/script.js"></script>


		</script>
		
</body>
</html>

