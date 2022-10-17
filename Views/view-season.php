<?php
	
	require("Layout/header.php");

?>
	
	<div>
		<p class="text-center h1"><?php echo $winterSeason[0]["season_name"];?></p>
<?php
	foreach($winterSeason as $winter){
?>
			<p class="text-center h2"><?php echo $winter["product_name"]; ?></p>
			<figure class="figureImage">
				<img class="seasonImageDetails" src="<?php echo ROOT . "/Images/". $winter["product_image"]; ?>" alt="Imagem da Estação">
			</figure>
			<p class="text-center"><?php echo $winter["product_description"]; ?></p>;
<?php
	}
?>
	</div>
<?php
	
	require("Layout/footer.php");

?>