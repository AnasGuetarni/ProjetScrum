<?php 

$hotels = Hotel::findAll();
?>
<h2>Index des Hotels</h2>

<ul>
<?php 
foreach($hotels as $hotel){
	echo "<li><a href='?r=hotel/view&id=".$hotel->hot_id."'>".$hotel->hot_nom."</a></li>";
}
?>
</ul>