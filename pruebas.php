<?php

require_once "app/db.php";

echo "<h1> Pagina pruebas </h1><br><hr>";

$bbdd = new db();

$sql ="Select * FROM deposito;";
$data = $bbdd->query($sql);


