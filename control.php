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

	$sql = "INSERT INTO control (id_control, id_dp, id_operacion, litros, garrafas, date) VALUES (NULL, $dp, $op, $l, $g, CURRENT_TIMESTAMP);";


	$db = new db();
	$db->query($sql);

	}

	

?>