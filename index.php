<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Control de cloro</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/picnic">
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
					<option value="">Elija un Depósito ... </option>
					<option value="1">Trobajo</option>
					<option value="2">San Andres</option>
					<option value="3">Villabalter</option>
					<option value="4">Pinilla</option>
					<option value="5">Ferral del Bernesga</option>
				</select>
				<br><br>
				<label for="">Operación</label>
				<select name="operacion" id="operacion" required="">
					<option value="">Elija una Operación...</option>
					<option value="1">Lectura</option>
					<option value="2">Llenado</option>
					<option value="3">Salida</option>
					<option value="4">Entrada</option>
				</select>
				<br><br>
				<label for="">Litros</label>
				<input type="number"name="litros" id="litros" min="0" title ="Solo valores positivos">
				<br><br>
				<label for="">Garrafas</label>
				<input type="number" id="garrafas" name="garrafas" min="0" title ="Solo valores positivos">
				<br><br>
				<label for="">Movimiento garrafas</label>
				<input type="number" id="movimiento" name="movimiento" disabled="">
				<br><br>

				

			</form>
			
		</div>
		<div class="flex two center">
			<button  id="btn" name="btn">Registrar</button>					
		</div>
		
		<script
			  src="https://code.jquery.com/jquery-3.5.1.min.js"
			  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
			  crossorigin="anonymous"></script>

		<script>
			$(document).ready(function(){
				//$("#btn").click();	

				$("#operacion").blur(function (){
					alert("sin foco");
					let seleccion = ("#operacion").val();
					console.log(seleccion);
				/*	if ((seleccion)>=3) {
						$("#movimiento").removeattr("disabled");
						alert ("quitado");
					}
				*/
				});

			 });

			function valida () {
				let deposito= $("#deposito").val();
				let accion= $("#accion").val();	
				if (deposito < 1) alert ("Elige un deposito");


			}

			function activa() {
				alert ("activando");
			}

		</script>
		
</body>
</html>