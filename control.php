<?php

include ('app/db.php');

if (!$_POST)
{
	//header("location:cloro.php");
	header('Location:login.php');

}


if ($_POST){
	var_dump($_POST);

	$dp =trim($_POST['deposito']);
	$op = trim($_POST['operacion']);
	$l = trim($_POST['litros']);
	$g = trim($_POST['garrafas']);

	if (isset($_POST['movimiento'])){

		$m = trim($_POST['movimiento']);
	}else{
		$m = 0;
	}

	$sql = "INSERT INTO control (id_control, id_dp, id_operacion, litros, garrafas, movimiento, date) VALUES (NULL, $dp, $op, $l, $g, $m, CURRENT_TIMESTAMP);";


	$db = new db();
	$db->query($sql);

	}

	

?>