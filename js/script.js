$(document).ready(function(){
				//cuando pierde el foco operacion habilita o no el movimiento de garrafas
				$("#operacion").blur(function (){
					let seleccion = $("#operacion").delay(500).val(); 
					console.log(seleccion);
				if ((seleccion)>=3) {
						$("#movimiento").removeAttr("disabled");

						$("#movimiento").removeAttr("disabled");
						$("#movimiento").attr("required","");
						$("#movimiento").attr("placeholder","");					
					}else {
						$("#movimiento").attr("disabled", true);
						$("#movimiento").attr("placeholder","inhabilitado");
						$("#movimiento").removeAttr("required");

					}
				
				});

			 });

			function valida () {
				let deposito= $("#deposito").val();
				let accion= $("#operacion").val();	
				if (deposito < 1) alert ("Elige un deposito");


			}

			function activa() {
				alert ("activando");
			}