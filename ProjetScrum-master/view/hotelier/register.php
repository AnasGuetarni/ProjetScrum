<?php 
echo "<script src='verifications.js'></script>";

$parametres = Array(
			Array('htr_nom' , 'Nom', 'input', 'req'),
			Array('htr_prenom' , 'Prenom', 'input', 'req'),
			Array('htr_mel' , 'E-mail', 'input', 'mail'),
			Array('htr_motpasse' , 'Entrez un mot de passe', 'pass', 'mdp'),
			Array('no_mdp' , 'Retapez votre mot de passe', 'pass', 'remdp'),
			Array('htr_adrligne1' , 'Adresse', 'input', 'req'),
			Array('htr_adrligne2' , 'Complement d\'adresse', 'input'),
			Array('htr_cp' , 'Code postal', 'input', 'cp'),
			Array('htr_ville' , 'Ville', 'input', 'req'),
			Array('htr_etat' , 'Etat', 'input'),
			Array('pay_id', 'Pays', 'select')
				);

$pays = Pays::findAll();

$options_pay_id = Array();
foreach($pays as $unPays){
	$options_pay_id[$unPays->pay_id] = $unPays->pay_nom;
}
$btnEnregister = "S'enregistrer";
?>
<h2 id="inscriptionHotelier">Inscription d'hotelier</h2>

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
</form>