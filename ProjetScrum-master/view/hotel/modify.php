<?php 

$id=$data;
$hotel = Hotel::findById($id);
$fourchette_prix = T_r_fourchetteprix_prx::findAll();
$fourchette_prix_tri = Array();
foreach($fourchette_prix as $value)
{
	array_push($fourchette_prix_tri,$value->prx_fourchette);
}
$pays = T_r_pays_pay::findAll();
$pays_tri = Array();
foreach($pays as $value)
{
	array_push($pays_tri,$value->pay_nom);
}

$parametres = Array(
	Array("hot_nom","Nom hôtel","input_box"),
	Array("hot_description","Description","textarea"),
	Array("hot_adrligne1","Adresse 1","input_box"),
	Array("hot_adrligne2","Adresse 2","input_box"),
	Array("hot_cp","Code postal","input_box"),
	Array("hot_ville","Ville","input_box"),
	Array("hot_etat","Etat","input_box"),
	Array("hot_indicatif","Indicatif Hotel","input_box"),
	Array("hot_tel","Telephone","input_box"),
	Array("hot_mel","Mail","input_box"),
	Array("hot_siteweb","Site web","input_box"),
	Array("hot_nbchambres","Nombre de chambres","input_box"),
	Array("prx_id","Fourchette de prix","combobox",$fourchette_prix_tri),
	Array("pay_id","Pays","combobox",$pays_tri),
	Array("cat_nbetoiles","Nombre d étoiles","combobox",
		Array("1","2","3","4","5"))
);
$btnEnregister = "Enregistrer l'hotel";

?>
<h2>Modifier un hotel</h2>

<form action='?r=hotel/set' method='POST' id='registerHotelForm'>
<?php 
	foreach($parametres as $data=>$text)
	{
	switch($text[2])
	{
		case "input_box":
			echo "<p><label for='$text[0]'>$text[1] : </label><input id='$text[0]' type='text' name='$text[0]' value='". $hotel->$text[0]."'/></p>";
		break;
		
		case "textarea":
			echo "<p><label for='$text[0]'>$text[1] : </label><$text[2] id='$text[0]' type='text' name='$text[0]'>". $hotel->$text[0]."</$text[2]></p>";
		break;
		
		case "combobox":
			echo "<p><label form='$text[0]'>$text[1] : <select name='$text[0]' id='$text[0]'>";
				foreach($text[3] as $key=>$value)
				{
					echo "<option value='".($key+1)."' id='".($key+1)."' ".($hotel->$text[0]==$key?"selected":"").">$value</option>";
				}
			echo "</select>";
		break;
			
	}
		
	}
	
?>
	<input type='submit' id='registerHotel' value="<?php print htmlspecialchars($btnEnregister);?>"/>
</form>




<?php /*
echo "<script src='verifications.js'></script>";

$parametres = Array(
			Array('hot_nom' , 'Nom', 'input', 'req'),
			Array('hot_description' , 'Description', 'text', 'req'),
			Array('hot_prenom' , 'Prenom', 'input', 'req'),
			Array('hotr_mel' , 'E-mail', 'input', 'mail'),
			Array('hotr_adrligne1' , 'Adresse', 'input', 'req'),
			Array('hotr_adrligne2' , 'Complement d\'adresse', 'input'),
			Array('hotr_cp' , 'Code postal', 'input', 'cp'),
			Array('hotr_ville' , 'Ville', 'input', 'req'),
			Array('hot_etat' , 'Etat', 'input'),
			Array('pay_id', 'Pays', 'select')
				);

$services = Service::findAll();

$options_services_id = Array();
foreach($services as $service){
	$options_services_id[$service->srv_id] = $service->srv_libelle;
}
$prix = FourchettePrix::findAll();

$options_prix_id = Array();
foreach($prix as $fourchette){
	$options_prix_id[$fourchette->prx_id] = $fourchette->prx_libelle;
}


$pays = Pays::findAll();

$options_pay_id = Array();
foreach($pays as $unPays){
	$options_pay_id[$unPays->pay_id] = $unPays->pay_nom;
}
$btnEnregister = "Enregistrer mon hotel";
?>
<h2>Creation d'hotel</h2>

<form action='?r=hotelier/add' method='POST' id='registerHotelierForm' onSubmit='return verifForm(this)'>
<?php 
	foreach($parametres as $data)
	{
		$verif = "";
		if(isset($data[3])){
			switch($data[3]){
				case 'req' : $verif = " onBlur='verifChamps(this)' "; break;
				case 'mail' : $verif = " onBlur='verifMail(this)' "; break;
				case 'mdp' : $verif = " onBlur='verifMDP(this)' "; break;
				//case 'remdp' : $verif = " onBlur='verifREMDP(this)' "; break;
				case 'cp' : $verif = " onBlur='verifCP(this)' "; break;
			}
		}
		
		if($data[2] == 'input')
		{
			echo "<p><label for='".$data[0]."'>".$data[1]." : </label><input id='".$data[0]."' type='text' name='".$data[0]."' ". $verif ." onFocus='noProblemo(this)'/></p>";
		}
		else if($data[2] == 'pass')
		{
			echo "<p><label for='".$data[0]."'>".$data[1]." : </label><input id='".$data[0]."' type='password' name='".$data[0]."' ". $verif ." onFocus='noProblemo(this)'/></p>";
		}
		else if($data[2] == 'select'){
			echo "<p><label for='".$data[0]."'>".$data[1]." : </label><select id='".$data[0]."' name='".$data[0]."'>";
			$liste = $options_pay_id;
			foreach($liste as $id=>$pays){
				echo "<option value=".$id.">$pays</option>";
			}
			echo "</select></p>";
		}
	}
?>
	<input type='submit' id='registerHotelier' value="<?php print htmlspecialchars($btnEnregister);?>"/>
</form>*/?>