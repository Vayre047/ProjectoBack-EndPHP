<?php
    
	require("Models/model-category.php");

    $model = new Categories();

    $categories = $model->allCategories();

    require("Models/model-season.php");

    $modelSeasons = new Seasons();

    $seasons = $modelSeasons->allSeasons();

    require("Models/model-products.php");

    $modelProducts = new Products();

    $products = $modelProducts->allProducts();

    require("Views/Layout/header.php");

?>