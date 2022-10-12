<?php
	
	require("Models/model-season.php");

	$title = "FarmShop - Estações";

	$typeOfSeasons = new Season();

	$winterSeason = $typeOfSeasons->getSeasonalProducts();

	require("Views/view-season.php");

?>