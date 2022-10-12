<?php

	require("Models/model-products.php");

	$title = "FarmShop - Lista de Produtos";
	
    $listedProducts = new ListProducts();

    $listAnimalsProducts = $listedProducts->listProducts(1);

    $listFruitsProducts = $listedProducts->listProducts(2);

    $listDriedFruitsProducts = $listedProducts->listProducts(3);

    $listVegetablesProducts = $listedProducts->listProducts(4);

    $modelProducts = new Products();

    $products = $modelProducts->allProducts();

	require("Views/view-listproducts.php");

?>