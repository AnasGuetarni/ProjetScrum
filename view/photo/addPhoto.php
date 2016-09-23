<?php 
echo "<script src='verifications.js'></script>";

$parametres = Array(
			Array('hot_id' , 'Mon hotel', 'select'),
			Array('photo_url' , 'URL de la photo', 'input', 'req')
				);

$options_hot_id = Array(1=>'Hotel1', 
							2 =>'Hotel2', 
							3 =>'Hotel3', 
							4 =>'Hotel4', 
							5 =>'Hotel5', 
							6 =>'Hotel6');
$btnEnregister = "Enregistrer ma photo";
?>
<h2>Ajouter une photo</h2>

<form action='?r=photo/addPhoto' method='POST' id='addPhotoHotelForm'> <!--onSubmit='return verifForm(this)'--> 
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
			echo "<p><label for='".$data[0]."'>".$data[1]." : </label><select id='".$data[0]."'>";
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