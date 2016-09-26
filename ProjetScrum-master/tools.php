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
class_alias("T_r_pays_pay", "Pays");
class_alias("T_r_typenotehotel_tnh", "TypeNoteHotel");
class_alias("T_r_service_srv", "Service");
class_alias("T_r_questionhotel_qho", "QuestionHotel");
class_alias("T_r_periodevisite_per", "PeriodeVisite");
class_alias("T_r_fourchetteprix_prx", "FourchettePrix");
class_alias("T_r_categoriehotel_cat", "CategorieHotel");
