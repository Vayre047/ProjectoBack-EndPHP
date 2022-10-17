<?php

	require("Models/model-products.php");

	$title = "FarmShop - Lista de Produtos";

    $listAnimalsProducts = $modelProducts->listProducts(1);

    $listFruitsProducts = $modelProducts->listProducts(2);

    $listDriedFruitsProducts = $modelProducts->listProducts(3);

    $listVegetablesProducts = $modelProducts->listProducts(4);
    
	require("Views/view-listproducts.php");

?>