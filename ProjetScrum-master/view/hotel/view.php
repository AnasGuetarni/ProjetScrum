<?php 
$id = $data;

$hotel = Hotel::FindById($id);
if($hotel->hot_id == null)
{?>
	<h2>Hotel non trouvé</h2>
	
	<p>Nous sommes vraiment désolé mais l'hotel semble ne pas exister...</p>
	<p><a href='.'>Retourner à la page d'accueil?</a></p>
<?php
} else {
	echo "<h2>".$hotel->hot_nom."</h2>";
	echo "<p class='descriptionHotel'>".$hotel->hot_description."</p>";
	echo "<ul>";
	echo "<li>Tenu par :".$hotel->hotelier->htr_nom." ".$hotel->hotelier->htr_prenom."</li>";
	echo "<li>Nombre d'étoiles : ". $hotel->cat_nbetoiles."/5</li>";
	echo "<li>Prix moyen : ". $hotel->prix->prx_fourchette."</li>";
	echo "<li>Nombre de chambres : ". $hotel->hot_nbchambres ." chambre</li>";
	echo "<li>Tel : (+". $hotel->hot_indicatif. ")". $hotel->hot_tel . "</li>";
	echo "<li>Mail : ". $hotel->hot_mel."</li>";
	echo "<li>Photos (". count($hotel->photos) .") : ";
	foreach($hotel->photos as $photo)
		echo "<img src='".$photo->pho_url."' />";
	echo "</li>";
	echo "</ul>";
	
	echo "<p><a href='?r=hotel/set&id=".$hotel->hot_id."'>Modifier mon hotel</a></p>";
}