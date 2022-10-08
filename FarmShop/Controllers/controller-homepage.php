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

    $modelProducts = new Products();

    //$randNumber = rand( 0, count($products)-1);

    $randProducts = $modelProducts->RandomProduct();

    $title = "FarmShop - Homepage";

    $date = date('y-m-d');

    $modelSeason = new Season();

    $season = $modelSeason->getSeason($date); 

    require("Views/view-homepage.php");

?>