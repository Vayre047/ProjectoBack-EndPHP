<?php

    require("Models/model-navigation.php");

    $model = new Categories();

    $categories = $model->allCategories();

    $modelSeasons = new Seasons();

    $seasons = $modelSeasons->allSeasons();

    $modelProducts = new Products();

    $products = $modelProducts->allProducts();

    require("Views/Layout/header.php");

    $modelProducts = new Products();

    //$randNumber = rand( 0, count($products)-1);

    $randProducts = $modelProducts->RandomProduct();

    $title = "FarmShop - Homepage";

    require("Models/model-season.php");

    $date = date('y-m-d');

    $modelSeason = new Season();

    $season = $modelSeason->getSeason($date); 

    require("Views/view-homepage.php");

?>