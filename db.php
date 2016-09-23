<?php 
$user = "info241";
$pass = "YLJ3Ng";

try{
	$db = new PDO('pgsql:host=srv-prj;dbname=info241', $user, $pass);
}

catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}
//re
//
function db(){
	global $db;
	return $db;
}
