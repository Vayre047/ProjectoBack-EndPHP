<?php
	
	$title = "FarmShop - Estações";

	$winterSeason = $modelSeasons->getSeasonalProducts();

	require("Views/view-season.php");

?>