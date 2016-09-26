<?php 

$parametres = Array('htr_nom' => 'Nom',
				'htr_prenom' => 'Prenom',
				'htr_mel' => 'E-mail',
				'htr_motpasse' => 'Entrez un mot de passe',
				'no_mdp' => 'Retapez votre mot de passe',
				'htr_adrligne1' => 'Adresse',
				'htr_adrligne2' => 'Complement d\'adresse',
				'htr_cp' => 'Code postal',
				'htr_ville' => 'Ville',
				'htr_etat' => 'Etat');
$btnEnregister = "S'enregistrer";
?>
<h2>Inscription d'hotelier</h2>

<form action='' method='POST' id='registerHotelierForm'>
<?php 
	foreach($parametres as $data=>$text)
	{
		echo "<p><label for='$data'>$text : </label><input id='$data' type='text' name='$data'/></p>";
	}
?>
	<input type='submit' id='registerHotelier' value="<?php print htmlspecialchars($btnEnregister);?>"/>
</form>