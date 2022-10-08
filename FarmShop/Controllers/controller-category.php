<?php
	
	require("Models/model-category.php");

	$title = "FarmShop - Categorias";

	$singleCategory = new EachCategory();

	$onecategory = $singleCategory->OneCategory($id);
	
	require("Views/view-category.php");

?>