<?php
	/*
	if(empty($id) || !is_numeric($id)){
        http_response_code(400);
        require("Views/view-error-message-400.php");
        exit;
    }*/

	require("Models/model-products.php");

	$modelProducts = new ProductsDetail();

	$productDetail = $modelProducts->getProduct($id);

	$title = $productDetail["product_name"];

	require("Views/view-productdetails.php");
?>