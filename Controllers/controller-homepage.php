<?php

    require("Models/model-navigation.php");

    $model = new Categories();

    $categories = $model->allCategories();

    $modelSeasons = new Seasons();

    $seasons = $modelSeasons->allSeasons();

    $modelProducts = new Products();

    $products = $modelProducts->allProducts();

    require("Views/view-homepage.php");

?>