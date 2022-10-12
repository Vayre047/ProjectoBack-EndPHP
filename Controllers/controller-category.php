<?php


	$title = "FarmShop - Categorias";

	

	$onecategory = $modelCategories->OneCategory($id);
	
	require("Views/view-category.php");

?>