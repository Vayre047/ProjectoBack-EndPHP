<?php

	$title = "FarmShop - Categorias";

	$onecategory = $modelCategories->OneCategory($id);

	$eachcategories = $modelProducts->listProducts($id);
	
	require("Views/view-category.php");

?>