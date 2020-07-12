<?php

session_start();

$user = "sanandres";
$pwd= "sanandres";


if ($_POST) {
	if (empty($_POST['usuario']) || empty($_POST['pwd']) || !isset($_POST['usuario']) || !isset($_POST['pwd'])){
		$msg = "datos incorrectos";
		$_SESSION['msg'] = $msg;
		header('Location:login.php');
		die();

	}else{
		if ($user == $_POST['usuario'] && $pwd == $_POST['pwd']){
			$_SESSION['login']=true;
		}
		
	}
}

if(!isset($_SESSION['login'])) {
		$msg = "Ingrese credenciales";
		$_SESSION['msg'] = $msg;
		var_dump($msg);
		header('Location:login.php');

	}

header('Location:cloro.php');
?>

