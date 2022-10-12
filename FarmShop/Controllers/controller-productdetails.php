<?php
	/*
	if(empty($id) || !is_numeric($id)){
        http_response_code(400);
        require("Views/view-error-message-400.php");
        exit;
    }*/

	$productDetail = $modelProducts->getProduct($id);

	$title = $productDetail["product_name"];

	require("Views/view-productdetails.php");
?>