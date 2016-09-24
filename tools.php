<?php

function __autoload($name) {

	$dir = "model";
	if (strpos($name,"Controller") !== FALSE)
		$dir = "controller";
	include_once $dir."/".$name.".php";

}

class_alias("T_e_hotel_hot", "Hotel");
class_alias("T_e_abonne_abo", "Abonne");
class_alias("T_e_alias_ali", "Alias");
class_alias("T_e_avis_avi", "Avis");
class_alias("T_e_hotelier_htr", "Hotelier");
class_alias("T_e_photo_pho", "Photo");
