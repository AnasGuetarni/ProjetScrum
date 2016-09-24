<?php 
echo "<script src='verifications.js'></script>";

$parametres = Array(
			Array('mail' , 'E-mail', 'input', 'mail'),
			Array('motpasse' , 'Entrez un mot de passe', 'pass', 'mdp')
				);

$pays = Pays::findAll();

$options_pay_id = Array();
foreach($pays as $unPays){
	$options_pay_id[$unPays->pay_id] = $unPays->pay_nom;
}
$btnEnregister = "S'enregistrer";
?>

<h2>Connexion</h2>

<form action='?r=site/connexion' method='POST' id='connexionForm' onSubmit='return verifForm(this)'>
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
	}
?>
	<input type='submit' id='registerHotelier' value="<?php print htmlspecialchars($btnEnregister);?>"/>
</form>