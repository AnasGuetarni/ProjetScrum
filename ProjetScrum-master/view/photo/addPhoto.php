<?php 
echo "<script src='verifications.js'></script>";

$parametres = Array(
			Array('hot_id' , 'Mon hotel', 'select'),
			Array('pho_url' , 'URL de la photo', 'input', 'req')
				);

$id_hotelier = 2;
$mes_hotels = Hotel::findAllBy("htr", $id_hotelier);

$options_hot_id = Array();
foreach($mes_hotels as $hotel){
	$options_hot_id[$hotel->hot_id] = $hotel->hot_nom;
}
$btnEnregister = "Enregistrer ma photo";
?>
<h2>Ajouter une photo</h2>

<form action='?r=photo/getPhoto' method='POST' id='addPhotoHotelForm'> <!--onSubmit='return verifForm(this)'--> 
<?php 
	foreach($parametres as $data)
	{
		$verif = "";
		if(isset($data[3])){
			switch($data[3]){
				case 'req' : $verif = " onBlur='verifChamps(this)' "; break;
			}
		}
		
		if($data[2] == 'input')
		{
			echo "<p><label for='".$data[0]."'>".$data[1]." : </label><input id='".$data[0]."' type='text' name='".$data[0]."' ". $verif ." onFocus='noProblemo(this)'/></p>";
		}
		else if($data[2] == 'select'){
			echo "<p><label for='".$data[0]."'>".$data[1]." : </label><select id='".$data[0]."' name='".$data[0]."'>";
			$liste = $options_hot_id;
			foreach($liste as $id=>$hotel){
				echo "<option value=".$id.">$hotel</option>";
			}
			echo "</select></p>";
		}
	}
?>
	<input type='submit' id='addPhotoHotel' value="<?php print htmlspecialchars($btnEnregister);?>"/>
</form>