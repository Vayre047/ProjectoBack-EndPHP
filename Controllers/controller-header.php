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

    require("Models/model-users.php");

    $modelUsers = new Users();

    var_dump($_POST["email"]);
    if(isset($_SESSION["user_id"])){
        $user = $modelUsers->getUser($_POST["email"]);
    }

    require("Views/Layout/header.php");

?>