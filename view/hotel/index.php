<?php 

$hotels = Hotel::findAll();
?>
<h2>Index des Hotels</h2>

<div class="thumbnails">
<?php 
foreach($hotels as $hotel){
	echo "<div class='box'><div class='inner'><a href='?r=hotel/view&id=".$hotel->hot_id."'><img src='".(count($hotel->photos)>0?$hotel->photos[0]->pho_url:' ')."' />".$hotel->hot_nom."</a></div></div>";
}
?>
</div>