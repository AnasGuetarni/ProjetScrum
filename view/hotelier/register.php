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

$options_pay_id = Array(1=>'Afghanistan', 
							2 =>'Afrique du Sud', 
							3 =>'Albanie', 
							4 =>'Algérie', 
							5 =>'Allemagne', 
							6 =>'Angola', 
							7 =>'Antigua-et-Barbuda', 
							8 =>'Arabie saoudite', 
							9 =>'Argentine', 
							10 =>'Arménie', 
							11 =>'Australie', 
							12 =>'Autriche', 
							13 =>'Azerbaïdjan', 
							14 =>'Bahamas', 
							15 =>'Bahreïn', 
							16 =>'Bangladesh', 
							17 =>'Barbade', 
							18 =>'Belau', 
							19 =>'Belgique', 
							20 =>'Belize', 
							21 =>'Bénin', 
							22 =>'Bhoutan', 
							23 =>'Biélorussie', 
							24 =>'Birmanie', 
							25 =>'Bolivie', 
							26 =>'Bosnie-Herzégovine', 
							27 =>'Botswana', 
							28 =>'Brésil', 
							29 =>'Brunei', 
							30 =>'Bulgarie');
$btnEnregister = "S'enregistrer";
?>
<h2>Inscription d'hotelier</h2>

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
			echo "<p><label for='".$data[0]."'>".$data[1]." : </label><select id='".$data[0]."'>";
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