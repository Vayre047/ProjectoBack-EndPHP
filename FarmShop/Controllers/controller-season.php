<?php
	
	require("Models/model-season.php");

	$title = "FarmShop - Estações";

	$typeOfSeasons = new Season();

	$winterSeason = $typeOfSeasons->productSeason($id);

	require("Views/view-season.php");

?>