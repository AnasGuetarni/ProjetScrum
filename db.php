<?php 
$user = "hartleym";
$pass = "fus9Wn";

try{
	$db = new PDO('pgsql:host=localhost;port=5433;dbname=hartleym', $user, $pass);
}

catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}

//
function db(){
	global $db;
	return $db;
}