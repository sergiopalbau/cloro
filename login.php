<?php
session_start();
if( isset($_SESSION['msg'])){
	$var = $_SESSION['msg'];
}else{
	$var = "";
}

/*
if (isset($_SESSION['msg']) || empty($_SESSION['msg'])){
	echo $_SESSION['msg'];
}*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>304SAR</title>
	<link rel="stylesheet" href="css/login.css">
</head>

</html>
<body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>

			<div class="login-form">
				<form action="logon.php" method="POST">
					<div class="control-group">
						<input type="text" class="login-field"  placeholder="usuario" id="login-name" name="usuario" required="true">
					</div>

					<div class="control-group">
						<input type="password" class="login-field" value="" placeholder="pwd" id="login-pass" name="pwd" required="true">					
					</div>

					<input name="enviar" class="btn"  type="submit">
					<br>
					<label for="" style="color:red"> <?php echo $var?> </label>
				</form>
				
			</div>
		</div>
	</div>
</body>