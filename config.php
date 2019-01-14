<?php
$BDD = array();
$BDD['host'] = "localhost";
$BDD['user'] = "root";
$BDD['pass'] = "bwz2xarJ!";
$BDD['db'] = "Site e-commerce";
$mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);
if(!$mysqli){
	echo "Connexion non établie.";
	exit;}
?>